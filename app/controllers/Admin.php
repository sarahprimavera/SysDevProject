<?php
class Admin extends Controller
{
	public function __construct()
    {
        $this->adminModel = $this-> model('adminModel');
    }

    public function index()
    {
        $this->view('Admin/AdminPage');
    }

    public function OrderView()
    {
        $orders = $this->adminModel->getOrder();

        $data = [
                "orders" => $orders
            ];
        $this->view('Admin/OrderView', $data);
    }

    public function EditMenu()
    {
        $this->view('Admin/EditMenu');
    }

    public function editPage($item_id)
    {
        $data = [
                "orders" => $orders
            ];

        if(isset($_POST['submit'])){
            $food = $this->adminModel->getFood($foodId);
        }

        $this->view('Admin/editPage');
    }

    public function DeleteRequest($user_id)
    {
        if($this->model('adminModel')->deleteRequest($user_id)){
                $data = [
                    "user" => $this->model('adminModel')->getUsers()
                ];
                $this->view('Admin/AdminUser',$data);
                echo '<meta http-equiv="Refresh" content="2; url=/Admin/AdminUser/">';
               }
    }

    public function AcceptRequest($user_id)
    {
        if($this->model('adminModel')->acceptRequest($user_id)){
                $data = [
                    "user" => $this->model('adminModel')->getUsers()
                ];
                $this->view('Admin/AdminUser',$data);
                echo '<meta http-equiv="Refresh" content="2; url=/Admin/AdminUser/">';
               }
    }

}

?>