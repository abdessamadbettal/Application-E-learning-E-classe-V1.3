<?php
session_start();

$con = new mysqli('localhost', 'root', '', 'testcrud') or die(mysqli_error($mysqli));
// if ($con -> connect_error) {
//     die ( "connection failed" .$con -> connect_error) ;
// }

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $location = $_POST['location'];

    // $mysqli->query("INSERT INTO datacrud (NAME , LOCATION ) VALUES ('$name' , '$location') ") or 
    // die($mysqli->error) ;
    $query = "INSERT INTO datacrud (NAME , LOCATION ) VALUES ('$name' , '$location') ";
    mysqli_query($con, $query);
    // $_SESSION['message'] = "has ben aded avec seccus";
    // $_SESSION['alert'] = "alert alert-success";
    header('location: index.php');
    $_SESSION['message'] = "has ben added avec seccus";
    $_SESSION['alert'] = "alert alert-success";
}
if (isset($_GET['suppermer'])) {
    $id = $_GET['suppermer'];
    $query = "DELETE FROM datacrud WHERE $id = ID";
    mysqli_query($con, $query);
    $_SESSION['message'] = "has ben deleted avec seccus";
    $_SESSION['alert'] = "alert alert-danger";
}

if (isset($_GET['modifier'])) {
    $id = $_GET['modifier'];
    $query = "select * from datacrud where ID = $id";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
    $name = $row['NAME'];
    $location = $row['LOCATION'];

    if (isset($_POST['modifier'])) {

        $name = $_POST['name'];
        $location = $_POST['location'];
        $queri = "UPDATE datacrud SET NAME = '$name' , LOCATION = '$location'  WHERE ID='$id'";
        mysqli_query($con, $queri);
        $_SESSION['message'] = "has ben added avec seccus";
        $_SESSION['alert'] = "alert alert-primary";
        // echo '<script>document.location.replace("index.php")</script>';
        header('location: index.php');
    }
    // echo '<script>document.location.replace("index.php")</script>';



}
