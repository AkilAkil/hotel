<html>
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

<script src="js/materialize.js" type="text/javascript">
 $(document).ready(function() {
    $('select').material_select();
  });
   $(document).ready(function() {
    Materialize.updateTextFields();
  });

</script>
</head>
<body>
<form action = "update.php" method ="POST">
<div class="row">
<div class="input-field col s9 offset-s1">
 <div class="col s3">
 <input name="nam" type="text" class="validate" placeholder = "Enter the name" >
</div>

 
 <div class="input-fields col s3">
    <select class="browser-default" name="field" type = "text">
      <option value=""  disabled selected>Field you need to update</option>
      <option value="name">Name</option>
      <option value="id">ID Proof</option>
      <option value="checkin">Check In Date</option>
      <option value="checkout">Check out Date</option>
      <option value="intime">Check In time</option>
      <option value="outtime">Check out time</option>
      <option value="number">Contact number</option>
      <option value="advance">Advance Amount</option>
      <option value="roomno">Room number</option>
    </select>
    
  </div>

   <div class="col s3">
 <input name="values" type="text" class="validate" placeholder = "Update Value" >
</div>
 <div class="col s3">
 <input type = "submit" class = "waves-effect waves-light btn" value = "update">
  </div>
</div>
</form>




<?php
mysql_connect("localhost","root","asdf1234")||die("error");
mysql_select_db("hotel")||die("error");
$res = mysql_query("select * from occupied");

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
