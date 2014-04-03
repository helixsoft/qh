<?php

include('../../../wp-load.php');

$ml=$_POST['ml'];

$ins="insert into wp_subscribe_data(subs_email)values('$ml')";

$exe=mysql_query($ins);

if($exe>0){
	echo "Save";
}
else{
	echo "Error";
}

?>