<?php
/**
 * @var CUser $USER;
 */
require $_SERVER["DOCUMENT_ROOT"] . "/local/vendor/autoload.php";

function pru($var = '') {
    global $USER;
    if($USER->IsAdmin()) {
        echo '<pre>';
        print_r($var);
        echo '</pre>';
    }
}

$jsConfig = [
  'rxjs' => [
      'js' => '/local/js/rxjs/script.js'
  ]
];

foreach ($jsConfig as $ext => $extSetting) {
    \CJSCore::RegisterExt($ext, $extSetting);
}


$builder = new \DI\ContainerBuilder();
$builder->useAutowiring(false);
$builder->addDefinitions(__DIR__.'/di_config.php');
$container = $builder->build();

\App\Services\DiServices::getInstance()->setContainer($container);

