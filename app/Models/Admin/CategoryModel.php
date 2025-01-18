<?php
class CategoryModel{
    public $db;
    public function __construct(){
        $this->db = new Database();
    }

    public function allCategory(){
        $sql = "SELECT * FROM categories";
        $query = $this->db->pdo->query($sql);
        $result = $query->fetchAll();
        return $result;
    }

    public function addCategory(){
        $name = $_POST['name'];
        $description = $_POST['description'];    
        $sql = "INSERT INTO categories(name, description) VALUES (:name, :description)";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);
        return $stmt->execute();
    }

    public function deleteCategory(){
        $id = $_GET['id'];
        $sql = "DELETE FROM categories WHERE id = :id";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function getCategory(){
        $id = $_GET['id'];
        $sql = "SELECT * FROM categories WHERE id = :id";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        if($stmt->execute()){
            return $stmt->fetch();
        }
        return false;
    }

    public function updateCategoryDB(){
        $id = $_GET['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];     
        $sql = "UPDATE `categories` SET `name`=:name,`description` = :description  WHERE id = :id";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
?>