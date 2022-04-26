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
        }else{
            $userId = $_SESSION['userId'];
            $cart = $this->cartModel->displayCart($userId);
            $this->view('Cart/userCart',$cart);
        }
        
    }

    public function removeItem($itemID){
        $data=[
            'item_id'=> $itemID
        ];

        if($this->cartModel->removeFromCart($data)){
            echo 'We are deleting the item for you!';
            echo '<meta http-equiv="Refresh" content="1; url=/SysDevProject/userCart/displayCart">';
        }
    }

    public function addQuantity($item_id){
        $quantity = $this->cartModel->getQuantity($item_id);
        $temp= $quantity->Quantity;
        $quantityVal = intval( $temp );
        $data=[
            'Quantity'=> ++$quantityVal,
            'item_id'=> $item_id
        ];
        if($this->cartModel->updateQuantity($data)){
            echo '<meta http-equiv="Refresh" content="1; url=/SysDevProject/userCart/displayCart">';
        }
    }
    public function decreaseQuantity($item_id){
        $quantity = $this->cartModel->getQuantity($item_id);
        $temp= $quantity->Quantity;
        $quantityVal = intval($temp);
        $data=[
            'Quantity'=> --$quantityVal,
            'item_id'=> $item_id
        ];
        if($this->cartModel->updateQuantity($data)){
            echo '<meta http-equiv="Refresh" content="1; url=/SysDevProject/userCart/displayCart">';
        }
    }
}
    

?>