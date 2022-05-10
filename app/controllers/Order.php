<?php

    class Order extends Controller{
        public function __construct(){
            $this->orderModel = $this->model('orderModel');
        }

        public function index(){
            $this->view('Order/index');
        }

        public function getOrders($userId){
            $orders = $this->orderModel->getOrders($userId);
            $data = [
                "orders" => $orders
            ];
            $this->view('Order/status',$data);
        }

        public function delete($orderId){
            $data=[
                'orderId' => $orderId
            ];
            if($this->orderModel->delete($data)){
                echo 'Please wait we are deleting the order for you!';
                //header('Location: /MVC/Order/getOrders');
                echo '<meta http-equiv="Refresh" content=".2; url=/SysDevProject/Order/status">';
            }

        }

    }

?>