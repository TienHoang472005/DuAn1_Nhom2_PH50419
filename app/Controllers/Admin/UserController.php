<?php

class UserController{
    public function getAllUser(){
        $userModel = new UserModel();
        $listUser = $userModel->getAllData();

        include 'app/Views/Admin/user.php';
    }

    public function showUser(){
        if(!isset($_GET['id'])){
            $_SESSION['message'] = 'Vui lòng chọn user cần xóa';
            header("Location: ?role=admin&act=all-user");
            exit;
        }

        $userModel = new UserModel();
        $user = $userModel->getUserById();

        include 'app/Views/Admin/show-user.php';
    }
}