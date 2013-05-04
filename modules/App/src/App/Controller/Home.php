<?php namespace App\Controller;

use Orno\Mvc\View\Renderer;

class Home
{
    protected $view;

    public function __construct(Renderer $view)
    {
        $this->view = $view;
    }

    public function index()
    {
        $this->view->region('content', 'home/index');
        return $this->view->render();
    }
}
