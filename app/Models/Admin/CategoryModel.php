<?php
class CategoryModel
{
    public $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    // Lấy tất cả danh mục
    public function allCategory()
    {
        $sql = "SELECT * FROM categories";
        $query = $this->db->pdo->query($sql);
        return $query->fetchAll();
    }

    
}
