<html lang="en">
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
      <a id="logo-container" href="index.php" class="brand-logo">Logo</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php">Home</a></li>
      </ul>
      <ul class="right hide-on-med-and-down">
        <li><a href="onlinebook.php">Book Online</a></li>
      </ul>
      


      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Home</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>


<h3 class="center-align">Login</h3>
<div class="row">
    <form class="input-field col s6 offset-s4" method="POST" action="check.php">
    <br><br>
        
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input name="username" id="icon_prefix" type="text" class="validate" placeholder = "UserName" >
          
        </div></p><br><br><br><br>
        
        <div class="input-field col s6">
          <i class="material-icons prefix">lock_outline</i>
          <input name="password" id="lock" type="password" class="validate" placeholder = "Password" >
        
           
        </div>
        <div class="input-field col s3 offset-s4">
              <p class="margin right-align medium-small"><a href="forgot-password.html">Forgot password?</a>
               <a href="new.php">Create an Account</a></p>
          </div>

          
      </div>
     
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
       <button class="btn waves-effect waves-light"  type="submit" >Login
    <i class="material-icons right">send</i>
  </button>
    </form>
  </div>
<br><br>








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
