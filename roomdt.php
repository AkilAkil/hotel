<html>
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

<script src="js/materialize.js" type="text/javascript"></script>
 <script src="js/jquery-ui.js">
 
   $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: false // Close upon selecting a date,
  });

</script>
</head>
<body>
<form action = "roomdt.php" method ="POST">
<div class="row">
<div class="input-field col s9 offset-s1">
 <div class="col s3">
 <input name="dt" type="date" class="datepicker" placeholder = "Date(dd/mm/yyyy)" >
</div>
<button type="submit" class=" waves-effect waves-light btn" name= "submit">Search 
                    <i class="material-icons right">send</i>
                    </button>

</div>
</form>










<?php
mysql_connect("localhost","root","asdf1234")||die("error");
mysql_select_db("hotel")||die("error");
$dt=$_POST["dt"];
$res = mysql_query("select * from occupied where checkin = '{$dt}'");

if( !$res ){
    echo 'Retrieval of data from Database Failed ';
  }else{
    ?>

      <table class="highlight centered bordered ">
        <thead>
          <tr>
              <th>Name</th>
              <th>Id Proof</th>
              <th>Check In date</th>
              <th>Check Out Date</th>
              <th>Check in Time</th>
              <th>Check out Time</th>
              <th>Contact Number</th>
              <th>Advance Amount</th>
              <th>Room Number</th>
          </tr>
        </thead>


        <tbody>
          <?php
      if( mysql_num_rows( $res )==0 ){
        echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }else{
        while( $row = mysql_fetch_assoc( $res ) ){
          echo "<tr><td>{$row['name']}</td><td>{$row['id']}</td><td>{$row['checkin']}</td><td>{$row['checkout']}</td><td>{$row['intime']}</td><td>{$row['outtime']}</td><td>{$row['number']}</td><td>{$row['advance']}</td><td>{$row['roomno']}</td></tr>\n";
        }
      }
    ?>
        </tbody>
      </table>
      <?php
  }
  ?>
  </body>
            </html>
