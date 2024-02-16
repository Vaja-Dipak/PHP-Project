<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                    <h5 class="card-title fw-semibold mb-4">Edit Order</h5>
                    <div class="row">
                        <div class="col-8">
                            <div class="card-body">
                                <form method="post">
                                    <div class="row">
                                        <div class="col">
                                            <label for="orderid" class="input__label"><b>Order Id</b></label>
                                            <input type="text" placeholder="Enter Order Id" class="form-control"
                                                disabled name="o_id" value="<?php echo $editorder['Data'][0]->o_id ?>"
                                                id="">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col">
                                            <label for="userid" class="input__label"><b>User Id</b></label>
                                            <input type="text" placeholder="Enter User Id" class="form-control"
                                                name="c_id" value="<?php echo $editorder['Data'][0]->c_id ?>" id="">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col">
                                            <label for="productid" class="input__label"><b>Product Id</b></label>
                                            <input type="tel" placeholder="Enter Product Id " class="form-control"
                                                name="p_id" value="<?php echo $editorder['Data'][0]->p_id ?>" id="">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col">
                                            <label for="quantity" class="input__label"><b>Quantity</b></label>
                                            <input type="tel" placeholder="Enter Quantity " class="form-control"
                                                name="quantity" onchange="total()" value="<?php echo $editorder['Data'][0]->quantity ?>"
                                                id="quantity">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col">
                                            <label for="price" class="input__label"><b>Price</b></label>
                                            <input type="tel" placeholder="Enter Price " class="form-control"
                                                name="price" id="price" onchange="total()" value="<?php echo $editorder['Data'][0]->price ?>" id="">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col">
                                            <label for="totalprice" class="input__label"><b>Total Price</b></label>
                                            <input type="tel" placeholder="Enter Total Price " class="form-control"
                                                name="totalprice" onchange="total()"
                                                value="<?php echo $editorder['Data'][0]->totalprice ?>"
                                                id="totalprice">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col">
                                            <label for="orderdate" class="input__label"><b>Order Date</b></label>
                                            <input type="date" placeholder="Enter Order Date " class="form-control"
                                                name="orderdate" value="<?php echo $editorder['Data'][0]->orderdate ?>"
                                                id="">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col">
                                            <label for="deliverydate" class="input__label"><b>Delivery Date</b></label>
                                            <input type="date" placeholder="Enter Delivery Date " class="form-control"
                                                name="deliverydate"
                                                value="<?php echo $editorder['Data'][0]->deliverydate ?>" id="">
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
                                    function total() {
                                        let price = document.getElementById("price");
                                        let qun = document.getElementById("quantity");
                                        document.getElementById("totalprice").value = price.value * qun.value;
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>