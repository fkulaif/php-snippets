<!-- http://localhost/.../.../login.php  -->

<form action="the_post.php" method="post">
   <input type="text" name="name">
   <input type="submit">  
</form>


</body>
</html>

<!-- ?php echo $_POST['name']; ?-->
<?php
//<?php echo $_POST['name']; ?>

   if(isset($_POST ['submit'])) {
      //echo "yes we got here";
      $username = $_POST ['username'];
      $password = $_POST ['password'];
      
      echo $username;
      echo $password;
   }
?>
