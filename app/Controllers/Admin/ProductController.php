<?php
class ProductController extends ControllerAdmin
{

    public function showAllProduct()
    {
        $productModel = new ProductModel();
        $listProduct = $productModel->getAllProduct();

        include 'app/Views/Admin/products.php';
    }
  
}