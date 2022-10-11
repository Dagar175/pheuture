<?php

    if(!empty($_POST["name"])){


  
       $name = (empty($_POST["name"]))? "Enter Name" : $_POST["name"];
     $phone = empty($_POST["phone"])? "Enter Phone" :  $_POST["phone"];
        $email = empty($_POST["email"])?  "Enter E-Mail" :  $_POST["email"];
        $gender = (isset($_POST["gender"]))?   $_POST["gender"] :" Select Gender"; 
        $password = empty($_POST["password"])?  "Enter Password" :  $_POST["password"];  
        $country  = (isset($_POST["country"]) ?  $_POST["country"] : "Select Country");

        include("./table.php");

   //   $directory = "ayush/";
   //   $file = $directory . basename($_FILES["files"]["name"]); //echo $file;
   //   $ext = strtolower(pathinfo($file,PATHINFO_EXTENSION));

   //   $temp_file_name = $_FILES["files"]["tmp_name"];
   //   $target_temp_file = $directory .basename($temp_file_name);
   //   $finalpath = $file;
   //   if(file_exists($finalpath)){
   //      $file1_name = $name."_".time().".".$ext;
   //      $finalpath = $directory.$file1_name;
        
   //   }
   //   //echo $finalpath."<br>".$temp_file_name;
   //   if(move_uploaded_file($temp_file_name,$finalpath)){
   //      echo "File Successfuly Uploaded";
       
   //   }
   //   else
   //      echo "Unable to Find File Path";
   
    echo "<h2> THIS IS BACKEND PAGE </H2> <br><BR> ";
   
    }

    else{
       echo "Enter Value First";
    }


   //   if(!empty($_POST["name"])){
   //  session_start();
   //  $_SESSION["name"] = "$name";
   //  $_SESSION["phone"] = "$phone";
   //  $_SESSION["email"] = "$email";
   //  $_SESSION["gender"] = "$gender";
   //  $_SESSION["password"] = "$password";
   //  $_SESSION["country"] = "$country";
   //  $_SESSION["file"] = $finalpath;
   //   }
   // /// include("./display3.php");
   //header("refresh:3;url= display3.php");

?>