<?php

    Class userModel{
        public function __construct(){
            $this->db = new Model;
        }

        public function createAccount($data){
            $this->db->query("INSERT INTO items (image, name, description, price) values (:image, :name, :description, :price)");
            $this->db->bind(':image',$data['picture']);
            $this->db->bind(':name', $data['name']);
            $this->db->bind(':description', $data['description']);
            $this->db->bind(':price', $data['price']);
            

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }
    }

?>