<?php

namespace undefinedstudio\yii2\angular;

use yii\web\AssetBundle;

class AngularResourceAsset extends AssetBundle
{
    public $sourcePath = '@bower/angular-resource';
    public $js = [
        'angular-resource.js',
    ];

    public $depends = [
        'undefinedstudio\yii2\angular\AngularAsset'
    ];
}
