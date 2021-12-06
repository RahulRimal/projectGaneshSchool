<?php require('core/init.php'); ?>

<?php

//Create Validator Object
$validate = new Validator;

//Get Template & Assign Vars
$template = new Template('templates/apply.php');

if (isset($_POST['apply'])) {
    //Create Data Array

    $data = array();
    $data['fname'] = $_POST['fname'];
    $data['lname'] = $_POST['lname'];
    $data['grade'] = $_POST['grade'];
    $data['dob'] = $_POST['dob'];
    $data['gender'] = $_POST['gender'];
    $data['nationality'] = $_POST['nationality'];
    $data['contactadress'] = $_POST['contactadress'];
    $data['mnumber'] = $_POST['mnumber'];
    $data['email'] = $_POST['email'];
    $data['guardianname'] = $_POST['guardianname'];
    $data['gaardianrelationship'] = $_POST['guardianrelationship'];
    $data['guardainnumber'] = $_POST['guardainnumber'];
    $data['course'] = $_POST['course'];
    $data['gpa'] = $_POST['gpa'];
    $data['school'] = $_POST['school'];

    //Required Fields
    // $field_array = array('fname', 'grade', 'dob', 'gender', 'nationality', 'contactadress', 'mnumber', 'email', 'guardianname', 'course', 'gpa', 'school');

    $field_array = array('fname', 'email', 'mnumber');

    if ($validate->isRequired($field_array)) {
        if ($validate->isValidEmail($data['email'])) {
            // if($validate->passwordsMatch($data['password'],$data['password2'])){
            //Upload Avatar Image
            // if ($user->uploadAvatar()) {
            //     $data['avatar'] = $_FILES["avatar"]["name"];
            // } else {
            //     $data['avatar'] = 'noimage.png';
            // }
            //Register User
            // if($user->register($data)){
            // 	redirect('index.php', 'You are registered and can now log in', 'success');
            // } else {
            // 	redirect('index.php', 'Something went wrong with registration', 'error');
            // }
            // } 
            // else {
            // 	redirect('register.php', 'Your passwords did not match', 'error');
            // }
            redirect('index.php', 'Data has been submitted successfully, We\'ll get to you soon', 'success');
        } else {
            redirect('apply.php', 'Please use a valid email address', 'error');
        }
    } else {
        redirect('apply.php', 'Please fill in all required fields', 'error');
    }
}

//Assign Vars

//Display template
echo $template;
