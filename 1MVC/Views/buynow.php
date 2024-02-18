<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://code.jquery.com/jquery-3.3.1.slim.min.js">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <title>checkout</title>
</head>

<body>
    <section class="pt-5 mt-2">
        <div class="container mt-5">
            <div class="card rounded-1">
                <div class="card-body"></div>
                <h3 class="text-center"><b>Checkout</b></h3>
                <hr class="border-dark">
                <form action="pay" id="place_order" method="post">
                    <input type="hidden" name="amount" value="<?php echo $_REQUEST['total'] ?>">
                    <input type="hidden" name="payment_method" value="cod">
                    <input type="hidden" name="paid" value="0">
                    <div class="row row-col-1 justify-content-center">
                        <div class="col-6">
                            <div class="form-group col address-holder">
                                <label for="" class="control-label">Name</label>
                                <input type="text" id="" name="user_name" class="form-control"
                                    value="<?php echo $_SESSION['UserData']->username ?>">
                            </div>
                            <div class="form-group col address-holder">
                                <label for="" class="control-label">Delivery Address</label>
                                <textarea id="" cols="30" rows="3" name="delivery_address" class="form-control"
                                    style="resize:none"><?php echo $_SESSION['UserData']->address ?></textarea>
                            </div>
                            <div class="col">
                                <span>
                                    <h4><b>Total:</b>
                                        <?php echo $_REQUEST['total'] ?>
                                    </h4>
                                </span>
                            </div>
                            <hr>
                            <div class="col-12 my-3">
                                <h4 class="text-muted">Payment Method</h4>
                                <div class="d-flex px-4 w-100 justify-content-between">
                                    <form action="pay" method="post">
                                        <div class="form-group m-0 bottom-wrap">
                                            <a href="javascript:void(0)"
                                                class="btn btn-sm btn-primary float-right buy_now"
                                                data-amount="<?php echo $_REQUEST['total'] ?>" data-id="3"
                                                style="width: 154px;height: 38px;font-size: 19px;">Pay Now</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="row">

                            </div>
                            <div class="col-5">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>

        $('body').on('click', '.buy_now', function (e) {
            var totalAmount = $(this).attr("data-amount");
            var product_id = $(this).attr("data-id");
            var user_id="<?php $_SESSION['UserData']->c_id; ?>"
            var options = {
                "key": "rzp_test_r9kbb3W4NAARxR",
                "amount": (totalAmount * 100), // 2000 paise = INR 20
                "name": "<?php echo $_SESSION['UserData']->username ?>",
                "description": "Payment",
                "image": "https://www.tutsmake.com/wp-content/uploads/2018/12/cropped-favicon-1024-1-180x180.png",
                "handler": function (response) {
                    $.ajax({
                        url: 'http://localhost/1MVC/Views/payment-proccess.php',
                        type: 'post',
                        dataType: 'json',
                        data: {
                            user_id:user_id ,razorpay_payment_id: response.razorpay_payment_id, totalAmount: totalAmount, product_id: product_id,
                        },
                        success: function (msg) {

                            <?php
                            foreach ($checkout['Data'] as $data) {
                                $products[] = $data->p_name;
                            }
                            $products = implode(" | ", $products);
                            $c_id = $_SESSION['UserData']->c_id;
                            $total = $_REQUEST['total'];

                            $connection = new mysqli("localhost", "root", "", "masterdatabase");
                            $sql = "INSERT INTO `orderdata`(`p_name`, `c_id`, `totalamount`) VALUES ('$products','$c_id','$total')";
                            // print_r($sql);
                            $response = $connection->query($sql);

                            $sql1 = "DELETE FROM `cart` WHERE c_id=$c_id";
                            $res = $connection->query($sql1);

                            echo "<script>alert('Your Order Submited Successfully.');
                            window.location='home';</script>";
                            ?>

                            window.location.href = 'http://localhost/1MVC/Views/success.php';
                        }
                    });

                },

                "theme": {
                    "color": "#528FF0"
                }
            };
            var rzp1 = new Razorpay(options);
            rzp1.open();
            e.preventDefault();
        });

    </script>
</body>

</html>