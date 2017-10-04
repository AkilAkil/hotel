<html>
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

<form action = "cab.php" method ="POST">
<div class="row">
<div class="input-field col s9 offset-s1">
 <div class="col s3">
 <input name="cabno" type="text" class="validate" placeholder = "Cab Number">
</div>
<div class="col s3">
 <input name="driv" type="text" class="validate" placeholder = "Driver contact Number">
</div>
<div class="col s3">
 <input name="booked" type="text" class="validate" placeholder = "Booked Person">
</div>
<button type="submit" class=" waves-effect waves-light btn" name= "submit" >Add Details 
                    <i class="material-icons right">send</i>
                    </button>

</div>
</div>
</form>
<?php
mysql_connect("localhost","root","asdf1234")||die("error");
mysql_select_db("hotel")||die("error");
if (isset($_POST["submit"]))
{
    $cab = $_POST["cabno"];
    $driv = $_POST["driv"];
    $book = $_POST["booked"];

    mysql_query("insert into cab values('".$cab."','".$driv."','".$book."')");
}

?>
<?php
mysql_connect("localhost","root","asdf1234")||die("error");
mysql_select_db("hotel")||die("error");
$res = mysql_query("select * from cab");

if( !$res ){
    echo 'Retrieval of data from Database Failed ';
  }else{
    ?>

      <table class="highlight centered bordered ">
        <thead>
          <tr>
              <th>cab Number</th>
              <th>Driver Contact Number</th>
              <th>Booked Person</th>
              </tr>
        </thead>


        <tbody>
          <?php
      if( mysql_num_rows( $res )==0 ){
        echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }else{
        while( $row = mysql_fetch_assoc( $res ) ){
          echo "<tr><td>{$row['cabnum']}</td><td>{$row['driverno']}</td><td>{$row['bookedperson']}</td></tr>\n";
        }
      }
    ?>
        </tbody>
      </table>
      <?php
  }
  ?>
            </html>
