<?php


class Controller
{
    private $params;
    private $view;

    public function __construct($params)
    {
        $this->params = $params;
        $this->view = new FrontView();
    }

    public function render($view, $datas = [])
    {
        $this->view->render($view, $datas);
    }
}