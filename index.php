<html>
  <head>
    <title>
      educom | Home 
    </title>
  </head>
  <body bgcolor="lavender">
    <center>
	    <table border=0 bgcolor=papayawhip cellpading=10 cellspacing=2><td><image src="android5.jpg">&nbsp;&nbsp;</td><td><font face=verdana size="35" color="dodgerblue">EDUCOM</font><br>for(i = -&nbsp&#x221e;; i < +&nbsp&#x221e;; i++)<br>{ask; answer; learn;}</td><td></table>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	   <?php include "counter.php";?>    
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
&nbsp&nbsp&nbsp
      <B>"When work is pleasure...life is joy"<br>"Once you stop learning, you start dying"</B>
&nbsp&nbsp&nbspTime&nbsp<span id="clock"> </span>
      <hr>
      
      <?PHP
      echo("Hello friends!")."<br>";
      echo("welcome to Educom: learn and share ");
      ?>
      <table border=1 bgcolor=papayawhip align="center" cellpadding=10 cellspacing=3 width=85% >
      <tr >
        <td>Android</td><td>DSA in C</td><td>Assembly</td><td>Applets/Servlets</td><td>Internet</td><td>Linux</td><td>Video Classes</td><td>AI</td>
      </tr>
      <tr >
        <td><a href="https://ondmov.quora.com/">Ondmov</a><td><a href="https://deepc.quora.com/">Deep C</a></td><td><a href="https://x8086.quora.com/">Coding x8086</a></td><td><a href="https://rejavanate.quora.com/">ReJavanate</a></td><td><a href="https://yashphp.quora.com/">Yes PHP!</a></td><td><a href="https://leanx.quora.com/">LeanX</a></td><td><a href="https://www.youtube.com/watch?v=F43ty4GtrgY&list=UUG-97CfPdyMsjayb-PrBbIg&index=7">My Tutorials</a></td><td><a href="https://aeyenabled.quora.com/">A Eye</a></td>
      </tr>
      </table>
      Hope you enjoyed learning with us, keep visiting for more exciting stuff on computer science, IT and web development.<br>
	    Good online resources for programmers:
	    <ol type="1">
		    <li>
	    <a href="https://codegym.cc/quests/tutorial/landing?utm_source=quora&utm_medium=topic_target_desktop">Learn Java</a>
		    </li>
		    <li>
			    <a href="https://bash.cyberciti.biz/guide/Main_Page">Linux Shell</a>
		    </li>
		    <li>
			    <a href="https://javabrains.io/courses/spring_core/">Java Spring</a>
		    </li>
		    <li>
			    <a href="https://www.youtube.com/playlist?list=PLJ5C_6qdAvBG6v-afxpegn8VdILsS3x8o&app=desktop">Programming in C</a>
		    </li>
			    
		   
		    
	    </ol>
      <hr>
        &copy&nbspAll copy rights reserved by Yash InfoTech, Varanasi, Uttar Pradesh, India.<br>
        <a href="http://codelybrary.blogspot.com/">Code Archive</a>
    </center>
  </body>
</html>
