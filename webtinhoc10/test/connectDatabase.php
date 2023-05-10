<?php
    function connectDB(){
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "book";

        //connect database
        $cn = mysqli_connect($host, $user, $pass, $db) or die("Cannot connect");
        return $cn;
    }

    function disconnectDB($cn)
    {
        mysqli_close($cn);
    }
?>