<?php

class ProductModel{
    public $db;
    public function __construct(){
        $this->db = new Database();
    }

    // danh sách sp
    public function getAllProduct(){
        $sql = "SELECT products.id, products.name, products.price, products.price_sale, products.category_id, products.stock
        , products.image_main, categories.name AS categoryName FROM `products` join categories on products.category_id = categories.id";
        $query = $this->db->pdo->query($sql);
        $result = $query->fetchAll();
        return $result;
    }

    // lấy id
    public function getProductByID($id) {
        $sql = "SELECT * FROM products WHERE id = :id";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch();
    }

    // lấy id hình ảnh
    public function getProductImageById($productId) {
        $sql = "SELECT * FROM product_image WHERE product_id = :product_id";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->execute([':product_id' => $productId]);
        return $stmt->fetchAll();
    }

    // xóa sản phẩm
    public function delete(){
        $id = $_GET['id'];
        $sqlProductImage = "DELETE FROM `product_image` WHERE product_id = :product_id";
        $stmt1 = $this->db->pdo->prepare($sqlProductImage);
        $stmt1->bindParam(':product_id', $id);

        $sqlProduct = "DELETE FROM `products` WHERE id = :id";
        $stmt2 = $this->db->pdo->prepare($sqlProduct);
        $stmt2->bindParam(':id', $id);

        if($stmt1->execute() && $stmt2->execute()){
            return true;
        }else{
            return false;
        }
    }
}