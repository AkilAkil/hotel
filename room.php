
<html>
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<?php
mysql_connect("localhost","root","asdf1234")||die("error");
mysql_select_db("hotel")||die("error");
$res = mysql_query("select * from room");

if( !$res ){
    echo 'Retrieval of data from Database Failed ';
  }else{
    ?>

      <table class="highlight centered bordered ">
        <thead>
          <tr>
              <th>Room No</th>
              <th>Floor No</th>
              <th>Room Type</th>
              <th>Services available</th>
              <th>Price</th>
          </tr>
        </thead>


        <tbody>
          <?php
      if( mysql_num_rows( $res )==0 ){
        echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }else{
        while( $row = mysql_fetch_assoc( $res ) ){
          echo "<tr><td>{$row['rno']}</td><td>{$row['fno']}</td><td>{$row['rtype']}</td><td>{$row['services']}</td><td>{$row['price']}</td></tr>\n";
        }
      }
    ?>
        </tbody>
      </table>
      <?php
  }
  ?>
            </html>
