<?php
class Home extends Controller
{
    public function __construct()
    {
        $this->foodsModel = $this->model('foodsModel');
    }

    public function index()
    {
        //displaying all products
        $foods = $this->foodsModel->getFoods();
            $data = [
                'foods' => $foods
            ];
        $this->view('home_page',$data);
        
    }

    public function viewFood($foodId){
        $food = $this->foodsModel->getFood($foodId);
        $this->view('ClientSide/viewFood',$food);
    }

 
}