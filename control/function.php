<?php
    session_start();
    //$conn = new mysqli("mysql.idhostinger.com","u805653604_hend","belajar","u805653604_ws2");
    $conn = new mysqli("localhost","root","","ws2");
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    $options = [
        'cost' => 12,
    ];

    function login($username, $password, $conn) {
        $sql = "SELECT * FROM user WHERE username = '$username'";
        $result = $conn->query($sql);
        if($result->num_rows == 1) {
            $row = $result->fetch_row();
            if (password_verify($password, $row[4])) {
                $_SESSION['username'] = $row[3];
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
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
    }

    function getPage($page) {
        if (empty($page)){
            return "view/dashboard.php";
        } else {
            return "view/$page.php";
        }
    }

    function chPassword($password, $nPassword, $conn, $options) {
        $username = $_SESSION['username'];
        $sql = "SELECT * FROM user WHERE username='$username'";
        $result = $conn->query($sql);
        $row = $result->fetch_row();
        if (password_verify($password, $row[4])) {
            $nPassword = password_hash($nPassword, PASSWORD_BCRYPT, $options);
            $sql = "UPDATE user SET password = '$nPassword' WHERE username='$username'";
            $conn->query($sql);
            return true;
        } else {
            return false;
        }
    }

    function activePage($page, $aPage){
        if ($page == $aPage) {
            return "active";
        }
    }

    function getAllUser($conn){
        $i = 0;
        $sql = "SELECT * FROM user";
        $result = $conn->query($sql);
        while($query = $result->fetch_row()){
            $return[$i] = $query;
            $i++;
        }
        return $return;
    }
?>