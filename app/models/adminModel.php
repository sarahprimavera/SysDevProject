<?php

    Class adminModel{
        public function __construct(){
            $this->db = new Model;
        }

        public function getOrder(){
            $this->db->query("SELECT Quantity FROM cart WHERE itemId = :itemId");
            $this->db->bind(':itemId',$itemId);
            return $this->db->getSingle();
        }

        public function RemoveRequest($userId)
        {
            $this->db->query("DELETE FROM foods WHERE foodId=:userId");
            $this->db->bind('foodId',$data['foodId']);

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }

        public function AcceptRequest($user_id)
        {
            $this->db->query("UPDATE cart SET Quantity=:Quantity WHERE itemId=:user_id");
            $this->db->bind(':Quantity', $data['Quantity']);
            $this->db->bind(':itemId',$data['itemId']);
            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }

        public function getFood($foodId)
        {
            $this->db->query("SELECT * FROM foods WHERE foodId = :foodId");
            $this->db->bind(':foodId',$foodId);
            return $this->db->getSingle();
        }

        public function editFood()
        {
            $this->db->query("UPDATE cart SET Quantity=:Quantity WHERE itemId=:user_id");
            $this->db->bind(':Quantity', $data['Quantity']);
            $this->db->bind(':itemId',$data['itemId']);
            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }

        public function addFood()
        {
            // code...
        }

    }

?>