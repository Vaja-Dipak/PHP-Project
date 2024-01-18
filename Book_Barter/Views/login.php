<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CodePen - Login/Signup Pure CSS</title>
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
                                            <h4 class="mb-4 pb-3">Log In</h4>
                                            <form action="" method="post">
                                                <div class="form-group">
                                                    <input type="email" name="logemail" class="form-style"
                                                        placeholder="Your Email" id="logemail" required>
                                                    <i class="input-icon uil uil-at"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" name="logpass" class="form-style"
                                                        placeholder="Your Password" id="logpass" required>
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>
                                                <input type="submit" class="btn font-weight-bold mt-4" name="login"
                                                    value="Log In">
                                                <p class="mb-0 mt-4 text-center"><a href="forgotpass"
                                                        class="link">Forgot your password?</a></p>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-back">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-3 pb-3">Sign Up</h4>
                                            <form action="" method="post" onsubmit="savedt()">
                                                <div class="form-group">
                                                    <input type="text" name="regname" class="form-style"
                                                        placeholder="Enter Full Name" id="regname">
                                                    <i class="input-icon uil uil-user"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="email" name="regemail" class="form-style"
                                                        placeholder="Enter Email" id="regemail">
                                                    <i class="input-icon uil uil-at"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="tel" name="regmobile" class="form-style"
                                                        placeholder="Enter Mobile" id="regmobile">
                                                    <i class="input-icon uil uil-phone"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" name="regpass" class="form-style"
                                                        placeholder="Enter Password" id="regpass">
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
        function savedt() {
            event.preventDefault()

            var result = {}
            $.each($('form').serializeArray(), function () {
                result[this.name] = this.value;
            })
            // console.log(result);
            fetch('<?php echo $this->assets_url;?>/registration',{
                headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    method: "POST",
                    body: JSON.stringify(result)
            }).then((res)=>res.json()).then((result)=>{
                console.log(result);
            })
        }
    </script>
</body>

</html>