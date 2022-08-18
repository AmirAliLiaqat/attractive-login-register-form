<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!-- Custom Css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap Css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Google Recaptcha -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>

    <?php 
        require_once 'header.php'; 
        require_once 'config.php'; 

        session_start();

        if(isset($_POST['login'])) {
    
            $username = $_POST['username'];
            $password = md5($_POST['password']);

            $login_user = "SELECT * FROM `users` WHERE fname = '$username' AND password = '$password'";
            $login_user_query = mysqli_query($conn, $login_user) or die('Query Failed');
            
            if(mysqli_num_rows($login_user_query) > 0) {
                $row = mysqli_fetch_assoc($login_user_query);

                $_SESSION['ID'] = $row['ID'];
                $_SESSION['fname'] = $row['fname'];
                $_SESSION['lname'] = $row['lname'];

                header('location: main.php');

            } else {
                $message[] = "Login Details are incorrect...";
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
        <h3 class="form-heading bg-dark text-info text-center p-2">Login Form</h3>
        <div class="form-box">
            <form action="" method="post">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control">

                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control">

                <label for="recaptcha" class="form-label">Recaptcha</label>
                <div class="g-recaptcha" data-sitekey="6LcxYvwgAAAAAChgviNqFW_QYAcHTiGQebZ39p5i"></div>

                <button type="submit" class="btn btn-outline-info my-3 w-100 form-btn" name="login">Login</button>
            </form>
        </div><!--form-box-->
    </div><!--form-container-->

    <?php require_once 'bootstrap-scripts.php'; ?>
</body>
</html>