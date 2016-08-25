<?php

namespace app\controllers;


class PostController extends AppController
{
    public function actionIndex() //экшн\действие
    {
        $hello = 'Привет, мир!';
        $hi = 'Hi!';
        //return $this->render('index', ['var' => $hello, 'hi' => $hi]); //Один варинт передачи данных в вид
        return $this->render('index', compact('hello', 'hi'));  //Второй вид передачи данных в вид
    }

    public function actionTest() //экшн\действие
    {
        return $this->render('test');
    }

}