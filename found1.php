<?php
$item=$_POST['item'];
$brand=$_POST['brand'];
$color=$_POST['color'];
$date=$_POST['date'];
$time=$_POST['time'];

$conn=new mysqli('localhost','root','','item found');
if($conn->connect_error)
{
    die('Connection Failed :'.$conn->connect_error);
}
else 
{
    $stmt=$conn->prepare("insert into found(item, brand, color, date, time)
           values(?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss",$item,$brand,$color,$date,$time);
    $stmt->execute();
    echo "Registartion Successful...";
    $stmt->close();
    $conn->close();
}
?>
<?php
     header("Location: Lost And Found.html");
?>