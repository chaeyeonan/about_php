<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <style>
         *{margin:0px; padding:0px; box-sizing:border-box; }
        .wrapper{  width:100%;  height:100vh; display:flex; align-items:center;  max-width:1200px;  margin:auto;}
        .detail-box{display:flex; align-items:center; justify-content:center; margin:3rem 0;border:1.5px solid #ddd; align-items:center;}
        .left {width:50%; display:flex; align-items:center;}
        .left img{width:100%;}
        .right{display:flex; flex-direction:column; width:50%; padding: 0 3rem; row-gap:1rem;}
        .right h2{font-size:2rem;}
        .right p,.right em{padding:1rem 0;}
        .right em{font-size:1.3rem;}
        .right strong{font-weight:300; padding-top:4rem;}
    </style>
</head>
<body>
    <?php
    
        include_once $_SERVER['DOCUMENT_ROOT'].'/about_php/connect/dbconn.php'; // 데이터베이스 연결
        $pro_idx=$_GET['pro_idx']; // get 으로 받아올때 index에 key를 넣어주면 됨

        $sql="SELECT * FROM spl_products WHERE pro_idx = $pro_idx";
        $res=mysqli_query($db_conn,$sql);
        $row=mysqli_fetch_array($res);
    ?>

    <div class="wrapper">
        <div class="detail-box">
            <div class="left">
                <img src="/about_php<?=$row['pro_img']?>" alt="offer">
            </div>
            <div class="right">
                <h2><?=$row['pro_name']?></h2>
                <p><?=$row['pro_desc']?></p>
                <em>$<?=$row['pro_price']?></em>
                <strong><?=$row['pro_reg']?></strong>
            </div>
        </div>
    </div>
</body>
</html>