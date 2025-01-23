<?php

class UserManager extends AbstractManager
{
    private array $users = [];
    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function getUsers(): array
    {
        return $this->users;
    }

    public function setUsers(array $users): void
    {
        $this->users = $users;
    }

    public function findAll(): array
    {
        $query = $this->db->prepare('SELECT * FROM users');
        $parameters = [];
        $query->execute($parameters);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        $users = [];

        foreach ($result as $item) {
            $user = new User($item["first_name"], $item["last_name"], $item["email"]);
            $user->setId($item["id"]);

            $users[] = $user;
        }

        return $users;
    }
    
    public function insert(User $user): void
    {
        $query = $this->db->prepare('INSERT INTO users (first_name, last_name, email) VALUES (:first_name, :last_name, :email)');
        $query->execute([
            'first_name' => $user->getFirstName(),
            'last_name' => $user->getLastName(),
            'email' => $user->getEmail()
        ]);

        $user->setId((int)$this->db->lastInsertId());
    }

    public function update(User $user): void
    {
        $query = $this->db->prepare('UPDATE users SET first_name = :first_name, last_name = :last_name, email = :email WHERE id = :id');
        $query->execute([
            'first_name' => $user->getFirstName(),
            'last_name' => $user->getLastName(),
            'email' => $user->getEmail(),
            'id' => $user->getId()
        ]);
    }

    public function delete(int $id): void
    {
        $query = $this->db->prepare('DELETE FROM users WHERE id = :id');
        $query->execute(['id' => $id]);
    }
}

?>