<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                    <h5 class="card-title fw-semibold mb-4">Edit Invoice</h5>
                    <div class="row">
                        <div class="col-8">
                            <div class="card-body">

                                <form method="post">
                                    <div class="row">
                                        <div class="col">
                                        <label for="invoiceid" class="input__label"><b>Invoice Id</b></label>
                                            <input type="text" placeholder="Enter Invoice Id" disabled
                                                class="form-control" disabled name="i_id"
                                                value="<?php echo $editinvoicedata['Data'][0]->i_id ?>" id="">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col">
                                        <label for="orderid" class="input__label"><b>Order Id</b></label>
                                            <input type="tel" placeholder="Enter Order Id " required
                                                class="form-control" name="o_id"
                                                value="<?php echo $editinvoicedata['Data'][0]->o_id ?>" id="">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col">
                                        <label for="productid" class="input__label"><b>Product Id</b></label>
                                            <input type="tel" placeholder="Enter Product Id" required
                                                class="form-control" name="p_id"
                                                value="<?php echo $editinvoicedata['Data'][0]->p_id ?>" id="">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col">
                                        <label for="customerid" class="input__label"><b>Customer Id</b></label>
                                            <input type="tel" placeholder="Enter Customer Id " required
                                                class="form-control" name="c_id"
                                                value="<?php echo $editinvoicedata['Data'][0]->c_id ?>" id="">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col">
                                        <label for="invoicedate" class="input__label"><b>Invoice Date</b></label>
                                            <input type="date" placeholder="Enter Invoice Date" required
                                                class="form-control" name="i_date"
                                                value="<?php echo $editinvoicedata['Data'][0]->i_date ?>" id="">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col">
                                        <label for="invoicequantity" class="input__label"><b>Invoice Quantity</b></label>
                                            <input type="tel" placeholder="Enter Invoice Quantity " required
                                                class="form-control" name="i_quantity" onchange="total()"
                                                value="<?php echo $editinvoicedata['Data'][0]->i_quantity ?>"
                                                id="quantity">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col">
                                        <label for="price" class="input__label"><b>Price</b></label>
                                            <input type="tel" placeholder="Enter Price" required class="form-control"
                                                name="i_price" onchange="total()"
                                                value="<?php echo $editinvoicedata['Data'][0]->i_price ?>" id="price">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col">
                                        <label for="totalprice" class="input__label"><b>Total Price</b></label>
                                            <input type="tel" placeholder="Enter Total Price" required
                                                class="form-control" name="i_totalprice"
                                                value="<?php echo $editinvoicedata['Data'][0]->i_totalprice ?>"
                                                id="total_price">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col text-center">
                                            <input type="submit" class="btn btn-primary" value="Update"
                                                name="btn-update" id="">
                                            <input type="reset" class="btn btn-danger" name="" id="">
                                        </div>
                                    </div>
                                </form>
                                <script>
                                    function total(e) {
                                        let price = document.getElementById("price");
                                        let qun = document.getElementById("quantity");
                                        document.getElementById("total_price").value = price.value * qun.value;
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>