<?php

namespace app\controllers;

use yii\web\Controller; //Основной контроллер

class AppController extends Controller //расширяю основной контроллер
{
    public function debug($arr){
        echo '<pre>' . print_r($arr, true) . '</pre>>';
    }
}