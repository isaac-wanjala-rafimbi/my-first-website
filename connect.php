<?php
$firstName =$_POST['firstName'];
$emailAddress =$_POST['emailAddress'];
$location=$_POST['location'];
$postalAddress=$_POST['postalAddress'];
$gender=$_POST['gender'];
$conn=new mysqli('localhost','root','','basics');
if($conn->connect_error)
{
    die('Connection Failed  :'.$conn->connect_error); 
}
else
{
$stmt=$conn->prepare("insert into customerservices(firstName,emailAddress,location,postalAddress,gender)
values(?,?,?,?,?)");
$stmt->bind_param("sssss",$firstName,$emailAddress,$location,$postalAddress,$gender);
$stmt->execute();
echo "you have placed your order successfully...";
$stmt->close();
$conn->close();
}
?>