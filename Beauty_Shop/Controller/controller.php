<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once("Model/model.php");
require 'vendor/autoload.php';
// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class

class controller extends Model
{
    public $mail = "";
    public $base_url = "http://localhost/Beauty_Shop/Public/Assets/";
    public $siteurl = "http://localhost/Beauty_Shop";

    function __construct()
    {
        $this->mail = new PHPMailer(true);

        ob_start();
        parent::__construct();
        if (isset($_SERVER['PATH_INFO'])) {
            switch ($_SERVER['PATH_INFO']) {


                //============== Restful API Section =================

                case '/getcity':
                    $data = $this->select('cities');
                    echo json_encode($data['Data']);
                    break;

                case '/getcategory':
                    $data = $this->select('category');
                    echo json_encode($data['Data']);
                    break;

                case '/getsubcategory':
                    $data = $this->select('subcategory', array("cat_id" => $_REQUEST["cat_id"]));
                    echo json_encode($data['Data']);
                    break;

                case '/getallsubcategory':
                    $data = $this->select('subcategory');
                    echo json_encode($data['Data']);
                    break;
                    


                //============== User panel=================

                case '/':
                case '/home':
                    $data = $this->select("pro");
                    // echo "<pre>";
                    // print_r($data['Data'][5]);
                    // echo "</pre>";
                    include_once("Views/header.php");
                    include_once("Views/main.php");
                    include_once("Views/footer.php");
                    break;

                case '/about':
                    include_once("Views/header.php");
                    include_once("Views/about.php");
                    include_once("Views/footer.php");
                    break;

                case '/contact':
                    include_once("Views/header.php");
                    include_once("Views/contact.php");
                    include_once("Views/footer.php");
                    break;

                case '/usergallery':
                    $galleryimages = $this->select("gallery");
                    include_once("Views/header.php");
                    include_once("Views/gallery.php");
                    include_once("Views/footer.php");
                    break;

                case '/login':
                    include_once("Views/header.php");
                    include_once("Views/login.php");
                    include_once("Views/footer.php");
                    if (isset($_REQUEST['btn-login'])) {
                        $LoginREs = $this->login($_POST['username'], $_POST['password']);

                        if ($LoginREs['Code'] == 1) {
                            // echo "inside if true auth";
                            // echo "<pre>";
                            // print_r($LoginREs['Data']->role_id);
                            // exit;
                            $_SESSION['UserData'] = $LoginREs['Data'];

                            if ($LoginREs['Data']->role_id == 1) {
                                header("location:allusers");
                            } else {
                                header("location:home");
                            }
                        } else {
                            echo '<script>alert("Please enter valid Username or Password..")</script>';
                        }
                    }
                    break;

                case '/logout':
                    session_destroy();
                    header("location:home");
                    break;

                case '/registration':
                    include_once("Views/header.php");
                    include_once("Views/registration.php");
                    include_once("Views/footer.php");
                    if (isset($_REQUEST['btn-regist'])) {
                        $InsertData = array(
                            "username" => $_REQUEST['username'],
                            "mobile" => $_REQUEST['mobile'],
                            "email" => $_REQUEST['email'],
                            "password" => $_REQUEST['password'],
                            "gender" => $_REQUEST['gender'],
                            "city" => $_REQUEST['city']
                        );
                        $res = $this->insert("users", $InsertData);
                        // print_r($res['Code']);
                        if ($res['Code'] == 1) {
                            header("location:login");
                        }
                    }
                    break;

                case '/sendemail':
                    include_once("Views/header.php");
                    include_once("Views/sendemail.php");
                    include_once("Views/footer.php");
                    if (isset($_POST['sendmail'])) {
                        $mailexist = $this->select('users', array('email' => $_POST['email']));
                        if ($mailexist['Code'] == 1) {
                            $emailId = $_POST['email'];
                            $OTP = random_int(100000, 999999);
                            $this->update('users', array("otp" => $OTP), array("email" => $emailId));
                            $msg = "Your Forgot password OTP is : $OTP  &ensp; OR &ensp; ";
                            $msg .= "<a href='$this->siteurl/forgetpassword?email=$emailId'>Click here to change your Password</a>";

                            // echo "<pre>";
                            // print_r($msg);
                            // echo "</pre>";
                            $this->sendemail($emailId, $msg);
                            header("location:forgetpassword?email=$emailId");
                        } else {
                            echo '<script>alert("This Email is Not exist..")</script>';
                        }
                    }
                    break;

                case '/forgetpassword':
                    include_once("Views/header.php");
                    include_once("Views/forgetpassword.php");
                    include_once("Views/footer.php");
                    $email = $_REQUEST['email'];
                    $mainotp = $this->select('users', array("email" => $email));
                    // echo "<pre>";
                    // print_r($mainotp['data'][0]->otp);
                    // echo "</pre>";
                    if (isset($_REQUEST['confirmpassword'])) {
                        if ($mainotp['Data'][0]->otp == $_REQUEST['otp']) {
                            $this->update('users', array("password" => $_REQUEST['password']), array("email" => $email));
                            header("location:login");
                        } else {
                            echo '<script>alert("Please Enter valid OTP..!")</script>';
                        }
                    }
                    break;

                case '/compact':
                    $compactdata = $this->select("pro", array("p_name" => "Compact Powder"));
                    // print_r($compactdata);
                    include_once("Views/header.php");
                    include_once("Views/compact.php");
                    include_once("Views/footer.php");
                    break;

                case '/foundation':
                    $foundationdata = $this->select("pro", array("p_name" => "Foundation"));
                    include_once("Views/header.php");
                    include_once("Views/foundation.php");
                    include_once("Views/footer.php");
                    break;

                case '/lipstick':
                    $lipstickdata = $this->select("pro", array("p_name" => "Lipstick"));
                    include_once("Views/header.php");
                    include_once("Views/lipstick.php");
                    include_once("Views/footer.php");
                    break;

                case '/eyelinear':
                    $eyelineardata = $this->select("pro", array("p_name" => "Eyelinear"));
                    include_once("Views/header.php");
                    include_once("Views/eyelinear.php");
                    include_once("Views/footer.php");
                    break;

                case '/eyeshadow':
                    $eyeshadowdata = $this->select("pro", array("p_name" => "Eyeshadow"));
                    include_once("Views/header.php");
                    include_once("Views/eyeshadow.php");
                    include_once("Views/footer.php");
                    break;

                case '/facewash':
                    $facewashdata = $this->select("pro", array("p_name" => "Face Wash"));
                    include_once("Views/header.php");
                    include_once("Views/facewash.php");
                    include_once("Views/footer.php");
                    break;

                case '/moisturizer':
                    $moisturizerdata = $this->select("pro", array("p_name" => "Moisturizer"));
                    include_once("Views/header.php");
                    include_once("Views/moisturizer.php");
                    include_once("Views/footer.php");
                    break;

                case '/sunscreen':
                    $sunscreendata = $this->select("pro", array("p_name" => "Sunscreen"));
                    include_once("Views/header.php");
                    include_once("Views/sunscreen.php");
                    include_once("Views/footer.php");
                    break;

                case '/sheetmask':
                    $sheetmaskdata = $this->select("pro", array("p_name" => "Sheetmask"));
                    include_once("Views/header.php");
                    include_once("Views/sheetmask.php");
                    include_once("Views/footer.php");
                    break;

                case '/hairoil':
                    $hairoildata = $this->select("pro", array("p_name" => "Hair Oil"));
                    include_once("Views/header.php");
                    include_once("Views/hairoil.php");
                    include_once("Views/footer.php");
                    break;

                case '/shampoo&conditioner':
                    $shampooConditionerdata = $this->select("pro", array("p_name" => "Shampoo & Conditioner"));
                    include_once("Views/header.php");
                    include_once("Views/shampoo&conditioner.php");
                    include_once("Views/footer.php");
                    break;


                case '/buynow':
                    $this->logincheck();
                    if (isset($_REQUEST['total'])) {
                        $cid = $_SESSION['UserData']->c_id;
                        $total=$_REQUEST['total'];
                        
                        $checkout = $this->selectjoin('cart', array('pro' => 'cart.p_id = pro.p_id'), array('cart.status' => 0));
                        
                        foreach ($checkout['Data'] as $data) { $Data[] = $data->p_name; }
                        $products = implode(",", $Data);
                        
                        $this->update("cart",array("status"=>1),array("c_id"=>$cid));
                        $this->insert("orderdata",array("p_name"=>$products,"c_id"=>$cid,"totalamount"=>$total));
                        $this->insert("invoice",array("p_name"=>$products,"c_id"=>$cid,"Amount"=>$total));
                        $this->insert("payment",array("product"=>$products,"c_id"=>$cid,"pay_amount"=>$total));

                        include_once("Views/header.php");
                        include_once("Views/buynow.php");
                    } else {
                        header("location:checkout");
                    }
                    break;



                // ===========================Admin panel=========================


                case '/allusers':
                    $this->logincheck();
                    $allUsers = $this->select("users");
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/allusers.php");
                    include_once("Views/Admin/footer.php");
                    break;

                case '/edituser':
                    $UserById = $this->select("users", array("c_id" => $_REQUEST['c_id']));
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/edituser.php");
                    include_once("Views/Admin/footer.php");
                    if (isset($_POST['btn-update'])) {
                        array_pop($_POST);
                        unset($_POST['btn-update']);
                        //$data = array_merge($_POST,array('hobby' => $hob));
                        $data = $_POST;
                        $UpdateRes = $this->update("users", $data, array("c_id" => $_GET['c_id']));
                        if ($UpdateRes['Code'] == 1) {
                            header("location:allusers");
                        }
                    }
                    break;

                case '/deleteuser':
                    $UsersDeleteResponse = $this->delete("users", array("c_id" => $_GET['c_id']));
                    echo "<pre>";
                    print_r($UsersDeleteResponse);
                    if ($UsersDeleteResponse['Code'] == 1) {
                        header("location:allusers");
                    } else {
                        echo "Error while deleting data try again after sometime";
                    }
                    break;

                case '/category':
                    $this->logincheck();
                    $allcategories = $this->select("category");
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/allcategory.php");
                    include_once("Views/Admin/footer.php");
                    break;

                case '/addcategory':
                    $this->logincheck();
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/addcategory.php");
                    include_once("Views/Admin/footer.php");
                    if (isset($_REQUEST['btn-category'])) {
                        $allowed_image_extension = array("png", "PNG", "jpg", "JPG", "jpeg", "JPEG", "webp");
                        $file_extension = pathinfo($_FILES["profile_pic"]["name"], PATHINFO_EXTENSION);
                        if (!file_exists($_FILES['profile_pic']['tmp_name'])) {
                            $response = array(
                                "type" => "error",
                                "message" => "Choose image file to upload."
                            );
                        } else if (!in_array($file_extension, $allowed_image_extension)) {
                            $response = array(
                                "type" => "error",
                                "message" => "Upload valid images. Only allowed JPG, JPEG, PNG and webp Images."
                            );
                        } else if (($_FILES["profile_pic"]["size"] > 2000000)) {
                            $response = array(
                                "type" => "error",
                                "message" => "Image size allowed smaller then 2MB"
                            );
                        } else {
                            $profilename = $_POST['category'] . "_profile." . $file_extension;
                            $target = "Public/Assets/images/" . $profilename;
                            if (move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $target)) {
                                $response = array(
                                    "type" => "success",
                                    "message" => "Image uploaded successfully..",
                                    "name" => $profilename
                                );
                                $imagename = $profilename;
                            } else {
                                $response = array(
                                    "type" => "error",
                                    "message" => "Problem in image uploading..!"
                                );
                            }
                        }
                        $InsertData = array(
                            "cat_name" => $_REQUEST['category'],
                            "cat_des" => $_REQUEST['categorydescription'],
                            "cat_image" => $imagename
                        );

                        $res = $this->insert("category", $InsertData);
                        if ($res['Code'] == 1) {
                            header("location:category");
                        }
                    }
                    break;

                case '/editcategory':
                    $editcategory = $this->select("category", array("cat_id" => $_REQUEST['cat_id']));
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/editcategory.php");
                    include_once("Views/Admin/footer.php");
                    if (isset($_POST['btn-update'])) {
                        array_pop($_POST);
                        unset($_POST['btn-update']);
                        $data = $_POST;
                        $UpdateRes = $this->update("category", $data, array("cat_id" => $_GET['cat_id']));
                        if ($UpdateRes['Code'] == 1) {
                            header("location:category");
                        } else {
                            echo "please try again";
                        }
                    }
                    break;

                case '/deletecategory':
                    $CategoryDeleteResponse = $this->delete("category", array("cat_id" => $_GET['cat_id']));
                    header("location:category");
                    break;

                case '/subcategory':
                    $this->logincheck();
                    $allsubcategories = $this->selectjoin('subcategory', array('category' => 'subcategory.cat_id = category.cat_id'));
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/allsubcategory.php");
                    include_once("Views/Admin/footer.php");
                    break;

                case '/addsubcategory':
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/addsubcategory.php");
                    include_once("Views/Admin/footer.php");
                    if (isset($_REQUEST['btn-subcategory'])) {
                        $InsertData = array(
                            "cat_id" => $_REQUEST['category'],
                            "sc_name" => $_REQUEST['subcategory'],
                            "sc_des" => $_REQUEST['subcategorydescription']
                        );
                        $res = $this->insert("subcategory", $InsertData);
                        // print_r($res['Code']);
                        if ($res['Code'] == 1) {
                            header("location:subcategory");
                        }
                    }
                    break;

                case '/editsubcategory':
                    $editsubcategory = $this->select("subcategory", array("sc_id" => $_REQUEST['sc_id']));
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/editsubcategory.php");
                    include_once("Views/Admin/footer.php");
                    if (isset($_POST['btn-update'])) {
                        array_pop($_POST);
                        unset($_POST['btn-update']);
                        //$data = array_merge($_POST,array('hobby' => $hob));
                        $data = $_POST;
                        $UpdateRes = $this->update("subcategory", $data, array("sc_id" => $_GET['sc_id']));
                        if ($UpdateRes['Code'] == 1) {
                            header("location:subcategory");
                        } else {
                            echo "please try again";
                        }
                    }
                    break;

                case '/deletesubcategory':
                    $SubcategoryDeleteResponse = $this->delete("subcategory", array("sc_id" => $_GET['sc_id']));
                    header("location:subcategory");
                    break;

                case '/product':
                    $this->logincheck();
                    $allproduct = $this->selectjoin('pro', array('subcategory' => 'subcategory.sc_id = pro.sc_id'));
                    if (isset($_REQUEST['srch'])) {
                        $product = $_REQUEST['searchtxt'];
                        $allproduct = $this->searchdata('pro', array("subcategory" => "pro.p_name LIKE '%$product%'"), array("pro.sc_id" => "subcategory.sc_id"));
                    }
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/allproduct.php");
                    include_once("Views/Admin/footer.php");
                    break;

                case '/addproduct':
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/addproduct.php");
                    include_once("Views/Admin/footer.php");
                    if (isset($_REQUEST['btn-product'])) {
                        $file_extension = pathinfo($_FILES["profile_pic"]["name"], PATHINFO_EXTENSION);
                        if (!file_exists($_FILES['profile_pic']['tmp_name'])) {
                            $response = array(
                                "type" => "error",
                                "message" => "Choose image file to upload."
                            );
                        } else {
                            $profilename = $_POST['productname'] . $_FILES["profile_pic"]["name"];
                            $target = "Public/Assets/images/" . $profilename;
                            if (move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $target)) {
                                $response = array(
                                    "type" => "success",
                                    "message" => "Image uploaded successfully..",
                                    "name" => $profilename
                                );
                                $imagename = $profilename;
                            } else {
                                $response = array(
                                    "type" => "error",
                                    "message" => "Problem in image uploading..!"
                                );
                            }
                        }
                        $InsertData = array(
                            // "cat_id" => $_REQUEST['cat_id'],
                            "sc_id" => $_REQUEST['subcategoryid'],
                            "p_name" => $_REQUEST['productname'],
                            "p_price" => $_REQUEST['productprice'],
                            "p_image" => $imagename,
                            "p_des" => $_REQUEST['productdescription']
                        );
                        // print_r($InsertData);
                        $res = $this->insert("pro", $InsertData);
                        // print_r($res['Code']);
                        if ($res['Code'] == 1) {
                            header("location:product");
                        }
                    }
                    break;

                case '/editproduct':
                    $editproduct = $this->select("pro", array("p_id" => $_REQUEST['p_id']));
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/editproduct.php");
                    include_once("Views/Admin/footer.php");
                    if (isset($_POST['btn-update'])) {
                        array_pop($_POST);
                        unset($_POST['btn-update']);
                        $data = $_POST;
                        $UpdateRes = $this->update("pro", $data, array("p_id" => $_GET['p_id']));
                        if ($UpdateRes['Code'] == 1) {
                            header("location:product");
                        } else {
                            echo "please try again";
                        }
                    }
                    break;

                case '/deleteproduct':
                    $ProductDeleteResponse = $this->delete("pro", array("p_id" => $_GET['p_id']));
                    header("location:product");
                    break;

                case '/gallery':
                    $this->logincheck();
                    $galleryimages = $this->select("gallery");
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/allgallery.php");
                    include_once("Views/Admin/footer.php");
                    break;

                case '/addgallery':
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/addgallery.php");
                    include_once("Views/Admin/footer.php");
                    if (isset($_REQUEST['btn-addgallery'])) {
                        $allowed_image_extension = array("png", "PNG", "jpg", "JPG", "jpeg", "JPEG", "webp");
                        $file_extension = pathinfo($_FILES["gallery"]["name"], PATHINFO_EXTENSION);
                        if (!file_exists($_FILES['gallery']['tmp_name'])) {
                            $response = array(
                                "type" => "error",
                                "message" => "Choose image file to upload."
                            );
                        } else if (!in_array($file_extension, $allowed_image_extension)) {
                            $response = array(
                                "type" => "error",
                                "message" => "Upload valid images. Only allowed JPG, JPEG, PNG and webp Images."
                            );
                        } else if (($_FILES["gallery"]["size"] > 2000000)) {
                            $response = array(
                                "type" => "error",
                                "message" => "Image size allowed smaller then 2MB"
                            );
                        } else {
                            $profilename = $_FILES["gallery"]["name"] . $file_extension;
                            $target = "Public/Assets/images/" . $profilename;
                            if (move_uploaded_file($_FILES["gallery"]["tmp_name"], $target)) {
                                $response = array(
                                    "type" => "success",
                                    "message" => "Image uploaded successfully..",
                                    "name" => $profilename
                                );
                                $imagename = $profilename;
                            } else {
                                $response = array(
                                    "type" => "error",
                                    "message" => "Problem in image uploading..!"
                                );
                            }
                        }
                        $InsertData = array(
                            "g_path" => $imagename
                        );

                        $res = $this->insert("gallery", $InsertData);
                        if ($res['Code'] == 1) {
                            header("location:gallery");
                        }
                    }
                    break;

                case '/deletegallery':
                    $GalleryDeleteResponse = $this->delete("gallery", array("g_id" => $_GET['g_id']));
                    header("location:gallery");
                    break;

                case '/allorder':
                    $this->logincheck();
                    $allorder = $this->selectjoin("orderdata", array('users' => 'orderdata.c_id = users.c_id'));
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/allorder.php");
                    include_once("Views/Admin/footer.php");
                    break;

                case '/acceptorder':
                    $UpdateRes = $this->update("orderdata", array("status" => "In Proccess"), array("o_id" => $_GET['o_id']));
                    if ($UpdateRes['Code'] == 1) {
                        header("location:allorder");
                    } else {
                        echo '<script>alert("Please Try again later...")</script>';
                    }
                    break;

                case '/deleteorder':
                    $OrderDeleteResponse = $this->delete("orderdata", array("o_id" => $_GET['o_id']));
                    header("location:allorder");
                    break;

                case '/offers':
                    $this->logincheck();
                    // $alloffer = $this->select("offers");
                    $alloffer = $this->selectjoin("offers", array('pro' => 'pro.p_id = offers.p_id'));
                    // echo "<pre>";
                    // print_r($alloffer);
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/alloffer.php");
                    include_once("Views/Admin/footer.php");
                    break;

                case '/addoffer':
                    $this->logincheck();
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/addoffer.php");
                    include_once("Views/Admin/footer.php");
                    if (isset($_REQUEST['btn-offer'])) {
                        $InsertData = array(
                            "p_id" => $_REQUEST['productid'],
                            "of_startdate" => $_REQUEST['offerstartdate'],
                            "of_enddate" => $_REQUEST['offerenddate'],
                            "of_detail" => $_REQUEST['orderdetail'],
                        );
                        $res = $this->insert("offers", $InsertData);
                        if ($res['Code'] == 1) {
                            header("location:offers");
                        } else {
                            echo '<script>alert("Please Try again later...")</script>';
                        }
                    }
                    break;

                case '/editoffers':
                    $editoffers = $this->select("offers", array("of_id" => $_REQUEST['of_id']));
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/editoffer.php");
                    include_once("Views/Admin/footer.php");
                    if (isset($_POST['btn-update'])) {
                        array_pop($_POST);
                        unset($_POST['btn-update']);
                        //$data = array_merge($_POST,array('hobby' => $hob));
                        $data = $_POST;
                        $UpdateRes = $this->update("offers", $data, array("of_id" => $_GET['of_id']));
                        if ($UpdateRes['Code'] == 1) {
                            header("location:offers");
                        } else {
                            echo '<script>alert("Please Try again later...")</script>';
                        }
                    }
                    break;

                case '/deleteoffers':
                    $OfferDeleteResponse = $this->delete("offers", array("of_id" => $_GET['of_id']));
                    header("location:offers");
                    break;

                case '/payment':
                    $this->logincheck();
                    $allpayment = $this->selectjoin('payment', array('users' => 'users.c_id = payment.c_id'));
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/allpayment.php");
                    include_once("Views/Admin/footer.php");
                    break;

                case '/invoice':
                    $this->logincheck();
                    $allinvoice = $this->selectjoin("invoice", array('users' => 'invoice.c_id = users.c_id'));
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/allinvoice.php");
                    include_once("Views/Admin/footer.php");
                    break;

                case '/editinvoice':
                    $editinvoicedata = $this->select("invoice", array("i_id" => $_REQUEST['i_id']));
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/editinvoice.php");
                    include_once("Views/Admin/footer.php");
                    if (isset($_POST['btn-update'])) {
                        array_pop($_POST);
                        unset($_POST['btn-update']);
                        //$data = array_merge($_POST,array('hobby' => $hob));
                        $data = $_POST;
                        $UpdateRes = $this->update("invoice", $data, array("i_id" => $_GET['i_id']));
                        if ($UpdateRes['Code'] == 1) {
                            header("location:invoice");
                        } else {
                            echo '<script>alert("Please Try again later...")</script>';
                        }
                    }
                    break;

                case '/downloadinvoice':
                    $this->logincheck();
                    $data = $this->select("invoice");
                    include_once("Views/Admin/invoice.php");
                    include_once("Views/Admin/downloadpdf.php");
                    break;

                case '/deleteinvoice':
                    $this->logincheck();
                    $invoiceDeleteResponse = $this->delete("invoice", array("i_id" => $_GET['i_id']));
                    header("location:invoice");
                    break;

                case '/feedback':
                    $this->logincheck();
                    $allfeedback = $this->selectjoin('feedback', array('users' => 'feedback.c_id = users.c_id'));
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/allfeedback.php");
                    include_once("Views/Admin/footer.php");
                    break;

                case '/changefeedback':
                    $this->logincheck();
                    $UpdateRes = $this->update("feedback", array("f_status" => $_REQUEST['change']), array("f_id" => $_REQUEST['f_id']));
                    header("location:feedback");
                    break;

                case '/deliveryboy':
                    $this->logincheck();
                    $alldelivery = $this->select("deliveryboy");
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/alldelivery.php");
                    include_once("Views/Admin/footer.php");
                    break;

                case '/adddelivery':
                    $this->logincheck();
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/adddelivery.php");
                    include_once("Views/Admin/footer.php");
                    if (isset($_REQUEST['btn-delivery'])) {
                        $InsertData = array(
                            "d_name" => $_REQUEST['deliveryboyname'],
                            "d_pass" => $_REQUEST['password'],
                            "d_contactno" => $_REQUEST['deliveryboycontactno'],
                            "d_email" => $_REQUEST['deliveryboyemail'],
                        );
                        $res = $this->insert("deliveryboy", $InsertData);
                        if ($res['Code'] == 1) {
                            header("location:deliveryboy");
                        } else {
                            echo '<script>alert("Please Try again later...")</script>';
                        }
                    }
                    break;

                case '/editdelivery':
                    $editdelivery = $this->select("deliveryboy", array("d_id" => $_REQUEST['d_id']));
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/editdelivery.php");
                    include_once("Views/Admin/footer.php");
                    if (isset($_POST['btn-update'])) {
                        array_pop($_POST);
                        unset($_POST['btn-update']);
                        //$data = array_merge($_POST,array('hobby' => $hob));
                        $data = $_POST;
                        $UpdateRes = $this->update("deliveryboy", $data, array("d_id" => $_GET['d_id']));
                        if ($UpdateRes['Code'] == 1) {
                            header("location:deliveryboy");
                        } else {
                            echo '<script>alert("Please Try again later...")</script>';
                        }
                    }
                    break;

                case '/deletedelivery':
                    $DeliveryDeleteResponse = $this->delete("deliveryboy", array("d_id" => $_GET['d_id']));
                    header("location:deliveryboy");
                    break;

                case '/generatereport':
                    $this->logincheck();
                    $allgeneratereport = $this->selectjoin("invoice", array('users' => 'invoice.c_id = users.c_id'));
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/allgeneratereport.php");
                    include_once("Views/Admin/footer.php");
                    break;

                case '/checkout':
                    $this->logincheck();
                    $c_id=$_SESSION['UserData']->c_id;
                    $checkout = $this->selectjoin('cart', array('pro' => 'cart.p_id = pro.p_id'), array('cart.status' => 0,"c_id"=>$c_id));
                    include_once("Views/checkout.php");
                    break;

                case '/deletecheckout':
                    $CheckoutDeleteResponse = $this->delete("cart", array("cart_id" => $_GET['cart_id']));
                    header("location:checkout");
                    break;

                case '/addcart':
                    $this->logincheck();
                    $Data = $this->select('pro', array('p_id' => $_REQUEST['productid']));
                    $CartData = $this->select('cart', array('c_id' => $_SESSION['UserData']->c_id));
                    // echo "<pre>";
                    // print_r($CartData);
                    // print_r($_SESSION['UserData']->c_id);
                    $CartFlag = false;
                    $Cartid = 0;
                    foreach ($CartData['Data'] as $key => $value) {
                        if ($value->p_id == $_REQUEST['productid']) {
                            $CartFlag = true;
                        }
                    }
                    // echo "outside loop";
                    // exit;
                    if ($CartFlag) {
                        echo '<script>alert("product already added into cart..")</script>';
                        echo '<script>window.location ="checkout";</script>';
                    } else {
                        $dt = array(
                            'p_id' => $Data['Data'][0]->p_id,
                            'c_id' => $_SESSION['UserData']->c_id,
                            'p_quantity' => 1,
                            'p_price' => $Data['Data'][0]->p_price,
                            'p_amount' => $Data['Data'][0]->p_price,
                        );
                        $added = $this->insert('cart', $dt);

                        echo '<script>alert("product has been added into cart.")</script>';
                        echo '<script>window.location ="checkout";</script>';
                    }
                    break;
                default:
                    break;
            }
        } else {
            header("location:home");
        }
        ob_flush();
    }

    function logincheck()
    {
        if (!isset($_SESSION['UserData'])) {
            echo '<script>alert("Please Login.")</script>';
            echo '<script>window.location ="login";</script>';
        }
    }

    function sendemail($email, $msg)
    {
        try {
            //Server settings
            $this->mail->isSMTP();                                            //Send using SMTP
            $this->mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $this->mail->SMTPAuth = true;                                   //Enable SMTP authentication
            $this->mail->Username = 'vajadipak2110@gmail.com';                     //SMTP username
            $this->mail->Password = 'bpyhwgooiwileqos';                               //SMTP password
            $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $this->mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $this->mail->setFrom('vajadipak2110@gmail.com', 'Dipak Vaja');
            $this->mail->addAddress($email, '');     //Add a recipient
            // $this->mail->addAddress('ellen@example.com');               //Name is optional
            $this->mail->addReplyTo('vajadipak2110@gmail.com', 'Information');
            // $this->mail->addCC('cc@example.com');
            // $this->mail->addBCC('bcc@example.com');

            //Attachments
            // $this->mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            // $this->mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $this->mail->isHTML(true);                                  //Set email format to HTML
            $this->mail->Subject = 'Forgot password OTP';
            $this->mail->Body = $msg;
            $this->mail->AltBody = 'Your Forgot password OTP is : ';

            $this->mail->send();
            return 'Message has been sent';
        } catch (Exception $e) {
            return "Message could not be sent. Mailer Error: {$this->mail->ErrorInfo}";
        }
    }
}

$controllerobj = new controller;
?>