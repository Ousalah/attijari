<?php
include_once '../model/CommandeModel.php';

extract($_GET);
extract($_POST);

switch ($a) {

	case 'filter':
		var_dump($_POST);
		break;	

			
	default:
		header("location:../index.php");
		break;
}

?>