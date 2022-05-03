<?php
class Admin extends Controller
{
	public function __construct()
    {
        $this->userModel = $this-> model('userModel');
    }

    public function index()
    {
        $this->view('Admin/AdminPage');
    }

    public function OrderView()
    {
        $this->view('Admin/OrderView');
    }

    public function EditMenu()
    {
        $this->view('Admin/EditMenu');
    }

}

?>