<html>
    <body style="margin:0px;">

<?php
  session_start();

  if(!empty($_SESSION["name"])){

   $name = (empty($_SESSION["name"]))? "Enter Name" : $_SESSION["name"];
   $phone = empty($_SESSION["phone"])? "Enter Phone" :  $_SESSION["phone"];
    $email = empty($_SESSION["email"])?  "Enter E-Mail" :  $_SESSION["email"];
  $gender = (isset($_SESSION["gender"]))?   $_SESSION["gender"] :" Select Gender"; 
   $password = empty($_SESSION["password"])?  "Enter Password" :  $_SESSION["password"]; 
   $country  = (isset($_SESSION["country"]) ?  $_SESSION["country"] : "Select Country");
   $table_file_path = $_SESSION["file"];
  
   include("./table.php");

}

  else
   echo "NOTHING IN FORM";
  

?>



    </body>
</html>

