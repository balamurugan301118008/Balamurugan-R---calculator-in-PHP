<?php

require 'connections.php';

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

    if($inputone && $inputtwo && $operator){
        try{
            $insert_values = $pdo->prepare("INSERT INTO history(inputOne,operator,inputTwo,result)values('$inputone','$operator','$inputtwo','$result')");
            $insert_values->execute();
             header("location:/fetch.php");
        }
        
        catch (Exception $e) {
            die("connections problem" . $e->getMessage());
        }
    }

require 'index.html';

?>