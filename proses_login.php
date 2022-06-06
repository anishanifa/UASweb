<?php
    require '+koneksi.php';

    function proses_login($username, $password){
        session_start();
        $sql = "SELECT * FROM member WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($GLOBALS['host'], $sql);
        if (mysqli_num_rows($result) > 0)
        {
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            header("Location: home.php");
        }
        return $result;
    }
?>