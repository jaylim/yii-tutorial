<?php

$config = [
    'id' => 'yii-tutorial',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'timeZone' => 'UTC',
    'controllerNamespace' => 'app\commands',
    'aliases' => [
    ],
    'components' => [
        'log' => [
            'targets' => [
                [
                    'class'  => 'yii\log\FileTarget',
                    'levels' => ['info', 'error', 'warning'],
                ],
            ],
        ],
    ],
    'params' => $params,
];

return $config;
