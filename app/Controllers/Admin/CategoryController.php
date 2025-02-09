<?php
class CategoryController extends ControllerAdmin
{
    public function getAllCategory()
    {
        $categoryModel = new CategoryModel();
        $listCategory = $categoryModel->allCategory();
        include 'app/Views/Admin/categories.php';
    }

    public function addCategory()
    {
        include 'app/Views/Admin/add-category.php';
    }

    public function addPostCategory()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!$this->checkValidate()) {
                header("Location: ?role=admin&act=add-category");
                exit;
            }

            $uploadDir = 'assets/Admin/upload/';
            $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
            $destPath = null;
              
            if (!empty($_FILES['image']['name'])) {
                $destPath = $this->uploadImage($_FILES['image'], $uploadDir, $allowedTypes);
            }

            $categoryModel = new CategoryModel();
            $message = $categoryModel->addCategoryDB($destPath);

            $_SESSION['message'] = $message ? 'Thêm mới thành công' : 'Thêm mới không thành công';
            header("Location: ?role=admin&act=all-category");
            exit;
        }
    }

    private function uploadImage($file, $uploadDir, $allowedTypes)
    {
        if (!in_array($file['type'], $allowedTypes)) {
            $_SESSION['error'] = 'File không đúng định dạng (chỉ chấp nhận JPEG, PNG, GIF)';
            return null;
        }

        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $fileName = uniqid() . '_' . basename($file['name']);
        $destPath = $uploadDir . $fileName;

        

        if (!move_uploaded_file($file['tmp_name'], $destPath)) {
            $_SESSION['error'] = 'Không thể tải lên tệp';
            return null;
        }

        return $destPath;
    }
    
    public function checkValidate()
    {
        $name = $_POST['name'] ?? '';
        if (trim($name) !== '') {
            return true;
        } else {
            $_SESSION['error'] = "Bạn nhập thiếu thông tin";
            return false;
        }
    }
    
}
?>
