<?php
include 'database.php';
$sno=$_POST['sno'];
$date=$_POST['date'];
$campus=$_POST['campus'];
$institute=$_POST['institute'];
$department=$_POST['department'];
$building=$_POST['building'];
$meatingby=$_POST['meatingby'];
$employeeid=$_POST['employeeid'];
$name=$_POST['name'];
$ticketno=$_POST['ticketno'];
$technicalassociate=$_POST['technicalassociate'];
$status=$_POST['status'];
$notes=$_POST['notes'];

//software==table_name in database

$sql="INSERT INTO Meating(sno, date, campus, institute, department, building, meatingby, employeeid, name, ticketno, technicalassociate, status, notes) 
VALUES ('$sno','$date','$campus','$institute','$department','$building','$meatingby','$employeeid','$name','$ticketno','$technicalassociate','$status','$notes')";
$result=mysqli_query($conn, $sql);

if($result){
    header('Location: ./meating-form.php');
}


?>