<!DOCTYPE html>
<html lang="en">
<!-- <p><a href="home">Home</a> &nbsp; / &nbsp; Registration</p> -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="<?php echo $this->base_url; ?>lib/jquery.js"></script>
    <script src="<?php echo $this->base_url; ?>dist/jquery.validate.js"></script>
</head>


<body>
    <div class="row mt-5">
        <div class="col-lg-6 offset-lg-3 mt-5">
            <div class="card border-primary mb-3 mt-5">
                <div class="card-header text-center"><b>Add Product</b></div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="row mt-3">
                            <div class="col">
                                <label for="subcategoryid" class="input__label"><b>Sub Category Id</b></label>
                                <input type="text" placeholder="Subcategory Id" class="form-control"
                                    name="subcategoryid" id="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                            <label for="productname" class="input__label"><b>Product Name</b></label>
                                <input type="text" placeholder="Product Name" required class="form-control" name="productname"
                                    id="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                            <label for="productprice" class="input__label"><b>Product Price</b></label>
                                <input type="text" placeholder="Product Price" required class="form-control" name="productprice"
                                    id="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <input type="file" name="profile_pic" required class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                            <label for="productdescription" class="input__label"><b>Product Description</b></label>
                                <input type="text" placeholder="Product Description" required class="form-control"
                                    name="productdescription" id="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                            <label for="productdiscount" class="input__label"><b>Product Discount</b></label>
                                <input type="text" placeholder="Product Discount" required class="form-control"
                                    name="productdiscount" id="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col text-center">
                                <input type="submit" class="btn btn-primary" value="Add Product" name="btn-product"
                                    id="">
                                <a href="allproduct"><button class="btn btn-danger" name="" id="">Back</button></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>