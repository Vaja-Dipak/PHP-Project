<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>forgote password</title>
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
                    <div class="section pb-5 pt-4 pt-sm-2 text-center">
                        <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
                        <div class="card-3d-wrap mx-auto">
                            <div class="card-3d-wrapper">
                                <div class="card-front">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h3 class="mb-3 text-bold" style="font-weight:bold letter-spacing: 0.4px;">
                                                Forgot Password ?</h3>
                                            <h6 class="mb-5">Enter your email and we'll send you instructions to reset
                                                your password</h6>
                                            <form action="" method="post" id="mail" onsubmit="sentmail()">
                                                <div class="form-group">
                                                    <input type="email" name="u_email" class="form-style"
                                                        placeholder="Enter Your Email" id="email" required>
                                                    <i class="input-icon uil uil-at"></i>
                                                </div>
                                                <input type="submit" class="btn mx-4 mt-4" name="sendotp" value="Send OTP">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-back">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-4 pb-3">Reset Password</h4>
                                            <div class="form-group">
                                                <input type="text" name="logname" class="form-style"
                                                    placeholder="Enter OTP" id="logname" required>
                                                <i class="input-icon uil uil-comment-alt-verify"></i>
                                            </div>
                                            <div class="form-group mt-2">
                                                <input type="password" name="logpass" class="form-style"
                                                    placeholder="New Password" id="password" required>
                                                <i class="input-icon uil uil-lock-alt"></i>
                                            </div>
                                            <div class="form-group mt-2">
                                                <input type="password" name="logpass" class="form-style"
                                                    placeholder="Confirm Password" id="repassword" onblur="check()"
                                                    required>
                                                <i class="input-icon uil uil-lock-alt"></i>
                                            </div>
                                            <input type="submit" class="btn mt-4" name="reset" value="Reset Password">
                                            <a href="#" class="btn mt-3 mx-5" onclick="off()"
                                                style="height:30px; width:80px">Back</a>
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
    <!-- partial -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>

        function off() {
            document.getElementById('reg-log').checked = false;
        }

        function check() {
            if (document.getElementById('password').value != document.getElementById('repassword').value) {
                alert("Please Enter Same Password.");
                document.getElementById('password').value = "";
                document.getElementById('repassword').value = "";
            }
        }

        function sentmail() {
            event.preventDefault()

            var result = {}
            $.each($(document.getElementById('mail')).serializeArray(), function () {
                result[this.name] = this.value;
            })
            // console.log(result);
            fetch('<?php echo $this->assets_url; ?>/sendmail', {
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
                method: "POST",
                body: JSON.stringify(result)
            }).then((res) => res.json()).then((result) => {
                console.log(result);
                if (result == 1) {
                    document.getElementById('reg-log').checked = true;
                    alert("Forgot Password OTP Sent on your Email..");
                } else {
                    alert("Please try again later");
                }
            })
        }
    </script>
</body>

</html>