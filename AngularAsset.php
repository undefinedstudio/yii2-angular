<?php

namespace undefinedstudio\yii2\angular;

use yii\web\AssetBundle;

class AngularAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/angular';
    public $js = [
        'angular.js',
    ];
}
