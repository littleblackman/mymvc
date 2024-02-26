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
        $this->view->setDatas($datas);
        $this->view->render($view);
    }

    public function renderJson($datas = [])
    {
        $this->view->setDatas($datas);
        $this->view->renderJson();
    }

    public function renderHtml($view, $datas = [])
    {
        $this->view->setDatas($datas);
        $this->view->renderHtml($view);
    }
}