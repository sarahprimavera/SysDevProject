<?php

class Login extends Controller
{

    public function __construct()
    {
        $this->loginModel = $this->model('loginModel');
        $this->userModel = $this->model('userModel');
    }

    public function index()
    {
        if(!isset($_POST['login'])){
            $this->view('Login/index');
        }
        else{
            $user = $this->loginModel->getUser($_POST['Email']);
            $info = $this->userModel->getUser($user->id);
            if($user != null){
                $hashed_pass = $user->pass_hash;
                $password = $_POST['Password'];
                if(password_verify($password,$hashed_pass)){
                    $this->createSession($info);
                    $data = [
                        'msg' => "Welcome, $info->name!",
                    ];
                    echo "<script type='text/javascript'>alert('$data[msg]');</script>";
                    $this->view('home_page',$data);
                }else{
                    $data = [
                        'msg' => "Password incorrect! for $user->email",
                    ];
                    echo "<script type='text/javascript'>alert('$data[msg]');</script>";                    
                    }
                }else{
                    $data = [
                        'msg' => "User: ". $_POST['Email'] ." does not exists",
                    ];
                    echo "<script type='text/javascript'>alert('$data');</script>";
                
            }
        }
    }

    public function create()
    {
        if(!isset($_POST['signup'])){
            $this->view('Login/create');
        }
        else{
            $user = $this->loginModel->getUser($_POST['Email']);
            if($user == null){
                $data = [
                    'name' => trim($_POST['Firstname'] . $_POST['Lastname']),
                    'email' => $_POST['Email'],
                    'pass' => $_POST['Password'],
                    'pass_verify' => $_POST['RePassword'],
                    'pass_hash' => password_hash($_POST['Password'], PASSWORD_DEFAULT),
                    'fname_error' => '',
                    'lname_error' => '',
                    'password_error' => '',
                    'password_match_error' => '',
                    'password_len_error' => '',
                    'msg' => '',
                    'email_error' => ''
                ];
                if($this->validateData($data)){
                    if($this->loginModel->createUser($data)){
                        $this->userModel->createUser($data);
                        echo '
                        <div class="text-center">
                        <div class="spinner-border" role="status">
                          <span class="sr-only">Please wait creating the account for '.trim($_POST["Email"]).'</span>
                        </div>
                      </div>';
                        echo '<meta http-equiv="Refresh" content="2; url=home_page.html">';
                 }
                } 
            }
            else{
                $data = [
                    'msg' => "User: ". $_POST['Email'] ." already exists",
                ];
                echo "<script type='text/javascript'>alert('$data');</script>";
            }
            
        }
    }

    public function reset(){
        $this->view('Login/reset');
    }

    public function validateData($data){
        if(empty($data['name'])){
            echo "<script type='text/javascript'>alert('First Name can not be empty');</script>";
        }
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            echo "<script type='text/javascript'>alert('Please check your email and try again');</script>";
        }
        if(strlen($data['pass']) < 6){
            echo "<script type='text/javascript'>alert('Password can not be less than 6 characters');</script>";
        }
        if($data['pass'] != $data['pass_verify']){
            echo "<script type='text/javascript'>alert('Password does not match');</script>";
        }

        if(empty($data['fname_error']) && empty($data['lname_error']) && empty($data['password_error']) && 
        empty($data['password_len_error']) && empty($data['password_match_error'])){
            return true;
        }
        /*else{
            $this->view('Login/create',$data);
        }*/
    }

    public function createSession($info){
        $_SESSION['userId'] = $info->userId;
        $_SESSION['user_username'] = $info->name;
    }

    public function logout(){
        unset($_SESSION['userId']);
        session_destroy();
        echo '<meta http-equiv="Refresh" content="1; url=/MVC/home_page/">';
    }
}
?>