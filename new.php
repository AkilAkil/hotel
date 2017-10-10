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
      
        <li><a href="onlinebook.php">Book Online</a></li></ul>
          </div>
  </nav>

<?php
if(isset($_POST['submit']))
{
  mysql_connect("localhost","root","asdf1234")||die("error");
mysql_select_db("hotel")||die("error");
$name= $_POST["uname"];
$email = $_POST["mail"];
$pass = $_POST["password"];
mysql_query("insert into user values('".$name."','".$email."','".$pass."')")||die("There is an error in Creating Your Account");

echo '<h2 class="header center orange-text"> Account Created</h2>';
}
else
{?>
 <div class="row">
    <form class="input-field col s6 offset-s4 center" method="POST" action="new.php">
     <h2 class="header center orange-text">Create Your Account</h2>
      <div class="row">
        <div class="input-field col s6  ">
          <input placeholder="UserName" name= "uname" type="text" class="validate">
          
        </div>
        
      </div>
      
      
      <div class="row">
      <div class="input-field col s6 ">
        
          <input name="password" type="password" class="validate" placeholder = "password">
          <label for="password" data-error="wrong" ></label>
        
      </div>
      </div>
      <div class="row">
       
        <div class="input-field col s6 ">
          <input id="email" type="email" class="validate" name = "mail" placeholder="email">
          <label for="email" data-error="wrong" ></label>
       
        </div>
      </div>
 <div class="row">
  <div class="input-field col s6 ">
      <button type="submit" class=" waves-effect waves-light btn" name= "submit">Register
                    <i class="material-icons right">send</i>
                    </button>
                    </div>
         </div>          

      </form>
      </div>




<?php
    }
?>








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
