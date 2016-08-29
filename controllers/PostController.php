<?php

namespace app\controllers;
use app\models\Post;    //Подключаем модель Post
use yii\data\Pagination;



class PostController extends AppController
{
    public function actionIndex() //экшн\действие
    {
                    //Вывод информации БЕЗ ПАГИНАЦИИ
      /*  $posts = Post::find()->select('id, title, excerpt')->all() ;
             Post:: - объект модели. find - объект запроса. all - выбрать все. select - выборка  */

                    //Вывод информации С ПАГИНАЦИЕЙ
        $query = Post::find()->select('id, title, excerpt')->orderBy('id DESC');
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 4, 'pageSizeParam' => false, 'forcePageParam' => false]);
            /*pageSize - кол-во записей на стр., pageSizeParam - , forcePageParam - */
        $posts = $query->offset($pages->offset)->limit($pages->limit)->all();
            //offset - отступ, all - выбрать все.
        return $this->render('index', compact('posts', 'pages'));
    }

    public function actionTest($name = 'Гость') //экшн\действие
    {
        $hello = 'Привет, мир!';
        $hi = 'Hi!';
        //return $this->render('index', ['var' => $hello, 'hi' => $hi]); //Один варинт передачи данных в вид
        return $this->render('index', compact('hello', 'hi', 'name'));  //Второй вид передачи данных в вид
    }

}