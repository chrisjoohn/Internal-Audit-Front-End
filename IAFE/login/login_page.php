<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
        <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="login_page.css"/>
    </head>
    <title>
        Admin
    </title>
    <body id="adminLogin">
    <?php
        if (!isset($_POST['submit'])){
    ?>
        <div class="container">
            <div class="login-container">
                <div class="panel">
                    <img class="iao-logo" src="images/iao-logo.png"/>
                    <h2>Admin Login</h2>
                    <p>Please enter your email and password</p>
                </div>
                <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                    <div class="form-group"> 
                        <input name="email" type="email" class="form-control" id="inputEmail" placeholder="Email Address" required>
                    </div>
                    <div class="form-group">
                        <input name="password" type="password" class="form-control" id="inputPassword" placeholder="Password" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </body>
</html>
<?php
} else {
    $mysqli = new mysqli('localhost', 'root', '', 'mydatabase');
    if($mysqli->connect_errno){
        echo "error";
        exit();
    }
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM try1 WHERE email LIKE '{$email}' AND password LIKE '{$password}' LIMIT 1";
    $result = $mysqli->query($sql);
    if(!$result->num_rows == 1){
        echo "<script language='javascript'>";
        echo "alert('Wrong Combination of Email and Password!')";
        echo "</script>";
    } else {
        header("Location: admin/admin.html");
    }   
}
?>
