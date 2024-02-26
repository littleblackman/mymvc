<?php


class DemoController extends Controller{

    public function demo()
    {
        $this->render('pages/demo', ['name' => 'bobn', 'age' => 25]);
    }

}