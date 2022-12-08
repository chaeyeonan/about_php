<?php

    $arr=[1,2,3,4,5,"string"];

    echo $arr[5]."<br>".$arr[2]."<br>";
    echo var_dump($arr); // 내부로직 리턴

    echo count($arr)."<br>"; // arr length

    // 배열에 여러 값을 한번에 삽입하는 함수 : array_push(배열이름, 값1,값2,...)
    $country=array();
    array_push($country,'Korea','Japan','China');
    echo $country[1]."<br>";

    // 배열 인덱스 이름을 지정할 수 있다.
    $fruit=json_encode(array('f1'=>'apple','f2'=>'banana'));
    echo var_dump($fruit)."<br>";
    echo var_dump($fruit_json)."<br>";
?>
