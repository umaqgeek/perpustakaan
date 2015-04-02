<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<?php
   include 'dbconnect.php';

   $PROG_CODE = $_GET['PROG_CODE'];

   $q = "select * from program 
          where PROG_CODE = '$PROG_CODE' ";

   $r = mysql_query($q) or die(mysql_error());

   $row = mysql_fetch_array($r);
?>

<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<p align="center"><strong>UPDATE PROGRAM INFORMATION</strong></p>
<form name="form1" method="post" action="programe_process.php">
  <p>PROGRAM CODE : 
    <input name="PROG_CODE" type="text" id="PROG_CODE"  value = "<?php echo $row['PROG_CODE']; ?>" readonly>
  </p>
  <p>PROGRAM NAME : 
    <input name="PROG_NAME" type="text" id="PROG_NAME" value = "<?php echo $row['PROG_NAME']; ?>">
  </p>
  <p>SUBMISSION DATE : 
    <input name="SUB_DATE" type="text" id="SUB_DATE" value = "<?php echo $row['SUB_DATE']; ?>">
  </p>
  <p> 
    <input name="update" type="submit" id="update" value="UPDATE">
    <input name="reset" type="reset" id="reset" value="RESET">
  </p>
  <p>&nbsp;</p>
</form>
<p>&nbsp; </p>
</body>
</html>


