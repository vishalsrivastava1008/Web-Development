<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IRCTC Reservation</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <img class="bg" src="https://cdn5.newsnationtv.com/images/2021/03/09/indian-railway-irctc-88.jpg" alt="IRCTC image">
    <div class="head">
        <h1>Welcome to IRCTC</h1>
        <h3>Fill and submit the form for reservation.</h3>
    </div>
    <form class="form" action="Booked.php" method="POST">
        <fieldset>	
        <legend>Reservation</legend>
            Name:&nbsp;<input placeholder="First name" type="text" name="FName">&nbsp;&nbsp;
            <input placeholder="Last name" type="text" name="LName">
            <br>
            <br>Email :&nbsp; <input placeholder="Your email address" type="email" name="email">
        <br><br>Password :&nbsp; <input type="password" placeholder="password" name="pass">

            <br><br>Gender :&nbsp; 
            <input type="radio" name="gender"
            <?php if (isset($gender) && $gender=="male") echo "checked";?>
            value="Male">Male
            <input type="radio" name="gender"
            <?php if (isset($gender) && $gender=="female") echo "checked";?>
            value="Female">Female
            <input type="radio" name="gender"
            <?php if (isset($gender) && $gender=="other") echo "checked";?>
            value="Other">Other
            <br>
           
        <br>From:<input placeholder="Boarding Station name" type="text" name="FromName"><br>
        <br>To:<input placeholder="Destination Station name" type="text" name="ToName">

        <br><br>Class: &nbsp; 
        <input type="radio" name="class"
         <?php if (isset($class) && $class=="1AC") echo "checked";?>
            value="1AC">1AC 
        <input type="radio" name="class"
        <?php if (isset($class) && $class=="2AC") echo "checked";?>
            value="2AC">2AC 
        <input type="radio" name="class"
        <?php if (isset($class) && $class=="3AC") echo "checked";?>
            value="3AC">3AC 
        <input type="radio" name="class"
        <?php if (isset($class) && $class=="SL") echo "checked";?>
            value="SL">SL 
        <input type="radio" name="class"
        <?php if (isset($class) && $class=="2S") echo "checked";?>
            value="2S">2S
            <br>
        <br><br>
        Date: &nbsp;<input type="date" name="date" placeholder="Reservation Date"><br><br>
        Preference :&nbsp; <textarea name="Preference" placeholder="WS/AS"></textarea>
            <input type="submit" name="submit" value="Book">
        </fieldset>
        </form>
    
</body>
</html>