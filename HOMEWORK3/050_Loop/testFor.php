<?php

for ($i = 1; $i <= 3; $i++) { //設i=1,判斷i是否等於3,每跑一次迴圈i就加1
	for ($j = 1; $j <= 4; $j++) { //設j=1,判斷j是否等於4,每跑一次迴圈j就加1
		echo "$i , $j <br>";      //印出i,j跳行
		if (($i + $j) % 4 == 0)   //判斷 i+j的值除4的餘數是否等於0
		    break;				//是就跳回第二個迴圈不是跳回第一個迴圈			
	}
	echo "-----<br>";  //印出-----跳行
}


?>