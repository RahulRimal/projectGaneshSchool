<?php require('core/init.php'); ?>

<?php

$template = new Template('templates/admin-page.php');

$form = new Form();

$template->forms = $form->getForms();

if(isLoggedIn())
    echo $template;
else
    redirect('login.php', 'Please login to access admin pannel', 'error');

?>
