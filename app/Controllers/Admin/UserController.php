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

    public function deleteUser(){
        if(!isset($_GET['id'])){
            $_SESSION['message'] = 'Vui lòng chọn user cần xóa';
            header("Location: ?role=admin&act=all-user");
            exit;
        }

        $userModel = new UserModel();
        $user = $userModel->getUserById();
        // Xóa ảnh
        if($user->image != "" && $user->image != null){
            unlink($user->image);
        }

        $message = $userModel->deleteUser();

        if($message){
            $_SESSION['message'] = 'Xóa thành công';
            header("Location: ?role=admin&act=all-user");
            exit;
        }else{
            $_SESSION['message'] = 'Xóa không thành công';
            header("Location: ?role=admin&act=update-user&id=" . $_GET['id'] );
            exit;
        }
    }

}