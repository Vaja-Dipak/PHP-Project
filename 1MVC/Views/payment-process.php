<?php

$user_id = $_POST['user_id'];
$payment_id = $_POST['razorpay_payment_id'];
$amount = $_POST['totalAmount'];
$product_id = $_POST['product_id'];

$data = [
        'user_id' => $user_id,
        'payment_id' => $payment_id,
        'amount' => $amount,
        'product_id' => $product_id,
];

$connection = new mysqli("localhost", "root", "", "masterdatabase");
$sql = "INSERT INTO `payment`(`payment_id`, `c_id`, `o_id`, `pay_amount`) VALUES ('$payment_id','$user_id','$product_id','$amount')";
$response = $connection->query($sql);

// you can write your database insertation code here
// after successfully insert transaction in database, pass the response accordingly
$arr = array('msg' => 'Payment successfully credited', 'status' => true);

echo json_encode($arr);

?>