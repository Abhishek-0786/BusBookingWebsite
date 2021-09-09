<?php
include_once "config.php";
session_start();
$error=false;
$login=false;
if($_SERVER['REQUEST_METHOD']=="POST")
{
  $from=$_POST["from"];
  $to=$_POST["to"];
  $date=$_POST["date"];
  $ndate=date("d-m-Y", strtotime($date));
  
  $sql="select * from route where source='$from' and destination='$to' ";
  $result=mysqli_query($con,$sql);
  $row=mysqli_fetch_assoc($result);
  
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buses Route</title>
    <style>
        .container {
            /* background-color: #ffc6c6; */
            padding: 20px;
            margin: 20px;
            text-align: center;
            /* width: 48%; */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #myTable {
            width: 100%;
            height: 190px;
            background-color: beige;
        }

        .btn {
            background-color: lightcoral;
            color: lightgoldenrodyellow;
            border: lightgreen;
            border-radius: 10px;
            padding: 10px;
            margin: 10px;

        }

        .btn:hover {
            background-color: limegreen;
        }
    </style>
</head>

<body>

    <?php include_once "navbar.php" ?>
    <div class="container">
        <table class="table" id="myTable" border="1">
            <thead>
                <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Source</th>
                    <th scope="col">Destination</th>
                    <th scope="col">Arrival time</th>
                    <th scope="col">Departure time</th>
                    <th scope="col">Fare</th>
                    <th scope="col">Seats</th>
                </tr>
            </thead>
            <tbody>
                <?php 
            // $sql="SELECT * FROM note_record";
            // $result=mysqli_query($con,$sql);
            $sql="select * from route where source='$from' and destination='$to' ";
            $result=mysqli_query($con,$sql);
            $Sno=0;
            while($row=mysqli_fetch_assoc($result))
            {
                $Sno = $Sno + 1;
                echo "<tr>
                <th scope='row'>".$Sno."</th>
                <td>".$row["bus_name"]."</td>
                <td>".$row["source"]."</td>
                <td>".$row["destination"]."</td>
                <td>".$row["arrival_time"]."</td>
                <td>".$row["departure_time"]."</td>
                <td>".$row["fare"]."</td>";
                if($row['seats']<10){echo "<td><b style='color:red;'>".$row['seats']."</b></td>";}
                else{ echo "<td><b style='color:green;'>".$row['seats']."</b></td>";}

                echo   "<form method='POST' action='/bus/confirm.php'>
                <input name='id' type='hidden' value=".$row['id']."></input>
                <input name='date' type='hidden' value=".$ndate."></input>
                <td>";
                if($row['seats']==0){echo "<span style='color:red;background-color:#f5cbcb;'><b>BOOKING CLOSED</b></span>";}
                else{ echo "<button type='submit' name='book' class='btn'>Book Now</button>";}
        echo    "</td>
                </form>";
                
            }
            ?>

            </tbody>
        </table>
    </div>
</body>

</html>