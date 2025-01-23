<?php

class UserController {
    public function show() {
        echo "Showing user";
    }

    public function create() {
        include 'templates/users/create.phtml';
    }

    public function checkCreate() {
        $firstName = $_POST['first_name'] ?? '';
        $lastName = $_POST['last_name'] ?? '';
        $email = $_POST['email'] ?? '';

        $user = new User($firstName, $lastName, $email);
        
        $host = "db.3wa.io";
        $port = "3306";
        $dbname = "#_crud_mvc";
        $connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";
        $user = "#";
        $password = "#";

        $db = new PDO(
            $connexionString,
            $user,
            $password);
            
        $userManager = new UserManager($db);

        $userManager->create($user);

        header('Location: index.php');
        exit();
    }

    public function update() {
        echo "Updating user";
    }

    public function checkUpdate() {
        echo "Checking user update";
    }

    public function delete() {
        echo "Deleting user";
    }

    public function list() {

        $host = "db.3wa.io";
        $port = "3306";
        $dbname = "#_crud_mvc";
        $connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";
        $user = "#";
        $password = "#";

        $db = new PDO(
            $connexionString,
            $user,
            $password);
            
        $userManager = new UserManager($db);

        $users = $userManager->findAll();
        
        $templateList = './templates/users/list.phtml';

        include 'templates/layout.phtml';
    }
}

