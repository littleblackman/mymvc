<?php


class FrontView
{
    public function render($view, $datas = [])
    {
        foreach($datas as $key => $value) {
           $$key = $value;
        }

        ob_start();
        include(VIEW.'/'.$view.'.php');
        $htmlContent = ob_get_clean();
        include(VIEW.'/layout/base.php');
    }

    public function renderJson($datas)
    {
        echo json_encode($datas);
    }

    public function renderHtml($view, $datas = [])
    {
        include(VIEW.'/'.$view.'.php');
    }
}