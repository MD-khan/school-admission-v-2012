<?php 
include_once('config.php');
include_once('functions/comon_function.php');

?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 

$sql = 'SELECT * FROM `guestbook` ORDER BY id ';

$con = connect_db();
$result = mysql_query($sql, $con);

if($result && (mysql_num_rows($result) > 0) ) {
while($data = mysql_fetch_array($result) ) {

?>


<table width="200" border="1" align="center">
  <tr>
    <td><?=$data['name']?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <?php 
  
}
}
  
  ?>
  <tr>
    <td>name</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>message</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>