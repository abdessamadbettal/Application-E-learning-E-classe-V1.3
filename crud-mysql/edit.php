<?php
$title = 'Modifier';
include './head.php';
?>
<?php
require_once '../db.php';
$id = $_GET['id'];
$resultat = mysqli_query($connecter, "SELECT * FROM students WHERE id=$id ");
while ($row = mysqli_fetch_assoc($resultat)) {
    $name = $row['name'];
    $email = $row['email'];
    $phone = $row['phone'];
    $enroll = $row['enroll'];
    $date = $row['date'];
}
if (isset($_POST['save'])) {
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $phone = $_POST['Phone'];
    $enroll = $_POST['Enroll'];
    $date = $_POST['Date'];
    $result = mysqli_query($connecter, "UPDATE students SET name='$name', email='$email', phone='$phone' , enroll='$enroll' , date='$date'  WHERE id=$id ");
    header('location: ../student.php');
}
include './footre.php';
?>
<body>
    <div class="container">
        <a href="/student.php" class="my-4 btn btn-primary btn-create p-2">BACk</a>
        <form method="POST">
            <div class="form-outline mb-4">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="Name" value="<?php echo $name ?>" />
            </div>
            <div class="form-outline mb-4">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="Email" value="<?php echo $email ?>" />
            </div>
            <div class="form-outline mb-4">
                <label class="form-check-label">Phone</label>
                <input type="number" class="form-control" name="Phone" value="<?php echo $phone ?>" />
            </div>
            <div class="form-outline mb-4">
                <label class="form-check-label">Enroll Number</label>
                <input type="number" class="form-control" name="Enroll" value="<?php echo $enroll  ?>" />
            </div>
            <div class="form-outline mb-4">
                <label class="form-check-label">Date of admission</label>
                <input type="date" class="form-control" name="Date" value="<?php echo $date  ?>" />
            </div>
            <button type="submit" class="btn btn-primary btn-block mb-4" name="save">Envoyer</button>
        </form>
    </div>