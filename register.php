<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="login_style.css">
	<style type="text/css">
		.id{
			font-family: "Roboto", sans-serif;
			font-size: 14px;
			background-color: blue;
		}
		.class{
			color: red;
		}
	</style>
</head>
<body>
<?php
session_start();
$connection=mysqli_connect("localhost","root","","loop");
if(!$connection){
die("database connection failed:".mysqli_connect_error());
}
$uname=$pwd=$unameErr=$pwdErr=$Error=$sname=$snameErr=$email=$emailErr=$cpwd=$cpwdErr=$phno=$phnoErr=$state=$stateErr=$city=$cityErr=$mandal=$mandalErr=$pincode=$pincodeErr=$name=$nameErr="";
$flag=0;
$flag=0;
if(isset($_POST["submit"])){
	$uname=$_POST["uname"];
	$pwd=$_POST["pwd"];
	$sname=$_POST["sname"];
	$email=$_POST["email"];
	$cpwd=$_POST["cpwd"];
	$state=$_POST["state"];
	$city=$_POST["city"];
	$mandal=$_POST["mandal"];
	$pincode=$_POST["pincode"];
	$name=$_POST["name"];
	$phno=$_POST["phno"];
	if(!preg_match("/^[A-Z][a-z ]+[a-z]$/",$sname)){
		$snameErr="Invalid School Name";
		$flag=1;
	}
	if(!preg_match("/^[A-Z][a-z ]+[a-z]$/",$name)){
		$nameErr="Invalid Name";
		$flag=1;
	}
	if(!preg_match("/^[0-9]{6}$/",$pincode)){
		$nameErr="Invalid Pincode";
		$flag=1;
	}
	if(!preg_match("/^[a-zA-Z0-9][a-zA-Z0-9]+[@](gmail.com|yahoo.com)$/",$email)){
			$emailErr="Invalid Email";
			$flag=1;
		}
	if(!preg_match("/[0-9]{10}/",$phno)){
			$emailErr="Invalid Phone Number";
			$flag=1;
	}

		if(!preg_match("/^[a-z A-Z]+$/",$uname)){
			$unameErr="Invalid Username";
			$flag=1;
		}
		if(!preg_match("/(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[.@$&_])/",$pwd)){
			$pwdErr="Invalid Password";
			$flag=1;
		}
		if($pwd!=$cpwd){
			$cpwdErr="Password does not match";
			$flag=1;
		}
	if($flag!=1){
		mysqli_query($connection,"insert into schools(sname,state,city,mandal,pincode) values('$sname','$state','$city','$mandal','$pincode')");
		mysqli_query($connection,"insert into users(uname,phone,email,password) values('$uname','$phno','$email','$pwd')");
		header('Location:loop.html');
	}
}
mysqli_close($connection);
?>
<div class="login_page">
	<div class="form" style="background: #031842">
	<form class="login" name="login" method="POST">
	<label>Enter School Name*</label>
			<input type="text" name="sname" placeholder="Name" required="" class="sname" value="<?php echo $sname;?>">
			<label class="error"><?php echo $snameErr;?></label>
			<br/><br/>
	<label>Enter State*</label>
			<input type="text" name="state" placeholder="State" required="" class="state" value="<?php echo $state;?>">
			<label class="error"><?php echo $stateErr;?></label>
			<br/><br/>
			<label>Enter City*</label>
			<input type="text" name="city" placeholder="City" required="" class="city" value="<?php echo $city;?>">
			<label class="error"><?php echo $cityErr;?></label>
			<br/><br/>
			<label>Enter Mandal*</label>
			<input type="text" name="mandal" placeholder="Mandal" required="" class="mandal" value="<?php echo $mandal;?>">
			<label class="error"><?php echo $mandalErr;?></label>
			<br/><br/>
			<label>Enter Pincode*</label>
			<input type="text" name="pincode" placeholder="Pincode" required="" class="pincode" value="<?php echo $pincode;?>">
			<label class="error"><?php echo $pincodeErr;?></label>
			<br/><br/>
			<label>Enter Name*</label>
			<input type="text" name="name" placeholder="Name" required="" class="name" value="<?php echo $name;?>">
			<label class="error"><?php echo $nameErr;?></label>
			<br/><br/>
			<label>Enter Email*</label>
			<input type="email" placeholder ="Email ID" name="email" required="" value="<?php echo $email?>"><br>
			<label class="error"><?php echo $emailErr;?></label>
			<br><br>
			<label>Enter Phone Number*</label>
			<input type="text" placeholder="Phone Number" name="phno" required="" value="<?php echo $phno;?>"><br>
			<label class="error"><?php echo $phnoErr;?></label>
		<label>Enter Username*</label>
		<input type="uname" placeholder ="Username" id="uname" name="uname" required="" value="<?php echo $uname;?>">
		<label class="error"><?php echo $unameErr;?></label>
		<br><br>
		<label>Enter Password*</label>
		<input type="password" placeholder ="Password" id="pwd" name="pwd" required="" value="<?php echo $pwd;?>">
		<label class="error"><?php echo $pwdErr;?></label>
		<br><br>
		<label>Confirm Password*</label>
		<input type="password" placeholder="Retype Password" name="cpwd" required="" value="<?php echo $cpwd;?>"><br>
		<label class="error"><?php echo $cpwdErr;?></label>
		<br><br>
		<input type="submit" value="submit" class="id" name="submit" style="background-color: rgba(0,0,0,0.4); font-size: 20px;color: white" >
		<br><br>
		<label class="error"><?php echo $Error;?></label>
	</form>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</body>
</html>
