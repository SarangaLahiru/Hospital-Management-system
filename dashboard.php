<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./dashboard.css">
</head>
<body>
    <div class="container">
        <header>
            <li><a href=""><i class="bi bi-grid-1x2-fill"></i></a></li>
            <li><a href=""><i class="bi bi-alarm-fill"></i></a></li>
            <li><a href=""><i class="bi bi-envelope-fill"></i></a></li>
            <li><a href=""><i class="bi bi-chat-dots-fill"></i></a></li>

        </header>
        <div class="box">
        <?php
            include "register.php";
            ?>

            <div class="header">
                <div class="dis">
                    <h2>Hi! <span><?=$_SESSION['user_name'];?></span></h2>
                <p>Health is wealth!</p>
                </div>
                <div class="dis1">
                    <a href=""><i class="bi bi-bag-heart-fill"></i></a>
                <a href=""><span><?=$_SESSION['user_name'][0];?></span></a>
                </div>

            </div>

            
            <div class="box1">
                <div class="welc">
                    <h2>Heathy day ,<span><?=$_SESSION['user_name'];?></span></h2>
                    <p>Whatever you do, do with determination. You have one life to live , do your work with passion and give your best.</p>

                </div>
                <?php
                include "validation.php";
                $user4=$_SESSION['user_name'];

              $sql4="SELECT count(doctors) as counts FROM $user4";
              $stmt4=mysqli_query($conn,$sql4);
              $row4=mysqli_fetch_assoc($stmt4);

              $countappint=$row4['counts'];

                 ?>
                <div class="appno">
                    <p>Total Appointment</p>
                    <h2><span><?=$countappint;?></span></h2>

                </div>
            </div>
            

            <div class="appointment">
                <h2>Appointment</h2>
                <table>
                    <tr id="theam">
                        <td>Name</td>
                        <td>Date</td>
                        <td>Time</td>
                        <td>Status</td>
                    </tr>

                    <?php
                    $sqli5="SELECT*FROM $user4";
                    $stmt5=mysqli_query($conn,$sqli5);
                    while($row5=mysqli_fetch_assoc($stmt5)){

                     echo "   <tr>
                        <td>Dr.".$row5['doctors']."</td>
                        <td>".$row5['date']."</td>
                        <td>".$row5['time']."</td>
                        <td>".$row5['path']."</td>
                    </tr>";


                    }
                    ?>
                    
                    
                </table>
            </div>

        </div>


        <div class="comment">
            <h2>Customer feedback</h2>
            <p></p>
            <form action="appointment.php" method="POST">
                <div class="frm-g">
                    <input type="text" name="name" value="<?=$_SESSION['user_name'];?>" placeholder="Enter your name">
                </div>
                <div class="frm-g">
                    <input type="email" name="email" value="<?=$_SESSION['user_email'];?>" placeholder="Enter your email">
                </div>
                <div class="frm-g">
                    <textarea placeholder="Massage" name="msg" id="" cols="30" rows="10"></textarea>
                </div>
                <input type="submit" value="Submit feedback" name="btnf">

            </form>
        </div>
    </div>
</body>
</html>