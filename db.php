<?php
$servername = "localhost" ;
$username = "root" ;
$password = "" ;
$dataname = "eclassev1.2" ;

$connecter = mysqli_connect ($servername , $username , $password , $dataname) ;

if ($connecter -> connect_error) {
    die ( "connection failed" .$connecter -> connect_error) ;
}
/* else{
    echo 'connected' ;
} */
?>

