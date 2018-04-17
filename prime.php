<?php
$start = microtime(true);
$initial = 0 ;
$fnumber = 2 ;
while ($initial < 1000 )
{
	$ncount=0;
		for ( $i=1;$i<=$fnumber;$i++)
			{
			if (($fnumber%$i)==0)
				{
				$ncount++;
				}
			}
	if ($ncount<3)
			{
			echo $fnumber." , ";
			$initial=$initial+1;
			}
	$fnumber=$fnumber+1;
}
$time_elapsed_secs = microtime(true) - $start;
echo"<br>";
echo "Time taken to execute " .$time_elapsed_secs;
?>