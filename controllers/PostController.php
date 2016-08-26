<?php

namespace app\controllers;
use app\models\Post; //Подключаем модель Post



class PostController extends AppController
{
    public function actionIndex() //экшн\действие
    {
        $posts = Post::find()->all() ;
            //Post:: - объект модели. find - объект запроса. all - выбрать все
        return $this->render('index', compact('posts'));
    }

    public function actionTest($name = 'Гость') //экшн\действие
    {
        $hello = 'Привет, мир!';
        $hi = 'Hi!';
        //return $this->render('index', ['var' => $hello, 'hi' => $hi]); //Один варинт передачи данных в вид
        return $this->render('index', compact('hello', 'hi', 'name'));  //Второй вид передачи данных в вид
    }

}