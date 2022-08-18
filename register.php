<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(isset($_GET['id'])){ $id = $_GET['id'];} if(isset($id)){echo "Edit";}else{echo "Register";}; ?> Form</title>
    <!-- Custom Css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap Css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <?php 
        require_once 'header.php'; 
        require_once 'config.php'; 

        // Code for register form
        if(isset($_POST['register'])) {
    
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $number = $_POST['number'];
            $country = $_POST['country'];
            $city = $_POST['city'];
            $zip = $_POST['zip'];

            $register_user = "INSERT INTO `users`(`fname`, `lname`, `email`, `password`, `phone`, `country`, `city`, `zip`) VALUES ('$fname','$lname','$email', md5('$password'), '$number','$country','$city','$zip')";

            $register_user_query = mysqli_query($conn, $register_user) or die('Query Failed');
        
            if($register_user_query) {
                $message[] = "User register Successfully...";
            } else {
                $message[] = "There was a problem to register the user...";
            }
            
        }

        // Code for edit form
        if(isset($_POST['update'])) {

            if(isset($_GET['id'])){ 
                $id = $_GET['id'];
            }
    
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $number = $_POST['number'];
            $country = $_POST['country'];
            $city = $_POST['city'];
            $zip = $_POST['zip'];

            $update = "UPDATE `users` SET `fname`='$fname',`lname`='$lname',`email`='$email',`password`='$password',`phone`='$number',`country`='$country',`city`='$city',`zip`='$zip' WHERE `ID` = $id";

            $update_query = mysqli_query($conn, $update) or die('Query Failed');
        
            if($update_query) {
                $message[] = "User update Successfully...";
            } else {
                $message[] = "There was a problem to update the user...";
            }
            
        }
    ?>
    
    <?php
        if(isset($message)) {
            foreach ($message as $message) {
                echo '
                    <div class="message">
                        <span>'.$message.'</span>
                        <i onclick="this.parentElement.remove();">&#10060;</i>
                    </div><!--message-->
                ';
            }
        }
    ?>

    <div class="form-container">
        <h3 class="form-heading bg-dark text-info text-center p-2"><?php if(isset($_GET['id'])){ $id = $_GET['id'];} if(isset($id)){echo "Edit";}else{echo "Register";}; ?> Form</h3>
        <div class="form-box">
            <?php
            
            if(isset($_GET['id'])){ 
                $id = $_GET['id'];

                $fetch_data = "SELECT * FROM `users` WHERE `ID` = $id";
                $fetch_data_query = mysqli_query($conn, $fetch_data) or die("Query Failed");

                if(mysqli_num_rows($fetch_data_query) > 0) {
                    while($row = mysqli_fetch_assoc($fetch_data_query)) {
                        

            ?>
            <!-- Code for edit form -->
            <form action="" method="post">
                <label for="fname" class="form-label">First Name</label>
                <input type="text" name="fname" class="form-control" value="<?php echo $row['fname']; ?>">

                <label for="lname" class="form-label">Last Name</label>
                <input type="text" name="lname" class="form-control" value="<?php echo $row['lname']; ?>">

                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="<?php echo $row['email']; ?>">

                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $row['password']; ?>">

                <label for="number" class="form-label">Phone Number</label>
                <input type="number" name="number" class="form-control" value="<?php echo $row['phone']; ?>">

                <label for="country" class="form-label">Country</label>
                <input type="text" name="country" class="form-control" value="<?php echo $row['country']; ?>">

                <label for="city" class="form-label">City</label>
                <input type="text" name="city" class="form-control" value="<?php echo $row['city']; ?>">

                <label for="zip" class="form-label">Zip Code</label>
                <input type="text" name="zip" class="form-control" value="<?php echo $row['zip']; ?>">

                <button type="submit" class="btn btn-outline-info my-3 w-100 form-btn" name="update">Update</button>
            </form>
            <?php 
                        }
                    }
                } else {
            ?>
            <!-- Code for register form -->
            <form action="" method="post">
                <label for="fname" class="form-label">First Name</label>
                <input type="text" name="fname" class="form-control" value="">

                <label for="lname" class="form-label">Last Name</label>
                <input type="text" name="lname" class="form-control" value="">

                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="">

                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" value="">

                <label for="number" class="form-label">Phone Number</label>
                <input type="number" name="number" class="form-control" value="">

                <label for="country" class="form-label">Country</label>
                <input type="text" name="country" class="form-control" value="">

                <label for="city" class="form-label">City</label>
                <input type="text" name="city" class="form-control" value="">

                <label for="zip" class="form-label">Zip Code</label>
                <input type="text" name="zip" class="form-control" value="">

                <button type="submit" class="btn btn-outline-info my-3 w-100 form-btn" name="register">Register</button>
            </form>
            <?php } ?>
        </div><!--form-box-->
    </div><!--form-container-->

    <?php require_once 'bootstrap-scripts.php'; ?>
</body>
</html>