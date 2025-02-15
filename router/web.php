<?php

$role = isset($_GET['role']) ? $_GET['role'] : "user";
$act = isset($_GET['act']) ? $_GET['act'] : "";

// Đăng nhập user
if ($role == "user") {
        echo "Trang client"; 
} else {
    // Đăng nhập Admin
    switch ($act) {
        case 'home':
            $homeController = new HomeController();
            $homeController->dashboard();
            break;

        case 'login':
            $loginController = new LoginController();
            $loginController->login();
            break;

        case 'post-login':
            $loginController = new LoginController();
            $loginController->postLogin();
            break;

        case 'logout':
            $loginController = new LoginController();
            $loginController->logout();
            break;

        // Quản lý user
        case 'all-user': {
            $userController = new UserController();
            $userController->getAllUser();
            break;
        }

        case 'show-user': {
            $userController = new UserController();
            $userController->showUser();
            break;
        }

        case 'add-user': {
            $userController = new UserController();
            $userController->addUser();
            break;
        }

        case 'post-add-user': {
            $userController = new UserController();
            $userController->addPostUser();
            break;
        }

        case 'update-user': {
            $userController = new UserController();
            $userController->updateUser();
            break;
        }

        case 'update-post-user': {
            $userController = new UserController();
            $userController->updatePostUser();
            break;
        }

        case 'delete-user': {
            $userController = new UserController();
            $userController->deleteUser();
            break;
        }

        // Quản lý sản phẩm
        case 'all-product': {
            $productController = new ProductController();
            $productController->showAllProduct();
            break;
        }

        case 'delete-product': {
            $productController = new ProductController();
            $productController->deleteProduct();
            break;
        }

        case 'add-product': {
            $productController = new ProductController();
            $productController->addProduct();
            break;
        }
        
        case 'add-post-product': {
            $productController = new ProductController();
            $productController->addPostProduct();
            break;
        }

        case 'update-product': {
            $productController = new ProductController();
            $productController->updateProduct();
            break;
        }

        case 'update-post-product': {
            $productController = new ProductController();
            $productController->updatePostProduct();
            break;
        }

        case 'show-product': {
            $productController = new ProductController();
            $productController->showProduct();
            break;
        }

        //quản lý danh mục
        case 'all-category':
            $categoryController = new CategoryController();
            $categoryController->getAllCategory();  
            break;

        case 'add-category':
            $categoryController = new CategoryController();
            $categoryController->addCategory();  
            break;

        case 'add-post-category':
            $categoryController = new CategoryController();
            $categoryController->addPostCategory();  
            break;
        
        case 'delete-category':
            $categoryController = new CategoryController();
            $categoryController->deleteCategory();   
            break;

        case 'update-category':
            $categoryController = new CategoryController();
            $categoryController->updateCategory();   
            break;
    
        case 'update-post-category':
            $categoryController = new CategoryController();
            $categoryController->updatePostCategory();  
            break;

        // Quản lý đơn hàng
        case 'show-order': {
            $orderController = new OrderController();
            $orderController->showOrder();
            break;
        }

        case 'show-order-detail': {
            $orderController = new OrderController();
            $orderController->showOrderDetail();
            break;
        }
        
        case 'order-change-status': {
            $orderController = new OrderController();
            $orderController->changeStatus();
            break;
        }
    }

}
