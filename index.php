<?php
session_start();

// Database
include 'app/Database/Database.php';

// Model
    // Admin
    include 'app/Models/Admin/HomeModel.php';

    // User


// Controller
    // Admin
    include 'app/Controllers/Admin/ControllerAdmin.php';
    include 'app/Controllers/Admin/HomeController.php';
    include 'app/Controllers/Admin/LoginController.php';


    // User

// Router 
include 'router/web.php';


