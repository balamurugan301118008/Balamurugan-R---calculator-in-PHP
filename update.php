<?php
require 'connections.php';
if(isset($_POST['update'])){
    try{
        $id = $_POST["update"];
        $inputone = $_POST["inputOne"];
        $operator = $_POST["operator"];
        $inputtwo = $_POST["inputTwo"];


    if ($operator == "+") {
        $result = $inputone + $inputtwo;
    } elseif ($operator == "-") {
        $result = $inputone - $inputtwo;
    } elseif ($operator == "*") {
        $result = $inputone * $inputtwo;
    } elseif ($operator == "/") {
        $result = $inputone / $inputtwo;
    }

        $update_values = "UPDATE history SET inputOne ='$inputone',operator ='$operator',inputtwo ='$inputtwo',result='$result' WHERE id='$id'";
    $data = $pdo->prepare($update_values);
    $data->execute();
    header("location: fetch.php");
    }
    catch (Exception $e){
        die("Update failed.$e");
    }
}





require 'edit.html';

?>
