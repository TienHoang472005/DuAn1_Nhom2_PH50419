<?php

class ProductModel{
    public $db;
    public function __construct(){
        $this->db = new Database();
    }

    public function getAllProduct(){
        $sql = "SELECT products.id, products.name, products.price, products.price_sale, products.category_id, products.stock
        , products.image_main, categories.name AS categoryName FROM `products` join categories on products.category_id = categories.id";
        $query = $this->db->pdo->query($sql);
        $result = $query->fetchAll();
        return $result;
    }

}