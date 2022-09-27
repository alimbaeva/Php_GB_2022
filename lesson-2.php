<?php
//function test(){
 //   var_dump("In what year did the baptism of Russia take place?");
 //   var_dump("Options: 810, 990, 740");
 //   $number = readline("Your answer: ");
 //   if($number === "810"){
 //       return var_dump("wrong");
 //   } else if($number === "990") {
 //       return var_dump("yes");
 //   } else if($number === "740"){
 //       return var_dump("wrong");
 //   } else{
 //       test();
 //   }
//}
//test();


/*function options(){
    $allOptions= array();
    $allTime = 0;
    $optionNum = readline("How many tasks are schedulet?");
    for($i=0; $i < $optionNum; $i++){
        $option = readline("Your tasks: ");
        $time = readline("How many time: ");
        array_push($allOptions, "$option = $time clock");
        $allTime += (int)$time;
    }

    for($i=0; $i<$optionNum; $i++){
        var_dump($allOptions[$i]);
    }
    var_dump("All Time $allTime");
}
options();
*/


function countNum(){
    $num = readline("Count on the fingers jf 1 hand to the little finger fnd back, ask number: ");
    if($num <= 0){
        countNum();
    }
}
countNum();
?>