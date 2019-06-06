<?php
/**
 * Created by PhpStorm.
 * User: huijiewei
 * Date: 5/24/15
 * Time: 10:34
 */

namespace huijiewei\lightbox2;

use yii\web\AssetBundle;

class Lightbox2Asset extends AssetBundle
{
    public $sourcePath = '@npm/lightbox2/dist';

    public $js = [
        'js/lightbox.min.js',
    ];

    public $css = [
        'css/lightbox.min.css',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
