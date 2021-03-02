<?php

//CONTROLLER
if(isset($_POST['signIn'])){
    if (empty($_POST['loginUser']) || empty($_POST['pwdUser'])){
        $help = "Please fill all the fields";
    } else {
        $tryUser = new User($_POST);

        $connectUser = $userManager->connectUser($tryUser);

        if($connectUser === true){
            header("Location: ?admin=home");
            exit();
        }

        if(!$connectUser){
            $help = "Wrong login and/or password";
        }else{
            $help = $connectUser;
        }
    }
}

// VIEW
include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'connection.public.view.php';