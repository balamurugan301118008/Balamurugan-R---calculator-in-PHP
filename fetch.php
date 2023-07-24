<?php
require 'connections.php';

try {
    $fetch_values = $pdo->prepare("select * from history");
    $fetch_values->execute();
    
    $stores = $fetch_values->fetchAll(PDO::FETCH_OBJ);
} catch (Exception $e) {
    die("Didn't fetch the values.$e");

}

require "index.html";
?>