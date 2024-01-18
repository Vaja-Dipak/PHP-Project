<?php
require_once("Model/model.php");
class controller extends Model
{
    public $assets_url = "http://localhost/Book_Barter";
    public function __construct()
    {
        if (isset($_SERVER['PATH_INFO'])) {
            switch ($_SERVER['PATH_INFO']) {
                case '/':
                case '/home':
                    include_once("Views/header.php");
                    include_once("Views/main.php");
                    include_once("Views/footer.php");
                    break;
                case '/about':
                    include_once("Views/header.php");
                    include_once("Views/about.php");
                    include_once("Views/footer.php");
                    break;
                case '/product':
                    include_once("Views/header.php");
                    include_once("Views/shop.php");
                    include_once("Views/footer.php");
                    break;
                case '/single_product':
                    include_once("Views/header.php");
                    include_once("Views/single_product.php");
                    include_once("Views/footer.php");
                    break;
                case '/checkout':
                    include_once("Views/header.php");
                    include_once("Views/checkout.php");
                    include_once("Views/footer.php");
                    break;
                case '/payment':
                    include_once("Views/header.php");
                    include_once("Views/payment.php");
                    break;
                case '/contact':
                    include_once("Views/header.php");
                    include_once("Views/contact.php");
                    include_once("Views/footer.php");
                    break;
                case '/login_regi':
                    include_once("Views/login.php");
                    break;
                case '/forgotpass':
                    include_once("Views/forgotpassword.php");
                    break;

                // API START

                case '/registration':
                    $formdata=json_decode(file_get_contents('php://input'),true);
                        // $data=$this->insert("userdata",$formdata)
                        print_r(json_encode($formdata));
                    break;

                // API END
            }
        } else {
            header("location:home");
        }
    }

}
$controller = new controller;
?>