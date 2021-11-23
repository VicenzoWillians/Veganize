<?php
    $con=mysqli_connect("us-cdbr-east-04.cleardb.com", "b10b9bf7f244e5", "78c121b2");

    if(!$con){
        echo mysqli_connect_error($con);
    }

    $db=mysqli_select_db($con, "heroku_0d03552c8b703cf");

    if(!$db){
        echo mysqli_error($con);
    }


?>