<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booked</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        .Book{
    width: 70%;
    margin: auto;
    text-align: center;
    background-color: rgb(105, 31, 175);
        }
        .marq{
            color:Green;
            font-size:24px;
        }
        .Status{
            font-size: 20px;
            margin-left: 45%;
        }

    </style>
</head>
<body >
<img class="bg" src="https://cdn5.newsnationtv.com/images/2021/03/09/indian-railway-irctc-88.jpg" alt="IRCTC image">
    
    <div class="Book" >
        <h1>Booked Status</h1>
    </div>
    <div class="Status" >
    <?php
        
        $FName=$_POST["FName"];
        $LName=$_POST["LName"];
        $Email=$_POST["email"];
        $Gender=$_POST["gender"];
        $FromName=$_POST["FromName"];
        $ToName=$_POST["ToName"];
        $Class=$_POST["class"];
        $Date=$_POST["date"];
        $Prefer=$_POST["Preference"];
        print('Name:'."". $FName."".$LName . "<br><br>");
        print('Email:'."". $Email . "<br><br>");
        print('Gender:'."".  $Gender . "<br><br>");
        print('From:'."".  $FromName . "<br><br>");
        print('To:'."".  $ToName ."<br><br>");
        print('Class:'."". $Class . "<br><br>");
        print('Date:'."".  $Date . "<br><br>");
        print('Preference:'."".  $Prefer . "<br><br>");
        $connect=mysqli_connect('localhost','root','','irctc');
        if ($connect==false)
        {
            die('Connect Error'.mysqli_connect_error());
        }
        else
        {
            echo "connected<br><br>";
        }
        $query="insert into irctc values('$FName','$LName','$Email','$Gender','$FromName','$ToName','$Class','$Date','$Prefer')";
        mysqli_query($connect,$query);
        echo "Reserved";
        mysqli_close($connect);
    ?>
    </div>
    <br><br>
    <marquee class="marq" >Confirmed</marquee>
    

    
</body>
</html>