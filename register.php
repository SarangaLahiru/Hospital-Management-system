<?php

include 'validation.php';
session_start();

if(isset($_POST['btn'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $repass=$_POST['repass'];
    $date=$_POST['date'];
    $phone=$_POST['phone'];

   /* if(emptyInput($name,$email,$pass,$repass,$date,$phone)){
        header('location:')
   }*/
    
    
        register($conn,$name,$email,$pass,$repass,$date,$phone);
    
}

function register($conn,$name,$email,$pass,$repass,$date,$phone){
    
    $sql1="CREATE TABLE $name(ID int(10) AUTO_INCREMENT PRIMARY KEY,doctors VARCHAR(20),date DATE,time VARCHAR(10),path VARCHAR(20))";
    $stmt1=mysqli_query($conn,$sql1);
    
    $sql="INSERT INTO user (name,email,password,birthday,phone) values(?,?,?,?,?)";
    $stmt=mysqli_stmt_init($conn);
    
    if(mysqli_stmt_prepare($stmt,$sql)){
        mysqli_stmt_bind_param($stmt,'sssss',$name,$email,$pass,$date,$phone);
        mysqli_stmt_execute($stmt);
        
        $_SESSION['user_name']=$name;
        $_SESSION['user_email']=$email;
        header('location:user_hms.php');

       
    }
}




if(isset($_POST['btn1'])){
    
    $email=$_POST['email1'];
    $pass=$_POST['pass1'];
    
    login($conn,$email,$pass);

   

}

function login($conn,$email,$pass){
    $sql="SELECT*FROM user WHERE email=? AND password=? ";
    $stmt=mysqli_stmt_init($conn);

    if(mysqli_stmt_prepare($stmt,$sql)){
        mysqli_stmt_bind_param($stmt,'ss',$email,$pass);
        mysqli_stmt_execute($stmt);

        $data=mysqli_stmt_get_result($stmt);
        if($row=mysqli_fetch_assoc($data)){
            $email1=$row['email'];
            $pass1=$row['password'];

            if($pass==$pass1){
                
                $_SESSION['user_name']=$row['name'];
                $_SESSION['user_email']=$row['email'];
               
                header("location:user_hms.php?err=login_success");
                
            }
            else{
                header("location:hms.php?err=login_unsucess");

            }
        }
        else{
            header("location:hms.php?err=login_not_match_account");

        }
    }
}
?>