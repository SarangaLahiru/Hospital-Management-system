<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./searchdoc.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

</head>
<body>

    <header class="head1">
        <h2><a href=""><img src="./images/download.png" alt=""> MediQu</a> </h2>
        <li><a href="">Doctors</a></li>
        <li><a href="">Locations</a></li>
        <li><a href="">Services</a></li>
        <li><a href="">Tools & Resourses</a></li>
        <?php
        include "register.php";

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
            <li><a href="/myphp-1/e-com-6/hospital/dashboard.php">Go to Dashboard</a></li>
            <li id="a1"><a id="a2" href="/myphp-1/e-com-6/hospital/hms.php" >Log out</a></li>
           </div>

        </ul>
        </li>
    </header>

    <div class="slide">
        <img src="./images/happy-black-female-doctor-talking-couple-showing-them-medical-test-results-touchpad-during-consultations-clinic.jpg" alt="">
        <div class="dis">
            <h2>Improve Quality Of Life Through Better Health.</h2>
            <p>Medcity has been present in Europe since 1990, offering innovative solutions, specializing in medical services for treatment of medical infrastructure.</p>
            <a href="#src">Find A Doctor</a>
        </div>
        <div class="notice">
            <p>Back online</p>
        </div>
        <div class="notice notice1">
            <p>You are in offline!</p>
        </div>
    </div>
    

    <div class="searchbox" id="src">
        <i class="bi bi-search"></i>
        <input id="search" type="search" placeholder="Find Your Doctor">
    </div>

    <div class="topdoctors">
        <div class="dis">
            <h2>Meet Our Doctors</h2>
            <p>Our administration and support staff all have exceptional people skills and trained to assist you with all medical enquiries.</p>

        </div>

        <div class="box1">
        <div class="box">
                <div class="img">
                    <img src="./images/portrait-hansome-young-male-doctor-man_171337-5068.avif" alt="">
                </div>
                <h2>Richard Muldoone</h2>
                <h4>Cardiology Specialist</h4>
                <p>Muldoone obtained his undergraduate degree in Biomedical Engineering at Tulane University prior to attending St George's University School of Medicine</p>
                <form action="./doctor.php" method="POST">
                <input name="img" type="hidden" value="<img src='./images/portrait-hansome-young-male-doctor-man_171337-5068.avif'>">
                    <input type="hidden" value="Richard" name="name">
                    <input type="submit" value="Read more" name="btn">
                </form>
            </div>
            <div class="box">
                <div class="img">
                    <img src="./images/coronavirus-disease-healthcare-workers-concept-close-up-confident-professional-female-doctor-nurse-glasses-scrubs-standing-white-wall-cross-arms_1258-17282.jpg" alt="">
                </div>
                <h2>Maria Andaloro</h2>
                <h4>Pediatrician special</h4>
                <p>Maria obtained his undergraduate degree in Biomedical Engineering at Tulane University prior to attending St George's University School of Medicine</p>
                <form action="./doctor.php" method="POST">
                <input name="img" type="hidden" value=" <img src='./images/coronavirus-disease-healthcare-workers-concept-close-up-confident-professional-female-doctor-nurse-glasses-scrubs-standing-white-wall-cross-arms_1258-17282.jpg'>">

                    <input type="hidden" value="Maria" name="name">
                    <input type="submit" value="Read more" name="btn">
                </form>
            </div>
            <div class="box">
                <div class="img">
                    <img src="./images/portrait-smiling-young-male-doctor_600776-17351.jpg" alt="">
                </div>
                <h2>Michael Brain</h2>
                <h4>Dermatologists Specialist</h4>
                <p>Muldoone obtained his undergraduate degree in Biomedical Engineering at Tulane University prior to attending St George's University School of Medicine</p>
                <form action="./doctor.php" method="POST">
                <input name="img" type="hidden" value="<img src='./images/portrait-smiling-young-male-doctor_600776-17351.jpg'>">

                    <input type="hidden" value="Michael" name="name">
                    <input type="submit" value="Read more" name="btn">
                </form>
            </div>
            <div class="box">
                <div class="img">
                    <img src="./images/portrait-hansome-young-male-doctor-man_171337-5068.avif" alt="">
                </div>
                <h2>Richard Muldoone</h2>
                <h4>Cardiology Specialist</h4>
                <p>Muldoone obtained his undergraduate degree in Biomedical Engineering at Tulane University prior to attending St George's University School of Medicine</p>
                <form action="./doctor.php" method="POST">
                    <input type="hidden" value="Richard" name="name">
                    <input type="submit" value="Read more" name="btn">
                </form>
            </div>
            <div class="box">
                <div class="img">
                    <img src="./images/portrait-hansome-young-male-doctor-man_171337-5068.avif" alt="">
                </div>
                <h2>Richard Muldoone</h2>
                <h4>Cardiology Specialist</h4>
                <p>Muldoone obtained his undergraduate degree in Biomedical Engineering at Tulane University prior to attending St George's University School of Medicine</p>
                <form action="./doctor.php" method="POST">
                    <input type="hidden" value="Richard" name="name">
                    <input type="submit" value="Read more" name="btn">
                </form>
            </div>
            <div class="box">
                <div class="img">
                    <img src="./images/portrait-hansome-young-male-doctor-man_171337-5068.avif" alt="">
                </div>
                <h2>Richard Muldoone</h2>
                <h4>Cardiology Specialist</h4>
                <p>Muldoone obtained his undergraduate degree in Biomedical Engineering at Tulane University prior to attending St George's University School of Medicine</p>
                <form action="./doctor.php" method="POST">
                    <input type="hidden" value="Richard" name="name">
                    <input type="submit" value="Read more" name="btn">
                </form>
            </div>
            <div class="box">
                <div class="img">
                    <img src="./images/portrait-hansome-young-male-doctor-man_171337-5068.avif" alt="">
                </div>
                <h2>Richard Muldoone</h2>
                <h4>Cardiology Specialist</h4>
                <p>Muldoone obtained his undergraduate degree in Biomedical Engineering at Tulane University prior to attending St George's University School of Medicine</p>
                <form action="./doctor.php" method="POST">
                    <input type="hidden" value="Richard" name="name">
                    <input type="submit" value="Read more" name="btn">
                </form>
            </div>
            <div class="box">
                <div class="img">
                    <img src="./images/portrait-hansome-young-male-doctor-man_171337-5068.avif" alt="">
                </div>
                <h2>Richard Muldoone</h2>
                <h4>Cardiology Specialist</h4>
                <p>Muldoone obtained his undergraduate degree in Biomedical Engineering at Tulane University prior to attending St George's University School of Medicine</p>
                <form action="./doctor.php" method="POST">
                    <input type="hidden" value="Richard" name="name">
                    <input type="submit" value="Read more" name="btn">
                </form>
            </div>
            <div class="box">
                <div class="img">
                    <img src="./images/portrait-hansome-young-male-doctor-man_171337-5068.avif" alt="">
                </div>
                <h2>Richard Muldoone</h2>
                <h4>Cardiology Specialist</h4>
                <p>Muldoone obtained his undergraduate degree in Biomedical Engineering at Tulane University prior to attending St George's University School of Medicine</p>
                <form action="./doctor.php" method="POST">
                    <input type="hidden" value="Richard" name="name">
                    <input type="submit" value="Read more" name="btn">
                </form>
            </div>
            <div class="box">
                <div class="img">
                    <img src="./images/portrait-hansome-young-male-doctor-man_171337-5068.avif" alt="">
                </div>
                <h2>Richard Muldoone</h2>
                <h4>Cardiology Specialist</h4>
                <p>Muldoone obtained his undergraduate degree in Biomedical Engineering at Tulane University prior to attending St George's University School of Medicine</p>
                <form action="./doctor.php" method="POST">
                    <input type="hidden" value="Richard" name="name">
                    <input type="submit" value="Read more" name="btn">
                </form>
            </div>
        </div>
    </div>

    
    
</body>
<script src="./searchdoc.js"></script>
<script src="./user_hms.js"></script>
</html>