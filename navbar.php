<?php 
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin= true;
}
else{
  $loggedin = false;
}

echo '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navbar</title>
    <style>
        .navbar {
            display: flex;
            background-color: #724364;
            color: white;
            border-radius: 10px;
        }

        .navbar ul {
            display: flex;
            /* background-color: black; */
            color: white;
        }

        .navbar li {
            /* background-color: black; */
            color: white;
            list-style: none;
            padding: 20px;
            font-size: 20px;
            font-weight: bold;
        }

        // .navbar li:hover {
        //      background-color: black; 
        //     background-color: brown;
        // }

        .navbar li a {
            color: green;
            text-decoration: none;
            color: white;
        }

        .navbar li a:hover {
            color: lightgreen;
            /* text-decoration: none;
            color: white; */
        }

        .navbar input {
            outline: none;
            position: relative;
            top: 27px;
            left: 871px;
            height: 35px;
            border-radius: 12px;
            text-align: center;
            width: 165px;
        }

        .navbar img {
            width: 122px;
            height: 100px;
        }

        .navbar button {
            height: 53px;
            position: relative;
            top: 8px;
            left: 824px;
            width: 122px;
            border-radius: 10px;
        }

        .navbar button a {

            font-weight: bolder;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <img src="img/bus-removebg-preview.png" alt="">
        <ul>
            <li><a href="/bus/home.php">Home</a></li>';
            if(!$loggedin)
            {
                echo '<li><a href="/bus/signup.php">Register</a></li>
                <li><a href="/bus/login.php">Login</a></li>';

            }
            if($loggedin)
            {

                echo '<li><a href="/bus/logout.php">Logout</a></li>';
                echo '<li><a href="/bus/booked_ticket.php">BookedTicket</a></li>';
            }
            echo '<button ><a href="/bus/adminlogin.php">Admin Portel</a></button>
        </ul>
    </div>
</body>

</html>';

?>