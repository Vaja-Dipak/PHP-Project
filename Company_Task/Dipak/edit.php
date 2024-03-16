<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Update.php</title>
</head>

<?php
require_once("dbcon.php");

$id=$_REQUEST['id'];
$sql = "SELECT * FROM users WHERE id=$id";
$data = $conn->query($sql);
if ($data->num_rows > 0) {
    foreach ($data as $value) {
?>

<body>
    <div class="container">
        <h2 class="text-center mt-5 mb-3">UPDATE</h2>
        <div class="card p-3">
            <form action="dbcon.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $value['id']; ?>">
                <div class="mb-3">
                    <label for="fname" class="form-label">First Name : </label>
                    <input type="text" name="fname" value="<?php echo $value['fname']; ?>" class="form-control" id="fname" required>
                </div>
                <div class="mb-3">
                    <label for="lname" class="form-label">last Name : </label>
                    <input type="text" name="lname" value="<?php echo $value['lname']; ?>" class="form-control" id="lname" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email : </label>
                    <input type="email" name="email" value="<?php echo $value['email']; ?>" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="birth" class="form-label">Date of Birth : </label>
                    <input type="date" name="birth" value="<?php echo $value['birth']; ?>" class="form-control" id="birth" required>
                </div>
                <div class="mb-3 form-check">
                    <label for="gender" class="form-label">Gender : </label><br>
                    <input type="radio" name="gender" <?php echo ($value['gender']=="Male")?"checked":""; ?> value="Male" class="me-1 ms-4" id="gender" required>Male
                    <input type="radio" name="gender" <?php echo ($value['gender']=="Female")?"checked":""; ?> value="Female" class="me-1 ms-2" id="gender">Female
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password : </label>
                    <input type="password" name="password" class="form-control" id="password" required>
                </div>
                <div class="mb-3">
                    <label for="cpassword" class="form-label">Confirm Password : </label>
                    <input type="password" name="cpassword" onblur="chk()" class="form-control" id="cpassword" required>
                </div>
                <div class="mb-3">
                    <label for="profile" class="form-label">Profile Picture : </label>
                    <input type="file" name="profile" class="form-control" id="profile" required>
                    <input type="hidden" name="oldprofile" value="<?php echo $value['profile']; ?>">
                </div>
                <div class="mb-3">
                    <input type="submit" name="update" value="Submit" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
    <?php } } ?>
    <script>
        function chk() {
            if (document.getElementById('password').value != document.getElementById('cpassword').value) {
                alert("Please Enter valid confirm Password..");
                document.getElementById('cpassword').value = "";
            }
        }
    </script>
</body>

</html>