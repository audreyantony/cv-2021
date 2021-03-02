<?php

// CONTROLLER
$readProjects = $projectsManager->readProjects();

if(empty($readProjects)){
    $help = "No projects to display";
}else{
    foreach($readProjects As $project){
        $allProjects[]= new Projects($project);
    }
}

// VIEW
include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'home.admin.view.php';