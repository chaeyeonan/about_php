<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <style>
        *{margin:0px; padding:0px; box-sizing:border-box; }
        .wrapper{  width:100%;  height:auto;  max-width:1200px;  margin:auto; }
        h1{
            padding:2rem 0; border-bottom:1px solid #ddd;
        }
        .products{
            width:100%; height:auto;  border:1px solid #ddd; margin-top:2rem; display:flex; flex-wrap:wrap;
        }
        .product { width:33.33%; padding:.5rem;}
        .product img {width:100%; border-radius:.25rem}
        .product .product-text {margin:1rem 0; text-align:center; width:100%;}
        .product h2{padding:1rem 0 2rem 0;}
        .product a {text-decoration:none; background:black; color: #fff; width:100%; border-radius:.5em; padding:.5rem 3rem;}
    </style>
</head>
<body>
    <div class="wrapper">
        <h1>Our Products</h1>
        <div class="products">
            <?php
                include_once $_SERVER['DOCUMENT_ROOT'].'/about_php/connect/dbconn.php';

                $sql="SELECT pro_idx, pro_img, pro_name FROM spl_products";
                $res=mysqli_query($db_conn,$sql);

                while ($row=mysqli_fetch_array($res)){
                    $pro_name=$row["pro_name"];
                    $pro_idx=$row["pro_idx"];
                    $pro_img=$row["pro_img"]; ?>
                    <div class="product">
                        <img src="/about_php<?= $pro_img ?>" alt="offer">
                        <div class="product-text">
                            <h2><?=$pro_name?></h2>
                            <a href="/about_php/detail.php?pro_idx=<?=$pro_idx?>">Details</a>
                        </div>
                    </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>