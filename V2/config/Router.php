
<?php
require_once './controllers/UserController.php';

class Router {
    public function __construct() 
    {
       
    }

    public function handleRequest(array $get): void 
    {
        
        if (isset($get["route"]) && $get["route"] === "show_user") {
            $pageController = new UserController();
            $userController->show();
        } elseif (isset($get["route"]) && $get["route"] === "create_user") {
            $pageController = new UserController();
            $userController->create();
        } elseif (isset($get["route"]) && $get["route"] === "check_create_user") {
            $pageController = new UserController();
            $userController->checkCreate();
        } elseif (isset($get["route"]) && $get["route"] === "update_user") {
            $pageController = new UserController();
            $userController->update();
        } elseif (isset($get["route"]) && $get["route"] === "check_update_user") {
            $pageController = new UserController();
            $userController->checkUpdate();
        } elseif (isset($get["route"]) && $get["route"] === "delete_user") {
            $pageController = new UserController();
            $userController->delete();
        } else {
            $pageController = new UserController();
            $userController->list();
        }
    }
}
?>