<?php

namespace undefinedstudio\yii2\angular;

use yii\web\AssetBundle;

class AngularMaterialAsset extends AssetBundle
{
    public $sourcePath = '@bower/angular-material';
    public $js = [
        'angular-material.js'
    ];
    public $css = [
        'angular-material.css',
        'https://fonts.googleapis.com/icon?family=Material+Icons'
    ];

    public $depends = [
        'undefinedstudio\yii2\angular\AngularAsset',
        'undefinedstudio\yii2\angular\AngularAriaAsset',
        'undefinedstudio\yii2\angular\AngularAnimateAsset',
    ];
}
