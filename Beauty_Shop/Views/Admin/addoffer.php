<!DOCTYPE html>
<html lang="en">
<!-- <p><a href="home">Home</a> &nbsp; / &nbsp; Registration</p> -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="row mt-5">
        <div class="col-lg-6 offset-lg-3 mt-5">
            <div class="card border-primary mb-3 mt-5">
                <div class="card-header text-center"><b>Add Offer</b></div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">



                        <div class="row mt-3">
                            <div class="col">
                                <label for="productid" class="input__label"><b>Sub Category</b></label>
                                <select name="subcategory" class="form-control" id="subcategory">
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <label for="offerstartdate" class="input__label"><b>Offer Start Date</b></label>
                                <input type="date" placeholder="Offer Start Date" required class="form-control"
                                    name="offerstartdate" id="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <label for="offerenddate" class="input__label"><b>Offer End Date</b></label>
                                <input type="date" placeholder="Offer End Date" required class="form-control"
                                    name="offerenddate" id="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <label for="orderdetail" class="input__label"><b>Order Details</b></label>
                                <input type="text" placeholder="Order Details" required class="form-control"
                                    name="orderdetail" id="">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col text-center">
                                <input type="submit" class="btn btn-primary" value="Add Offer" name="btn-offer" id="">
                                <a href="alloffer"><button class="btn btn-danger" name="" id="">Back</button></a>
                            </div>
                        </div>



                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $().ready(function () {
            fetchcategory()
        })
        function fetchcategory() {
            fetch("<?php echo $this->siteurl; ?>/getallsubcategory").then((res) => res.json()).then((kaipan) => {
                console.log(kaipan);
                let optioncategory = '<option hidden>Sub Category</option>'
                kaipan.forEach(element => {
                    // console.log(element.country_name);
                    optioncategory += `<option value="${element.sc_name}">${element.sc_name}</option>`
                });
                // console.log(optioncountry);
                $("#subcategory").html(optioncategory);
            })
        }
    </script>
</body>

</html>