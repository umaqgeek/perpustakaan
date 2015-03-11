<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<link rel="stylesheet" type="text/css" href="../css/lay_menu.css" />
<link rel="stylesheet" type="text/css" href="../css/susun_menu.css" />
<link rel="stylesheet" href="../css/Admin_ManageUser_css.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Library System</title>
</head>

<body bgcolor="#CCCCCC">
<div id="container">
  
  <div id="Header">
    <h1 align="center"><b>Library System</b></h1>
</div>


   <div align="center"><!--<li><a href='?logout=true'>Logout</a></li>-->
    <h1>Welcome staff</h1>
    <p><a href="<?php echo base_url()?>" >LogOut</a></p>
    <p>&nbsp;</p>
    <ul>
      <li>
        <div align="left"><a href="<?php echo base_url()?>directLoanPage">Approve Loan</a></div>
      </li>
      <li>
        <div align="left"><a href="<?php echo base_url()?>directRegisterPage">Register</a></div>
      </li>
      <li>
        <div align="left"><a href="<?php echo base_url()?>directReturnPage">Return Book</a></div>
      </li>
      <li>
        <div align="left"><a href="<?php echo base_url()?>">Edit User Profile</a></div>
      </li>
    </ul>
   </div>
</div>

</div><!--Nav--></div>
</body>
</html>
