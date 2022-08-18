<?php

    require_once 'config.php';

    $id = $_GET['id'];

    if(isset($id)) {
        $delete_user = "DELETE FROM `users` WHERE `ID` = $id";
        $delete_user_query = mysqli_query($conn, $delete_user);

        if($delete_user_query) {
            header('location: admin.php');
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