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
      <table border=1 bgcolor=papayawhip align="center" cellpadding=10 cellspacing=10 width=75% >
      <tr >
        <td>C</td><td>Data Structures in C</td><td>Java</td><td>PHP</td><td>Linux</td><td>Video Tutorials</td>
      </tr>
      <tr >
        <td><a href="https://deepc.quora.com/">Deep C</a></td><td><a href="http://codelybrary.blogspot.com/">Codelybrary</a></td><td><a href="https://rejavanate.quora.com/">ReJavanate</a></td><td><a href="https://yashphp.quora.com/">Yes PHP!</a></td><td><a href="https://codelybrary.blogspot.com/2018/02/know-me-better.html">Administrator</a></td><td><a href="https://www.youtube.com/watch?v=F43ty4GtrgY&list=UUG-97CfPdyMsjayb-PrBbIg&index=7">My Videos</a></td>
      </tr>
      </table>
    </center>
  </body>
</html>
