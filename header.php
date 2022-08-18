

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <!-- Custom Css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap Css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div class="site-header bg-dark text-info p-3">
        <div class="brand">
            <h3 class="text-info">My Site</h3>
        </div><!--brand-->

        <nav>
            <ul class="list-unstyled float-start">
                <li><a href="http://localhost/attractive-login-register-form/login.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#"></a></li>
            </ul>
        </nav>

        <div class="site-btns">
            <a class="btn btn-info" href="login.php" role="button">Login</a>
            <a class="btn btn-outline-info" href="register.php" role="button">Register</a>
            <a class="btn btn-danger" href="admin.php" role="button">Admin</a>
        </div><!--site-btns-->
    </div><!--site-header-->
    

    <?php require_once 'bootstrap-scripts.php'; ?>
</body>
</html>