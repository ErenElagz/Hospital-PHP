<?php
include "./dbcon.php";
$id = $_GET['deleteid'];

if (isset($_GET['deleteid'])) {
    mysqli_query($dbcon, "delete from `patients` where id=$id");
    header('location:./all-patients.php');
}
