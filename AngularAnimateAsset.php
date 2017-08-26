<?php

namespace undefinedstudio\yii2\angular;

use yii\web\AssetBundle;

class AngularAnimateAsset extends AssetBundle
{
    public $sourcePath = '@bower/angular-animate';
    public $js = [
        'angular-animate.js',
    ];

    public $depends = [
        'undefinedstudio\yii2\angular\AngularAsset'
    ];
}
