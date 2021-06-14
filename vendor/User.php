<?php


class User
{
    public  $db;
    public function __construct()
    {
        $this->db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    }

    public function getAllUsers(){
        $sql = "SELECT * FROM users;";
        $result = $this->db->query($sql);
        if($result){
//            $users = $result->fetch_all(MYSQLI_ASSOC);
            $users = [];
            while($user = $result->fetch_assoc()){
                $users[] = $user;
            }
            return $users;
        }
        return null;
    }

    public function deleteUser($id){
        $sql = "DELETE FROM users WHERE users.id = '$id';";
        $this->db->query($sql);
    }

    public function getUserByLogin($login){
        $sql = "SELECT * FROM users WHERE login like '$login' limit 1;";
        $result = $this->db->query($sql);
        if($result){
            $result->fetch_assoc();
        }
        return null;
    }

    public function addUser($login, $password, $email){
        $password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (login, password, email) VALUES ('$login', '$password', '$email')";
        $result = $this->db->query($sql);
    }
}