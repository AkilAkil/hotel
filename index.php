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
</head>
<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">PR</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php">Home</a></li>
      
        <li><a href="onlinebook.php">Book Online</a></li>
      
         
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
<div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="brown-text text-lighten-5">This is a beautiful Island with Lodge offering a wonderful, old-fashioned holiday atmosphere with 5-star food and service.
<br>Jennifer, Lismore, NSW</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="background1.jpg" alt="Unsplashed background img 2"></div>
  </div>  

<div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>About Us</h4>
          <p class="left-align light">we are famous for exceptional meals, personalised service, relaxing spa treatments and our stunning beachfront location on the Lord Howe Lagoon. Discover world-class diving, snorkelling, fishing, walking, surfing, kayaking and golf, or just relax and rejuvenate on one of Australia's most beautiful islands. In November 2014, Pinetrees was voted the ‘Best Affordable Resort in Australia’ by the readers of Australian Traveller Magazine, and in January 2017, Pinetrees won the title of 'TripAdvisor's Number 1 Hotel in Australia'.</p>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="brown-text text-lighten-5">The food and service was excellent and cannot be improved! A great holiday spent in an easy paced lifestyle in a beautiful environment.<br>
Steve & Jacquelyn, Bundeena NSW</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="images.jpg" alt="Unsplashed background img 3"></div>
  </div>
  
<div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>contact Us</h4>
          <p class="left-align light">We recommend pre-booking dining, spa treatments, golf and/or activities prior to arrival, to secure your preferred date and time. Please contact our Guest Services team to confirm arrangements on guestservices@hotel.com</div>
      </div>

    </div>
  </div>

  


  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l9 s12">
          <h5 class="white-text">Hotel History</h5>
          <p class="grey-text text-lighten-4">The Paradise restaurant, founded in 1953, began as a small cafe serving tea and snacks, but now it serves traditional Hyderabadi, Indian and Chinese continental delicacies. The hotel is known for Hyderabadi dishes.</p>


        </div>
        
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <ul>
            <li><a class="white-text" href="https://www.facebook.com/Paradise"><i class="material-icons prefix">facebook</i>Facebook</a></li>
            <li><a class="white-text" href="https://www.gmail.com"><i class="material-icons prefix">email</i>paradise@hotel.com</a></li>
            <li><a class="white-text" ><i class="material-icons prefix">phone</i>0141-6700700</a></li>
            <li><a class="white-text" ><i class="material-icons prefix">chat</i>9685741458</a></li>
            
          </ul>
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
