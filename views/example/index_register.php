<?php
session_start();
error_reporting(0);
require("connect.php");
$result=mysql_query("select * from account");
$i = 1;

$i=$_SESSION['username'];
$y= 'hello';
echo "<h2 align='center'>$y $i</h2>";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<link rel="stylesheet" type="text/css" href="../../css/lay_menu.css" />
<link rel="stylesheet" type="text/css" href="../../css/susun_menu.css" />
<link rel="stylesheet" href="../../css/Admin_ManageUser_css.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>index register</title>
</head>

<body bgcolor="#CCCCCC">
<div id="container">
  
  <div id="Header">
    <h1 align="center"><b>Library System</b></h1>
</div>

<div id="Nav">

<nav>
<ul>
<li><a href="#">Home</a></li>
<li><a href="#">User Login</a></li>
<li><a href="#">Staff Login</a> </li>
<li><a href='../?logout=true'>Logout</a></li>
</ul>
</nav>
</div><!--Nav-->

<form action="../confirm register(xgune lg).php" method="POST" class="table">

<table align="center">

<tr>
<td>username</td>
<td>:</td>
<td>
<input type="text" name="name" />
</td>
</tr>

<tr>
<td>Password</td>
<td>:</td>
<td>
<input type="text" name="pass" />
</td>
</tr>

<tr>
<td>Full Name</td>
<td>:</td>
<td>
<input type="text" name="fname" />
</td>
</tr>

<tr>
<td>I/C Number</td>
<td>:</td>
<td>
<input type="text" name="ic" />
</td>
</tr>

<tr>
<td>Phone Number</td>
<td>:</td>
<td>
<input type="text" name="tel" />
</td>
</tr>

<tr>
<td>E-mail</td>
<td>:</td>
<td>
<input type="text" name="email" />
</td>
</tr>

<tr>
<td>Address</td>
<td>:</td>
<td>
<textarea name="address"></textarea>
</td></tr>


<tr>
<td colspan="2" align="left">
<input type="submit" name="submit" value="Submit" />
</td>
<td align="center"><a href="../Admin_manage user.php">View</a></td>
</tr>

<tr>
<td colspan="3" align="left">
<a href="../../Admin Account.php"><b>Back</b></a></td>
</tr>
</table>

</form>


</div>
</body>
</html>