<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<link rel="stylesheet" type="text/css" href="../css/lay_menu.css" />
<link rel="stylesheet" type="text/css" href="../css/susun_menu.css" />
<link rel="stylesheet" href="../css/Admin_ManageUser_css.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User Search Page</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="javascript" type="text/javascript">	
	function actionProceed(x,y)
	{
		//document.getElementById("ic").value	= x;
		document.writeln("Test this " + x + y);
		document.writeln("Test this2 ");	
		//document.writeln(document.getElementById("ic").value);
		var temp = document.getElementById("formList");
		if(y == 1){
			
			temp.action = "/changeFix.php";
			document.writeln("Test update " + y);
		}
		else{
			//document.getElementById("formList").action = '<?php echo base_url()?>delete';
			document.writeln("Test delete " + y);
		}
		document.writeln("Test huhuhu submit ");
		temp.submit();
		
	}
</script>
</head>

<body bgcolor="#CCCCCC">
<div id="container">
  
  <div id="Header">
    <h1 align="center"><b>USER LISTING</b></h1>
</div>

<div id="Nav">

<nav>
<ul>
<li><a href="<?php echo base_url()?>directStaffPage">Staff Page</a></li>
</ul>
</nav>
</div><!--Nav--></div>

   <form method="post" id="formList" name="formList" action="">
   <input type="hidden" id="ic" name = 'ic' value="fghfd" />
  <table width="800" border="1" align="center">
  
    <tr> 
      <td width="76"><div align="center"><strong>User Ic Number</strong></div></td>
      <td width="156"><div align="center"><strong>User Name</strong></div></td>
	  <td width="63"><div align="center"><strong>Password</strong></div></td>
      <td width="112"><div align="center"><strong>Address</strong></div></td>
      <td width="114"><div align="center"><strong>Number of Loan Left</strong></div></td>
      <td width="110"><div align="center"><strong>Penalty</strong></div></td>
      <td width="123"><div align="center"><strong>Remark</strong></div></td>
    </tr>
    <?php
      $count=0;	  
	  foreach($result as $row):
	  $count ++;
   ?>
    <tr> 
      <td><div align="center"><?php echo $row->ic; ?></div></td>
      <td><div align="center"><?php echo $row->name; ?></div></td>
	  <td><div align="center">*****</div></td>
      <td><div align="center"><?php echo $row->address; ?></div></td>
      <td><div align="center"><?php echo $row->numLoan; ?></div></td>
      <td><div align="center"><?php echo $row->penalty; ?></div></td>
      <td><div align="center">
      <button onclick="actionProceed(<?php echo $row->ic?> , 1);" type="button">UPDATE</button>
      <button onclick="actionProceed(<?php echo $row->ic?> , 2);" type="submit">DELETE</button></div>
      </td>
    </tr>
    <?php
   	endforeach;
   ?>
  </table></form>
  <p><div align="center">Search Result <?php echo $count ?></div></p>
  <p></p>
</div>
</body>
</html>



