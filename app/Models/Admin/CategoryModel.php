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
    public function getCategoryByID($id)
    {
        $sql = "SELECT name AS category_name FROM categories WHERE id = :id";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch();
    }

    
}
?>