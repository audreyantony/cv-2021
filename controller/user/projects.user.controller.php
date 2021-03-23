<?php

// CONTROLLER
$allProjects = $projectsManager->readAllProjects();

if (empty($allProjects)){
    $help = "No projects available";
} else {
    foreach ($allProjects as $p){
        $project[] = new Projects($p);
    }
}

// VIEW
include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'user' . DIRECTORY_SEPARATOR . 'projects.user.view.php';