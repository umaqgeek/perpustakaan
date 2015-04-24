<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<link rel="stylesheet" type="text/css" href="../css/lay_menu.css" />
<link rel="stylesheet" type="text/css" href="../css/susun_menu.css" />
<link rel="stylesheet" href="../css/Admin_ManageUser_css.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Return Approve Page</title>
</head>

<body bgcolor="#CCCCCC">
<div id="container">
  
  <div id="Header">
    <h1 align="center"><b>Return Approve Page</b></h1>
</div>

<div id="Nav">

<nav>
<ul>
<li><a href="<?php echo base_url()?>directStaffPage">Staff Page</a></li>
<!--<li><a href='?logout=true'>Logout</a></li>-->
</ul>
</nav>
</div><!--Nav--></div>
<div align="center">User ID , BookCode and Loan Day
</div>
<form action="<?php echo base_url()?>deleteBorrowProcess" method="post" class="table" >
<table align="center">

<tr>
<td>User Ic Number</td>
<td>:</td>
<td>
<?php echo($userID);?>
<input name="userID" type="hidden" value="<?php echo($userID);?>" />
</td>
</tr>

<tr>
<td>Book Code Id</td>
<td>:</td>
<td>
<?php echo $bookID;?>
<input name="bookID" type="hidden" value="<?php echo($bookID);?>" />
</td>
</tr>

<tr>
<td>Loan Day</td>
<td>:</td>
<td>
<?php echo $loanDay;?>
<input name="loanDayTime" type="hidden" value="<?php echo($loanDayTime);?>" />
<br />
<?php echo($loanDayTime);?>
</td>
</tr>

<tr>
<td>Amount of Day</td>
<td>:</td>
<td>
<?php echo $amountOFDay;?>
</td>
</tr>

<tr>
<td>Penalty</td>
<td>:</td>
<td>
*will add</td>
</tr>

<tr>
<td colspan="3" align="center">
<input type="submit" name="approve" value="Approval Return" />
</td>
</tr>
</table>
</form>
</body>
</html>