<?php require_once "../controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
if($email == true){
  header('Location: home.php');
}
?>

<?php include_once "../../assets/header/header_admin_login.php"; ?>
<body>
<div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="index2.php" method="POST" autocomplete="">
                    <h2 class="text-center">Admin Login</h2>
                    <p class="text-center">Login with your email and password.</p>
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
        <div class="error-text"></div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter your password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Login">
        </div>
      </form>
      <div class="link">Forgot Password? <a href="forgot_password.php">Click Here</a></div>
    </section>
  </div>
  
  <script src="https://guormit.cf/assets/javascript/pass-show-hide.js"></script>
  <script src="https://guormit.cf/assets/javascript/login.js"></script>

</body>
</html>
