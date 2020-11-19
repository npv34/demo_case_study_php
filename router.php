<?php

$page = (isset($_REQUEST['page'])) ? $_REQUEST['page'] : null;

switch ($page) {
    case 'admin':
        break;
    case 'home':

    default:
        $homeController = new \app\controller\HomeController();
        $homeController->showHomePage();
}

?>