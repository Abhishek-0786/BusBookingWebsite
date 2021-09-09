<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Bus booking Website</title>
    <style>
        /* .container {
            border: 1px solid red;
        } */

        /* .container img{
            width: 100px;
            height: 100px;
        } */
        .first {
            width: 527px;
            height: 513px;

        }

        .second {
            width: 466px;
            height: 501px;
        }
        .book{
           background-color: lightcoral;
           text-align: center; 
           padding: 10px;
           margin: 10px;
           background-image:  linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(img/bacground2.jpg);
           /* background-repeat: no-repeat; */
           background-position: center center;

        }
        .book input{
            padding: 10px;
            margin: 10px;
            width: 50%;
        }
        .book h2{
            color: #ffc82d;;
        }
    </style>
</head>

<body>
    <?php include_once "navbar.php"?>
    <div class="container">
        <img src="img/bus banner.jpg" alt="" class="first">
        <img src="img/banner 2.jpg" alt="" class="second">
        <img src="img/banner 3.jpg" alt="" class="second">
    </div>
    
    <div class="book">
        <form action="/bus/booking.php" method="Post">
            <h2>From</h2>
            <input type="text" placeholder="From" name="from"> <br>
            <h2>To</h2>
            <input type="text" placeholder="To" name="to"> <br>
            <h2>Journey Date</h2>
            <input type="date" name="date"> <br>
            <input type="submit" placeholder="submit">
        </form>
    </div>
    <?php include_once "footer.php"?>
</body>

</html>