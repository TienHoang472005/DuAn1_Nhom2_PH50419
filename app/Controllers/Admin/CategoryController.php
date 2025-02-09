<?php
class CategoryController extends ControllerAdmin
{
    public function getAllCategory()
    {
        $categoryModel = new CategoryModel();
        $listCategory = $categoryModel->allCategory();
        include 'app/Views/Admin/categories.php';
    }

    
}
?>
