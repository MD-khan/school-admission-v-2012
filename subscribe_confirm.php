<?php 
include('config.php');
include('functions/connect.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to <?=APP_TITLE?> :: SUBSCRIBE </title>
<style type="text/css">
<!--
.style1 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-weight: bold;
}
.style2 {font-family: "Times New Roman", Times, serif}
-->
</style>
</head>

<body>
<form enctype="multipart/form-data"  action="subscribe_add.php">
<table width="431" height="432" border="0" align="center">
  <tr>
    <td height="128" colspan="7" bgcolor="#FFFFFF"><div align="top"><img src="image/admission-pic.jpg" width="768" height="155" align="middle" /></div></td>
  </tr>
  <tr>
    <td width="151" rowspan="13" align="left" valign="middle" bgcolor="#FFCC00"><p>Forms</p>
    <p>Admission Notice</p>
    <p>Result</p>
    <p>Subscribe</p></td>
    <td colspan="6" bgcolor="#FFCC00">Schooladmission.com</td>
  </tr>
  <tr>
    <td width="55" height="50" bgcolor="#FFFFFF"><img  src="image/flowar2.JPG" width="80" height="80" /></td>
    <td colspan="3" bgcolor="#FF9900"><h1 align="center"><span class="style2">  </span>Thanks ! </h1></td>
    <td width="19" rowspan="4" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="169" rowspan="4" bgcolor="#FF9900">&nbsp;</td>
  </tr>
  <tr>
    <td height="21">&nbsp;</td>
    <td width="98">&nbsp;</td>
    <td width="11">&nbsp;</td>
    <td width="242">&nbsp;</td>
  </tr>
  <?php 
  $sql = 'SELECT * FROM subscriber ORDER BY subcr_id desc';
  $con = connect_db();
  $result = mysql_query($sql,$con);
	 $subcrb = mysql_fetch_array($result) ; 
  		
  ?>
  <tr>
    <td colspan="4">  <p>Thank You<strong>
      <?=$subcrb['name'] ?>
    </strong>. You are now subscriber in our Website.As a Subscriber you will get School Admision information which school are connected with our site. You can Download School Admission <strong>Form</strong> and send it to related school.Very Sepecial Serviceses is that you can get result by SMS. Just Type School ID and send it to 7171 Number. Within a few second you will get The Result on Your Mobile Screen.  </p>      </td>
    </tr>
  <tr>
    <td>&nbsp; </td>
    <td></td>
    <td>&nbsp; </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td></td>
    <td>&nbsp; </td>
    <td><label></label></td>
    <td rowspan="3" bgcolor="#FFFFFF">&nbsp;</td>
    <td rowspan="3" bordercolor="#3333CC" bgcolor="#FFCC00"><div align="center" class="style1"><a href="index.php">BACK 2 HOME</a></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFFF"> </td>
    <td>&nbsp; </td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td> </td>
    <td>&nbsp; </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
	 
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="6" bgcolor="#FFCC00"><div align="center">Copy right © 2009  www. schooladmissiom.com.bd</div></td>
  </tr>
</table>
</form>
</body>

</html>
