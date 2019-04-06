<html>
  <head>
    <title>
      educom | Home 
    </title>
  </head>
  <body bgcolor="lavender">
    <center>
	    <table border=0 bgcolor=papayawhip cellpading=10 cellspacing=2 align=left>
		    <td><image src="programming3.jpg">&nbsp;&nbsp;</td>
		    <td><font face=verdana size="35" color="dodgerblue">EDUCOM</font>
			    <br>Sharing programming experiences & knowledge 
			   <!-- <br>for(i = -&nbsp&#x221e;; i < +&nbsp&#x221e;; i++)<br>{ask; answer; learn;}</td><td> -->
	    </table>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	   <!-- <?php include "counter.php";?> -->
	    
	    
	    

      <hr>
      <?php
    // Return date/time info of a timestamp; then format the output
    $mydate=getdate(date("U"));
    echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
    ?>
      <?php;
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
      <!--<B>"When work is pleasure...life is joy"<br> -->
	      "Once you stop learning, you start dying"</B>
&nbsp&nbsp&nbspTime&nbsp<span id="clock"> </span>
      <hr>
      
      <?PHP
      echo("Hello friends!")."<br>";
      echo("welcome to Educom: Share, learn and educate ");
      ?>
	  <a href="https://www.urbanpro.com/varanasi/ashutosh-singh/9076257?_r=widgets|UrbanProBadge|View My Profile|300x117|1147065" target="_blank" style="display: inline-block;"><img src="https://www.urbanpro.com/assets/new-ui/badges/View My Profile@300x117.png" alt="View My Profile" style="max-width: 100%;"></a>
	  <br>
	  <br>
      <table border=1 bgcolor=papayawhip align="left" cellpadding=10 cellspacing=3 width=100% >
      <tr >
        <td>Android</td><td>DSA in C/C++</td><td>Assembly</td><td>Java</td><td>PHP</td><td>Linux</td><td>Videos</td><td>AI</td>
      </tr>
      <tr >
        <td><a href="https://ondmov.quora.com/">Ondmov</a><td><a href="https://deepc.quora.com/">Deep C</a></td><td><a href="https://x8086.quora.com/">Coding x8086</a></td><td><a href="https://rejavanate.quora.com/">ReJavanate</a></td><td><a href="https://yashphp.quora.com/">Yes PHP!</a></td><td><a href="https://leanx.quora.com/">LeanX</a></td><td><a href="https://www.youtube.com/watch?v=F43ty4GtrgY&list=UUG-97CfPdyMsjayb-PrBbIg&index=7">Arduino</a></td><td><a href="https://aeyenabled.quora.com/">A Eye</a></td>
      </tr>
      </table>
	  <br><br>
      Hope you enjoyed learning with us, keep visiting for more exciting stuff on computer science, IT and web development.<br>
	  <div align=left> 
	  Some useful online resources for programmers:
	  <!--<div align=left>-->
	    <ol type="1" >
		    <li>
			    <a href="https://cs.fit.edu/~ryan/java/language/">Best online resource on Java</a>
		    </li>
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
		    <li>
			    <a href="https://training.crbtech.in/it-training-program-mh?gclid=EAIaIQobChMIs9LG5NWJ4AIV1RlyCh3urA-LEAEYASAAEgKzNfD_BwE">Java Training plus Job</a>
		    </li>
	    </ol>
	  </div>
      <hr>
        &copy&nbspAll copy rights reserved by Yash InfoTech, Varanasi, Uttar Pradesh, India.<br>
        <a href="http://codelybrary.blogspot.com/">Code Archive</a>
    </center>
  </body>
</html>
