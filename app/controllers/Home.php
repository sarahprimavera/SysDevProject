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

    public function AddCart($UPC){
        if(!isLoggedIn()){
            //can only start adding to cart when signed in
        }else{
            $product = $this->foodsModel->getFood($UPC);
            $data=[
                'userId' => $_SESSION['userId'],
                'foodId' => $product->foodId,
                'foodName' => $product->foodName,
                'unitPrice' => $product->unitPrice,
                'Quantity' => 1
            ];

            if($this->cartModel->addCart($data)){
                $cart = $this->cartModel->displayCart($_SESSION['ClientEmail']);
                $this->view('Cart/cart_page',$cart);
            }
        }
        
    }

    public function searchProduct(){
        //search functionality
        if(!isset($_POST['searchBar'])){
            $products = $this->foodsModel->getFoods();
            $data = [
                'product' => $products
            ];
        $this->view('home_page', $data);
        }else{
            $data=[
                'Search' => trim($_POST['searchBar'])
            ];
            var_dump($data);
            $searchResult = $this->foodsModel->searchProduct($data);
            $this->view('ClientSide/viewFood',$searchResult);
        }
        

        
}
}