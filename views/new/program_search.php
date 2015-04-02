<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>


<body>
<p align="center"><strong>Search Program</strong></p>
<form name="form1" method="post" action="program_search.php">
  <div align="center">
    <p>PROGRAM CODE : 
      <input name="PROG_CODE" type="text" id="PROG_CODE">
    </p>
    <p>
      <input name="cari" type="submit" id="cari" value="CARI">
    </p>
  </div>
</form>
<p align="center"><strong></strong></p>
<p>
<?php
  include 'dbconnect.php';

  $PROG_CODE = $_POST['PROG_CODE'];

$q = "select * from program where PROG_CODE = '$PROG_CODE'";

$r = mysql_query($q) or die(mysql_error());

$row = mysql_fetch_array($r);

echo $row['PROG_CODE']."  ".$row['PROG_NAME];
?> </p>
</body>
</html>



