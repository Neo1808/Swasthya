<?php
include('config-ydhya.php');

     $hospitals= $_POST['hospitals'];
     $doctors = $_POST['doctors'];
     $slot = $_POST['slot'];

     $sql = "INSERT INTO book (hospital,doctor,slot)
     VALUES ('$hospitals','$doctors','$slot')";
     if (mysqli_query($link, $sql)) {
        echo '<script type ="text/JavaScript">'; 
        echo 'alert("Appointment has been successfully booked !")';
        echo '</script>';
     } else {
        echo '<script type ="text/JavaScript">'; 
        echo 'alert("Error")';
        echo '</script>'; 
     }
    mysqli_close($link);
?>