<?php
$start = microtime(true);
function loop($num) 
{
	
    $prime = true;
	
	for ($i = 2; $i < $num; $i++) 
	{
		
		if (($num % $i)=== 0) 
		                           
		{
            $prime = false; 
            return $prime;
         }
    }
                    
    return $prime; 
}
?>

<?php
$initial=1;
$fnumber=2;
while ($initial<=1000)   
{
    if (loop($fnumber))   
    {
        
        echo $fnumber.",\n";
         $initial++;
    }
    $fnumber++;
}
		
?>	
<br/>
<br/>
<?php 
$time_elapsed_secs = microtime(true) - $start;
echo "Time taken to execute " .$time_elapsed_secs;
	
?>