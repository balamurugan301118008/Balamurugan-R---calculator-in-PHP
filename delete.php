<?php

require 'connections.php';
$id = $_POST["delete"];

try {
    $delete = $pdo->prepare("DELETE from history where id = '$id'");
    $delete->execute();
    header("location:/fetch.php");

} catch (Exception $e) {
    die("can not delete this row" . $e);
}
require "index.html";

?>