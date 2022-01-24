<?php
     $a = 10;
     $b = 20;
     $sum = $a+$b;
     echo("<h1>1.Variable Declare And Simple Calculation</h1>");
     echo  '<h4> Sum of 10 + 20 is'.$sum.'</h4>';
     echo("<h1>2.Program using conditional statement</h1>");
     $number = 39;
     echo  '<h4> Number'.$number.'</h4>';
     if($number<40){
         echo("<h4>You are fail </h4>");
     }else{
         echo("<h4>You are passed </h4>");
     }
     echo("<h1>3.Program using for loop</h1>");
     for( $i = 1; $i <= 10; $i++){
         echo"<h4>".$i."</h4>";  
     }
     echo("<h1>4.Array</h1>");
     $arr = [1,4,10,6,3,8];
     echo '<pre>'; print_r($arr); echo '</pre>';
     echo("<h1>Array sorting</h1>");
     for($i=0;$i<count($arr);$i++){
		$val = $arr[$i];
		$j = $i-1;
		while($j>=0 && $arr[$j] > $val){
			$arr[$j+1] = $arr[$j];
			$j--;
		}
		$arr[$j+1] = $val;
	}
     echo("<h1>Sorted Array</h1>");
     echo '<pre>'; print_r($arr); echo '</pre>';

     echo("<h1>5.Function</h1>");
     $ct = 7;
     $attendance = 10;
     $viva = 8;
     $mid = 21;
     $final = 27;
     echo("<h4>CT: ".$ct."</h4>");
     echo("<h4>Attendance: ".$attendance."</h4>");
     echo("<h4>Viva: ".$viva."</h4>");
     echo("<h4>MID: ".$mid."</h4>");
     echo("<h4>FINAL: ".$final."</h4>");

     function calculate($ct,$attendance,$viva,$mid,$final) {
         $sum = $ct+$attendance+$viva+$mid+$final;
         return $sum;
     }
     $totalNumber = calculate($ct,$attendance,$viva,$mid,$final);
     echo("<h4>Total:".$totalNumber."</h4>");
?>