<?php 
$handle = fopen("counter.txt", "rw");
if(!$handle){	
 echo "could not open the file" ;
}
else 
{
	$counter = (int)fgets($handle,1000);
	//$counter = (int ) fread($handle,20);
	//fclose ($handle);
	$counter++;
	fwrite($handle,$counter) ;
	echo "You are visitor no ".$counter. "</td></tr></table>" ;
//$handle = fopen("counter.txt", "w" );
//fwrite($handle,$counter) ;
fclose ($handle) ;
}
  ?>
