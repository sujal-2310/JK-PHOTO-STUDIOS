<?php
  
   $con=mysqli_connect("localhost","root","testing");

   if(mtsqli_connect_error()){
    echo"<script>alert('cannont connect to the database');</script>";
    exit();
   }

?>


