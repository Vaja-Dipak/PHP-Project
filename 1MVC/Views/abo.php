<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - Beauty Shop</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f9f9f9;
    }

    .container {
      width: 80%;
      margin: 0 auto;
      overflow: hidden;
      background-color: #fff;
      padding: 20px;
      margin-top: 50px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1,
    h2 {
      color: #333;
    }

    p {
      color: #666;
      line-height: 1.6;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>About Us</h1>

    <p>Welcome to Beauty Shop, your ultimate destination for all your beauty and skincare needs. We are passionate about
      providing high-quality beauty products that enhance your natural beauty and make you feel confident every day.</p>

    <h2>Our Mission</h2>

    <p>At Beauty Shop, our mission is to empower individuals to look and feel their best by offering a curated selection
      of premium beauty and skincare products. We believe that beauty is unique to every person, and our diverse range
      of products caters to all skin types, tones, and preferences.</p>

    <h2>Our Products</h2>

    <p>Discover a world of beauty with our extensive collection of cosmetics, skincare, haircare, and fragrance
      products. We carefully select each item to ensure it meets our high standards for quality, effectiveness, and
      safety. From trendy makeup essentials to nourishing skincare solutions, we have everything you need to pamper
      yourself.</p>

    <h2>Why Choose Beauty Shop?</h2>

    <p>- Premium Quality: We source our products from reputable brands known for their commitment to quality and
      innovation.</p>
    <p>- Diverse Selection: Our catalog includes a wide range of products to suit every style, skin type, and beauty
      preference.</p>
    <p>- Customer Satisfaction: Your satisfaction is our priority. We strive to provide excellent customer service and a
      seamless shopping experience.</p>

    <h2>Contact Us</h2>

    <p>Have questions or need assistance? We're here to help! Contact our customer support team at
      support@beautyshop.com or call us at (123) 456-7890.</p>
  </div>
</body>

</html>

<!-- <h1>add cart controller:-</h1>
                  // print_r($_REQUEST);
                  $Data = $this->select('pro', array('p_id' => $_REQUEST['productid']));
                  $dt = array(
                  'p_id' => $Data['Data'][0]->p_id,
                  'c_name' => $_SESSION['UserData']->username,
                  'p_quantity' => 1,
                  'p_price' => $Data['Data'][0]->p_price,
                  'p_amount' => $Data['Data'][0]->p_price,
                  );

                  $added = $this->insert('cart', $dt);
                  // if ($added == 1)
                  // alert
                  break; -->

<?php
// <h1>cart controller:-</h1>
// print_r($_REQUEST);
$Data = $this->select('pro', array('p_id' => $_REQUEST['productid']));
$Data = $this->select('pro', array('p_id' => $_REQUEST['productname']));
$Data = $this->select('pro', array('p_id' => $_REQUEST['productprice']));
$Data = $this->select('pro', array('p_id' => $_REQUEST['productquantity']));
$Data = $this->select('pro', array('p_id' => $_REQUEST['productTotalprice']));
$dt = array(
  'p_id' => $Data['Data'][0]->p_id,
  'c_name' => $_SESSION['UserData']->username,
  'p_quantity' => 2,
  'p_price' => $Data['Data'][0]->p_quantity,
  'p_amount' => $Data['Data'][0]->p_price,
);

$added = $this->insert('cart', $dt);
if ($added['Data'] == 1) {
    header("location:abo");
} else {
    alert("<script>product has been added into the cart</script");
}



$Data = $this->select('order', array('o_id' => $_REQUEST['orderid']));
$Data = $this->select('order', array('c_id' => $_REQUEST['username']));
$Data = $this->select('order', array('p_id' => $_REQUEST['productid']));
$Data = $this->select('order', array('orderstartdate' => $_REQUEST['orderstartdate']));
$Data = $this->select('order', array('orderenddate' => $_REQUEST['orderenddate']));
$dt = array(
  'o_id' => $Data['Data'][0]->p_id,
  'c_name' => $_SESSION['UserData']->username,
  'p_quantity' => 2,
  'p_price' => $Data['Data'][0]->p_quantity,
  'p_amount' => $Data['Data'][0]->p_price,
);

$added = $this->insert('cart', $dt);
if ($added['Data'] == 1) {
    header("location:abo");
} else {
    alert("<script>product has been added into the cart</script");
}

?>
<h1>PHP </h1>
<h1>PHP </h1>
<h1>PHP </h1>
<h1>PHP </h1>
<h1>PHP </h1>
<h1>PHP </h1>
<h1>PHP </h1>
<h1>PHP </h1>