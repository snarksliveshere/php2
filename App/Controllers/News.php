<?php

namespace App\Controllers;
use App\Exceptions\Core;
use App\Exceptions\Db;
use App\MultiException;
use App\View;

class News
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
//        $ex = new Db('сообщение об исключении');
//        throw $ex;
    }
    protected function actionIndex()
    {

        $this->view->title = 'Lazy Load';
        $this->view->news = \App\Models\News::findAll();
        $this->view->display(__DIR__.'/../templates/news.php');
        //echo $twig->render('books.html', array('books' => $books));
    }
    protected function actionError404()
    {
        $this->view->title = 'ERROR 404';
        $this->view->display(__DIR__.'/../templates/error404.php');
    }
    protected function actionOne()
    {
        $id = (int)$_GET['id'];
        $this->view->article = \App\Models\News::findById($id);
        if(!$this->view->article)
        {
            throw new \App\Exceptions\Error404();
        }
        $this->view->display(__DIR__.'/../templates/one.php');
        //echo $twig->render('books.html', array('books' => $books));

    }
    protected function actionCreate()
    {
        try
        {
            $article = new \App\Models\News();
            $article->fill([]);
            $article->save();
        }
        catch (MultiException $e)
        {
            $this->view->errors = $e;
        }
        finally
        {
            $this->view->display(__DIR__.'/../templates/admin_create.php');
        }
    }
}