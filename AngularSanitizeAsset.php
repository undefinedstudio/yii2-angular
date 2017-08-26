<?php

namespace undefinedstudio\yii2\angular;

use yii\web\AssetBundle;

class AngularSanitizeAsset extends AssetBundle
{
    public $sourcePath = '@bower/angular-sanitize';
    public $js = [
        'angular-sanitize.js',
    ];

    public $depends = [
        'undefinedstudio\yii2\angular\AngularAsset'
    ];
}
