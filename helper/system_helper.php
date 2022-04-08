<?php 
//Redirect to Page
function redirect($page = FALSE, $message= NULL, $message_type = NULL){
    if(is_string($page)){
        $location = $page;
    }
    else{
        $location = $_SERVER['SCRIPT_NAME'];
    }


    //Checks for message
    if($message != NULL){
        $_SESSION['message'] = $message;
    }

    //Checks for type
    if($message_type != NULL){
        $_SESSION['message_type'] = $message_type;
    }

    //Redirect 

    header('location:' .$location);
    exit();

} //Closing function


//Display message 

function displayMessage(){
    if(!empty($_SESSION['message'])){
         
        //assign message var 
        $message = $_SESSION['message'];

        if(!empty($_SESSION['message_type'])){

            $message_type = $_SESSION['message_type'];

             if($message_type == 'error'){
                 echo('<div class= "alert alert-danger">'.htmlentities($message).'</div>');
             }
             else{
                echo('<div class= "alert alert-success">'.htmlentities($message).'</div>');
             }
        }
        
        unset ($_SESSION['message']);
        unset ($_SESSION['message_type']);
    }
    else{

        echo '';

    }





}//Function 



?>

