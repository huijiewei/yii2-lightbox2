<?php
/**
 * Created by PhpStorm.
 * User: Huijiewei
 * Date: 2017/7/12
 * Time: 下午4:40
 */

namespace huijiewei\lightbox2;

use yii\base\InvalidArgumentException;
use yii\base\Widget;

class Lightbox2Widget extends Widget
{
    public $thumbUrl;
    public $imageUrl;

    public $thumbWidth = 160;
    public $title = '查看图片';

    public function init()
    {
        parent::init();

        if (empty($this->imageUrl)) {
            throw new InvalidArgumentException('请设置 imageUrl');
        }

        if (empty($this->thumbUrl)) {
            $this->thumbUrl = $this->imageUrl;
        }

        Lightbox2Asset::register($this->getView());
    }

    public function run()
    {
        $html = '<a href="' . $this->imageUrl . '" data-lightbox="image" title="' . $this->title . '" target="_blank">';

        $html .= '<img src="' . $this->thumbUrl . '" style="width:' . $this->thumbWidth . 'px;">';

        $html .= '</a>';

        return $html;
    }
}
