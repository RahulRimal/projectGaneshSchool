<?php
/*
 * Redirect To Page
*/
function redirect($page = FALSE, $message = NULL, $message_type = NULL) {
	if (is_string ($page)) {
		$location = $page;
	} else {
		$location = $_SERVER ['SCRIPT_NAME'];
	}
	 
	//Check For Message
	if($message != NULL){
		//Set Message
		$_SESSION['message'] = $message;
	}
	//Check For Type
	if($message_type != NULL){
		//Set Message Type
		$_SESSION['message_type'] = $message_type;
	}

	//Redirect
	header ('Location: '.$location);
	exit;
}

function displayMessage()
{
    if(!empty($_SESSION['message']))
    {
        $message = $_SESSION['message'];

        if(!empty($_SESSION['message_type']))
        {
            $message_type = $_SESSION['message_type'];
            if($message_type == 'error')
            {
                echo '<div class="alert alert-danger text-center"> <h6>'.$message.'</h6></div>';
            }
            else
                echo '<div class="alert alert-success text-center"> <h6>'.$message.'</h6></div>';
        }
        unset($_SESSION['message']);
        unset($_SESSION['message_type']);
    }
    else
        echo '';
}


function isLoggedIn()
{
    if(isset($_SESSION['isLoggedIn']))
        return true;
    else
        return false;
}