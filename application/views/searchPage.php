<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<link rel="stylesheet" type="text/css" href="../css/lay_menu.css" />
<link rel="stylesheet" type="text/css" href="../css/susun_menu.css" />
<link rel="stylesheet" href="../css/Admin_ManageUser_css.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Library System</title>
<script language="javascript">
	function proceed()
	{
		var name = document.getElementById("userID").value;
		var searchUser = document.getElementById("search").value;
		var list = document.getElementById("listAll").value;
		if(searchUser)
		{
			if(userID == "")
			{
				resetBack();
				return false;
			}
			else
				return true;
		}
		else
		{
			return true;
		}
			
	}
	
	function searchUser()
	{
		document.getElementById("search").value = true;	
	}
	
	function listAllUser()
	{
		document.getElementById("listAll").value = true;	
	}
	
	function resetBack()
	{
		document.getElementById("userID").value = "";
		document.getElementById("search").value = false;	
		document.getElementById("listAll").value = false;
	}
</script>
</head>

<body bgcolor="#CCCCCC">
<div id="container">
  
  <div id="Header">
    <h1 align="center"><b>Search  Page</b></h1>
</div>

<div id="Nav">

<nav>
<ul>
<li><a href="<?php echo base_url()?>directStaffPage">Staff Page</a></li>
<!--<li><a href='?logout=true'>Logout</a></li>-->
</ul>
</nav>
</div><!--Nav--></div>
<div align="center">Please Enter User ID 
</div>
<form action="<?php echo base_url()?>searchUser" method="POST" class="table" onsubmit="return proceed()" >
  <table align="center">

<tr>
<td>User Ic Number</td>
<td>:</td>
<td>
<input type="text" name="userID" id="userID" />
</td>
</tr>

<tr>
<td colspan="3" align="center">
<input type="submit" name="search" value="Search" onclick="searchUser()"/>
<input type="hidden" id="search" value="false"/>
<input type="submit" name="listAll" value="List All" onclick="listAllUser()"/>
<input type="hidden" id="listAll" value="false"/>
</td>
</tr>
</table>
</form>
</body>
</html>