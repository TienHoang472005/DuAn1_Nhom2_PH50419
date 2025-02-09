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

    public function addCategoryDB($destPath)
    {
        $name = $_POST['name'];
        $image = $destPath;
        $sql = "INSERT INTO categories (name, image) VALUES (:name, :image)";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':image', $image);

        return $stmt->execute();
    }


    
}
