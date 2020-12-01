<?php

use \Bitrix\Main\Engine\Contract\Controllerable;
use Bitrix\Sale\Fuser;
use Bitrix\Sale\PaymentCollection;
use Bitrix\Main\Engine\ActionFilter\{Csrf};
use Bitrix\Main\Loader;
use Bitrix\Sale\Basket;
use \Bitrix\Main\Context;
use Bitrix\Sale\Order;
use Bitrix\Sale\PaySystem\Manager;

class PayAjaxComponent extends \CBitrixComponent implements Controllerable
{

    protected $errorCollection;

    public function __construct($component = null)
    {
        parent::__construct($component);
        Loader::includeModule('sale');
    }

    public function configureActions()
    {
        return [
            'pay' => [
                'prefilters' => [
                    new Csrf(false)
                ]
            ]
        ];
    }

    /**
     * @param int $productId
     * @return \Bitrix\Sale\PaySystem\ServiceResult
     * @throws \Bitrix\Main\ArgumentOutOfRangeException
     * @throws \Bitrix\Main\NotImplementedException
     * @throws \Bitrix\Main\ObjectNotFoundException
     */
    public function payAction(int $productId)
    {
        $price = \Bitrix\Catalog\PriceTable::getList([
           'filter' => [
               'PRODUCT_ID' => $productId
           ]
        ])->fetch();

        if(!$price) {
            return  [];
        }

        $order = Order::create(SITE_ID);

        $service = Manager::getObjectById(2);
        $payment = $order->getPaymentCollection()->createItem($service);
        $payment->setField('SUM', $price['PRICE']);
        ob_start();
        $service->initiatePay($payment);
        return  json_decode(ob_get_contents());
    }
}
