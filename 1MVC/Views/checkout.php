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
    <title>checkout</title>
</head>
<body>
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row w-100">
                <div class="col-lg-12 col-md-12 col-12">
                    <h3 class="display-5 mb-2 text-center">Shopping Cart</h3>
                    <table id="shoppingCart" class="table table-condensed table-responsive">
                        <thead>
                            <tr>
                                <th style="width:60%">Product</th>
                                <th style="width:12%">Price</th>
                                <th style="width:60%">Discount</th>
                                <th style="width:10%">Quantity</th>
                                <th style="width:16%"></th>
                            </tr>
                        </thead>

                        <?php
                        $totalprice=0;
                        $discount=0;
                        foreach ($checkout['Data'] as $key => $value) {
                            $totalprice+=($value->p_price*$value->p_quantity);
                            $discount+=($value->p_price*$value->p_discount/100)*$value->p_quantity;
                            $finalamount=$totalprice-$discount;

                            ?>

                            <tbody>
                                <tr style="border:1px solid;">
                                    <td data-th="Product">
                                        <div class="row">
                                            <div class="col-md-3 text-left">
                                                <img src="<?php echo $this->base_url . "images/" . $value->p_image ?>" alt=""
                                                    class="img-fluid d-none d-md-block rounded mb-2 shadow ">
                                            </div>
                                            <div class="col-md-9 text-left mt-sm-2">
                                                <h4>
                                                    <?php echo $value->p_name ?>
                                                </h4>
                                            </div>
                                        </div>
                                    </td>
                                    <td data-th="Price">&#8377;
                                        <?php echo $value->p_price ?>
                                    </td>
                                    </td>
                                    <td data-th="Discount">
                                        <?php echo $value->p_discount." %" ?>
                                    </td>
                                    <td data-th="Quantity">
                                        <input type="number" class="form-control form-control-lg text-center" value="<?php echo $value->p_quantity ?>">
                                    </td>
                                    <td class="actions" data-th="">
                                        <div class="text-right">
                                            <!-- <button class="btn btn-white border-secondary bg-white btn-md mb-2">
                                                <i class="fas fa-sync"></i>
                                            </button> -->
                                            <a href="deletecheckout?cart_id=<?php echo $value->cart_id?>">
                                                <button class="btn btn-white border-secondary bg-white btn-md mb-2">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <?php
                        }
                        ?>
                    </table>
                    <div class="float-right text-right">
                        <h4>Total : ₹<?php echo $totalprice ?> </h4><br>
                        <h4>Discount : ₹<?php echo $discount ?> </h4><br>
                        <h4>Sub Total : ₹<?php echo $finalamount ?> </h4>
                        <!-- <h1>$99.00</h1> -->
                    </div>

                </div>
            </div>
            <div class="row mt-3 d-flex align-items-center">
                <div class="col-sm-6 order-md-2 text-right">
                    <a href="buynow" class="btn btn-primary mb-4 btn-lg pl-5 pr-5">Proceed to Order</a>
                </div>
                <div class="col-sm-6 mb-3 mb-m-1 order-md-1 text-md-left">
                    <a href="buynow">
                </div>
            </div>
        </div>
    </section>
</body>

</html>