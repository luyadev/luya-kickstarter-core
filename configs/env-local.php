<?php

define('YII_DEBUG', true);
define('YII_ENV', 'local');

$config = [
    'id' => 'myapp',
    'siteTitle' => 'My Application',
    'luyaLanguage' => 'en',
    'basePath' => dirname(__DIR__),
    'components' => [
        'mail' => [
            'password' => '*********',
        ],
        'composition' => [
            'default' => [
                'langShortCode' => 'en'
            ],
            'hidden' => true,
        ],
        'urlManager' => [
            'rules' => [
                'home' => 'site/default/index',
                'contact' => 'site/default/contact',
            ],
        ],
    ],
];

if (YII_DEBUG) {
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = 'yii\debug\Module';
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = 'yii\gii\Module';
}

return \yii\helpers\ArrayHelper::merge($config, require('env-local-db.php'));