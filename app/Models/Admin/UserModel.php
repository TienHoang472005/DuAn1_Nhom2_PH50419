<?php

class UserModel{
    public $db;
    public function __construct(){
        $this->db = new Database();
    }

    public function getAllData(){
        $sql = "select * from users";
        $query = $this->db->pdo->query($sql);
        $result = $query->fetchAll();
        return $result;
    }

    public function getUserById(){
        $id = $_GET['id'];
        $sql = "select * from users where id = :id";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        if($stmt->execute()){
            return $stmt->fetch();
        }
        return false;
    }

    public function deleteUser(){
        $id = $_GET['id'];
        $sql = "DELETE FROM `users` WHERE id = :id";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindParam(':id', $id);

        return $stmt->execute();
    }
}