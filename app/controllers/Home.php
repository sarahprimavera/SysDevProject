<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$home = "http://". $_SERVER["HTTP_HOST"] . dirname(__DIR__, 1);
require dirname(__DIR__, 1) . '/controllers/PHPMailer-master/src/Exception.php';
require dirname(__DIR__, 1) . '/controllers/PHPMailer-master/src/PHPMailer.php';
require dirname(__DIR__, 1) . '/controllers/PHPMailer-master/src/SMTP.php';
require dirname(__DIR__, 1) . '/config/config.php';

class Home extends Controller
{
    public function __construct()
    {
        $this->foodsModel = $this->model('foodsModel');
    }

    public function index()
    {
        //displaying all products
        $foods = $this->foodsModel->getFoods();
            $data = [
                'foods' => $foods
            ];
        $this->view('home_page',$data);
        
    }

    public function viewFood($foodId){
        $food = $this->foodsModel->getFood($foodId);
        $this->view('ClientSide/viewFood',$food);
    }

    public function AddCart($UPC){
        if(!isLoggedIn()){
            //can only start adding to cart when signed in
        }else{
            $product = $this->foodsModel->getFood($UPC);
            $data=[
                'userId' => $_SESSION['userId'],
                'foodId' => $product->foodId,
                'foodName' => $product->foodName,
                'unitPrice' => $product->unitPrice,
                'Quantity' => 1
            ];

            if($this->cartModel->addCart($data)){
                $cart = $this->cartModel->displayCart($_SESSION['ClientEmail']);
                $this->view('Cart/cart',$cart);
            }
        }
        
    }

    public function searchProduct(){
        //search functionality
        if(!isset($_POST['searchBar'])){
            $products = $this->foodsModel->getFoods();
            $data = [
                'product' => $products
            ];
        $this->view('home_page', $data);
        }else{
            $data=[
                'Search' => trim($_POST['searchBar'])
            ];
            var_dump($data);
            $searchResult = $this->foodsModel->searchProduct($data);
            $this->view('ClientSide/viewFood',$searchResult);
        }
    }

    public function resetMail(){
        $mail = new PHPMailer(true);
        if(null !== ($_POST["email"])){
            try {
                $receiverMail = $_POST(["email"]);
                //Server settings
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'khadijacookingservice@gmail.com';                     //SMTP username
                $mail->Password   = 'khadicaCK';                               //SMTP password
                $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
                $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom('khadijacookingservice@gmail.com', 'Khadija Cooking');
                $mail->addAddress($receiverMail);     //Add a recipient
                $mail->addReplyTo('no-reply@gmail.com', 'No reply');

                //Content
                $url = "http://"/$_SERVER["HTTP_HOST"] . dirname(__DIR__, 1) . "/views/ResetPassword";
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Khadija Cooking: Password Recovery';
                $mail->Body    = "<h1>Password Reset</h1>";
                $mail->AltBody = "<a href='$url'>Click here</a> to reset your password";

                $mail->send();
                echo 'Message has been sent! Please check your email';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }
    }
}