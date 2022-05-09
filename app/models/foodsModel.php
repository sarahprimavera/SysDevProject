<?php

    Class foodsModel{
        public function __construct(){
            $this->db = new Model;
        }

        public function getFoods(){
            $this->db->query("SELECT * FROM foods");
            return $this->db->getResultSet();
        }

        public function getFood($foodId){
            $this->db->query("SELECT * FROM foods WHERE foodId = :foodId");
            $this->db->bind(':foodId',$foodId);
            return $this->db->getSingle();
        }

        public function createFood($data){
            $this->db->query("INSERT INTO foods (foodName, description, price, image, quantity) values (:foodName, :description, :price, :image, :quantity)");
            $this->db->bind(':foodName', $data['foodName']);
            $this->db->bind(':description', $data['description']);
            $this->db->bind(':price', $data['price']);
            $this->db->bind(':image', $data['image']);
            $this->db->bind(':quantity',$data['quantity']);

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }

        public function updateFood($data){
            $this->db->query("UPDATE foods SET foodName=:foodName, price=:price, image=:image, quantity=:quantity WHERE foodId=:foodId");
            $this->db->bind(':foodName', $data['foodName']);
            $this->db->bind(':price', $data['price']);
            $this->db->bind(':image', $data['image']);
            $this->db->bind(':quantity', $data['quantity']);
            $this->db->bind(':foodId',$data['foodId']);
            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }

        public function searchFood($data){
            $this->db->query("SELECT * FROM foods WHERE foodName LIKE :search");
            $this->db->bind(':search', "%".$data['Search']."%");
            return $this->db->getResultSet();
        }

        public function delete($data){
            $this->db->query("DELETE FROM foods WHERE foodId=:foodId");
            $this->db->bind('foodId',$data['foodId']);

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }
    }

?>