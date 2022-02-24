<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <?php
// session_start() ;
    // use LDAP\Result;

    include_once 'cc.php'; ?>
    <?php
    $mysqli = new mysqli('localhost', 'root', '', 'testcrud');
    $select = "select * from datacrud";
    $Result = mysqli_query($con, $select);
    // $row = mysqli_fetch_assoc($Result);
    // $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    // print_r($row);
    // echo '<br>';
    // var_dump($row);
    // echo '<br>';
    // print_r($row);
    // echo '<br>';
    // var_dump($row);
    // echo '<br>';
    // print_r(mysqli_fetch_assoc($Result));
    // echo '<br>';
    // // var_dump(mysqli_fetch_assoc($Result));
    // echo '<br>';
    // print_r(mysqli_fetch_assoc($Result));
    // echo '<br>';
    // // var_dump(mysqli_fetch_assoc($Result));
    // echo '<br>';
    // print_r($Result);
    // echo '<br>' ;
    // var_dump($Result);
    // echo '<br>' ;
    // print_r($age);
    // echo '<br>' ;
    // var_dump($age);
    // echo '<br>' ;

    ?>
    <?php if (isset($_SESSION['message'])) : ?>
        <div class="<?= $_SESSION['alert'] ?>">
            <?php echo $_SESSION['message'];
             unset($_SESSION['message']); 
            ?>
        </div>
    <?php endif ?>
    <table class="table container">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NAMEt</th>
                <th scope="col">LOCATION</th>

            </tr>
        </thead>
        <tbody>

            <?php while ($row = mysqli_fetch_assoc($Result)) : ?>
                <tr>
                    <?php echo '<th scope="row">' . $row['ID'] . '</th>'; ?>
                    <?php echo '<th scope="row">' . $row['NAME'] . '</th>'; ?>
                    <?php echo '<th scope="row">' . $row['LOCATION'] . '</th>'; ?>

                    <th><a href="index.php?modifier=<?php echo $row['ID']; ?>" class="btn btn-primary">edit</a>
                        <a href="index.php?suppermer=<?php echo $row['ID']; ?>" class="btn btn-danger">delet</a>
                    </th>
                </tr>
            <?php endwhile; ?>

        </tbody>
    </table>


    <div class="container d-flex justify-content-center ">
        <form  method="POST">
            <div class="mb-3">
                <label class="form-label">NAME</label>
                <input type="text" class="form-control" value="<?php if(isset($_GET['modifier'])){echo $name;} ?>" name="name">
                <div class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label class="form-label" >LOCATION</label>
                <input type="text" class="form-control" value="<?php if(isset($_GET['modifier'])){echo $location;} ?>" name="location">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" name="check" class="form-check-input">
                <label class="form-check-label">Check me out</label>
            </div>
            <button type="submit" name="<?php if(isset($_GET['modifier'])){echo "modifier";}else{echo "save";}?>" class="btn btn-primary"><?php if(isset($_GET['modifier'])){echo "modifier";}else{echo "save";}?></button>
        </form>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>