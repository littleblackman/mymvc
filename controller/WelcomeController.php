<?php
require_once(ROOT.'/model/bdd_functions.php');

class WelcomeController {

    public function hello($params = [])
    {

        echo 'yes'; exit;

        ob_start()
        ;?>
        <h1>Hello accueil</h1>

        <?php
        $htmlContent = ob_get_clean();
        include (VIEW.'/layout/base.php');
    }

    public function show($params = []) {

        $users = getUsers();

        $names = [];
        foreach($users as $user) {
            $names[] = $user['id'].' '.strtoupper($user['email']);
        }

        ob_start();
        include(VIEW.'/pages/show.php');
        $htmlContent = ob_get_clean();
        include(VIEW.'/layout/base.php');
    }
    
}