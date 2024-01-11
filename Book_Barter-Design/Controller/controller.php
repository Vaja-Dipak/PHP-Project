<?php
class controller
{
    public $assets_url = "http://localhost/Book_Barter/Assets";
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
                case '/login':
                    include_once("Views/header.php");
                    include_once("Views/login.php");
                    include_once("Views/footer.php");
                    break;
            }
        } else {
            header("location:home");
        }
    }

}
$controller = new controller;
?>