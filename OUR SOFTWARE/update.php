<?php
$connection = mysqli_connect("localhost", "root", "", "software");
$db = mysqli_select_db($connection, 'phpcrud');

    if(isset($_POST['update']))
    {   
    
        $date = $_POST['date'];
        $campus = $_POST['campus'];
        $institute = $_POST['institute'];
        $department = $_POST['department'];
        $building = $_POST['building'];
        $employeeid = $_POST['employeeid'];
        $name = $_POST['name'];
        $ticketno = $_POST['ticketno'];
        $category = $_POST['category'];
        $quantity = $_POST['quantity'];
        $make = $_POST['make'];
        $model = $_POST['model'];
        $assetserialno = $_POST['assetserialno'];
        $status = $_POST['status'];
        $notes = $_POST['notes'];
    

        $query = "UPDATE student SET date='$date', campus='$campus', institute='$institute', department=' $department', building='$building', employeeid='$employeeid', name='$name', ticketno='$ticketno',
         category='$category', quantity='$quantity', make='$make', model='$model', assetserialno='$assetserialno', technicalassociate='$technicalassociate', status='$status', notes='$notes'  WHERE id='$id'  ";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:ticket-data.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>