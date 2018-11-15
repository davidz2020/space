<?php
$params = array_merge(
	require __DIR__ . '/../../common/config/params.php',
	require __DIR__ . '/../../common/config/params-local.php',
	require __DIR__ . '/params.php',
	require __DIR__ . '/params-local.php'
);

return [
	'language' => 'zh-CN', //这个配置别漏了，选择中文语言包
	'id' => 'app-frontend',
	'basePath' => dirname(__DIR__),
	'bootstrap' => ['log'],
	'controllerNamespace' => 'frontend\controllers',
	'components' => [
		'request' => [
			'csrfParam' => '_csrf-frontend',
		],
		// 'urlManager' => [
		// 	'enablePrettyUrl' => true,
		// 	'showScriptName' => false,
		// 	'rules' => [
		// 	],
		// ],
		'user' => [
			'identityClass' => 'common\models\User',
			'enableAutoLogin' => true,
			'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
		],
		'session' => [
			// this is the name of the session cookie used for login on the frontend
			'name' => 'advanced-frontend',
		],
		'log' => [
			'traceLevel' => YII_DEBUG ? 3 : 0,
			'targets' => [
				[
					'class' => 'yii\log\FileTarget',
					'levels' => ['error', 'warning'],
				],
			],
		],
		'errorHandler' => [
			'errorAction' => 'site/error',
		],
		'i18n' => [
			'translations' => [
				'common' => [
					'class' => 'yii\i18n\PhpMessageSource',
					//'basePath' => '/messages',
					'fileMap' => [
						'common' => 'common.php',
					],
				],
				'power' => [
					'class' => 'yii\i18n\PhpMessageSource',
					//'basePath' => '/messages',
					'fileMap' => [
						'power' => 'power.php',
					],
				],
			],
		],
		/*
			        'urlManager' => [
			            'enablePrettyUrl' => true,
			            'showScriptName' => false,
			            'rules' => [
			            ],
			        ],
		*/

	],
	'params' => $params,
];