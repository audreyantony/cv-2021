<?php

// MODEL
include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'model' . DIRECTORY_SEPARATOR . 'contact.model.php';

// CONTROLLER
$name = isset($_POST['name']) ? entryCleaning($_POST['name']) : "";
$mail = isset($_POST['mail']) ? entryCleaning($_POST['mail']) : "";
$phone = isset($_POST['phone']) ? entryCleaning($_POST['phone']) : "";
$message = isset($_POST['message']) ? entryCleaning($_POST['message']) : "";

if (isset($_POST['envoyer'])){

    if (empty($_POST['name']) && !empty($_POST['mail']) && !empty($_POST['message'])){

        $warning = "Please fill the name input";

    } else if (!empty($_POST['name']) && empty($_POST['mail']) && !empty($_POST['message'])){

        $warning = "Please fill the e-mail input";

    } else if (!empty($_POST['name']) && !empty($_POST['mail']) && empty($_POST['message'])){

        $warning = "The massage input cannot be empty";

    } else if (empty($_POST['name']) || empty($_POST['mail']) || empty($_POST['message'])){

        $warning = "Please fill the name input, the e-mail input and the message input";

    } if (!empty($_POST['name']) && !empty($_POST['mail']) && !empty($_POST['message'])){

        $email= "mariejacynthe@delamotte.com";

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $warning = "Your email address isn't valid";
        } else {
            $warning = sendMail($name, $phone, $mail, $message);
        }
    }
}

// VIEW
include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'user' . DIRECTORY_SEPARATOR . 'contact.user.view.php';