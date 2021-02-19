<?php

// SESSION START
session_start();

/* DEPENDENCIES */
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'bin' . DIRECTORY_SEPARATOR . 'config.php';
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'model' . DIRECTORY_SEPARATOR . 'myPDO.php';
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'model' . DIRECTORY_SEPARATOR . 'projects' . DIRECTORY_SEPARATOR . 'Projects.php';
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'model' . DIRECTORY_SEPARATOR . 'user' . DIRECTORY_SEPARATOR . 'User.php';

// DB CONNECTION
try{
    $connection = new MyPDO(DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME.";port=".DB_PORT.";charset=".DB_CHARSET,DB_LOGIN,DB_PWD,ENV_DEV);
}catch(PDOException $e){
    die($e->getMessage());
}

// ADMIN CONTROLLER IF SOMEONE IS CONNECTED AND IF THIS PERSON HAS A PERMISSION
if(isset($_SESSION['session_id'])&&$_SESSION['session_id']==session_id()){

    require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'main.admin.controller.php';

}

// PUBLIC CONTROLLER (ALWAYS AVAILABLE)
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR . 'user' . DIRECTORY_SEPARATOR . 'main.user.controller.php';