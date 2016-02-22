<?php
/**
 * Application configuration shared by all applications and test types
 */
return [
    'controllerMap' => [
        'fixture' => [
            'class' => 'yii\faker\FixtureController',
            'fixtureDataPath' => '@tests/codeception/common/fixtures/data',
            'templatePath' => '@tests/codeception/common/templates/fixtures',
            'namespace' => 'tests\codeception\common\fixtures',
        ],
    ],
    'components' => [
        'db' => [
            'dsn' => 'mysql:host=localhost;dbname=test',
        ],
        'mailer' => [
            'useFileTransport' => true,
        ],
        'urlManager' => [
           'class' => 'yii\web\UrlManager',
            // Disable index.php
            'showScriptName' => true,
            // Disable r= routes
            'enablePrettyUrl' => false,
        ],
    ],
];
