<?php
    $num=6+6;
    $sub=9-2;
    $mul=3*3;
    $div=6/3;
    $per=9%2;

    echo $num."<br>".$sub."<br>".$mul."<br>".$div."<br>".$per;
    // php에서 원시데이터를 조합할때 마침표를 사용 (이어서 쓰고싶으면 마침표 사용)

    echo "\n";
    // php에서 \n 은 줄바꿈이 아니라 띄어쓰기임.  줄바꿈을 하고싶으면 <br> 태그를 써주면 됨
    
    $a=5;
    if($num>$a) echo "true";
    else echo "false";
?>