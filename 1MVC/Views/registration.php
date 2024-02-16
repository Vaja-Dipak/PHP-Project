<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

<div class="row">
    <div class="col-lg-4 offset-lg-4 pt-8">
        <div class="card border-primary mb-3">
            <div class="card-header text-center">
                <h6>Registration</h6>
            </div>
            <div class="card-body">
                <form method="post">
                    <div class="row mt-3">
                        <div class="col">
                            <input type="text" placeholder="User Name" class="form-control" name="username" id=""
                                required>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <input type="number" id="mobile" name="mobile" onblur="mobilevalid()" class="form-control"
                                placeholder="Enter phone number" required>
                            <span id="phone">

                            </span>

                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <input type="password" placeholder="Password" class="form-control" name="password"
                                id="password">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <input type="password" onblur="check()" placeholder="Confirm Password" class="form-control"
                                name="confirmpassword" id="confirmpassword">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <input type="email" placeholder="Enter Email" class="form-control" name="email" id=""
                                required>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <input type="radio" value="Male" name="gender" id="Male" required> <label
                                for="Male">Male</label>
                            <input type="radio" value="Female" name="gender" id="Female" required> <label
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
                            <label for="address">Address</label>
                            <textarea name="address" class="form-control" cols="30" rows="3" required></textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col text-center">
                            <input type="submit" class="btn btn-primary" value="Registration" name="btn-regist" id="">
                            <input type="reset" class="btn btn-danger" name="" id="">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    fetchcity();
    function mobilevalid() {
        var mob = document.getElementById('mobile').value;
        if (mob.length == 10) {
            document.getElementById('phone').innerHTML = "";
        } else {
            document.getElementById('phone').innerHTML = "Enter 10 Digit Mobile Number";
        }
    }
    var check = function () {
        if (document.getElementById('password').value != document.getElementById('confirmpassword').value) {
            alert("Please Enter Correct Password.");
            document.getElementById('password').value = "";
            document.getElementById('confirmpassword').value = "";
        }
    }
    function fetchcity(id) {
        fetch(`http://localhost/1MVC/getcity`).then((res) => res.json()).then((kaipan) => {
            console.log(kaipan);
            let optioncity = '<option hidden>city</option>';
            kaipan.forEach(element => {
                optioncity += `<option value="${element.city_id}">${element.city_name}</option>`
            });
            $("#city").html(optioncity);
        })
    }
</script>