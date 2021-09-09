<?php
include_once "config.php";
session_start();
$insert=false;
if (isset($_POST['book'])) {
    $id = $_POST['id'];
    $_SESSION['id']=$id;
    $date = $_POST['date'];
    $_SESSION['date']=$date;
}
if (isset($_POST['confirm'])){
    $name=$_POST["name"];
    $age=$_POST["age"];
    $gender=$_POST["gender"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $bid=$_SESSION['id'];
    $dated=$_SESSION['date'];
    $usr=$_SESSION["username"];

    $sql="insert into booking (id,name,age,gender,email,mobile,journey_date,status,username) values($bid,'$name','$age','$gender','$email',$phone,'$dated','booked','$usr')";
    mysqli_query($con,$sql);
    mysqli_query($con,"UPDATE route SET seats=(seats-1) WHERE id=$bid");
    header('location: home.php');
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        .header{
        border: 1px solid red;
        background-color: #633666;
        border-radius: 25px;
        margin-bottom: 60px;
    }
    .header h1{
        color: #fea04f;
        text-align: center;
    }
    span{
        color: red;
    }
    .content{
        width: 1000px;
        margin: auto;
        padding: 20px;
        border: 1px solid blue;
        border-radius: 12px;
        font-weight: bolder;
        font-size: 20px;
        text-align: center;
        background-color:#e1ab63;
    }
    .content h2{
        text-align: center;
        font-size: 20px;
    }
    .content h3{
        font-size: 20px;
        display: inline-block;
    }
    .content input{
        width: 100%;
        margin:auto;
        padding:12px 0px 12px 4px;;
    }
    .content input[type="date"]:hover{
            background-color: white;
            color: black;
    }
    .content input[type="radio"]{
        width:20px;
    }
    .content textarea{
        width: 100%;
        margin:auto;
    }
    .content input:hover{
        background-color:#58f186;
        color: black;
        font-size: 15px;    
    }

    .content textarea:hover{
        background-color:#58f186;
        color: black;
        font-size: 15px;    
    }

    .content input[type="submit"]{
        margin-bottom: 20px;
    }
    .content input[type="submit"]:hover{
        background-color: black;
        color: white;
        transition:all 1s ease-in;
        transform: scale(0.95);
        border-radius: 12px;
        margin-bottom: 20px;
    }

    .content input[type="reset"]:hover{
        background-color: black;
        color: white;
        transition:all 1s ease-in;
        transform: scale(0.95);
        border-radius: 12px;
    }
    /* .content input[type=checkbox]{
        width:20px;
    } */
    </style>
</head>
<body>
    <?php include_once "navbar.php"; ?>
        <form action="/bus/confirm.php" method="post">
        <div class="content">
            <h1>Passenger Details</h1>
            <h1><span>*</span>Enter your details correctly<span>*</span></h1>
            <h2>Name</h2>
            <input type="text" placeholder="Enter your name"  name="name" ><br>
            <h2>Age</h2>
            <input type="number" name="age" placeholder='Enter your Age' required></input><br>
            <h2>Email</h2>
            <input type="email" placeholder="Enter your email" name="email" ><br>
            <label for='gender'>Gender</label><br>
                    <input type="radio" name="gender" value="Male" required>
                    <label for="gender1">Male</label><br>
                    <input type="radio" name="gender" value="Female" required>
                    <label for="gender2">Female</label><br>
            <h2>Phone Number</h2>
            <input type="number" placeholder="Enter your Mobile No" name="phone" ><br>  
            <br>  
            <input type="submit" placeholder="Submit" name='confirm'><br>
            <input type="reset" placeholder="Reset">
        </div>
    </form>

</body>
</html>