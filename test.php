<?php require 'modules/utils.class.php'; ?>


<?php
// phpinfo();
// try {
//  	$cnx = new PDO("sqlsrv:Server=127.0.0.1,1433;Database=donnees");
//  	$cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (Exception $e) {
//  	die(print_r($e->getMessage()));
// } 


// $pr=$cnx->prepare("select * from client");

// $pr->execute();
// $results = $pr->fetchAll(PDO::FETCH_OBJ);

// // echo "<pre>";
// // echo $results->CLIENT;
// // var_dump($results);
// // echo "<pre>";

// foreach ($results as $result) {
// 	if ($result->TEL) {
// 		echo $result->TEL . "<br>";
// 	}
// }

 ?>

 <?php 
$clients = Utils::get_alltest();
        echo "<pre>";
        echo $clients->CLIENT;
        //var_dump($clients);
        echo "<pre>";

        foreach ($clients as $client) {
          echo $client->TEL . "<br>";
        }
  ?>