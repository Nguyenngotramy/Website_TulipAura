<?php 
include_once('connect.php');

function get_menu(){
    global $db;
    $query = 'SELECT * FROM menu';
    try{
        $statement = $db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;
    }catch(PDOException $e) {
        display_db_error($e->getMessage());
    }
}
