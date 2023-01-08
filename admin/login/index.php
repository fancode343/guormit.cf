<?php require_once "../controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
if($email == true){
  header('Location: home.php');
}
?>
<?php include_once "../../assets/header/header_admin_login.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $fetch_info['name'] ?> | Admin</title>
    <link rel="stylesheet" href="https://guormit.cf/assets/css/admin_login.css">
  <link rel="shortcut icon" href="https://guormit.cf/assets/logo.png" sizes="196x196" type="image/png">
  <meta property="og:title" content="ADMIN PAGE">
 <meta property="og:description" content="Admin for Guormit Archives">
<meta property="og:type" content="article">
  <meta property="og:image" content="https://guormit.cf/logo.png">
  <meta property="og:site_name" content="Guormit archives || Admin
    <link rel="stylesheet" href="https://guormit.cf/assets/css/admin_login.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="index.php" method="POST" autocomplete="">
                    <h2 class="text-center">Admin Login</h2>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="link forget-pass text-left"><a href="forgot-password.php">Forgot password?</a></div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="Login">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
