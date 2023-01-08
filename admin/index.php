<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: login/reset-code.php');
            }
        }else{
            header('Location: login/user-otp.php');
        }
    }
}else{
    header('Location: login/');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $fetch_info['name'] ?> | ADMIN</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="shortcut icon" href="https://guormit.cf/assets/logo.png" sizes="196x196" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  <meta property="og:title" content="ADMIN PAGE">
 <meta property="og:description" content="ONLY ADMIN">
<meta property="og:type" content="article">
  <meta property="og:image" content="https://guormit.cf/logo.png">
  <meta property="og:site_name" content="Guormit archives || Admin">
 
    <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
    nav{
        padding-left: 100px!important;
        padding-right: 100px!important;
        background: #6665ee;
        font-family: 'Poppins', sans-serif;
    } 
    nav a.navbar-brand{
        color: #fff;
        font-size: 30px!important;
        font-weight: 500;
    }
    button a{
        color: #6665ee;
        font-weight: 500;
    }
    button a:hover{
        text-decoration: none;
    }
    h1{
        position: absolute;
        top: 50%;
        left: 50%;
        width: 100%;
        text-align: center;
        transform: translate(-50%, -50%);
        font-size: 50px;
        font-weight: 600;
    }
    </style>
</head>
<body>
    <nav class="navbar">
    <a class="navbar-brand" href="#">Tools</a>
<button type="button" class="btn btn-light"><a href="fm">File Manager</a></button>
<button type="button" class="btn btn-light"><a href="http://fileguormit.totalh.net/">Database-Main</a></button>


   
    </nav>
    <h1>Welcome to Admin area || <?php echo $fetch_info['name'] ?></h1>
     <button type="button" class="btn btn-light"><a href="logout-user.php">Logout</a></button>
    
</body>
</html>