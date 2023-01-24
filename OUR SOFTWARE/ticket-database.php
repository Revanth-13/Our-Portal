<?php
include 'database.php';

$sno=$_POST['sno'];
$date=$_POST['date'];
$campus=$_POST['campus'];
$institute=$_POST['institute'];
$department=$_POST['department'];
$building=$_POST['building'];
$employeeid=$_POST['employeeid'];
$name=$_POST['name'];
$ticketno=$_POST['ticketno'];
$category=$_POST['category'];
$quantity=$_POST['quantity'];
$make=$_POST['make'];
$model=$_POST['model'];
$assetserialno=$_POST['assetserialno'];
$technicalassociate=$_POST['technicalassociate'];
$status=$_POST['status'];
$notes=$_POST['notes'];

//software==table_name in database

$sql="INSERT INTO ticket(sno, date, campus, institute, department, building, employeeid, name,  ticketno, category, quantity,make, model, assetserialno, technicalassociate, status, notes) 
VALUES ('$sno','$date','$campus','$institute','$department','$building','$employeeid','$name','$ticketno','$category','$quantity','$make','$model','$assetserialno','$technicalassociate','$status','$notes')";
$result=mysqli_query($conn, $sql);

if($result){
    header('Location: ./ticket-data.php');
}

?>