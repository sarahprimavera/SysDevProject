<?php

    class orderModel{
        public function __construct(){
            $this->db = new Model;
        }
        public function getOrders($userId){
            $this->db->query("SELECT * FROM orders WHERE userId = userId:");
            $this->db->bind(':userId',$userId);
            return $this->db->getResultSet();
        }

        public function getOrder($orderId){
            $this->db->query("SELECT * FROM orders WHERE orderId = :orderId");
            $this->db->bind(':orderId',$orderId);
            return $this->db->getSingle();
        }

        public function createOrder($data){
            $this->db->query("INSERT INTO orders (userId, totalPrice, isAccepted, isReady, pickUpDate) 
                                    values (:userId, :totalPrice, :isAccepted, :isReady, :pickUpDate)");
            $this->db->bind(':userId', $data['userId']);
            $this->db->bind(':totalPrice', $data['totalPrice']);
            $this->db->bind(':isAccepted', $data['isAccepted']);
            $this->db->bind(':isReady',$data['isReady']);
            $this->db->bind(':pickUpDate',$data['pickUpDate']);
            

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }

        public function acceptOrder($data){
            $this->db->query("UPDATE orders SET isAccepted=:isAccepted, pickUpDate=:pickUpDate WHERE orderId=:orderId");
            $this->db->bind(':isAccepted', $data['isAccepted']);
            $this->db->bind(':pickUpDate',$data['pickUpDate']);
            $this->db->bind('orderId',$data['orderId']);
            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }

        public function readyOrder($data){
            $this->db->query("UPDATE orders SET isReady=:isReady WHERE orderId=:orderId");
            $this->db->bind(':isReady', $data['isReady']);
            $this->db->bind('orderId',$data['orderId']);
            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }

        public function delete($data){
            $this->db->query("DELETE FROM orders WHERE orderId=:orderId");
            $this->db->bind('orderId',$data['orderId']);

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }
    }

?>