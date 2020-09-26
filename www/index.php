<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
<head>
<link rel="stylesheet"type="text/css" href="style.css">
<title>SignUp</title>
</head>

<body>
<h1>Welcome to Global Gym! </h1>
<p>Please complete the following form and click save to complete your sign up:</p>

<form action="" method="post">

<label>First Name:</label>
<input type="text" name="firstname" id="firstname" required="required" /><br/><br/>
<label>Last Name :</label>
<input type="text" name="lastname" id="lastname" required="required"/><br/><br/>
<label>Address:</label>
<input type="text" name="address" id="address" required="required"/><br/><br/>
<label>Contact Number :</label>
<input type="text" name="contactnumber" id="contactnumber" required="required" placeholder="+64"/><br/><br/>
<label>Height:</label>
<input type="text" name="height" id="height" required="required" placeholder="centimeters"/><br/><br/>
<label>Weight:</label>
<input type="text" name="weight" id="weight" required="required" placeholder="kilograms"/><br/><br/>
<label>Bodyfat:</label>
<input type="text" name="bodyfat" id="bodyfat" required="required" placeholder="BF percentage"/><br/><br/>
<label>Exercise Level:</label>
<input type="text" name="exeriselevel" id="exerciselevel" required="required" placeholder="x exercising per week"/><br/><br/>

<label>Sex:</label>
<input type="radio" name="sex" value="Male"> Male
<input type="radio" name="sex" value="Female"> Female
<input type="radio" name="sex" value="Other"> Other

<div>
<label>Goal:</label>
<input type="radio" name="goal" value="Fat Loss"> Fat Loss
<input type="radio" name="goal" value="Maintenance"> Maintenance
<input type="radio" name="goal" value="Gain Weight"> Gain Weight 
</div>

<input type="submit" name="submit" value="Save">
</form>

<?php

if(isset($_POST["submit"])){ 
$db_host   = 'database-01.ced2xkjsxawm.us-east-1.rds.amazonaws.com';
$db_name   = 'members';
$db_user   = 'admin';
$db_passwd = 'hellothere1';

$pdo_dsn = "mysql:host=$db_host;dbname=$db_name";

$pdo = new PDO($pdo_dsn, $db_user, $db_passwd);

$sql ="INSERT INTO members (firstname, lastname, address, contactnumber, height, weight, bodyfat, exerciselevel, sex, goal) VALUES
('$_POST[firstname]', '$_POST[lastname]', '$_POST[address]', '$_POST[contactnumber]', '$_POST[height]', '$_POST[weight]', '$_POST[bodyfat]', '$_POST[exerciselevel]', '$_POST[sex]', '$_POST[goal]')";

if ($pdo->query($sql)) {
echo "<script type= 'text/javascript'>alert('New member successfully added');</script>";
}


}

?>
<p>View all <a href="http://ec2-52-201-242-29.compute-1.amazonaws.com"> members here</a></p>
</body>
</html>

