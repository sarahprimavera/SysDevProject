<?php

    class userModel{
        public function __construct(){
            $this->db = new Model;
        }
        public function getUsers(){
            $this->db->query("SELECT * FROM users");
            return $this->db->getResultSet();
        }

        public function getUser($userId){
            $this->db->query("SELECT * FROM users WHERE userId = :userId");
            $this->db->bind(':userId',$userId);
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
            $this->db->query("UPDATE users SET name=:name, email=:email WHERE ID=:userId");
            $this->db->bind(':name', $data['name']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind('userId',$data['user']);
            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }

        public function delete($data){
            $this->db->query("DELETE FROM users WHERE userId=:userId");
            $this->db->bind('userId',$data['user']);

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }
    }

?>