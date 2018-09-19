<html>
  <head>
    <title>
      educom | Home | PHP
    </title>
  </head>
  <body bgcolor="lavender">
    <center>
      <?php
        // Print the array from getdate()
        //print_r(getdate());
        echo "<br><br>";

    // Return date/time info of a timestamp; then format the output
    $mydate=getdate(date("U"));
    echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
    ?>
      <h1>
      <?PHP
      echo("Hello world! Ashutosh here")."<br>";
      ?>
      </h1>
      <h2>
      <?php
      echo("This web app is built using PHP");echo "<br>"; echo("This is a PHP file");
      ?></h2>
      <tr border="1" bgcolor="papayawhip">
        <td>C</td><td>DS</td><td>Java</td><td>PHP</td><td>Linux</td><td>Python</td>
        <td></td><td></td><td></td><td></td><td></td><td></td>
      </tr>
    </center>
  </body>
</html>
