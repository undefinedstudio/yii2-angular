<?php

namespace undefinedstudio\yii2\angular;

use yii\web\AssetBundle;

class AngularMocksAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/angular-mocks';
    public $js = [
        'angular-mocks.js',
    ];

    public $depends = [
        'undefinedstudio\yii2\angular\AngularAsset',
    ];
}
