<?php  
   $name1= $_POST["fname"];
   $name2= $_POST["lname"];
   $conn=mysqli_connect("localhost","root","","flames");
   if(mysqli_connect_errno())
    {
       echo "connection failed";
       exit();
    }
   else
    {
       $sql="INSERT INTO names VALUES('$name1','$name2')";
       mysqli_query($conn,$sql);
       exit();
    }
   
?> 