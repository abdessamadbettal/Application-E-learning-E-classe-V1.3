<body>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Ajouter un student
    </button>

<?php include_once 'model_bootstrap.php' ?>
    <?php
    include_once 'db.php';

    if (isset($_POST['save'])) {

        $name   = $_POST['name'];
        $email  = $_POST['email'];
        $phone  = $_POST['phone'];
        $enroll = $_POST['enroll'];
        $date   = $_POST['date'];
        $sql = " INSERT INTO students (name , email , phone , enroll , date) VALUES ('$name' , '$email' , '$phone' , '$enroll' , '$date' ) ";
        mysqli_query($connecter, $sql);
        // echo '<script>document.location.replace("../student.php")</script>';

        // header('location: ../student.php');
    }

    ?>