<?php
session_start();
require_once("Model/model.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

class controller extends Model
{
    public $assets_url = "http://localhost/Book_Barter";
    public $mail = "";
    public function __construct()
    {
        $this->mail = $mail = new PHPMailer(true);

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

                        if ($addprod) {
                            echo '<script>alert("Product added Succesfully..")</script>';
                        }
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

                case '/sendmail':
                    $email = json_decode(file_get_contents('php://input'),true);
                    $emailcheck = $this->select("userdata", $email);
                    
                    if ($emailcheck['code'] == 1) {
                        $otp = random_int(100000, 999999);

                        $updt = $this->update("userdata", array("otp" => $otp), $email);
                        $res=$this->mailsend($email['u_email'],$otp);
                        
                        echo json_encode($res);
                    } else {
                        echo '<script>alert("Please Enter valid Email..")</script>';
                    }
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
        } else {
            header("location:home");
        }
    }

    function mailsend($email, $otp)
    {
        try {
            //Server settings
            $this->mail->isSMTP();                                            //Send using SMTP
            $this->mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $this->mail->SMTPAuth = true;                                   //Enable SMTP authentication
            $this->mail->Username = 'vajadipak2110@gmail.com';                     //SMTP username
            $this->mail->Password = 'yaetotlvuxiqevjt';                               //SMTP password
            $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $this->mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $this->mail->setFrom('from@example.com', 'Mailer');
            $this->mail->addAddress($email, 'Vaja Dipak');     //Add a recipient
            // $mail->addAddress('ellen@example.com');               //Name is optional
            $this->mail->addReplyTo('vajadipak2110@gmail.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $this->mail->isHTML(true);                                  //Set email format to HTML
            $this->mail->Subject = 'Here is the subject';
            $this->mail->Body = 'Your Reset Password OTP is : <br> ' . $otp;
            $this->mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            $this->mail->send();
            return $res = 1;
        } catch (Exception $e) {
            return $res = 0;
            // echo "Message could not be sent. Mailer Error: {$this->mail->ErrorInfo}";
        }
    }

}
$controller = new controller;
?>