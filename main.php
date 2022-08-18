<?php session_start(); ?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
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

        <div class="profile">
            Hello <?php echo $_SESSION['fname'] . ' ' . $_SESSION['lname']; ?>
            <div class="profile-box">
                <a href="register.php?id=<?php echo $_SESSION['ID']; ?>">View Account</a></br>
                <a href="delete.php?id=<?php echo $_SESSION['ID']; ?>">Delete Account</a></br>
                <a href="logout.php">Logout</a></br>
            </div>
        </div>
    </div><!--site-header-->

    <div class="site-content">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam itaque neque aliquid provident rerum ut distinctio maiores atque accusamus esse porro commodi dicta iure, earum doloribus autem magni sequi sint totam nulla voluptates? Voluptatem odio consequuntur ducimus quibusdam quasi nostrum dolorum tenetur, iure excepturi cumque ea reiciendis eum omnis accusantium ullam aliquid, nisi cum placeat aliquam nam reprehenderit ipsam perspiciatis veniam repudiandae? Provident, a autem suscipit vero inventore doloribus! Debitis quis dolore dolor laboriosam fugiat ut voluptatibus deleniti ipsum, id excepturi veritatis! Vel maiores ipsa architecto consequuntur non animi, expedita sapiente ullam beatae atque accusantium tempora distinctio explicabo ipsam corporis odit deserunt perspiciatis sit aliquid fugiat! Laudantium dolores quibusdam eos itaque quidem quod rerum unde est enim pariatur, doloremque corrupti quaerat beatae perspiciatis commodi, illum id voluptatem voluptate voluptatum dolor cupiditate. Vel eaque adipisci veniam soluta, tempora, nesciunt ea dignissimos quisquam dolor recusandae asperiores ut omnis praesentium id numquam nostrum. Similique nostrum consequuntur explicabo magnam, ut accusamus suscipit quo beatae voluptas debitis harum dignissimos? Ab maxime iste, perspiciatis accusamus ipsum est corrupti voluptatem doloribus, quibusdam odio voluptatibus repudiandae eius quis ratione esse libero magni autem harum! Praesentium fugit reiciendis molestias. Nemo cumque accusantium temporibus totam eligendi vero quod voluptatum reprehenderit, veniam ut sequi explicabo, consectetur laboriosam ab molestias delectus saepe tempore. Itaque iste ipsa suscipit inventore minima praesentium recusandae vero explicabo deserunt soluta, nesciunt nam impedit aliquam doloremque commodi architecto fugit magni ab accusamus sapiente sunt esse voluptatem ullam. Porro similique aliquid nam distinctio ea, adipisci nulla. Alias tempore autem ducimus tempora soluta exercitationem provident esse nihil dolore! Veritatis, iure laborum dolorum natus est corporis quae omnis itaque ducimus sed cum ut ex quos error eaque maxime ipsam dolor obcaecati sint ullam asperiores. Quod porro non fugit veritatis sunt voluptate accusamus culpa odio quam asperiores, iusto adipisci quidem ab nobis dolorem at praesentium nihil dolor? Quo explicabo atque veniam. Fugiat fugit necessitatibus nostrum ut pariatur quas qui dolores at, animi sed placeat itaque culpa cupiditate facilis amet corporis. Sit cum modi nostrum cupiditate unde iusto animi dolor officiis neque aut alias dicta facilis iste ea eveniet harum at, saepe, sint vel omnis quam quidem aspernatur qui consectetur. Voluptatum esse nam doloremque cupiditate dolorum. Voluptatum ad doloribus officiis omnis atque, ipsum iure adipisci rem velit sunt eos illo debitis ipsam recusandae et repudiandae cupiditate tempora nam expedita sequi dicta at. Quisquam commodi rem veritatis magnam officia ducimus repellat fugit, sit, vitae neque vero. Nisi odio incidunt minus quae! Sed, omnis, nihil, veritatis reprehenderit tenetur itaque aperiam esse voluptates sit minima assumenda voluptatum aliquam iure! Deserunt sunt neque earum ipsam! Accusantium omnis exercitationem quos cum ducimus laboriosam incidunt provident eos nam quas rem dolorem, obcaecati ad odio blanditiis ex quis totam minus distinctio perspiciatis reprehenderit quae fuga cumque? Dolorum facilis, in ab laboriosam labore beatae sequi deserunt eligendi consectetur iusto aspernatur voluptatem provident cumque maiores! Minima doloribus quam unde deleniti! Quis consequatur aliquam totam libero reprehenderit? Iste ratione obcaecati totam ut dicta assumenda vel delectus nisi deserunt! Quas aut molestias molestiae voluptates!
    </div><!--site-content-->
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>

    <?php require_once 'bootstrap-scripts.php'; ?>
</body>
</html>