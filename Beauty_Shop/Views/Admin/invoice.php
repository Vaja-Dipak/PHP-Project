<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Invoice</title>
    <style>
        .receipt-content .logo a:hover {
            text-decoration: none;
            color: #7793C4;
        }

        .receipt-content .invoice-wrapper {
            background: #FFF;
            border: 1px solid #CDD3E2;
            box-shadow: 0px 0px 1px #CCC;
            padding: 40px 40px 60px;
            margin-top: 40px;
            border-radius: 4px;
        }

        .receipt-content .invoice-wrapper .payment-details span {
            color: #A9B0BB;
            display: block;
        }

        .receipt-content .invoice-wrapper .payment-details a {
            display: inline-block;
            margin-top: 5px;
        }

        .receipt-content .invoice-wrapper .line-items .print a {
            display: inline-block;
            border: 1px solid #9CB5D6;
            padding: 13px 13px;
            border-radius: 5px;
            color: #708DC0;
            font-size: 13px;
            -webkit-transition: all 0.2s linear;
            -moz-transition: all 0.2s linear;
            -ms-transition: all 0.2s linear;
            -o-transition: all 0.2s linear;
            transition: all 0.2s linear;
        }

        .receipt-content .invoice-wrapper .line-items .print a:hover {
            text-decoration: none;
            border-color: #333;
            color: #333;
        }

        .receipt-content {
            background: #ECEEF4;
        }

        @media (min-width: 1200px) {
            .receipt-content .container {
                width: 900px;
            }
        }

        .receipt-content .logo {
            text-align: center;
            margin-top: 50px;
        }

        .receipt-content .logo a {
            font-family: Myriad Pro, Lato, Helvetica Neue, Arial;
            font-size: 36px;
            letter-spacing: .1px;
            color: #555;
            font-weight: 300;
            -webkit-transition: all 0.2s linear;
            -moz-transition: all 0.2s linear;
            -ms-transition: all 0.2s linear;
            -o-transition: all 0.2s linear;
            transition: all 0.2s linear;
        }

        .receipt-content .invoice-wrapper .intro {
            line-height: 25px;
            color: #444;
        }

        .receipt-content .invoice-wrapper .payment-info {
            margin-top: 25px;
            padding-top: 15px;
        }

        .receipt-content .invoice-wrapper .payment-info span {
            color: #A9B0BB;
        }

        .receipt-content .invoice-wrapper .payment-info strong {
            display: block;
            color: #444;
            margin-top: 3px;
        }

        @media (max-width: 767px) {
            .receipt-content .invoice-wrapper .payment-info .text-right {
                text-align: end;
                margin-top: 20px;
            }
        }

        .receipt-content .invoice-wrapper .payment-details {
            border-top: 2px solid #EBECEE;
            margin-top: 30px;
            padding-top: 20px;
            line-height: 22px;
        }


        @media (max-width: 767px) {
            .receipt-content .invoice-wrapper .payment-details .text-right {
                text-align: end;
                margin-top: 20px;
            }
        }

        .receipt-content .invoice-wrapper .line-items {
            margin-top: 40px;
        }

        .receipt-content .invoice-wrapper .line-items .headers {
            font-size: 13px;
            letter-spacing: .3px;
            border-bottom: 2px solid #EBECEE;
            padding-bottom: 4px;
        }

        .receipt-content .invoice-wrapper .line-items .items {
            margin-top: 8px;
            border-bottom: 2px solid #EBECEE;
            padding-bottom: 8px;
        }

        .receipt-content .invoice-wrapper .line-items .items .item {
            padding: 10px 0;
            color: #696969;
            font-size: 15px;
        }

        @media (max-width: 767px) {
            .receipt-content .invoice-wrapper .line-items .items .item {
                font-size: 13px;
            }
        }

        .receipt-content .invoice-wrapper .line-items .items .item .amount {
            letter-spacing: 0.1px;
            color: #84868A;
            font-size: 16px;
        }

        @media (max-width: 767px) {
            .receipt-content .invoice-wrapper .line-items .items .item .amount {
                font-size: 13px;
            }
        }

        .receipt-content .invoice-wrapper .line-items .total {
            margin-top: 30px;
        }

        .receipt-content .invoice-wrapper .line-items .total .extra-notes {
            float: left;
            width: 40%;
            text-align: left;
            font-size: 13px;
            color: #7A7A7A;
            line-height: 20px;
        }

        @media (max-width: 767px) {
            .receipt-content .invoice-wrapper .line-items .total .extra-notes {
                width: 100%;
                margin-bottom: 30px;
                float: none;
            }
        }

        .receipt-content .invoice-wrapper .line-items .total .extra-notes strong {
            display: block;
            margin-bottom: 5px;
            color: #454545;
        }

        .receipt-content .invoice-wrapper .line-items .total .field {
            margin-bottom: 7px;
            font-size: 14px;
            color: #555;
        }

        .receipt-content .invoice-wrapper .line-items .total .field.grand-total {
            margin-top: 10px;
            font-size: 16px;
            font-weight: 500;
        }

        .receipt-content .invoice-wrapper .line-items .total .field.grand-total span {
            color: #20A720;
            font-size: 16px;
        }

        .receipt-content .invoice-wrapper .line-items .total .field span {
            display: inline-block;
            margin-left: 20px;
            min-width: 85px;
            color: #84868A;
            font-size: 15px;
        }

        .receipt-content .invoice-wrapper .line-items .print {
            margin-top: 50px;
            text-align: center;
        }



        .receipt-content .invoice-wrapper .line-items .print a i {
            margin-right: 3px;
            font-size: 14px;
        }

        .receipt-content .footer {
            margin-top: 40px;
            margin-bottom: 110px;
            text-align: center;
            font-size: 12px;
            color: #969CAD;
        }
    </style>
