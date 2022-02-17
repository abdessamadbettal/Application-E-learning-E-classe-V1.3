<?php

require_once '../db.php' ;
$enroll = $_GET['enroll'];
$resultat = mysqli_query($connecter, "DELETE FROM students WHERE enroll=$enroll");
header('location: ../student.php');
// echo '<script>document.location.replace("/student.php")</script>';
