<?php

// MODEL

// CONTROLLER
if(isset($_GET['create'])){

    if(isset($_POST['create-project'])){
        if (!empty($_POST['id_idUser']) && !empty($_POST['titleProjects']) && !empty($_POST['descProjects']) && !empty($_POST['urlProjects']) && !empty($_POST['altImgProjects']) && !empty($_POST['titleImgProjects'])){
            $newProject = new Projects($_POST);
            $create = $projectsManager->createProject($newProject,$_POST['id_idUser'], $_FILES['imgNameProjects']);
            if($create[0]){
                header("Location: ?admin=home");
                exit();
            } else {
                $help = $create[1];
            }
        } else {
            $help = ['You have to fill every input'];
        }

    }
}

// VIEW
include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'projects.admin.view.php';