
<?php

class Router {
    public function __construct() 
    {
       
    }

    public function handleRequest(array $get): void 
    {
        
        if (isset($get["route"]) && $get["route"] === "show_user") {
            $userController = new UserController();
            $userController->show();
        } elseif (isset($get["route"]) && $get["route"] === "create_user") {
            $userController = new UserController();
            $userController->create();
        } elseif (isset($get["route"]) && $get["route"] === "check_create_user") {
            $userController = new UserController();
            $userController->checkCreate();
        } elseif (isset($get["route"]) && $get["route"] === "update_user") {
            $userController = new UserController();
            $userController->update();
        } elseif (isset($get["route"]) && $get["route"] === "check_update_user") {
            $userController = new UserController();
            $userController->checkUpdate();
        } elseif (isset($get["route"]) && $get["route"] === "delete_user") {
            $userController = new UserController();
            $userController->delete();
        } else {
            $userController = new UserController();
            $userController->list();
        }
    }
}
?>