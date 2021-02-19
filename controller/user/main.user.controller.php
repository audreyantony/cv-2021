<?php

// WHEN THE USER IS NAVIGATING THE USER PART OF THE WEBSITE
if (isset($_GET['page'])) {

    // HEADER
    include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'parts' . DIRECTORY_SEPARATOR . 'header.parts.vue.php';

    switch ($_GET['page']) {
        // HOME PAGE
        case 'home':
            include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR . 'user' . DIRECTORY_SEPARATOR . 'home.user.controller.php';
            break;
        // ABOUT PAGE
        case "about":
            include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR . 'user' . DIRECTORY_SEPARATOR . 'about.user.controller.php';
            break;
        // PROJECTS PAGE
        case "projects":
            include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR . 'user' . DIRECTORY_SEPARATOR . 'projects.user.controller.php';
            break;
        // CONTACT PAGE
        case "contact":
            include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR . 'user' . DIRECTORY_SEPARATOR . 'contact.user.controller.php';
            break;
        // CONNECTION PAGE
        case "connection":
            include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'connection.public.controller.php';
            break;
        // DEFAULT PAGE -> 404
        default :
            include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'error' . DIRECTORY_SEPARATOR . 'page.error.view.php';
    }

    // FOOTER
    include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'parts' . DIRECTORY_SEPARATOR . 'footer.parts.vue.php';

// FIRST DISPLAY OF THE USER PAGE
}


if (!isset($_GET['page']) && !isset($_GET['admin'])){

    // DISPLAY OF THE HOME PAGE
    include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'parts' . DIRECTORY_SEPARATOR . 'header.parts.vue.php';

    include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR . 'user' . DIRECTORY_SEPARATOR . 'home.user.controller.php';

    include dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'parts' . DIRECTORY_SEPARATOR . 'footer.parts.vue.php';


}