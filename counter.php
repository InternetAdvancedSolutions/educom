<?php 
$handle = fopen("counter.txt", "rw");
if(!$handle){	
 echo "could not open the file" ;
}
else 
{
	//$counter = (int)fgets($handle,1000);
	// prints a single line at a time until end of file is reached 
	while (! feof ($handle)) 
 	 { 
		$counter = (int)fgets($handle);
  	    //echo fgets($my_file); 
  	} 
	//$counter = (int ) fread($handle,20);
	fclose ($handle);
	$counter++;
	
	echo "You are visitor no ".$counter. "</td></tr></table>" ;
//$handle = fopen("counter.txt", "w" );
//fwrite($handle,$counter) ;
	$handle = fopen("counter.txt", "a" );
	fwrite($handle, "\n". $counter);
fclose ($handle) ;
}
  ?>
