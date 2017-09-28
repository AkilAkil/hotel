<!DOCTYPE html>
<html lang="en">
<?php
ob_start();
session_start();
?>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Hotel Paradise</title>

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
  <nav class="white" role="navigation" id= "idiv">
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
            echo '<li class="right hide-on-med-and-down"><a href="#" >Book Online</a></li>';
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
        <li><a href="index.php">Home</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>




<div>
 <ul id="slide-out" class="side-nav fixed">
    <li><div class="user-view">
      <div class="background">
        <img src="admin.png">
      </div>
      <a href="#!user"><img  src="images/admin.jpg"></a>
      <a href="#!name"><span class="black-text name">Administrator</span></a>
      
    </div></li>
    <li><a href="book.php" target = "myframe">Book Rooms</a></li>
    <li><a href="room.php" target = "myframe">Rooms</a></li>
    <li><a  href="#!">Cab Details</a></li>
    <li><a  href="occup.php" target = "myframe">Occupied Rooms</a></li>
  </ul>
  <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>


</div>







<br>
<div id= "idiv">
<iframe name='myframe' width = "1300" height = "600">

</iframe>

</div>
   <footer class="page-footer teal" id= "idiv">
    <div class="container" >
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
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
