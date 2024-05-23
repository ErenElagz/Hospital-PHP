<?php
include "./dbcon.php";
$id = $_GET['deleteid'];

if (isset($_GET['deleteid'])) {
    mysqli_query($dbcon, "delete from `employees` where id=$id");
    header('location:./all-employees.php');
}
