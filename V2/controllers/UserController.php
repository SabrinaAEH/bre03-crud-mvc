<?php

class UserController
{
    public function create(): void
    {
        $route = "create_user";
        require "./templates/users/create.phtml";
    }
    
    public function checkCreate(): void
    {
        $route = "check_create_user";
    }
    
    public function update(): void
    {
        $route = "update_user";
        require "./templates/users/update.phtml";
    }

    public function checkUpdate(): void
    {
        $route = "check_update_user";
    }
    
    public function show(): void
    {
        $route = "show_user";
        require "./templates/users/show.phtml";
    }

    public function delete(): void
    {
        $route = "delete_user";
    }
    
    public function list(): void
    {
        $route = "default"; // là j'ai un doute comme c'est le else de mon router, je ne sais pas quoi mettre ici
        require "./templates/users/list.phtml";
    }

}
