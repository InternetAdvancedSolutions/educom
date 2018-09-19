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
      <table border=1 bgcolor=papayawhip align="center" cellpadding=10 cellspacing=10 width=75% summary=tutorial links>
      <tr >
        <td>C</td><td>DS</td><td>Java</td><td>PHP</td><td>Linux</td><td>Python</td>
      </tr>
      <tr >
        <td><a href="</td><td></td><td></td><a href="https://yashphp.quora.com/"><td></td><td></td><td></td>
      </tr>
      </table>
    </center>
  </body>
</html>
