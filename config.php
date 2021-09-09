<?php
    
    define('DB_SERVER',"localhost:3307");
    define('DB_USERNAME',"root");
    define('DB_PASSWORD',"");
    define('DB_NAME',"bus");

    $con=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

    if($con)
    {
        // echo "Connection established succesfully";
    }
    else
    {
        echo "error".mysqli_connect_error();
    }
?>