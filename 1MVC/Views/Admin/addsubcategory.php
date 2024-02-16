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
                <div class="card-header text-center"><b>Add Sub Category</b></div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="row mt-3">
                            <select name="category" class="form-control" id="category">
                                <option value="">Select Category</option>
                        </div><br>
                        <div class="row mt-3"><br>
                            <label for="subcategory" class="input__label"><b>Sub Category Name</b></label>
                            <input type="text" name="subcategory" class="form-control" id="subcategory"
                                placeholder="Enter Sub Category">
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <label for="subcategorydescription" class="input__label"><b>Sub Category Description</b></label>
                                <textarea name="subcategorydescription" id="subcategorydescription" required
                                    class="form-control" cols="30" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col text-center">
                                <input type="submit" class="btn btn-primary" value="Add SubCategory"
                                    name="btn-subcategory" id="">
                                <a href="addsubcategories"><button class="btn btn-danger" name=""
                                        id="">Back</button></a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <script>
            $().ready(function () {
                fetchcategory()
            })
            function fetchcategory() {
                fetch("http://localhost/1MVC/getcategory").then((res) => res.json()).then((kaipan) => {
                    console.log(kaipan);
                    let optioncategory = '<option hidden>Category</option>'
                    kaipan.forEach(element => {
                        // console.log(element.country_name);
                        optioncategory += `<option value="${element.cat_id}">${element.cat_name}</option>`
                    });
                    // console.log(optioncountry);
                    $("#category").html(optioncategory);
                })
            }
            // function fetchsubcategory(id) {
            //     fetch(`http://localhost/1MVC/getsubcategory?cat_id=${id}`).then((res) => res.json()).then((kaipan) => {
            //         console.log(kaipan);
            //         let optionsubcategory = '<option hidden>Sub category</option>'
            //         kaipan.forEach(element => {
            //             optionsubcategory += `<option value="${element.sc_name}">${element.sc_name}</option>`
            //         });
            //         $("#subcategory").html(optionsubcategory);
            //     })
            // }
        </script>
    </div>
</body>

</html>