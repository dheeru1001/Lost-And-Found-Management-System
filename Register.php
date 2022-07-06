<?php
$name=$_POST['name'];
$mail=$_POST['mail'];
$phone=$_POST['phone'];
$user=$_POST['user'];
$pass=$_POST['pass'];

$conn=new mysqli('localhost','root','','lostandfound');
if($conn->connect_error)
{
    die('Connection Failed :'.$conn->connect_error);
}
else
{
    $stmt=$conn->prepare("insert into registration(name, email, phone, username, password)
           values(?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiss",$name,$mail,$phone,$user,$pass);
    $stmt->execute();
    echo "Registartion Successful...";
    
    $stmt->close();
    $conn->close();
}
?>
<?php
     header("Location: Lost And Found.html");
?>