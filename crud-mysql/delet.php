<?php

require_once '../db.php' ;
$id = $_GET['id'];
$resultat = mysqli_query($connecter, "DELETE FROM students WHERE id=$id");
header('location: ../student.php');
// echo '<script>document.location.replace("/student.php")</script>';
