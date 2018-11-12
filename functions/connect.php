<?php 

function connect_db() {
	$con = mysql_connect(HOST_NAME,DB_USER, DB_PASS);
		if ($con) {
			mysql_select_db(DB_NAME, $con);
			return($con);
	}
else {
		exit('Error: ' .mysql_error());
	}
		
}


?>