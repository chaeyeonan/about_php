<?php

session_start();
// $userid = $_SESSION['userid'] = 'marshall';
unset($_SESSION['user']);

echo "
  <script>
    location.href='/about_php/index.php';
  </script>
"

?>