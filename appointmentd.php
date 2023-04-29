
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./appointmentd.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>
<body class='body'>
    

    <div class="container">
        <div class="slide">
            <div class="box1">
           
                <h2>Improve Quality Of Life Through Better Health.</h2>
            <p>Medcity has been present in Europe since 1990, offering innovative solutions, specializing in medical services for treatment of medical infrastructure.</p>
          
            </div>
              <div class="box">
                <p>You make your appointment process Successfully.Wish you a healthy life</p>
                <p>please consider that you have to download this validation card and bring this one when you come!</p>
                <div class="btn">
                    <div class="dow">
                        <a href="" id="download"><i class="bi bi-cloud-arrow-down-fill"></i>Download PDF</a>
                        
                    </div>
    
                </div>
            </div>
    
    
            
            
        </div>
     <?php
           include 'appointment.php';
           
          
         ?>
       
        

    <div class="file">
    
            <div class="box">
             <h2><img src="./images/download.png" alt=""><span>MediQu</span> </h2>
             <h4>Medcity has been present in Europe since 1990, offering innovative solutions, specializing in medical services for treatment of medical infrastructure.</h4>
    
            </div>

            
            
            <table border="">
                <tr>
                    <td id="no">No.</td>
                    <td id="cat">Catogery</td>
                    <td>Details</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Name:</td>
                    <td><?=$_SESSION['puser'];?></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Patient Name:</td>
                    <td><?=$_SESSION['pname'];?></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Patient age:</td>
                    <td><?=$_SESSION['age'];?></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Patient city:</td>
                    <td><?=$_SESSION['city'];?></td>
                </tr>
    
                <tr>
                    <td>5</td>
                    <td>Doctor Name:</td>
                    <td><?=$_SESSION['dname'];?></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Doctor Specialization:</td>
                    <td><?=$_SESSION['path'];?></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Valid date:</td>
                    <td><?=$_SESSION['date'];?></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Valid Time:</td>
                    <td><?=$_SESSION['time'];?></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Valid Venue:</td>
                    <td><?=$_SESSION['city'];?></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Payment:</td>
                    <td>Rs.2000.00</td>
                </tr>
                
             </table>
         </div>
    </div>
    
    </body>

    <script src="./appointmentd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</html>