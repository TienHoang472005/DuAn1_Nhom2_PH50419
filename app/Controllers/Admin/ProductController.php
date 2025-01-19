<?php
class ProductController extends ControllerAdmin
{

    public function showAllProduct()
    {
        $productModel = new ProductModel();
        $listProduct = $productModel->getAllProduct();

        include 'app/Views/Admin/products.php';
    }

    public function deleteProduct() {
        $id = $_GET['id'];
        $productModel = new ProductModel();
    
        // Xóa ảnh chính của sản phẩm
        $product = $productModel->getProductByID($id);
        if ($product && !empty($product->image_main) && file_exists($product->image_main)) {
            unlink($product->image_main);
        }
    
        // Xóa ảnh liên quan trong bảng product_image
        $listImage = $productModel->getProductImageById($id);
        foreach ($listImage as $image) {
            if (!empty($image->image) && file_exists($image->image)) {
                unlink($image->image);
            }
        }
    
        // Xóa sản phẩm khỏi cơ sở dữ liệu
        if ($productModel->delete($id)) {
            $_SESSION['message'] = 'Xóa thành công';
        } else {
            $_SESSION['message'] = 'Xóa không thành công';
        }
    
        header("Location: ?role=admin&act=all-product");
        exit;
    }

    // Thêm sp
    public function addProduct(){
        $categoryModel = new CategoryModel();
        $listCategory = $categoryModel->allCategory();


        include 'app/Views/Admin/add-product.php';
    }

    public function checkValidate(){
        $name = $_POST['name'];
        $category = $_POST['category']; 
        $price = $_POST['price'];
        $stock = $_POST['stock'];

        if($name != "" && $category != "" && $price != "" && $stock != ""){
            return true;
        }else{
            $_SESSION['error'] = "Bạn nhập thiếu thông tin";
            return false;
        }
    }

    public function addPostProduct() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (!$this->checkValidate()) {
                header("Location: ?role=admin&act=add-product");
                exit;
            }
    
            $uploadDir = 'assets/Admin/upload/';
            $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
            $destPath = "";
    
            if (!empty($_FILES['image_main']['name'])) {
                $destPath = $this->uploadImage($_FILES['image_main'], $uploadDir, $allowedTypes);
            }
    
            $productModel = new ProductModel();
            $idProduct = $productModel->addProductToDB($destPath);
    
            if (!$idProduct) {
                $_SESSION['message'] = 'Thêm mới không thành công';
                header("Location: ?role=admin&act=add-product");
                exit;
            }
    
            if (isset($_FILES['image'])) {
                foreach ($_FILES['image']['name'] as $key => $name) {
                    if (!empty($name)) {
                        $destPathImage = $this->uploadImage(
                            ['name' => $name, 'tmp_name' => $_FILES['image']['tmp_name'][$key]],
                            $uploadDir,
                            $allowedTypes
                        );
                        $productModel->addGalleryImage($destPathImage, $idProduct);
                    }
                }
            }
    
            $_SESSION['message'] = 'Thêm mới thành công';
            header("Location: ?role=admin&act=all-product");
            exit;
        }
    }
    
    private function uploadImage($file, $uploadDir, $allowedTypes) {
        $fileTmpPath = $file['tmp_name'];
        $fileType = mime_content_type($fileTmpPath);
        $fileName = pathinfo($file['name'], PATHINFO_EXTENSION);
        $newFileName = uniqid() . '.' . strtolower($fileName);
    
        if (in_array($fileType, $allowedTypes)) {
            $destPath = $uploadDir . $newFileName;
            if (move_uploaded_file($fileTmpPath, $destPath)) {
                return $destPath;
            }
        }
        return "";
    }
    
}