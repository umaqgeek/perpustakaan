<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<link rel="stylesheet" type="text/css" href="../css/lay_menu.css" />
<link rel="stylesheet" type="text/css" href="../css/susun_menu.css" />
<link rel="stylesheet" href="../css/Admin_ManageUser_css.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Return Page</title>
<script language="javascript">
	function proceed()
	{
		var name = document.getElementById("userID").value;
		var pass = document.getElementById("bookCode").value;
		if(userID == "" || bookCode == "")
		{
			return false;
		}
		else
			return true;
	}
</script>
</head>

<body bgcolor="#CCCCCC">
<div id="container">
  
  <div id="Header">
    <h1 align="center"><b>Return Book Page</b></h1>
</div>

<div id="Nav">

<nav>
<ul>
<li><a href="<?php echo base_url()?>directStaffPage">Staff Page</a></li>
<!--<li><a href='?logout=true'>Logout</a></li>-->
</ul>
</nav>
</div><!--Nav--></div>
<div align="center">Please Enter User ID and BookCode
</div>
<form action="<?php echo base_url()?>returnProcess" method="POST" class="table" onsubmit="return proceed()" >
  <table align="center">

<tr>
<td>User Ic Number</td>
<td>:</td>
<td>
<input type="text" name="userID" id="userID" />
</td>
</tr>

<tr>
<td>Book Code Id</td>
<td>:</td>
<td>
<input type="text" name="bookCode" id="bookCode" />
</td>
</tr>

<tr>
<td colspan="3" align="center">
<input type="submit" name="approve" value="Approval" />
</td>
</tr>
</table>
</form>
</body>
</html>
