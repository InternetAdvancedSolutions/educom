<html>
  <head>
    <title>
      educom | Home 
    </title>
  </head>
  <body bgcolor="lavender">
    <center>
      <h1>EDUCOM</h1><h4>for(i = -&#x221e;; i < +&#x221e;; i++){ask; answer; learn;}</h4>
      <hr>
      
      <?php
    // Return date/time info of a timestamp; then format the output
    $mydate=getdate(date("U"));
    echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
    ?>
      <?php
date_default_timezone_set('UTC');
?>
<script>
var d = new Date(<?php echo time() * 1000 ?>);
function digitalClock() {
  d.setTime(d.getTime() + 1000);
  var hrs = d.getHours();
  var mins = d.getMinutes();
  var secs = d.getSeconds();
  mins = (mins < 10 ? "0" : "") + mins;
  secs = (secs < 10 ? "0" : "") + secs;
  var apm = (hrs < 12) ? "am" : "pm";
  hrs = (hrs > 12) ? hrs - 12 : hrs;
  hrs = (hrs == 0) ? 12 : hrs;
  var ctime = hrs + ":" + mins + ":" + secs + " " + apm;
  document.getElementById("clock").firstChild.nodeValue = ctime;
}
window.onload = function() {
  digitalClock();
  setInterval('digitalClock()', 1000);
}
</script>
      "Human brain are also a machine"
&nbsp&nbsp&nbsp<span id="clock"> </span>
      <hr>
      <h2>
      <?PHP
      echo("Hello world! I Ashutosh, co-founder Educom")."<br>";
      echo("welcomes you all tech guys/students to learn and share for free");
      ?>
      </h2>
      <h2>
      <table border=1 bgcolor=papayawhip align="center" cellpadding=3 cellspacing=10 width=85% >
      <tr >
        <td>Data Structures in C</td><td>Assembly Programming</td><td>Java,Applets/Servlets</td><td>Web:js,PHP,Python</td><td>Linux</td><td>Learn via Videos</td>
      </tr>
      <tr >
        <td><a href="https://deepc.quora.com/">Deep C</a></td><td><a href="https://x8086.quora.com/">Coding x8086</a></td><td><a href="https://rejavanate.quora.com/">ReJavanate</a></td><td><a href="https://yashphp.quora.com/">Yes PHP!</a></td><td><a href="https://leanx.quora.com/">LeanX</a></td><td><a href="https://www.youtube.com/watch?v=F43ty4GtrgY&list=UUG-97CfPdyMsjayb-PrBbIg&index=7">My Video Tutorials</a></td>
      </tr>
      </table>
      <h3> Hope you enjoyed learning with us, keep visiting for more exiting stuff on computer science, IT and web development</h3>
      <hr>
        <h5>
      <?php
      echo("This web app is written in PHP");
      ?></h5>
        <a href="http://codelybrary.blogspot.com/">Code Archive</a>
    </center>
  </body>
</html>
