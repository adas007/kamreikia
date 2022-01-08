<?php
include_once "includes/init.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>KamReikia</title>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.4.1.js"></script>
    <link href="css/bootstrap-4.4.1.css" rel="stylesheet">
</head>
<body>
	<div class="container">
        <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="index.php">KamReikia</a>
                <form class="form-inline my-2 my-lg-0">
                    <button class="btn btn-outline-success my-2 my-sm-0"    type="submit"formaction="login.php">Prisijungti</button>
                    <button  class="btn btn-outline-success my-2 my-sm-0" type="submit"formaction="register.php">Registracija</button>
                </form>
            </div>

        </nav>