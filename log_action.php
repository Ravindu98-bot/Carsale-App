<?php 
    session_start();
    
    $db_name = "19it535";
    $connection = mysqli_connect("localhost","root","",$db_name);


    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql="select * from regmember where email = '$email' && password ='$password'";
    
    $result = mysqli_query($connection, $sql);

    $num = mysqli_num_rows($result);

    if($num == TRUE){
        header('location:addcardetail.php');
    }else{
        echo'<script> alert("You Are Not Registered.... register first)</script>'.header('location:regform.php');
    }

?>