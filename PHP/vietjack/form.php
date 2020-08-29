<?php
   if( isset($_POST["name"]) || isset($_POST["age"]) )
   {
      if (preg_match("/[^A-Za-z'-]/",$_POST['name'] ))
      {
         die ("Biến name không hợp lệ - nên là các chữ cái");
      }
      
      echo "Chào mừng ". $_POST['name']. "<br />";
      echo "Bạn ". $_POST['age']. " tuổi.";
      
      exit();
   }
?>
<html>
   <body>
   
      <form action="<?php $_PHP_SELF ?>" method="POST">
         Họ Tên: <input type="text" name="name" />
         Tuổi: <input type="text" name="age" />
         <input type="submit" />
      </form>
      
   </body>
</html>