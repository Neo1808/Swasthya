<?php
include('config-ydhya.php');
    
     $Username= $_POST['Username'];
     $Email = $_POST['Email'];
     $Password = $_POST['Password'];
     $Confirm_Password = $_POST['Confirm_Password'];
     $Contact_Number = $_POST['Contact_Number'];
     $Address = $_POST['Address'];

     $sql = "INSERT INTO Details (Username,Email,Password,Confirm_Password,ContactNumber,Address)
     VALUES ('$Username','$Email','$Password','$Confirm_Password','$Contact_Number','$Address')";
     if (mysqli_query($link, $sql)) {
        echo "New User has been Created Successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($link);
     }
    mysqli_close($link);
?>