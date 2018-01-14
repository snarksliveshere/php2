<?php
/**
 * Created by PhpStorm.
 * User: -
 * Date: 14.01.2018
 * Time: 10:43
 */

namespace App\Controllers;


class Admin
{
    protected $view;
    public function __construct()
    {
        $this->view = new \App\View();
    }
    public function action($action)
    {
        $methodName = 'action'.$action;
        //можно что-то сделать перед вызовом
        $this->beforeAction();
        // по логике здесь идет обращение к самое переменной $methodName
        return $this->$methodName();
    }
    protected function beforeAction()
    {
      //  echo 'COUNTER';
    }
    protected function actionIndex()
    {

        $this->view->title = 'Lazy Load';
        $this->view->news = \App\Models\News::findAll();
        $this->view->display(__DIR__.'/../templates/admin_news.php');
    }
    protected function actionOne()
    {
        $id = (int)$_GET['id'];
        $this->view->article = \App\Models\News::findById($id);
        $this->view->display(__DIR__.'/../templates/admin_one.php');
    }
    protected function actionDelete()
    {
        $id = (int)$_GET['id'];
        $this->view->article = \App\Models\News::delete($id);
        $this->view->news = \App\Models\News::findAll();
        $this->view->display(__DIR__.'/../templates/admin_news.php');
    }
    protected function actionUpdate()
    {
        $id = (int)$_GET['id'];
        if(!empty($_POST))
        {
            $this->view->article = \App\Models\News::update($id);
            $this->view->news = \App\Models\News::findAll();
            $this->view->display(__DIR__.'/../templates/admin_news.php');
        }

    }
    protected function actionCreate()
    {
        if(!empty($_POST))
        {
            $this->view->article = \App\Models\News::insert();
            $this->view->news = \App\Models\News::findAll();
            $this->view->display(__DIR__.'/../templates/admin_news.php');
        }
        else
        {
            $this->view->authors = \App\Models\Author::findAll();
            $this->view->display(__DIR__.'/../templates/admin_create.php');
        }


    }
}