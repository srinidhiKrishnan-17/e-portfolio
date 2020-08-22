
<?php
$connection = new mysqli('localhost','root','','registration','3308');
extract($_POST);

if(isset($submit))
{
	$rs=mysqli_query($connection,"select * from newuser where name='$name' and password='$password'");
	if(mysqli_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION["login"]=$name;
	}
}
if (isset($_SESSION["login"]))
{
header("location: http://localhost/Phpdemo1/homepage.html");
exit;
}
?>
