<?php

    class cartModel{
        public function __construct(){
            $this->db = new Model;
        }
    
        public function addCart($data){
            $this->db->query("INSERT INTO cart (userId, foodId, foodName, price, Quantity) values (:userId,
                        :foodId, :foodName, :price, :Quantity)");
            $this->db->bind(':userId', $data['userId']);
            $this->db->bind(':foodId', $data['foodId']);
            $this->db->bind(':foodName', $data['foodName']);
            $this->db->bind(':price', $data['price']);
            $this->db->bind(':Quantity', $data['Quantity']);

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }

        public function getFood($foodId){
            $this->db->query("SELECT * FROM foods WHERE foodId = :foodId");
            $this->db->bind(':foodId',$foodId);
            return $this->db->getResultSet();
        }
        
        public function getQuantity($itemId){
            $this->db->query("SELECT Quantity FROM cart WHERE itemId = :itemId");
            $this->db->bind(':itemId',$itemId);
            return $this->db->getSingle();
        }
        public function removeFromCart($data){
            $this->db->query("DELETE FROM cart WHERE itemId=:itemId");
            $this->db->bind(':itemId',$data['itemId']);

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }

        public function displayCart($userId){
            $this->db->query("SELECT * FROM cart WHERE userId = :userId");
            $this->db->bind(':userId',$userId);
            return $this->db->getResultSet();
        }

        public function updateQuantity($data){
            $this->db->query("UPDATE cart SET Quantity=:Quantity WHERE itemId=:itemId");
            $this->db->bind(':Quantity', $data['Quantity']);
            $this->db->bind(':itemId',$data['itemId']);
            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }
    }
?>