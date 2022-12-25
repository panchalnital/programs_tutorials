<?php

for($i=1;$i<=8;$i++){
	for($j=1;$j<=8;$j++){
		
		if($j%2==0){
			echo "[".$i.",".$j."] white";
		}else{
			echo "[".$i.",".$j."] black";
		}
	}
    echo "<br>";
	//echo "\r\n";
    //exit;
}
?>