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

    public function deleteCategory($id)
    {
        $category = $this->getCategoryByID($id);

        // Xóa ảnh nếu tồn tại
        if ($category && !empty($category->image)) {
            if (file_exists($category->image)) {
                unlink($category->image);
            }
        }

        $sql = "DELETE FROM categories WHERE id = :id";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindParam(':id', $id);

        return $stmt->execute();
    }

    // Lấy danh mục theo ID
    public function getCategoryByID($id)
    {
    $sql = "SELECT id, name, image FROM categories WHERE id = :id"; // Giữ nguyên tên cột
    $stmt = $this->db->pdo->prepare($sql);
    $stmt->execute([':id' => $id]);
    return $stmt->fetch(PDO::FETCH_OBJ); // Đảm bảo trả về dạng đối tượng
    }
    
}
