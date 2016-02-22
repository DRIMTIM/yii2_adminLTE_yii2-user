<?php
/**
 * Application configuration for all backend test types
 */
return [
	'components' => [
		'urlManager' => [
            'class' => 'yii\web\UrlManager',
            // Disable index.php
            'showScriptName' => true,
            // Disable r= routes
            'enablePrettyUrl' => false,
        ],
	]
];