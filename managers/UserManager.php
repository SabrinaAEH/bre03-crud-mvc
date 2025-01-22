<?php

class UserManager {

    private array $users = [];
    private \PDO $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function getUsers(): array
    {
        return $this->users;
    }

    public function setUsers(array $users): void
    {
        $this->users = $users;
    }

    public function loadUsers(): void
    {
        
    }

    public function saveUser(User $user): void
    {
        
    }

    public function deleteUser(User $user): void
    {
        
    }

    public function create(User $user): void
    {
        $query = $this->db->prepare("INSERT INTO users (first_name, last_name, email) VALUES (:first_name, :last_name, :email)");

        $query->bindValue(':first_name', $user->getFirstName());
        $query->bindValue(':last_name', $user->getLastName());
        $query->bindValue(':email', $user->getEmail());

        $query->execute();

        $user->setId($this->db->lastInsertId());
    }

}