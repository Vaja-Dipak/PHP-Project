<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Home</title>
</head>

<body>
    <div class="container">
        <h2 class="text-center mt-5 mb-3">ALL USERS</h2>
        <div class="card">
            <table class="table table bordered">
                <thead>
                    <tr class="table-secondary">
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email Address</th>
                        <th scope="col">Date of Birth</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Profile Picture</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once("dbcon.php");

                    $sql = "SELECT * FROM users";
                    $data = $conn->query($sql);
                    if ($data->num_rows > 0) {
                        foreach ($data as $value) {
                            ?>
                            <tr>
                                <td>
                                    <?php echo $value['fname'] ?>
                                </td>
                                <td>
                                    <?php echo $value['lname'] ?>
                                </td>
                                <td>
                                    <?php echo $value['email'] ?>
                                </td>
                                <td>
                                    <?php echo $value['birth'] ?>
                                </td>
                                <td>
                                    <?php echo $value['gender'] ?>
                                </td>
                                <td>
                                    <img src="images/<?php echo $value['profile'] ?>" alt="Image not found"
                                        width="100px">
                                </td>
                                <td>
                                    <a href="edit.php?id=<?php echo $value['id'] ?>" class="btn btn-primary">Edit</a>
                                    <a href="dbcon.php?action=<?php echo $value['id'] ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php }
                    } else { ?>
                        <tr>
                            <td colspan="7">No Data Found</td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>