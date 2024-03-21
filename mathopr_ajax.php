<?php
    error_reporting(0);
    function P($data)
    {
        echo "<pre>";
        print_r($data);
         echo "</pre>";
    }

    $n1 = $_POST['num1'];
    $n2 = $_POST['num2'];
    $opr = $_POST['Opr'];

    switch($opr) {
    
        case '+': {
    
            $result = $n1 + $n2;
            break;
        }
    
        case '-': {
    
            $result = $n1 - $n2;
            break;
        }
    
        case '*': {
    
            $result = $n1 * $n2;
            break;
        }
    
        case '/': {
    
            $result = $n1 / $n2;
            break;
        }
    }

    echo $result;
?>