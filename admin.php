<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- Custom Css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap Css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <?php require_once 'header.php'; ?>

    <h3 class="bg-dark text-info text-center p-2 my-3">Admin Panel</h3>

    <table class="table table-bordered table-hover table-striped text-center">
        <thead class="bg-dark text-white">
            <tr>
                <th>Id</th>
                <th>Fname</th>
                <th>Lname</th>
                <th>Email</th>
                <th>Password</th>
                <th>Phone</th>
                <th>Country</th>
                <th>City</th>
                <th>Zip</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php
        
            require_once 'config.php';

            $select_data = "SELECT * FROM `users`";
            $select_data_query = mysqli_query($conn, $select_data) or die('Query Failed');

            if(mysqli_num_rows($select_data_query) > 0) {
                while($row = mysqli_fetch_assoc($select_data_query)) {      
        
        ?>
        <tbody>
            <tr>
                <td><?php echo $row['ID']; ?></td>
                <td><?php echo $row['fname']; ?></td>
                <td><?php echo $row['lname']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['country']; ?></td>
                <td><?php echo $row['city']; ?></td>
                <td><?php echo $row['zip']; ?></td>
                <td>
                    <a class="btn btn-info" href="register.php?id=<?php echo $row['ID']; ?>" role="button">Edit</a>
                    <a class="btn btn-danger" href="delete.php?id=<?php echo $row['ID']; ?>" role="button">Delete</a>
                </td>
            </tr>
        </tbody>
        <?php
                }
            }
        ?>
    </table>

    <?php require_once 'bootstrap-scripts.php'; ?>
</body>
</html>