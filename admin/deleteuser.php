<?php
session_start();
require("database.php");
include("header.php");
error_reporting(1);
?>
<?php

extract($_POST);


if (!isset($_SESSION['alogin']))
{
	echo "<br><h2><div  class=head1>You are not Logged On Please Login to Access this Page</div></h2>";
	echo "<a href=index.php><h3 align=center>Click Here for Login</h3></a>";
	exit();
}
?>

<link rel="stylesheet" href="quiz.css"/>
<div id="main">
<?php
$sql = "DELETE FROM users WHERE id={$_GET['id']}";
mysqli_query($conn, $sql);

//mysqli_query("delete from users where id='{$_GET['id']}'");
echo "<p align=center style='color:blue'>User deleted Successfully</p>";
?>
</div>
