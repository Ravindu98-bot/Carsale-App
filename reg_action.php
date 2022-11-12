<?php 
    session_start();
    header('location:login.php');
    $db_name = "19it535";
    $connection = mysqli_connect("localhost","root","",$db_name);

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $nic = $_POST['nic'];
    $city = $_POST['city'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    $sql="select * from regmember where email = '$email'";
    
    $result = mysqli_query($connection, $sql);

    $num = mysqli_num_rows($result);

    if($num == TRUE){
        echo"User is Already registerd";
    }else{
        $reg ="insert into regmember (firstname,lastname,nic,city,email,password,repassword) VALUES('$firstname','$lastname','$nic','$city','$email','$password','$repassword')";
        mysqli_query($connection, $reg);
        
    }

?>