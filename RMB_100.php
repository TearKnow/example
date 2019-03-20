<?php
    /*
    100元可以由 1，5，10，20，50，100元组成，可以由多少种方法
     思路一：想成100可以由1，2，3...100 由多少种组合方式，然后1，5，10，20，50，100必须在里面，可以得出结果，其实就是青蛙跳里排出一些选择，比如4阶，1，3 和3，1是一样的，青蛙跳里算不一样的
     
     8阶  2，5 变成2，3，2
          3，4 变成 3，2，2
        这两种情况一样的
    */

	//思路一：最弱智的方法 x1*1 + x2*5 + x3*10 + x4*20 + x5*50 + x6*100 = 100，解方程，解出x1, x2, x3, x4, x5, x6*100
	/*
	$arr = array(1, 5, 10, 20, 50, 100);
	
	$result = 0;
	for($i = 0; $i <= 100/$arr[0]; $i++){
		for($j = 0; $j <= 100/$arr[1]; $j++){
			for($k = 0; $k <= 100/$arr[2]; $k++){
				for($l = 0; $l <= 100/$arr[3]; $l++){
					for($m = 0; $m <= 100/$arr[4]; $m++){
						for($n = 0; $n <= 100/$arr[5]; $n++){
							if(($i*1 + $j*5 + $k*10 + $l*20 + $m*50 + $n*100) == 100){
								$result++;
							}
						}
					}
				}
			}
		}
	}
	echo $result;//100元有344种方法
	*/
	
	
