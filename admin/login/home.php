<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = $_POST['username'];
		$password = $_POST['password'];
		$age = $_POST['age'];
		$gender = $_POST['gender'];
		$wdym = $_POST['wdym'];
	    $phoneCode = $_POST['phoneCode'];
		$fbprof = $_POST['fbprof'];
		$dsnm = $_POST['dsnm'];

		if(!empty($username) && !empty($password) && !empty($age) && !empty($gender) && !empty($wdym) && !empty($phoneCode) && !empty($fbprof) && !empty($dsnm) && !is_numeric($username))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,username,password,age,gender,wdym,phoneCode,fbprof,dsnm) values ('$user_id','$username','$password','$age','$gender','$wdym','$phoneCode','$fbprof','$dsnm')";

			mysqli_query($con, $query);

			header("Location: ../server-info");
			die;
		}else
		{
			echo '<i style="color:RED;font-size:30px;font-family:calibri ;"> PLEASE  ENTER VALID  INFORMATION </i> ';
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
<link rel="shortcut icon" href="../logo.webp" sizes="196x196" type="image/png">
  <meta property="og:title" content="Register for whitelist">
 <meta property="og:description" content="Join to our Minecraft server, but you need to **tap this link for whitelist**">
<meta property="og:type" content="article">
  <meta property="og:image" content="https://guormit.cf/logo.png">
  <meta property="og:site_name" content="Gourmit Minecraft server">
<head>
<script>window.location.replace("https://guormit.cf/admin");
    </script>
    <div>Redirecting....</div>
<style>
        body {
          background-image: url('https://cutewallpaper.org/22/aesthetic-blue-sky-laptop-wallpapers/plume-of-an-angel-desktop-wallpaper-art-sky-textures-cute-laptop-wallpaper.png');
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: 100% 100%;
          font-family: Garamond, serif;
        }
        </style>
<style type="text/css">
	
	#text{

     background-color: green;
		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 50%;
	}

    	#pass{

     background-color: red;
		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 50%;
	}

   	#tex{

     background-color: lightblue;
		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 50%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: red;
		border: none;
	}

	#box{

		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>
</head>   
<body>

<form method="post">
<table>

<tr>

<td id="text">Gamertag :</td>

<td><input type="text" name="username"autofocus placeholder="Minecaft Gamertag"></td>

</tr>

<tr>

<td id="pass">Email :</td>

<td><input type="text" name="password" autofocus placeholder="email"></td>

</tr>
<td id="tex">SELECT YOUR AGE : </td>
<td>

<select name="age">

<option selected hidden value="">Select AGE : </option>

<option value="13">13</option>

<option value="14">14</option>

<option value="15">15</option>

<option value="16">16</option>

<option value="17">17</option>

<option value="18+">18+</option>

<tr>

<td id="tex">Gender :</td>

<td>

<input type="radio" name="gender" value="m">Male

<input type="radio" name="gender" value="f">Female

</td>

</tr>

<tr>

<td id="tex">Why do you want to join? : </td>

<td><input type="text" name="wdym"autofocus placeholder="required"></td>

</tr> 

<tr>
<td id="tex">MINECRAFT VERSION :</td>

<td>

<select name="phoneCode">

<option selected hidden value="">Select Version : </option>

<option value="1.18.2.03">1.18.12 - latest</option>

<option value="1.18.2.03">1.18.10</option>

<option value="1.18.2.03">1.18.2.03</option>

<option value="1.18.2">1.18.2</option>

<option value="1.18.1">1.18.1</option>

<option value="1.17.41">1.17.41</option>

<option value="1.17.40">1.17.40</option>

<option value="1.17.30">1.17.30</option>

<option value="1.17.10">1.17.10</option>
</select>
<br>
<br>
</td>
</tr>
</td>
<tr>
<td id="text">FB PROFILE : </td>
<td><input type="fbprof" name="fbprof" autofocus placeholder="required">
</td>
</tr>

<td id="text">Discord username : </td>
<td><input type="dsnm" name="dsnm" autofocus placeholder="required">
</td></table>
</td>

<tr>
<input id="button" type="submit" value="Signup"><br><br>
</tr><br>

<td>
</tr>

<a href="login.php">already have an account</a>
<br>
</form>

<p style="color:red">
<a href="https://discord.gg/wcUdMCeT8S">Join to our Discord server</a>
<br>

</body>
 FOR MORE Question</a></p>
<br>
<body>
</html>
