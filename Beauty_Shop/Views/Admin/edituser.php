<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                    <h5 class="card-title fw-semibold mb-4">Edit Users</h5>
                    <div class="row">
                        <div class="col-8">
                            <div class="card-body">

                                <form method="post">
                                    <div class="row">
                                        <div class="col">
                                            <label for="id" class="input__label"><b>Id</b></label>
                                            <input type="text" placeholder="Enter id" class="form-control" disabled
                                                name="c_id" value="<?php echo $UserById['Data'][0]->c_id ?>" id="">
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col">
                                            <label for="username" class="input__label"><b>User Name</b></label>
                                            <input type="text" placeholder="Enter User Name" class="form-control"
                                                name="username" value="<?php echo $UserById['Data'][0]->username ?>"
                                                id="">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col">
                                            <label for="mobile" class="input__label"><b>Mobile</b></label>
                                            <input type="tel" placeholder="Enter Mobile" class="form-control"
                                                name="mobile" value="<?php echo $UserById['Data'][0]->mobile ?>" id="">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col">
                                            <label for="email" class="input__label"><b>Email</b></label>
                                            <input type="email" placeholder="Enter Email" class="form-control"
                                                name="email" value="<?php echo $UserById['Data'][0]->email ?>" id="">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col">
                                            <input type="radio" <?php if ($UserById['Data'][0]->gender == "Male") {
                                                echo "checked";
                                            } ?> value="Male" name="gender" id="Male"> <label
                                                for="Male">Male</label>
                                            <input type="radio" <?php if ($UserById['Data'][0]->gender == "Female") {
                                                echo "checked";
                                            } ?> value="Female" name="gender" id="Female"> <label
                                                for="Female">Female</label>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col text-center">
                                            <select name="city" class="form-control" id="city">
                                                <option value="">--Select City--</option>
                                               
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col">
                                            <label for="mobile" class="input__label"><b>Address</b></label>
                                            <input type="text" placeholder="Enter Address" class="form-control"
                                                name="address" value="<?php echo $UserById['Data'][0]->address ?>" id="">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
    fetchcity();
    function fetchcity() {
        fetch(`http://localhost/1MVC/getcity`).then((res) => res.json()).then((kaipan) => {
            console.log(kaipan);
            let optioncity = '<option hidden>city</option>';
            kaipan.forEach(element => {
                optioncity += `<option value="${element.city_name}">${element.city_name}</option>`
            });
            $("#city").html(optioncity);
        })
    }
</script>