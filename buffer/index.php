<?php

ob_start();

for($i = 0; $i < 10; $i++){
	echo $i;
	ob_end_flush();
	sleep(1);
	ob_start();
	/*if($i % 10 == 0){
		ob_end_flush();
		ob_start();
	}*/
}

?>
