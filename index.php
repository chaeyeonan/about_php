<?php // 모든 php 코드를 감싸는 이니셜

   // echo "hello php" //php의 문자열 등의 내용을 출력
   
   session_start();
   if(isset($_SESSION['user'])){
    $userid = $_SESSION['user'];
  } else {
    $userid='';
  }

//   echo isset($_SESSION['user']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button class="login" onclick="goLogin()">login</button>
    <button class="logout" onclick="goLogout()">logout</button>

    <!-- php 공간 -->
    <!-- 이건 짧아서 echo 처리로 할 수 있지만 조금 더 복잡해지는 경우는 php 영역과 js 영역을 끊어서 작성해줌 -->
    <?php 
        if(!$userid){
            echo "<p>로그인이 필요합니다</p>";
        }
        else{
             //  원시타입 문자열 하나만 변수처리 
           echo  "<p>{$userid}님이 로그인 되었습니다</p>"; 
        }
    ?> 


    <script>
    function goLogin(){
        location.href='/about_php/php/login.php';
    }

    function goLogout(){
        location.href='/about_php/php/logout.php';
    }</script>
</body>
</html>