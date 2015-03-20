<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Book's Register</title>

<link rel="stylesheet" href="css/lay_menu.css" />
<link rel="stylesheet" href="css/susun_menu.css" />

<script language="javascript">
	function proceed()
	{
		var BooksName = document.getElementById("BooksName").value;
		var BooksType = document.getElementById("BooksType").value;
		var AuthorsName = document.getElementById("AuthorsName").value;
		var No = document.getElementById("No").value;
		var rm = document.getElementById("rm").value;
		var Q_book = document.getElementById("Q_book").value;
		if(BooksName == "" || BooksType == "" || AuthorsName == "" || No == "" || rm == "" || Q_book == "")
		{
			return false;
		}
		else
		{
			return true;
		}
	}
</script>


</head>

<body bgcolor="#CCCCCC">
<div id="container">
  
  <div id="Header">
    <h1 align="center"><b>Library System</b></h1>
    <p align="center"><b>Books Register</b></p>
  </div>


<div id="Nav">

<nav>
<ul><li><a href="<?php echo base_url()?>directStaffPage">Staff Page</a></li>
</ul>
</nav>
</div><!--Nav-->



<form action="<?php echo base_url()?>BooksRegisterProcess" method="post" onsubmit="return confirm('dah yakin eh?');">

<table align="center">

<tr>
<td>Book' Name</td>
<td>:</td>
<td>
<input type="text" name="BooksName" id="BooksName" />
</td>
</tr>
<tr>

<td>Book Type</td>
<td>:</td>
<td>
<input type="text" name="BooksType" id="BooksType"/>
</td>
</tr>

<tr>
<td>Author's Name</td>
<td>:</td>
<td>
<input type="text" name="AuthorsName" id="AuthorsName"/>
</td>
</tr>

<tr>
<td>Book ID</td>
<td>:</td>
<td>
<input type="text" name="No" id="No" />
</td></tr>

<tr>
<td>Purchase</td>
<td>:</td>
<td>
<input type="text" name="rm" id="rm" />
</td></tr>

<tr>
<td>Quantity</td>
<td>:</td>
<td>
<input type="text" name="Q_book" id="Q_book" />
</td></tr>

<tr>
<td colspan="2" align="left">
<input type="submit" name="submit" value="Submit" />
</td>
<td align="center"></td>
</tr>


</table>

</form>

</body>
</html>