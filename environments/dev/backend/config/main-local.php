<?php

$config = [
    'components' => [
	'db'=>[
            'class'=>'yii\db\Connection',
            'dsn' => 'mysql:host=localhost:8080;dbname=yii2',
            'username' => 'root',
            'password' => '12733559',
            'charset' => 'utf8'
        ],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '',
        ],
    ],
];

if (!YII_ENV_TEST) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
	'allowedIPs' => ['127.0.0.1', '::1', '*.*.*.*'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
