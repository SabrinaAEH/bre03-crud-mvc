
<?php
require_once './controllers/UserController.php';

class Router {
    public function __construct() 
    {
       
    }

    public function handleRequest(array $get): void 
    {
        
        if (isset($get["route"]) && $get["route"] === "show_user") {
            $userController->show();
        } elseif (isset($get["route"]) && $get["route"] === "create_user") {
            $userController->create();
        } elseif (isset($get["route"]) && $get["route"] === "check_create_user") {
            $userController->checkCreate();
        } elseif (isset($get["route"]) && $get["route"] === "update_user") {
            $userController->update();
        } elseif (isset($get["route"]) && $get["route"] === "check_update_user") {
            $userController->checkUpdate();
        } elseif (isset($get["route"]) && $get["route"] === "delete_user") {
            $userController->delete();
        } else {
            $userController->list();
        }
    }
}
?>