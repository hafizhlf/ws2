<?php
    session_start();
    //$conn = new mysqli("mysql.idhostinger.com","u805653604_hend","belajar","u805653604_ws2");
    $conn = new mysqli("localhost","root","","ws2");
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    function login($username, $password, $conn) {
        $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
        $result = $conn->query($sql);
        if($result->num_rows == 1) {
            $row = $result->fetch_row();
            $_SESSION['username'] = $row[3];
            return true;
        } else {
            return false;
        }
        $conn->close();
    }

    function logged(){
        if(isset($_SESSION['username'])){
            return true;
        } else {
            return false;
        }
    }

    function logout(){
        session_destroy();
    }

    function getUser($username, $conn) {
        $sql = "SELECT * FROM user WHERE username = '$username'";
        $result = $conn->query($sql);
        if ($result->num_rows == 1) {
            $row = $result->fetch_row();
            $fName = $row[1];
            $lName = $row[2];
            $username = $row[3];
            $thumb = $row[5];
            return array ($fName, $lName, $username, $thumb);
        }
        $conn->close();
    }

    function getPage($page) {
        if (empty($page)){
            return "view/dashboard.php";
        } else {
            return 'view/$page.php';
        }
    }

    function chPassword($password, $nPassword, $conn) {
        $username = $_SESSION['username'];  
        $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $result = $conn->query($sql);
        if ($result->num_rows == 1) {
            $sql = "UPDATE user SET password = '$nPassword' WHERE username='$username'";
            $conn->query($sql);
            return true;
        } else {
            return false;
        }
    }
    $conn->close();
?>