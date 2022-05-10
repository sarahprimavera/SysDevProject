<?php

    Class adminModel{
        public function __construct(){
            $this->db = new Model;
        }

        public function getOrder(){
            $this->db->query("SELECT Quantity FROM cart WHERE item_id = :item_id");
            $this->db->bind(':item_id',$item_id);
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
            $this->db->query("UPDATE cart SET Quantity=:Quantity WHERE item_id=:user_id");
            $this->db->bind(':Quantity', $data['Quantity']);
            $this->db->bind(':item_id',$data['item_id']);
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
            $this->db->query("UPDATE cart SET Quantity=:Quantity WHERE item_id=:user_id");
            $this->db->bind(':Quantity', $data['Quantity']);
            $this->db->bind(':item_id',$data['item_id']);
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