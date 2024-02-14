<?php


ob_start()
;?>
    <h1>Hello accueil</h1>

<?php
$htmlContent = ob_get_clean();
include (VIEW.'/layout/base.php');
?>

