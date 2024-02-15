<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Signin/Signup</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'>
    <link rel="stylesheet" href="<?php echo $this->assets_url; ?>/Assets/css/authform.css">

</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="section">
        <div class="container">
            <div class="row full-height justify-content-center">
                <div class="col-12 text-center align-self-center py-5">
                    <div class="section pb-5 pt-5 pt-sm-2 text-center">
                        <h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
                        <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
                        <label for="reg-log"></label>
                        <div class="card-3d-wrap mx-auto">
                            <div class="card-3d-wrapper">
                                <div class="card-front">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-4 pb-2">Log In</h4>
                                            <form action="" id="loginform" method="post" onsubmit="login()">
                                                <div class="form-group">
                                                    <input type="email" name="u_email" class="form-style"
                                                        placeholder="Your Email" id="logemail" required>
                                                    <i class="input-icon uil uil-at"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" name="u_password" class="form-style"
                                                        placeholder="Your Password" id="logpass" required>
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>
                                                <input type="submit" class="btn font-weight-bold mt-4" name="log"
                                                    value="Log In">
                                                <p class="mb-0 mt-4 text-center"><a href="forgotpass"
                                                        class="link h6"><u>Forgot your password?</u></a></p>
                                                <p class="mb-0 mt-3 text-center"><a href=""
                                                        class="link text h6" onclick="on()"><u>Click to Create Account ?</u></a></p>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-back">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-3 pb-3">Sign Up</h4>
                                            <form action="" id="registrationform" method="post"
                                                onsubmit="registration()">
                                                <div class="form-group">
                                                    <input type="text" name="u_name" class="form-style"
                                                        placeholder="Enter Full Name" id="regname" required>
                                                    <i class="input-icon uil uil-user"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="email" name="u_email" class="form-style"
                                                        placeholder="Enter Email" id="regemail" required>
                                                    <i class="input-icon uil uil-at"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="tel" name="u_mobile" class="form-style"
                                                        placeholder="Enter Mobile" id="regmobile" required>
                                                    <i class="input-icon uil uil-phone"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" name="u_password" class="form-style"
                                                        placeholder="Enter Password" id="regpass" required>
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>
                                                <input type="submit" class="btn font-weight-bold mt-4" name="regi"
                                                    value="Sign Up">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        function on() {
            event.preventDefault()
            document.getElementById('reg-log').checked = true;
        }

        function registration() {
            event.preventDefault()

            var result = {}
            $.each($(document.getElementById('registrationform')).serializeArray(), function () {
                result[this.name] = this.value;
            })
            // console.log(result);
            fetch('<?php echo $this->assets_url; ?>/registration', {
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
                method: "POST",
                body: JSON.stringify(result)
            }).then((res) => res.json()).then((result) => {
                // console.log(result.code);
                if (result.code == 1) {
                    alert("Registration Completed");
                    document.getElementById('reg-log').checked = false;
                } else {
                    alert("Please try again later");
                }
            })
        }

        function login() {
            event.preventDefault()

            var result = {}
            $.each($(document.getElementById('loginform')).serializeArray(), function () {
                result[this.name] = this.value;
            })
            fetch('<?php echo $this->assets_url; ?>/login', {
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
                method: "POST",
                body: JSON.stringify(result)
            }).then((res) => res.json()).then((result) => {
                if (result.code == 1) {
                    if (result.data.role_id == 1) {
                        window.location.href = "dashboard";
                    } else {
                        window.location.href = "home";
                    }
                } else {
                    alert("Please Enter valid Email and Password");
                }
            })
        }
    </script>
</body>

</html>