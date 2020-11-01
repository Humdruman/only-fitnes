<?php


namespace App\Mutators;


use App\Helpers\BitrixOrmTable;
use App\Table\CourseObjectiveTable;

class ComponentResultMutator
{
    public const USER_TYPE_PROP_DIRECTORY = 'directory';

    private array $result;

    public function __construct(array &$result)
    {
        $this->result = &$result;
    }

    public function mutateResult(): void
    {
        if (array_key_exists('ITEMS', $this->result) || !empty($this->result['ITEMS'])) {
            foreach ($this->result['ITEMS'] as &$item) {
                $this->mutateProps($item);
            }
        }
        $this->mutateProps($this->result);
    }

    private function mutateProps(array &$item): void
    {
        if (!array_key_exists('PROPERTIES', $item) || empty($item['PROPERTIES'])) {
            return;
        }
        foreach ($item['PROPERTIES'] as &$prop) {
            if(!is_array($prop)) {
                continue;
            }
            $this->mutateProp($prop);
        }
    }

    private function mutateProp(array &$prop): void
    {
        if (!array_key_exists('USER_TYPE', $prop) || empty($prop['USER_TYPE'])) {
            return;
        }
        if ($prop['USER_TYPE'] === self::USER_TYPE_PROP_DIRECTORY) {
            $this->mutateDirectoryProp($prop);
        }
    }

    private function mutateDirectoryProp(array &$prop): void
    {
        if (!isset($prop['USER_TYPE_SETTINGS']['TABLE_NAME'])) {
            return;
        }


        $tableName = $prop['USER_TYPE_SETTINGS']['TABLE_NAME'];
        $ormClass = BitrixOrmTable::detectClassByTableName($tableName);

        if ($ormClass === '') {
            return;
        }

        try {
            $result = $ormClass::getList([
                'filter' => ['UF_XML_ID' => $prop['VALUE']]
            ])->fetchCollection();


            if (count($result) === 0) {
                return;
            }

            $allEntity = $result->getAll();

            if(count($allEntity) === 1) {
                $prop['DATA'] = $allEntity[0]->collectValues();
                return;
            }

            foreach ($result->getAll() as $elem) {
                 $prop['DATA'][] = $elem->collectValues();
            }

        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }


}