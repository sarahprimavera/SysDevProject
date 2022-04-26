<?php

    class cartModel{
        public function __construct(){
            $this->db = new Model;
        }
    
        public function addCart($data){
            $this->db->query("INSERT INTO cart ( userId, foodId, unitPrice, Quantity) values (:userId,
                        :foodId, :unitPrice, :Quantity)");
            $this->db->bind(':userId', $data['userId']);
            $this->db->bind(':foodId', $data['foodId']);
            $this->db->bind(':unitPrice', $data['unitPrice']);
            $this->db->bind(':Quantity', $data['Quantity']);

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }

        public function getQuantity($item_id){
            $this->db->query("SELECT Quantity FROM cart WHERE item_id = :item_id");
            $this->db->bind(':item_id',$item_id);
            return $this->db->getSingle();
        }
        public function removeFromCart($data){
            $this->db->query("DELETE FROM cart WHERE item_id=:item_id");
            $this->db->bind(':item_id',$data['item_id']);

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
            $this->db->query("UPDATE cart SET Quantity=:Quantity WHERE item_id=:item_id");
            $this->db->bind(':Quantity', $data['Quantity']);
            $this->db->bind(':item_id',$data['item_id']);
            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }
    }
?>