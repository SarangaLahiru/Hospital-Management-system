
<?php
include "validation.php";

session_start();
if(isset($_POST['btn3'])){
    $dname=$_POST['dname'];
    $puser=$_POST['puser'];
    $pname=$_POST['name'];
    $path=$_POST['path'];
    $page=$_POST['age'];
    $pdate=$_POST['date'];
    $ptime=$_POST['time'];
    $pphone=$_POST['phone'];
    $city=$_POST['city'];

    $sql3="INSERT INTO $puser(ID,doctors,date,time,path) VALUES ('','$dname','$pdate','$ptime','$path')";
    if($stmt3=mysqli_query($conn,$sql3)){

       
        $_SESSION['dname']=$dname;
        $_SESSION['puser']=$puser;
        $_SESSION['pname']=$pname;
        $_SESSION['path']=$path;
        $_SESSION['age']=$page;
        $_SESSION['date']=$pdate;
        $_SESSION['time']=$ptime;
        $_SESSION['phone']=$pphone;
        $_SESSION['city']=$city;

        header("location:appointmentd.php?err=appointment_successfull");
       
    }
    else{
        header("location:doctor.php?err=appointment_unsucessfull");

    }

}

if(isset($_POST['btnf'])){
    $name1=$_POST['name'];
    $msg=$_POST['msg'];
    $sql8="UPDATE user SET feedback='$msg' WHERE name='$name1'";
    $stmt=mysqli_query($conn,$sql8);
    header("location:dashboard.php");
}
?>

