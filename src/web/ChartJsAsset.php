<?php

/*
 * This file is part of the 2amigos/yii2-chartjs-widget project.
 * (c) 2amigOS! <http://2amigos.us/>
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace bedezign\yii2\audit\web;

use yii\web\AssetBundle;

/**
 *
 * ChartPluginAsset
 */
class ChartJsAsset extends AssetBundle
{
    public $sourcePath = '@bedezign/yii2/audit/web/assets';

    public $js = [
        'javascript/chart/3.4.1/chart.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
