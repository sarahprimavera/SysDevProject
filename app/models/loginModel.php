<?php

    class loginModel{
        public function __construct(){
            $this->db = new Model;
        }
    
        public function getUser($email){
            $this->db->query("SELECT * FROM credentials WHERE email = :email");
            $this->db->bind(':email',$email);
            return $this->db->getSingle();
        }

        public function createUser($data){

            $this->db->query("INSERT INTO credentials (email, pass_hash) values (:email, :pass_hash)");
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':pass_hash', $data['pass_hash']);




            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }

        public function updateUser($data){
            $this->db->query("UPDATE credentials SET email=:email, pass_hash=:pass_hash WHERE id=:id");
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':pass_hash', $data['pass_hash']);
            $this->db->bind('id',$data['id']);
            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }

        public function delete($data){
            $this->db->query("DELETE FROM credentials WHERE id=:id");
            $this->db->bind('id',$data['id']);

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }
    }
?>