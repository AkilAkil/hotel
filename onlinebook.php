<html>
<?php
ob_start();
session_start();
?>
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
<title>Online Booking</title>
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
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">PR</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php">Home</a></li>
      
        
         
        <?php
        if(isset($_SESSION["uname"]) && $_SESSION["uname"] == "admin")
        {
          echo '<li class="right hide-on-med-and-down"><a href="#" >Admin</a></li>';
          echo '<li class="right hide-on-med-and-down"><a href="manage.php" >Manage</a></li>';
        echo '<li class="right hide-on-med-and-down"><a href="logout.php" >Logout</a></li>';
        
        }
        else if(isset($_SESSION["uname"]))
        {
          
          echo '<li class="right hide-on-med-and-down"><a href="logout.php" >Logout</a></li>';
          echo ' <li><a href =# > Hii <?php echo $_SESSION["uname"]; ?></a></li>';
        }


        else
        {
        echo '<li class="right hide-on-med-and-down"><a href="login.php">Login</a></li>';
        }
        ?>
          
</ul>
      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Home</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

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

mysql_query("insert into occupied (name,id,checkin,checkout,intime,outtime,number) values('".$name."','".$id."','".$checkin."','".$checkout."','".$intime."','".$outtime."','".$number."')")||die("There is an error in Bookin the Room");

echo '<h2 class="header center orange-text" align = "center align">You have Booked Successfully.We Will call You for Confirmation.<br>Thank You</h2>';
}
else
{?>
<div class="row">
            <form class="col s12" name="book" method="POST" action="onlinebook.php" onsubmit="return confirm('Are You Sure to Book the room');"><br><br><br>
                <h2 class="header center orange-text">Book Your Room</h2>
                <div class="input-field col s3 offset-s3 center">
                    <input placeholder="Name" name="name" type="text" class="validate">
                    <input placeholder="ID Proof with Number" name="idp" type="text" class="validate" >
                    <input placeholder="Contact number" name="contno" type="text" class="validate">
                    <input type="date" placeholder="Check-in date(dd/mm/yyyy)" class="calendar" name="dti">
                    <input type="date" placeholder="Check-out date(dd/mm/yyyy)" class="calendar" name="dto">
                     <input type="text" placeholder="Check-in Time(10 AM)" class="timepicker" name="tmi">
                     <input type="text" placeholder="Check-out Time" class="timepicker" name="tmo">  
                    <button type="submit" class=" waves-effect waves-light btn" name= "submit">Book 
                    <i class="material-icons right">send</i>
                    </button>
                    </div>
                    </form>
                    </div>
<?php
    }
?>

<div class="row"></div>
          <div class="row"></div>
            <div class="row"></div>
              <div class="row"></div>
              <div class="row"></div>
          <div class="row"></div>
            <div class="row"></div>
              <div class="row"></div>
              <div class="row"></div>
          <div class="row"></div>
            <div class="row"></div>
              <div class="row"></div>
              <div class="row"></div>
            <div class="row"></div>
              <div class="row"></div>
              <div class="row"></div>
               

 <footer class="page-footer teal" >
    <div class="container" >
      <div class="row">
        <div class="col l9 s12">
          <h5 class="white-text">Hotel History</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
       
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="https://www.facebook.com/Paradise"><i class="material-icons prefix">facebook</i>Facebook</a></li>
            <li><a class="white-text" href="https://www.gmail.com"><i class="material-icons prefix">email</i>paradise@hotel.com</a></li>
            <li><a class="white-text" ><i class="material-icons prefix">phone</i>0141-6700700</a></li>
            <li><a class="white-text" ><i class="material-icons prefix">chat</i>9685741458</a></li>
          </ul>
        </div>
      </div>
    </div>
    
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

                    </body>
                    </html>
                