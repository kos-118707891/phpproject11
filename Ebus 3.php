<!DOCTYPE html>
<html>
<body>
        <!-- //starting the session to get the session variable from the last page -->
 <?php
 
 session_start ();
 $totalValue = $_POST['txtTotal'];
 $fullNamevalue = $_POST['txtName'];
 echo "The name is :  ".$fullNameValue.",";
 echo "<br><br>";
 echo"The total value is ".$totalValue,".";
 ?>
        
    </body>
</html>
    

