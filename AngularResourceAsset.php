<?php

namespace undefinedstudio\yii2\angular;

use yii\web\AssetBundle;

class AngularResourceAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/angular-resource';
    public $js = [
        'angular-resource.min.js',
    ];

    public $depends = [
        'undefinedstudio\yii2\angular\AngularAsset'
    ];
}
