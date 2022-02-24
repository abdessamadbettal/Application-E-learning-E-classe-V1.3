<?
$con = new mysqli('localhost' , 'root' , '' , 'testcrud') or die (mysqli_error($mysqli)) ;
if ($con -> connect_error) {
    die ( "connection failed" .$con -> connect_error) ;
}

if (isset($_POST['save'])) {
    $name = $_POST['name'] ;
    $location = $_POST['location'] ;

    // $mysqli->query("INSERT INTO datacrud (NAME , LOCATION ) VALUES ('$name' , '$location') ") or 
    // die($mysqli->error) ;
    $query = "INSERT INTO datacrud (NAME , LOCATION ) VALUES ('$name' , '$location') " ;
    mysqli_query($con , $query);
}
