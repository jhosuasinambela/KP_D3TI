<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
         'uiHelper' => [
            /*class ui helper harus meng-implements abstrack backend/themes/UiHelperAbstract*/
            'class' => 'backend\themes\v2\helpers\UiHelper',
        ],


    //  'view' => [
    //      'theme' => [
    //          'pathMap' => [
    //      '@app/views' => '@vendor/dmstr/yii2-adminlte-asset/example-views/yiisoft/yii2-app'
    //          ],
    //      ],
    // ],


        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
