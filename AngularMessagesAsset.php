<?php

namespace undefinedstudio\yii2\angular;

use yii\web\AssetBundle;

class AngularMessagesAsset extends AssetBundle
{
    public $sourcePath = '@bower/angular-messages';
    public $js = [
        'angular-messages.js',
    ];

    public $depends = [
        'undefinedstudio\yii2\angular\AngularAsset',
    ];
}
