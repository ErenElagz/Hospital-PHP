<?php
session_start();
include "./dbcon.php";

if (isset($_POST['name']) && isset($_POST['password'])) {

	function validate($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	$uname = validate($_POST['name']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: ../../index.php?error=Enter the Username!");
		exit();
	} else if (empty($pass)) {
		header("Location: ../../index.php?error=Enter the Password!");
		exit();
	} else {
		$sql = "SELECT * FROM users WHERE name='$uname' AND password='$pass'";

		$result = mysqli_query($dbcon, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
			if ($row['name'] === $uname && $row['password'] === $pass) {
				$_SESSION['user_name'] = $row['user_name'];
				$_SESSION['name'] = $row['name'];
				$_SESSION['id'] = $row['id'];
				header("Location: ./home.php");
				exit();
			} else {
				header("Location: ./index.php?error=Username or Password is Wrong!");
				exit();
			}
		} else {
			header("Location: ./index.php?error=Username or Password is Wrong!");
			exit();
		}
	}
} else {
	header("Location: ./index.php");
	exit();
}
