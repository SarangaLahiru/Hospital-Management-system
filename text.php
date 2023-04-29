
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<style>
    .box{
        display:flex;
        justify-content:center;
        flex-wrap:wrap;
    }
    .box1{
        width:300px;
        margin:10px 15px;
    }
</style>

<?php
include 'validation.php';

$sql="SELECT feedback FROM user ";
$stmt=mysqli_query($conn,$sql);
echo "<div class='box'>";

while($row=mysqli_fetch_assoc($stmt)){
  
   echo "<div class='box1'>";
   echo $row['feedback'];
   echo "</div>";

   
  

}
echo "</div>";

$sqli="SELECT email FROM user ";
$stmt1=mysqli_query($conn,$sqli);
while($row=mysqli_fetch_assoc($stmt1)){
    echo $row['email'];
};


?>
<?php
$sql2="CREATE TABLE saranga (ID INT(10),name VARCHAR(10))";
if($stmt2=mysqli_query($conn,$sql2)){
   echo "ok";
}
?>
</body>
</html>
