<?php

    class loginModel{
        public function __construct(){
            $this->db = new Model;
        }
    
        public function getUser($name){
            $this->db->query("SELECT * FROM credentials WHERE name = :name");
            $this->db->bind(':name',$name);
            return $this->db->getSingle();
        }

        public function createUser($data){

            $this->db->query("INSERT INTO credentials (name, pass_hash) values (:name, :pass_hash)");
            $this->db->bind(':name', $data['name']);
            $this->db->bind(':pass_hash', $data['pass_hash']);




            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }
    }
?>