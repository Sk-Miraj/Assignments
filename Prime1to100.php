<?php  
	$limit = 100;
	$init = 2;
	
	while(TRUE)
	{
		$div = 2;
		if($init > $limit) 
		{
			break;
		}
		while(TRUE)
		{
			if($div > sqrt($init))
			{
				echo $init."  ";
				break;
			}
			if($init % $div == 0) 
			{
				break;
			}
			$div = $div + 1;
		}
		$init = $init + 1;
	}
?>