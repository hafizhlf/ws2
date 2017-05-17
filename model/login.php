<?php
    include_once ("../control/function.php");
    if(login($_POST['username'], $_POST['password'], $conn)){
        echo "success";
    } else {
        echo "fail";
    }
?>