<?php
include_once "config.php";
$insert=false;
$error=false;
$showError="";
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $cpassword=$_POST["cpassword"];
    $mobile=$_POST["mobile"];

    $existsSql="select * from users where Username='$username'";
    $result=mysqli_query($con,$existsSql);
    $rows=mysqli_num_rows($result);
    if($rows>0)
    {
        $error=true;
        $showError="Username already taken";
    }
    else 
    {
        if(($password==$cpassword))
        {
            $hash=password_hash($password,PASSWORD_DEFAULT);
            $sql="insert into users (username,email,password,mobile) values('$username','$email','$hash','$mobile')";
            $result=mysqli_query($con,$sql);
            if($result)
            {
                $insert=true;
            }
        }
        else
        {
            $error=true;
            $showError="Your Passwords Should match";
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration form</title>
    <style type="text/css">
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
    .content input[type=checkbox]{
        width:20px;
    }
    </style>
</head>
<body>
    <?php include_once "navbar.php" ?>
    <br>
    <!-- <?php include_once "sidepanel1.php" ?> -->
    <?php
    if($insert)
    {
        echo '<script> alert("Your account has been created");  </script>';
    }
    if($error)
    {
        echo '<script> alert("Your username is already taken or passwords do not match");  </script>';
        // header("location:adminlogin.php");
    }
    ?>
    <form action="/bus/signup.php" method="post">
        <div class="content">
            <h1>Please Register here</h1>
            <h1><span>*</span>Enter your details correctly<span>*</span></h1>
            <h2>Name</h2>
            <input type="text" placeholder="Enter your name"  name="username" ><br>
            <h2>Email</h2>
            <input type="email" placeholder="Enter your email" name="email" ><br>
            <h2>Enter your password</h2>
            <input type="password" placeholder="Enter your password" name="password" ><br>
            <h2>Confirm your password</h2>
            <input type="password" placeholder="Confirm your password" name="cpassword" ><br>
            <h2>Phone Number</h2>
            <input type="number" placeholder="Enter your Mobile No" name="mobile" ><br>  
            <br>  
            <input type="submit" placeholder="Submit"><br>
            <input type="reset" placeholder="Reset">
        </div>
    </form>
    <?php include_once "footer.php" ?>

</body>
</html>