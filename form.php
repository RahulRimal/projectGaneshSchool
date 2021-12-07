<?php require('core/init.php'); ?>

<?php
$template = new Template('templates/single-form.php');

$form = new Form();

if (isset($_GET['fid'])) {
    $formId = $_GET['fid'];
    $resultForm = $form->getForm($formId);

    $template->resultForm = $resultForm;
}
else if(isset($_GET['del']))
{
    $formId = $_GET['del'];
    
    if($form->deleteForm($formId))
        redirect('admin.php', 'Form deleted Successfully', 'success');
    else
    redirect('admin.php', 'Couldn\'t find the form', 'error');
}
else
{
    redirect('admin.php', 'Couldn\'t find the form', 'error');
}

echo $template;

?>
