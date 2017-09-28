<html>
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

<script src="js/jquery-ui.js">

   $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: false // Close upon selecting a date,
  });


   $('.timepicker').pickatime({
    default: 'now', // Set default time: 'now', '1:30AM', '16:30'
    fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
    twelvehour: false, // Use AM/PM or 24-hour format
    donetext: 'OK', // text for done-button
    cleartext: 'Clear', // text for clear-button
    canceltext: 'Cancel', // Text for cancel-button
    autoclose: false, // automatic close timepicker
    ampmclickable: true, // make AM PM clickable
    aftershow: function(){} //Function for after opening timepicker
  });
  </script>



</head>
<body>
<?php
if(isset($_POST['submit']))
{
  mysql_connect("localhost","root","asdf1234")||die("error");
mysql_select_db("hotel")||die("error");
$name = $_POST["name"];
$id = $_POST["idp"];
$number = $_POST["contno"];
$checkin = $_POST["dti"];
$checkout =$_POST["dto"];
$intime = $_POST["tmi"];
$outtime = $_POST["tmo"];
$advance = $_POST["adv"];
$roomno = $_POST["rno"];
mysql_query("insert into occupied values('".$name."','".$id."','".$checkin."','".$checkout."','".$intime."','".$outtime."','".$number."','".$advance."','".$roomno."')")||die("There is an error in booking the Room");

echo '<h2 class="header center orange-text"> Booked Successfully</h2>';
}
else
{?>
<div class="row">
            <form class="col s12" name="book" method="POST" action="book.php"><br><br><br>
                <h1 class="header center orange-text">Customer Info</h1>
                <div class="input-field col s3 offset-s3">
                    <input placeholder="Name" name="name" type="text" class="validate">
                    <input placeholder="ID Proof with Number" name="idp" type="text" class="validate" >
                    <input placeholder="Contact number" name="contno" type="text" class="validate">
                    <input type="date" placeholder="Check-in date(dd/mm/yyyy)" class="calendar" name="dti">
                    <input type="date" placeholder="Check-out date(dd/mm/yyyy)" class="calendar" name="dto">
                     <input type="text" placeholder="Check-in Time(10 AM)" class="timepicker" name="tmi">
                     <input type="text" placeholder="Check-out Time" class="timepicker" name="tmo">  
                     <input placeholder="Advance Amount" name="adv" type="text" class="validate">
                     <input placeholder="Room Number" name="rno" type="text" class="validate">                   
                     <input type="submit" class="waves-effect waves-light btn" value="Book " name= "submit">
                    </div>
                    </form>
                    </div>
<?php
    }
?>
                    </body>
                    </html>
                