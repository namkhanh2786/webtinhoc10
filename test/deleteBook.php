<?php
    include "connectDatabase.php";
    $cn = connectDB();

    //get ID
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];

        
        $sql = "DELETE FROM book WHERE id='$id'";

        $result = mysqli_query($cn, $sql);

        if($result == false)
        {
            echo "Không Thể Xóa Sách";
        }

        disconnectDB($cn);
        //return to index page
        header("location: adminindex.php");
    }
?>