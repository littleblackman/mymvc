<?php


class FrontView
{
    private $datas = [];


    public function setDatas($datas)
    {
        $this->datas = $datas;
    }

    public function render($view)
    {
        foreach($this->datas as $key => $value) {
           $$key = $value;
        }

        ob_start();
        include(VIEW.'/'.$view.'.php');
        $htmlContent = ob_get_clean();
        include(VIEW.'/layout/base.php');
    }

    public function renderJson()
    {
        echo json_encode($this->datas);
    }

    public function renderHtml($view)
    {
        foreach($this->datas as $key => $value) {
            $$key = $value;
        }
        
        include(VIEW.'/'.$view.'.php');
    }
}