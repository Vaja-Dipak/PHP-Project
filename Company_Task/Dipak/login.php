<?php
if(isset($_REQUEST['msg'])){
echo "<script>alert('Please Enter valid email and Password..')</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
<div class="container">
        <h2 class="text-center mt-5 mb-3">login</h2>
        <div class="card p-3">
            <form action="dbcon.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="email" class="form-label">Email : </label>
                    <input type="email" name="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password : </label>
                    <input type="password" name="password" class="form-control" id="password" required>
                </div>
                <div class="mb-3">
                    <input type="submit" name="login" value="Login" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>    
</body>
</html>