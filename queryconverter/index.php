<html>
<head>
<link rel="stylesheet"type="text/css" href="style.css">
<title>Members</title>
</head>
<body>
<h1>All Members: </h1>
    <table border="1">
      <tr><th>First Name</th><th>Last Name</th><th>Address</th><th>Contact Number</th><th>Height</th><th>Weight</th><th>Body Fat Percentage</th><th>Exercise Level</th><th>Sex</th><th>Goal</th></tr>

<?php 

$db_host   = '192.168.2.12';
$db_name   = 'nikkidb';
$db_user   = 'webserviceuser';
$db_passwd = 'newpassword';

$pdo_dsn = "mysql:host=$db_host;dbname=$db_name";

$pdo = new PDO($pdo_dsn, $db_user, $db_passwd);
$q = $pdo->query("SELECT * FROM members");

while($row = $q->fetch()){
   echo "<tr><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["address"]."</td><td>".$row["contactnumber"]."</td><td>".$row["height"]."</td><td>".$row["weight"]."</td><td>".$row["bodyfat"]."</td><td>".$row["exerciselevel"]."</td><td>".$row["sex"]."</td><td>".$row["goal"]."</td></tr>\n";
}

?>
</table> 
</body>
</html>