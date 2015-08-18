<?php

namespace undefinedstudio\yii2\angular;

use yii\web\AssetBundle;

class AngularRouteAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/angular-route';
    public $js = [
        'angular-route.min.js',
    ];

    public $depends = [
        'undefinedstudio\yii2\angular\AngularAsset'
    ];
}
