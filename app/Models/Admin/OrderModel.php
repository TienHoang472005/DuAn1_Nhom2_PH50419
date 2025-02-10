<?php

class OrderModel{
    public $db;
    public function __construct(){
        $this->db = new Database();
    }

    public function getAllOrder(){
        $sql = "select * from `order`";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function changeStatusModel(){
        $order_id = $_POST['order_id'];
        $status = $_POST['status'];

        $sql = "UPDATE `order` SET `status`=:status WHERE id = :order_id";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':order_id', $order_id);
        return $stmt->execute();
    }
}