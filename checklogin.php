<?php


$host="mysql.hostinger.in"; // Host name
$username="u911797012_srmp"; // Mysql username
$password="secure1234"; // Mysql password
$db_name="u911797012_srmp"; // Database name
$tbl_name="acc"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// Define $myusername and $mypassword
session_start();
$email = $_SESSION['email'];
$passw = $_SESSION['passw'];


// To protect MySQL injection (more detail about MySQL injection)
//$email = stripslashes($email);
//$password = stripslashes($password);
//$email = mysql_real_escape_string($email);
//$passw = mysql_real_escape_string($passw);




$sql="SELECT * FROM acc WHERE email='$email' and passw='$passw'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"

	
header("location:succ.php");

}

else {
	echo "$email";
	echo "$passw";
echo "Wrong Username or Password";
}


?>


