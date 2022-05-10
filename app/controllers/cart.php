<?php
class userCart extends Controller{
    public function __construct()
    {
        $this->cartModel = $this->model('cartModel');
    }

    public function index()
    {
        
    }

    public function displayCart(){
        if(!isLoggedIn()){
            //make it go to log in
            $this->view('Login/index');
        }else{
            $userId = $_SESSION['userId'];
            $cart = $this->cartModel->displayCart($userId);
            $this->view('Cart/cart',$cart);
        }
        
    }

    public function removeItem($itemID){
        $data=[
            'itemId'=> $itemID
        ];

        if($this->cartModel->removeFromCart($data)){
            echo 'We are deleting the item for you!';
            echo '<meta http-equiv="Refresh" content="1; url=/SysDevProject/userCart/displayCart">';
        }
    }

    public function addQuantity($itemId){
        $quantity = $this->cartModel->getQuantity($itemId);
        $temp= $quantity->Quantity;
        $quantityVal = intval( $temp );
        $data=[
            'Quantity'=> ++$quantityVal,
            'itemId'=> $itemId
        ];
        if($this->cartModel->updateQuantity($data)){
            echo '<meta http-equiv="Refresh" content="1; url=/SysDevProject/cart/displayCart">';
        }
    }
    public function decreaseQuantity($itemId){
        $quantity = $this->cartModel->getQuantity($itemId);
        $temp= $quantity->Quantity;
        $quantityVal = intval($temp);
        $data=[
            'Quantity'=> --$quantityVal,
            'itemId'=> $itemId
        ];
        if($this->cartModel->updateQuantity($data)){
            echo '<meta http-equiv="Refresh" content="1; url=/SysDevProject/cart/displayCart">';
        }
    }
}
    

?>