</head>

<body>
    <div class="receipt-content">
        <div class="container bootstrap snippets bootdey">
            <div class="row">
                <div class="col-md-12">
                    <div class="invoice-wrapper">
                        <div class="intro">
                            Hi <strong>khushbu</strong>,
                            <br>
                            This is the receipt for a payment of <strong>135
                                .00</strong>for your works
                        </div>

                        <div class="payment-info">
                            <div class="row">
                                <div class="col-sm-6">
                                    <span>Payment No.</span>
                                    <strong>434334343</strong>
                                </div>
                                <div class="col-sm-6 text-right" style="text-align: end;">
                                    <span>Payment Date</span>
                                    <strong>Jan 09, 2024 - 12:20 pm</strong>
                                </div>
                            </div>
                        </div>

                        <div class="payment-details">
                            <div class="row">
                                <div class="col-sm-6">
                                    <span>Client</span>
                                    <strong>
                                        khushbu Rathod
                                    </strong>
                                    <p>
                                        B-203 <br>
                                        Saligram plus <br>
                                        Chandlodiya,ahmedabad <br>
                                        India <br>
                                        <a href="#">
                                            khushburathod@gmail.com
                                        </a>
                                    </p>
                                </div>
                                <div class="col-sm-6 text-right" style="text-align: end;">
                                    <span>Payment To</span>
                                    <strong>
                                        Vaishali Patel
                                    </strong>
                                    <p>
                                        A-304 Om Residency <br>
                                        Gota Road <br>
                                        99383 <br>
                                        India <br>
                                        <a href="#">
                                            vaishalipatel@gmail.com
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="line-items">
                            <div class="table-responsive mt-5">
                                <table class=" table text-nowrap mb-0 align-middle" style="border: solid 2px;">
                                    <thead class="text-dark">
                                        <tr>
                                            <th>
                                                <h6 class="fw-semibold mb-0">Product Id</h6>
                                            </th>
                                            <th>
                                                <h6 style="margin-left: -20px" class="fw-semibold mb-0">Quantity</h6>
                                            </th>
                                            <th style="text-align: end;">
                                                <h6 class="fw-semibold mb-0">Price</h6>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($data['Data'] as $key => $value) {
                                            // echo "<pre>";
                                            // print_r($value->role_id);
                                            // echo "</pre>";
                                            ?>
                                            <tr>
                                                <td>
                                                    <h6 class="fw-semibold mb-1">
                                                        <?php echo $value->p_id; ?>
                                                    </h6>
                                                </td>
                                                <td>
                                                    <h6 class="fw-semibold mb-1">
                                                        <?php echo $value->i_quantity; ?>
                                                    </h6>
                                                </td>
                                                <td style="text-align: end;">
                                                    <h6 class="fw-semibold mb-1">
                                                        <?php echo $value->i_price; ?>
                                                    </h6>
                                                </td>
                                            </tr>
                                        <?php //$index++;
                                        } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="total text-right" style="text-align: end;">
                                <p class="extra-notes">
                                    <strong>Extra Notes</strong>
                                    Please send all items at the same time to shipping address by next week.
                                    Thanks a lot.
                                </p>
                                <div class="field">
                                    Subtotal <span>&#8377;
                                        <?php
                                        $subtotal = 0;
                                        foreach ($data['Data'] as $key => $value) {
                                            $subtotal += $value->i_price;
                                        }
                                        echo $subtotal;
                                        ?>
                                    </span>
                                </div>
                                <div class="field">
                                    Shipping <span>50&#8377;
                                        <?php
                                        "50"; ?>
                                    </span>
                                </div>
                                <div class="field">
                                    Discount <span>10%</span>
                                </div>
                                <div class="field grand-total">
                                    Total <span>
                                        <?php
                                        $discount = 0;
                                        $total = $subtotal + 50;
                                        $discount = ($total) * 10 / 100;
                                        echo $total - $discount;
                                        ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>