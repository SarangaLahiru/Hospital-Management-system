<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor-name</title>
    <link rel="stylesheet" href="./doctor.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="icon" href="./images/download.png" type="jpg/gif">

</head>
<body>
<header class="head1">
        <h2><a href=""><img src="./images/download.png" alt=""> MediQu</a> </h2>
        <li><a href="">Doctors</a></li>
        <li><a href="">Locations</a></li>
        <li><a href="">Services</a></li>
        <li><a href="">Tools & Resourses</a></li>
        <?php
        session_start();
        include "validation.php";
        ?>
        <li id="icon1"><a href="" id="log">Hi!<span><?=$_SESSION['user_name'][0]?></span></a>
        <ul class="sub">
           <div class="box">
            <li><a href="" id="icon"><?=$_SESSION['user_name'][0];?></a></li>
            <li><a href=""><?=$_SESSION['user_name'];?></a></li>
            <li><a href="">As patient</a></li>
            <?php
            $user_name =$_SESSION['user_name'];
            $sql2="SELECT*FROM user WHERE name='$user_name'";
            $stmt2=mysqli_query($conn,$sql2);
            $row1=mysqli_fetch_assoc($stmt2);
            $user=$row1['email'];
            ?>
            <li><a href=""><?=$user;?></a></li>
           </div>
           <div class="box1">
            <li><a href="">Go to Dashboard</a></li>
            <li id="a1"><a id="a2" href="/myphp-1/e-com-6/hospital/hms.php" >Log out</a></li>
           </div>

        </ul>
        </li>
    </header>
    <?php
                    include "validation.php";

                    if(isset($_POST['btn'])){
                        $name=$_POST['name'];
                        $image=$_POST['img'];
                        
                        $sql="SELECT*FROM doctors WHERE name='$name'";
                        $stmt=mysqli_query($conn,$sql);

                        $row=mysqli_fetch_assoc($stmt);
                        

                        $phone=$row['phone'];
                        $biodata=$row['biodata'];
                        
                    }
                    ?>
    <div class="slide">
        <div class="img">
            <img src="./images/nurse-measuring-patient-blood-pressure.jpg" alt="">
        </div>
    </div>
    <div class="container">
        <div class="box">
            <div class="topdoctors biod">
              
                <div class="box1">
                    <div class="box">
                    <div class="img">
                            <?=$image;?>
                        </div>

                    <?php
                    

                   
                        
                        
                        echo "<h2>".$row['name']."</h2>";
                        echo "<h4>".$row['special']."</h4>";
                        echo "<p>".$row['details']."</p>";

                        $phone=$row['phone'];
                        $biodata=$row['biodata'];
                        
                    
                    ?>
                    
                         <a href="">Make Appointment</a>
                    </div>
                   
                   
                    
                </div>
               
            </div>

            <div class="topdoctors call">
              
                <div class="box1">
                    <div class="box">
                      
                        <h2>Emergency Cases</h2>
                        <p>Please feel welcome to contact our friendly reception staff with any general or medical enquiry call us.</p>
    
                        <h4><i class="bi bi-telephone-fill"></i><?=$phone;?></h4>
                                            
                    </div>
                   
                   
                    
                </div>
               
            </div>

            <div class="bio">
                <h2>Biography</h2>
                <p><?=$biodata;?></p>

            </div>

        </div>
    </div>

   <div class="app">
    <div class="appointment">
        <div class="box">
            <div class="dis">
                <h2>Book An Appointment</h2>
                <p>Please feel welcome to contact our friendly reception staff with any general or medical enquiry. Our doctors will receive or return any urgent calls.</p>
    
            </div>

         <form action="appointment.php" method="POST">

                <div class="frm-g">
                    <select name="path" id="">
                        <option value="Neurolgy">Neurology Clinic</option>
                        <option value="Pathology">Pathology Clinic</option>
                        <option value="Cardiology">Cardiology Clinic</option>
                    </select>
                </div>

                <div class="frm-g">
                    <input type="text" name="name" id="name" placeholder="Patient Name">
                    <input type="hidden" name="puser" id="puser" value="<?=$_SESSION['user_name'];?>">
                    <input type="hidden" name="dname" id="dname" value="<?=$name;?>">
         
                </div>
                <div class="frm-g">
                    <input type="text" name="age" id="age" placeholder="Patient Age">
              
                </div>
                <div class="frm-g">
                    <input type="time" name="time" id="time" placeholder="Time">
              
                </div>
                <div class="frm-g">
                    <input type="date" name="date" id="date" placeholder="Date">
              
                </div>
                <div class="frm-g">
                    <input type="text" name="phone" id="phone" placeholder="Phone number">
              
                </div>
                <div class="frm-g">
                    <input type="text" name="city" id="city" placeholder="City">
                    
                </div>
               
                <input type="submit" name="btn3" id='btn3' value="Make Appointment">
            
            </form>
            
        </div>
    </div>
   </div>

   

    
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="./appointmentd.js"></script>
</html>