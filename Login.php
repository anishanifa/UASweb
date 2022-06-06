<?php
    require "Koneksi.php";

    function login($username, $password){
        session_start();
        $sql = "SELECT * FROM member WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($GLOBALS['koneksi'], $sql);
        if (mysqli_num_rows($result) > 0)
        {
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            header("Location: index.php");
        }
        return $result;
    }
?>