<?php
    include_once ("../control/function.php");
    if($_POST['nPassword'] == $_POST['cPassword']){
        if (chPassword($_POST['password'], $_POST['nPassword'], $conn, $options)) {
            echo "berhasil";
        } else {
            echo "gagal";
        }
    } else {
        echo "salah";
    }
?>