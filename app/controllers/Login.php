<?php

class Login extends Controller
{

    public function __construct()
    {
        $this->loginModel = $this->model('loginModel');
    }

    public function index()
    {
        if(isset($_POST['login'])){
            $user = $this->loginModel->getUser($_POST['firstname'] . $_POST['lastname']);
            if($user != null){
                $hashed_pass = $user->pass_hash;
                $password = $_POST['password'];
                if(password_verify($password,$hashed_pass)){
                    $this->createSession($user);
                    $data = [
                        'msg' => "Welcome, $user->lastname!",
                    ];
                    echo "<script type='text/javascript'>alert('$data');</script>";
                    $this->view('home_page',$data);
                }else{
                    $data = [
                        'msg' => "Password incorrect! for $user->email",
                    ];
                    echo "<script type='text/javascript'>alert('$data');</script>";                    
                    }
                }else{
                    $data = [
                        'msg' => "User: ". $_POST['email'] ." does not exists",
                    ];
                    echo "<script type='text/javascript'>alert('$data');</script>";
            }
        }
    }

    public function create()
    {
        if(!isset($_POST['login'])){
            $user = $this->loginModel->getUser($_POST['email']);
            if($user == null){
                $data = [
                    'name' => trim($_POST['firstname'] . $_POST['lastname']),
                    'email' => $_POST['email'],
                    'pass' => $_POST['password'],
                    'pass_verify' => $_POST['verify_password'],
                    'pass_hash' => password_hash($_POST['password'], PASSWORD_DEFAULT),
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
                        echo '
                        <div class="text-center">
                        <div class="spinner-border" role="status">
                          <span class="sr-only">Please wait creating the account for '.trim($_POST["email"]).'</span>
                        </div>
                      </div>';
                        echo '<meta http-equiv="Refresh" content="2; url=/MVC/Login/">';
                 }
                } 
            }
            else{
                $data = [
                    'msg' => "User: ". $_POST['email'] ." already exists",
                ];
                echo "<script type='text/javascript'>alert('$data');</script>";
            }
            
        }
    }

    public function validateData($data){
        if(empty($data['fname'])){
            echo "<script type='text/javascript'>alert('First Name can not be empty');</script>";
        }
        if(empty($data['lname'])){
            echo "<script type='text/javascript'>alert('Last Name can not be empty');</script>";
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

    public function createSession($user){
        $_SESSION['user_id'] = $user->id;
        $_SESSION['user_username'] = $user->name;
    }

    public function logout(){
        unset($_SESSION['user_id']);
        session_destroy();
        echo '<meta http-equiv="Refresh" content="1; url=/MVC/home_page/">';
    }
}
?>