<?php

    class User extends Controller{
        public function __construct(){
            $this->userModel = $this->model('userModel');
            /*if(!isLoggedIn()){
                header('Location: /MVC/Login');
            }*/
        }

        public function index(){
            $this->view('User/index');
        }

        public function getUsers(){
            $users = $this->userModel->getUsers();
            $data = [
                "users" => $users
            ];
            $this->view('User/getUsers',$data);
        }

        public function createUser(){
            /*if(!isset($_POST['register'])){
                $this->view('User/createUser');
            }*/
           // else{
                $data=[
                    'name' => trim($_POST['name']),
                    'email' => trim($_POST['email']),
                ];
               
                if($this->userModel->createUser($data)){
                    echo 'Please wait we are creating the user for you!';
                    header('Location: /MVC/User/getUsers');
                    //echo '<meta http-equiv="Refresh" content="2; url=/MVC/User/getUsers">';
                }

           // }
        }

        public function details($user_id){
            $user = $this->userModel->getUser($user_id);

           
                $this->view('User/details',$user);
            
        }

        public function update($user_id){
            $user = $this->userModel->getUser($user_id);
            if(!isset($_POST['update'])){
                $this->view('User/updateUser',$user);
            }
            else{
                $data=[
                    'name' => trim($_POST['name']),
                    'email' => trim($_POST['email']),
                    'user_id' => $user_id
                ];
                if($this->userModel->updateUser($data)){
                    echo 'Please wait we are upating the user for you!';
                    //header('Location: /MVC/User/getUsers');
                    echo '<meta http-equiv="Refresh" content="2; url=/MVC/User/getUsers">';
                }
                
            }
        }

        public function delete($user_id){
            $data=[
                'user_id' => $user_id
            ];
            if($this->userModel->delete($data)){
                echo 'Please wait we are deleting the user for you!';
                //header('Location: /MVC/User/getUsers');
                echo '<meta http-equiv="Refresh" content=".2; url=/MVC/User/getUsers">';
            }

        }

    }

?>