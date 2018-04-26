<?php
/**
* 
*/
// include_once '../modules/utils.class.php';
include dirname(__FILE__).'/../modules/utils.class.php';

class Commande extends Utils
{

	public static function select($table, $rows = '*', $where = null, $order = null, $limit = null) {
        // Create query from the variables passed to the function
        $sql = 'SELECT ' . $rows . ' FROM ' . $table;
        if ($limit != null) {
            $sql = 'SELECT TOP ' . $limit . ' ' . $rows . ' FROM ' . $table;
        }
        if ($where != null) {
            $sql .= ' WHERE ' . $where;
        }
        if ($order != null) {
            $sql .= ' ORDER BY ' . $order;
        }
        
        // var_dump($sql); die();
    	$cnx=Utils::connecter_db();
        $pr = $cnx->prepare($sql);
        $pr->execute();

        return $pr->fetchAll(PDO::FETCH_OBJ);

    }

}

?>