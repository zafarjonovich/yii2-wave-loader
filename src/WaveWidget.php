<?php

namespace zafarjonovich\yii2WaveLoader;

use yii\base\Widget;
use yii\helpers\Html;


class WaveWidget extends Widget
{
    public $backgroundColor = null;

    public $waterColor = null;

    public function init()
    {
        WaveWidgetAsset::register($this->view);

        if($this->backgroundColor !== null){
            $this->view->registerCss(".yii2-loader { background-color: {$this->backgroundColor};",['depends' => [WaveWidgetAsset::class]]);
        }

        if($this->waterColor !== null){
            $this->view->registerCss(".water { background-color: {$this->waterColor};",['depends' => [WaveWidgetAsset::class]]);
        }

        parent::init();
    }

    public function run()
    {
        $content = Html::tag('div','',[
            'class' => 'water'
        ]);

        return Html::tag('div',$content,[
            'class' => 'yii2-loader'
        ]);
    }
}