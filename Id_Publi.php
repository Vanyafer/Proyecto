<?php

	if($_SERVER['REQUEST_METHOD']=='POST'){

$GLOBALS['id_p'] = $_POST['idp'];
	echo $GLOBALS['id_p'];


}
?>