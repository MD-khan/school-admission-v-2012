<?php 
include('config.php');
include('functions/connect.php');

$sql ='INSERT INTO subscriber VALUES (NULL, "'. $_REQUEST['name'].'", "'.$_REQUEST['division'].'", "'.$_REQUEST['e-mail'].'", "'.$_REQUEST['contact_no'].'")';

//exit($sql);

$con = connect_db();
 $result = mysql_query($sql,$con);

if ($result) {
	header('location: subscribe_confirm.php');
}

else {
	header('location: subscribe.php?y=failed');

}
?>