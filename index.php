<?php
session_start();

// Database
include 'app/Database/Database.php';

// Model
    // Admin
    include 'app/Models/Admin/HomeModel.php';
    include 'app/Models/Admin/ProductModel.php';
    include 'app/Models/Admin/UserModel.php';
    include 'app/Models/Admin/CategoryModel.php';
    include 'app/Models/Admin/OrderModel.php';

    // User


// Controller
    // Admin
    include 'app/Controllers/Admin/ControllerAdmin.php';
    include 'app/Controllers/Admin/HomeController.php';
    include 'app/Controllers/Admin/LoginController.php';
    include 'app/Controllers/Admin/UserController.php';
    include 'app/Controllers/Admin/ProductController.php';
    include 'app/Controllers/Admin/CategoryController.php';
    include 'app/Controllers/Admin/OrderController.php';
    


    // User

// Router 
include 'router/web.php';


