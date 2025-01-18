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
}