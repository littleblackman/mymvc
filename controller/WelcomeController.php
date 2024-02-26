<?php

class WelcomeController extends Controller
{


    public function hello()
    {
        $name = 'toto';
         return $this->render('pages/hello', ['name' => $name, 'age' => 25]);
    }

    public function show()
    {
        $names = ['toto', 'tata', 'titi'];
        $this->render('pages/show', ['names' => $names]);
    }

    public function update()
    {

    }
    
}