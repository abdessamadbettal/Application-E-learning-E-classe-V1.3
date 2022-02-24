<?php
session_start();
?>
<?php
if (!isset($_SESSION['username'])) {
    header('location: index.php');
} else {
    $titre_page = 'courses';
    require 'header.php';
?>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <?php
            $active_c = 'active px-3';
            include 'sidebar.php';
            ?>
        </div>
        <!-- nav bar -->
        <div class="col ">
            <?php
            include 'navbar.php';
            ?>
            <div class="">
                <div class="d-flex justify-content-between">
                    <h2 class="fw-bold">courses lists</h2>
                    <div>
                        <i class="bi bi-chevron-expand fs-3 text-info"></i>
                    </div>
                </div>
                <div class="table-responsive ">
                    <table class="table table-hover table-striped ">
                        <tbody class="border-top-0">
                            <tr>
                                <td scope="row" class="text-secondary"></td>
                                <td class="text-secondary">Name</td>
                                <td class="text-secondary">Niveau</td>
                                <td class="text-secondary">Description</td>
                                <td class="text-secondary">Abonnées</td>
                                <td class="text-secondary">Time</td>
                            </tr>
                            <?php
                            require_once 'db.php';
                            $query = "SELECT * FROM `courses`  ";
                            $resultat = mysqli_query($connecter, $query);
                            if (mysqli_num_rows($resultat) > 0) {
                                // $i = 0;
                                // while ($row = mysqli_fetch_assoc($resultat)) {
                                    foreach ($resultat as $row ) {
                                        # code...
                                    // }
                                    echo '<tr class="">
                <td class="text-black "> <img src="img/username.png" alt=""></td>
                <td class="text-black py-4">' . $row['name'] . '</td>
                <td class="text-black py-4">' . $row['niveau'] . '</td>
                <td class="text-black py-4">' . $row['description'] . '</td>
                <td class="text-black py-4">' . $row['abonees'] . '</td>
                <td class="text-black py-4">' . $row['time'] . '</td>
              </tr>
              <tr>
                <td class="p-1"></td>
                <td class="p-1"></td>
                <td class="p-1"></td>
                <td class="p-1"></td>
                <td class="p-1"></td>
                <td class="p-1"></td>
                <td class="p-1"></td>
              </tr>
              ';
                                    // $i++;
                                }
                            } else {
                                echo 'no result found';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
<?php
    require 'footer.php';
}
?>