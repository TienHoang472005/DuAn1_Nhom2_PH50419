<?php

class OrderController{

    public function showOrder(){
        $orderModel = new OrderModel();
        $orders = $orderModel->getAllOrder();
        include 'app/Views/Admin/show-order.php';
    }

    public function changeStatus(){
        $orderModel = new OrderModel();
        $order_detail = $orderModel->changeStatusModel();
        header("Location: ?role=admin&act=show-order");
    }
}