<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    </style>
</head>
<body>
    <?php include_once "navadmin.php"; ?>
<div class="container">
        <table class="table" id="myTable" border="1">
            <thead>
                <tr>
                    <th scope="col">Bus id</th>
                    <th scope="col">Booking id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th> 
                    <th scope="col">Gender</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Journey date</th>
                    <th scope="col">Status</th> 
                </tr>
            </thead>
            <tbody>
                <?php 
            // $sql="SELECT * FROM note_record";
            // $result=mysqli_query($con,$sql);
            include_once "config.php";
            $sql="select * from booking ";
            $result=mysqli_query($con,$sql);
            $Sno=0;
            while($row=mysqli_fetch_assoc($result))
            {
                $Sno = $Sno + 1;
                echo "<tr>
                
                <td>".$row["id"]."</td>
                <td>".$row["bookingid"]."</td>
                <td>".$row["name"]."</td>
                <td>".$row["age"]."</td>
                <td>".$row["gender"]."</td>
                <td>".$row["email"]."</td>
                <td>".$row["mobile"]."</td>
                <td>".$row["journey_date"]."</td>
                <td>".$row["status"]."</td>
                </tr>";
                
            }
            ?>

            </tbody>
        </table>
    </div>
</body>
</html>