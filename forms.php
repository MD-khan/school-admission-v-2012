<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {
	color: #FF9966;
	font-weight: bold;
}
-->
</style>
</head>

<body>

<table width="761" height="403" border="0" align="center">
  <tr>
    <td height="128" colspan="5" bgcolor="#FFFFFF"><div align="top"><img src="image/floyd1.jpg" width="755" height="127" align="middle" /></div></td>
  </tr>
  <tr>
    <td width="192" rowspan="4" bgcolor="#FFFFFF"><ul id="MenuBar1" class="MenuBarVertical">
      <li class="style1">Forms        </li>
      <li><a href="#">Item 2</a>
      <ul>
                  <li><a href="#">Item 2.1</a></li>
                  <li><a href="#">Item 2.2</a></li>
          </ul>
      </li>
      <li><a class="MenuBarItemSubmenu" href="#">Item 3</a>
          <ul>
            <li><a class="MenuBarItemSubmenu" href="#">Item 3.1</a>
                <ul>
                  <li><a href="#">Item 3.1.1</a></li>
                  <li><a href="#">Item 3.1.2</a></li>
                </ul>
            </li>
            <li><a href="#">Item 3.2</a></li>
            <li><a href="#">Item 3.3</a></li>
          </ul>
      </li>
      <li><a href="index.php">Back2home</a></li>
    </ul>
    </td>
    <td width="68">&nbsp;</td>
    <td width="70">&nbsp;</td>
    <td width="72">&nbsp;</td>
    <td width="338">&nbsp;</td>
  </tr>
 
  <?php
$link=mysql_connect("localhost","root", "")
or die("Connection error"); // connect to the mysql server nad if fails then show error msg

// database connectivity
mysql_select_db("school",$link)
or die("db connectivity failed");

//query the data
$sql="select * from forms";
$recordset=mysql_query($sql,$link);
?>
  <?   
while($row=mysql_fetch_array($recordset))
{ ?>
<tr>
<td><? echo $row[sname];?></td>
    <td>&nbsp;</td>
    <? }?>
  </tr>
  
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<script type="text/javascript">
<!--
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
//-->
</script>

</body>

</html>
