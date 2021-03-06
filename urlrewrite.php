<?php
$arUrlRewrite = array(
    0 =>
        array(
            'CONDITION' => '#^\\/?\\/mobileapp/jn\\/(.*)\\/.*#',
            'RULE' => 'componentName=$1',
            'ID' => NULL,
            'PATH' => '/bitrix/services/mobileapp/jn.php',
            'SORT' => 100,
        ),
    2 =>
        array(
            'CONDITION' => '#^/bitrix/services/ymarket/#',
            'RULE' => '',
            'ID' => '',
            'PATH' => '/bitrix/services/ymarket/index.php',
            'SORT' => 100,
        ),
    1 =>
        array(
            'CONDITION' => '#^/rest/#',
            'RULE' => '',
            'ID' => NULL,
            'PATH' => '/bitrix/services/rest/index.php',
            'SORT' => 100,
        ),
    [
        'CONDITION' => '#^/services/([A-z-0-9]+)/(\\?(.*))?#',
        'RULE' => 'ELEMENT_CODE=$1',
        'ID' => '',
        'PATH' => '/services/index.php',
        'SORT' => 200
    ],
    [
        'CONDITION' => '#^/articles/([0-9]+)/(\\?(.*))?#',
        'RULE' => 'ELEMENT_ID=$1',
        'ID' => '',
        'PATH' => '/articles/detail/index.php',
        'SORT' => 200
    ]
);
