<?php
if (isset ($_REQUEST['msg'])) {
    echo "<script>alert('This Email is already Registered.')</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Registration</title>
</head>

<body>
    <div class="container">
        <h2 class="text-center mt-5 mb-3">REGISTRATION</h2>
        <div class="card p-3">
            <form action="dbcon.php" method="post" onsubmit="sbmt()" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="fname" class="form-label">First Name: </label>
                    <input type="text" name="fname" class="form-control" id="fname" required>
                </div>
                <div class="mb-3">
                    <label for="lname" class="form-label">last Name : </label>
                    <input type="text" name="lname" class="form-control" id="lname" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email : </label>
                    <input type="email" name="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="birth" class="form-label">Date of Birth : </label>
                    <input type="date" name="birth" class="form-control" id="birth" required>
                </div>
                <div class="mb-3 form-check">
                    <label for="gender" class="form-label">Gender : </label><br>
                    <input type="radio" name="gender" value="Male" class="me-1 ms-4" id="Male" required>Male
                    <input type="radio" name="gender" value="Female" class="me-1 ms-2" id="Female">Female
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password : </label>
                    <input type="password" name="password" onblur="chk()" class="form-control" id="password" required>
                    <span id="pass" class="text-danger"></span>
                </div>
                <div class="mb-3">
                    <label for="cpassword" class="form-label">Confirm Password : </label>
                    <input type="password" name="cpassword" class="form-control" id="cpassword" required>
                </div>
                <div class="mb-3">
                    <label for="profile" class="form-label">Profile Picture : </label>
                    <input type="file" name="profile" class="form-control" id="profile" required>
                </div>
                <div class="mb-3">
                    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
    <script>
        function chk() {
            var ps = document.getElementById('password');
            var errorMessage = "";

            if (ps.value.length < 8) {
                errorMessage += "Please enter at least 8 characters.<br>";
            }
            if (ps.value.search(/[0-9]/) === -1) {
                errorMessage += "Please include at least 1 number.<br>";
            }
            if (ps.value.search(/[a-z]/) === -1) {
                errorMessage += "Please include at least 1 lowercase letter.<br>";
            }
            if (ps.value.search(/[A-Z]/) != 1) {
                errorMessage += "Please include at least 1 uppercase letter.<br>";
            }

            document.getElementById('pass').innerHTML = errorMessage;

            if (errorMessage !== "") {
                document.getElementById('cpassword').disabled = true;
            } else {
                document.getElementById('cpassword').disabled = false;
            }
        }

        function sbmt() {
            if (document.getElementById('password').value != document.getElementById('cpassword').value) {
                event.preventDefault();
                alert("Please Enter valid confirm Password..");
            }
        }
    </script>
</body>

</html>