<?php

namespace undefinedstudio\yii2\angular;

use yii\web\AssetBundle;

class AngularAriaAsset extends AssetBundle
{
    public $sourcePath = '@bower/angular-aria';
    public $js = [
        'angular-aria.js',
    ];

    public $depends = [
        'undefinedstudio\yii2\angular\AngularAsset'
    ];
}
