<?php
require 'connections.php';


if(isset($_POST['edit'])){
    $edit = $_POST['edit'];

    try{
        $edit_values = "SELECT * FROM history WHERE id = '$edit'";
        $data = $pdo->prepare($edit_values);
        $data->execute();
        $stores = $data->fetchAll(PDO::FETCH_OBJ);
        // print_r($data);
    }
    catch(Exception $e){
        die("selection failed.$e");
    }
}

require 'edit.html';

?>