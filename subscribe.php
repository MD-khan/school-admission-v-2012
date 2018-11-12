<?php 
include('config.php');
include('functions/connect.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to <?=APP_TITLE?> :: SUBSCRIBE </title>
<script src="js/common_function.js" type="text/javascript"></script>
<style type="text/css">
<!--
.style1 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<form   action="#" onsubmit="return validated_subsrciber(this)">
<table width="635" height="432" border="0" align="center">
  <tr>
    <td height="128" colspan="7" bgcolor="#FFFFFF"><div align="top">
      <h1 align="center">Subsription Form </h1>
    </div></td>
  </tr>
  <tr>
    <td width="67" rowspan="12" align="left" valign="middle" bgcolor="#FFCC00"><p>&nbsp; </p>
    </td>
    <td colspan="6" bgcolor="#FFCC00">&nbsp; </td>
  </tr>
  <tr>
    <td width="50" height="50" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="75" >&nbsp; </td>
    <td width="3" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="341" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="1" rowspan="3" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="68" rowspan="3"  bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td height="21">&nbsp;</td>
    <td>First Name </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <td>&nbsp; </td>
    <td><div align="right">Last Name: </div></td>
    <td>:</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="right">Division</div></td>
    <td>:</td>
    <td><label>
	
	<select name="division" id="division">
	<option value="" selected>[Chose Yours] </option>
	<option>Dhaka</option>
	<option>Shylet</option>
	<option>Khulna</option>
	<option>Borisal</option>
	<option>Chitagong</option>
	<option>Rajshahi</option>
	</select>
	
	
	</label></td>
    <td rowspan="3" bgcolor="#FFFFFF">&nbsp;</td>
    <td rowspan="3" bordercolor="#3333CC" bgcolor="#FFCC00"><div align="center" class="style1"><a href="index.php">BACK 2 HOME</a></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td bgcolor="#FFFFFF"><div align="right">e-mail</div></td>
    <td>:</td>
    <td bgcolor="#FFFFFF"><input name="e-mail" type="text" id="e-mail" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="right">Contant No.</div></td>
    <td>:</td>
    <td><input name="contact_no" type="text" id="contact_no" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" value="Submit" /></td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="6" bgcolor="#FFCC00"><div align="center">Copy right © 2009  www. schooladmissiom.com.bd</div></td>
  </tr>
</table>
</form>
</body>

</html>
