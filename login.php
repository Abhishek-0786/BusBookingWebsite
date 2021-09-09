<?php
include_once "config.php";
$error=false;
$login=false;
if($_SERVER['REQUEST_METHOD']=="POST")
{
  $username=$_POST["username"];
  $password=$_POST["password"];
  
  $sql="select * from users where Username='$username'";
  $result=mysqli_query($con,$sql);
  $num=mysqli_num_rows($result);
  if($num==1)
  {
    while($row=mysqli_fetch_assoc($result))
    {
      if(password_verify($password,$row['password']))
      {
        $login=true;
        session_start();
        $_SESSION["loggedin"]=true;
        $_SESSION["username"]=$username;
        // header("location:welcome.php");
      }
    }
  }
  else
  {
    $error=true;
  }
  
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Registration form</title>
    <style type="text/css">
        .header {
            border: 1px solid red;
            background-color: #633666;
            border-radius: 25px;
            margin-bottom: 60px;
        }

        .header h1 {
            color: #fea04f;
            text-align: center;
        }

        span {
            color: red;
        }

        .content {
            width: 1000px;
            margin: auto;
            padding: 20px;
            border: 1px solid blue;
            border-radius: 12px;
            font-weight: bolder;
            font-size: 20px;
            text-align: center;
            background-color: #e1ab63;
        }

        .content h2 {
            text-align: center;
            font-size: 20px;
        }

        .content h3 {
            font-size: 20px;
            display: inline-block;
        }

        .content input {
            width: 100%;
            margin: auto;
            padding: 12px 0px 12px 4px;
            ;
        }

        .content input[type="date"]:hover {
            background-color: white;
            color: black;
        }

        .content input[type="radio"] {
            width: 20px;
        }

        .content textarea {
            width: 100%;
            margin: auto;
        }

        .content input:hover {
            background-color: #58f186;
            color: black;
            font-size: 15px;
        }

        .content textarea:hover {
            background-color: #58f186;
            color: black;
            font-size: 15px;
        }

        .content input[type="submit"] {
            margin-bottom: 20px;
        }

        .content input[type="submit"]:hover {
            background-color: black;
            color: white;
            transition: all 1s ease-in;
            transform: scale(0.95);
            border-radius: 12px;
            margin-bottom: 20px;
        }

        .content input[type="reset"]:hover {
            background-color: black;
            color: white;
            transition: all 1s ease-in;
            transform: scale(0.95);
            border-radius: 12px;
        }

        .content input[type=checkbox] {
            width: 20px;
        }
    </style>
</head>

<body>
    <?php include_once "navbar.php" ?>
    <form name="contactform" action="/bus/login.php" method="post">
        <div class="content">
            <h1>Please login here</h1>
            <h1><span>*</span>Enter your details correctly<span>*</span></h1>
            <h2>UserName</h2>
            <input type="text" placeholder="Enter your Username" name="username"><br>
            <h2>Enter your password</h2>
            <input type="password" placeholder="Enter your password" name="password"><br>
            <br>
            <input type="submit" placeholder="Submit" name="submit"><br>
        </div>
    </form>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <?php include_once "footer.php" ?>
</body>

</html>