<?php
    
    $devide="===========<br>";

    // for loop
    $arr=[1,2,3,4,5,6];
    for($i=0; $i<count($arr); $i++) {
        echo $i." : ".$arr[$i]."<br>";
    }

    echo $devide;

    // foreach
    foreach($arr as $value){
        echo $value."<br>";
    }
    
    echo $devide;

    // while
    $cnt=0;
    while($cnt<6){
        echo $arr[$cnt]."<br>";
        $cnt++;
    }



    
?>