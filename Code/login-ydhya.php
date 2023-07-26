<?php      
    include('config-ydhya.php');  
    $username = $_POST['username'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($link, $username);  
        $password = mysqli_real_escape_string($link, $password);  
      
        $sql = "select * from Details where Username = '$username' and Password = '$password'";  
        $result = mysqli_query($link, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header("Location: ydhya-dash.html"); /* Redirect browser */
            exit();
        }  
        else{  
            echo '<script type ="text/JavaScript">';   
            echo 'alert("Login Failed. Invalid Usernme or Password")';  
            echo '</script>'; 
        }     
?>  