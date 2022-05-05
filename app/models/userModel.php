<?php

    class userModel{
        public function __construct(){
            $this->db = new Model;
        }
        public function getUsers(){
            $this->db->query("SELECT * FROM users");
            return $this->db->getResultSet();
        }

        public function getUser($user_id){
            $this->db->query("SELECT * FROM users WHERE ID = :user_id");
            $this->db->bind(':user_id',$user_id);
            return $this->db->getSingle();
        }

        public function createUser($data){
            $this->db->query("INSERT INTO users (name, email) values (:name, :email)");
            $this->db->bind(':name', $data['name']);
            $this->db->bind(':email', $data['email']);

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }

        public function updateUser($data){
            $this->db->query("UPDATE users SET name=:name, email=:email WHERE ID=:user_id");
            $this->db->bind(':name', $data['name']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind('user_id',$data['ID']);
            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }

        public function delete($data){
            $this->db->query("DELETE FROM users WHERE userId=:user_id");
            $this->db->bind('user_id',$data['ID']);

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }
    }

?>