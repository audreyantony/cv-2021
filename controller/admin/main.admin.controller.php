<?php


// WHEN THE USER IS NAVIGATING THE USER PART OF THE WEBSITE
if (isset($_GET['admin'])) {

    // HEADER
    include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'parts' . DIRECTORY_SEPARATOR . 'header.parts.view.php';

    switch ($_GET['admin']) {
        // HOME ADMIN PAGE
        case 'home':
            include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'home.admin.controller.php';
            break;
        // PROJECTS ADMIN PAGE
        case "projects":
            include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'projects.admin.controller.php';
            break;
        // CONTACT ADMIN PAGE
        case "contact":
            include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'contact.admin.controller.php';
            break;
        // DISCONNECTION ADMIN PAGE
        case "disconnection":
            include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'disconnection.public.controller.php';
            break;
        // DEFAULT ADMIN PAGE -> 404
        default :
            include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'error' . DIRECTORY_SEPARATOR . 'page.error.view.php';
    }

    // FOOTER
    include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'parts' . DIRECTORY_SEPARATOR . 'footer.parts.view.php';

}