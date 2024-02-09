<?php
session_start();
require_once("Model/model.php");
class controller extends Model
{
    public $assets_url = "http://localhost/Book_Barter";
    public function __construct()
    {
        parent::__construct();

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

                // ADMIN PANEL START

                case '/dashboard':
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/dashboard.php");
                    include_once("Views/Admin/footer.php");
                    break;
                    case '/accountsettings':
                        include_once("Views/Admin/account-settings.php");
                        break;
                case '/add-product':
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/add-product.php");
                    include_once("Views/Admin/footer.php");
                    if (isset($_REQUEST['addprod'])) {

                        $file_extension = pathinfo($_FILES["productimage"]["name"], PATHINFO_EXTENSION);
                        $imagename = $_REQUEST['title'] . "_by_" . $_REQUEST['author'] . "." . $file_extension;
                        // Product Image Upload with Name as (ProductName_Author)

                        $specification = $_REQUEST['language'] . ", " . $_REQUEST['format'] . ", " . $_REQUEST['publisher'] . ", " . $_REQUEST['edition'] . ", " . $_REQUEST['pages'];

                        $data = array(
                            "title" => $_REQUEST['title'],
                            "author" => $_REQUEST['author'],
                            "rating" => $_REQUEST['rating'],
                            "description" => $_REQUEST['description'],
                            "specification" => $specification,
                            "price" => $_REQUEST['price'],
                            "images" => $imagename
                        );

                        $addprod = $this->insert("product", $data);

                        $target = "assets/uploads/Products/" . $imagename;
                        move_uploaded_file($_FILES["productimage"]["tmp_name"], $target);

                        if($addprod){echo '<script>alert("Product added Succesfully..")</script>';}
                    }
                    break;
                case '/inputs':
                    include_once("Views/Admin/forms-inputs.php");
                    break;

                // ADMIN PANEL END

                // API START

                case '/registration':
                    $formdata = json_decode(file_get_contents('php://input'), true);
                    $response = $this->insert("userdata", $formdata);
                    echo json_encode($response);
                    break;

                case '/login':
                    $formdata = json_decode(file_get_contents('php://input'), true);
                    $response = $this->login($formdata);
                    if ($response['code'] == 1) {
                        $_SESSION['userdata'] = $response['data'];
                    }
                    echo json_encode($response);
                    break;

                // API END

                // 404 page not found error 
                default:
                    include_once("Views/Admin/error-page.php");
                    break;

                // Under Maintenance page 
                case '/under-maintenance':
                    include_once("Views/Admin/under-maintenance.php");
                    break;
                case '/tables-basic':
                    include_once("Views/Admin/tables-basic.php");
                    break;
                case '/modals':
                    include_once("Views/Admin/ui-modals.php");
                    break;
                case '/toasts':
                    include_once("Views/Admin/ui-toasts.php");
                    break;
                case '/carousel':
                    include_once("Views/Admin/ui-offcanvas.php");
                    break;
            }
        }
        else {
            header("location:home");
        }
    }

}
$controller = new controller;
?>