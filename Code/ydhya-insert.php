<?php
include('config-ydhya.php');

     $Medical_Condition= $_POST['Medical_Condition'];
     $fdate = $_POST['fdate'];
     $tdate = $_POST['tdate'];

     $sql = "INSERT INTO conditions (mname,fdate,date)
     VALUES ('$Medical_Condition','$fdate','$tdate')";
     if (mysqli_query($link, $sql)) {
        echo '<script type ="text/JavaScript">'; 
        echo 'alert("New Record has been Added Successfully !")';
        echo '</script>';
     } else {
        echo '<script type ="text/JavaScript">'; 
        echo 'alert("Error")';
        echo '</script>'; 
     }
    mysqli_close($link);
?>