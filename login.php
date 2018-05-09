<?php

   if(isset($_POST ['submit'])) {
      //echo "yes we got here";
      $username = $_POST ['username'];
      $password = $_POST ['password'];
      
      echo $username;
      echo $password;
   }
?>
