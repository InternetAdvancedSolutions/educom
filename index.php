<html>
  <head>
    <title>
      educom | Home | PHP
    </title>
  </head>
  <body bgcolor="lavender">
    <center>
      <h1>EDUCOM</h1><h4>ask, answer , learn</h4>
      <?php
    // Return date/time info of a timestamp; then format the output
    $mydate=getdate(date("U"));
    echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
    ?>
      <h2>
      <?PHP
      echo("Hello world! I Ashutosh, co-founder Educom, BTech, MCA(IGNOU)")."<br>";
        echo("welcomes you all tech guys/students to learn and share");
      ?>
      </h2>
      <h2>
      <table border=1 bgcolor=papayawhip align="center" cellpadding=10 cellspacing=10 width=75% >
      <tr >
        <td>C</td><td>Data Structures in C</td><td>Java</td><td>PHP</td><td>Linux</td><td>Learn via Videos</td>
      </tr>
      <tr >
        <td><a href="https://deepc.quora.com/">Deep C</a></td><td><a href="http://codelybrary.blogspot.com/">Codelybrary</a></td><td><a href="https://rejavanate.quora.com/">ReJavanate</a></td><td><a href="https://yashphp.quora.com/">Yes PHP!</a></td><td><a href="https://codelybrary.blogspot.com/2018/02/know-me-better.html">Administrator</a></td><td><a href="https://www.youtube.com/watch?v=F43ty4GtrgY&list=UUG-97CfPdyMsjayb-PrBbIg&index=7">My Video Tutorials</a></td>
      </tr>
      </table>
      <h3> Hope you enjoyed learning with us, keep visiting for more exiting stuff on computer science, IT and web development</h3>
        <h5>
      <?php
      echo("This web app is written in PHP");
      ?></h5>
    </center>
  </body>
</html>
