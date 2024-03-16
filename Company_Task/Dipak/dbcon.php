<?php
$conn = new mysqli("localhost", "root", "", "dipakdb");

if (isset($_REQUEST['submit'])) {

    $fname = $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];
    $email = $_REQUEST['email'];
    $birth = $_REQUEST['birth'];
    $gender = $_REQUEST['gender'];
    $password = $_REQUEST['password'];
    $cpassword = $_REQUEST['cpassword'];
    $profile = $_FILES['profile']['name'];

    $sql = "SELECT * FROM users WHERE `email`='$email'";
    $ins = $conn->query($sql);
    if ($ins->num_rows == 0) {
        header("location:index.php?msg=This Email is already Registered.");
    } elseif (!file_exists("images")) {
        mkdir("images");
    }

    $path = "C:/xampp/htdocs/Dipak/images/" . $_FILES['profile']['name'];
    move_uploaded_file($_FILES['profile']['tmp_name'], $path);

    $sql = "INSERT INTO users(`fname`, `lname`, `email`, `birth`, `gender`, `password`, `profile`) VALUES ('$fname', '$lname', '$email', '$birth', '$gender', '$password', '$profile')";
    $ins = $conn->query($sql);
    if ($ins) {
        header("location:login.php");
    } else {
        echo "<script>alert('Please try again..')</script>";
    }

} elseif (isset($_REQUEST['login'])) {
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    $sql = "SELECT * FROM users WHERE `email`='$email' AND `password`='$password'";
    $ins = $conn->query($sql);
    if ($ins) {
        header("location:home.php");
    } else {
        header("location:login.php?msg=a");
    }

} elseif (isset($_REQUEST['update'])) {
    $id = $_REQUEST['id'];
    $fname = $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];
    $email = $_REQUEST['email'];
    $birth = $_REQUEST['birth'];
    $gender = $_REQUEST['gender'];
    $password = $_REQUEST['password'];
    $cpassword = $_REQUEST['cpassword'];

    if ($_FILES['profile']['error'] == 0) {
        $profile = $_FILES['profile']['name'];
    } else {
        $profile = $_REQUEST['oldprofile'];
    }

    $sql = "SELECT * FROM users WHERE `email`='$email'";
    $ins = $conn->query($sql);
    if ($ins->num_rows == 0) {
        header("location:index.php?msg=This Email is already Registered.");
    } elseif (!file_exists("images")) {
        mkdir("images");
    } elseif ($_FILES['profile']['error'] == 0) {
        $path = "C:/xampp/htdocs/Dipak/images/" . $_FILES['profile']['name'];
        move_uploaded_file($_FILES['profile']['tmp_name'], $path);
    }

    $sql = "UPDATE `users` SET `fname`='$fname',`lname`='$lname',`email`='$email',`birth`='$birth',`gender`='$gender',`profile`='$profile',`password`='$password' WHERE `id`='$id'";
    $ins = $conn->query($sql);
    if ($ins) {
        header("location:home.php");
    } else {
        echo "<script>alert('Please try again..')</script>";
    }

} elseif (isset($_REQUEST['action'])) {

    $id = $_REQUEST['action'];
    $sql = "DELETE FROM `users` WHERE id=$id";
    $del = $conn->query($sql);

    header("location:home.php");
}
?>