<?php
session_start();
?>
<?php
if (!isset($_SESSION['username'])) {
  header('location: index.php');
} else {
  $titre_page = 'payement';
  require 'header.php';
?>
  <div class="container-fluid">
    <div class="row flex-nowrap">
      <?php
      $active_p = ' active px-3';
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
          <h2 class="fw-bold">Payments Details</h2>
          <i class="bi bi-chevron-expand fs-3 text-info"></i>
        </div>
        <div class="table-responsive ">
          <table class="table table-hover table-striped ">
            <thead style="display: none;">
              <tr>
                <td scope="col">#</td>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody class="border-top-0 ">
              <tr>
                <td scope="row" class="text-secondary">Name</td>
                <td class="text-secondary">Payment Schedule</td>
                <td class="text-secondary">Bill Number</td>
                <td class="text-secondary">Amount Paid</td>
                <td class="text-secondary">Balance amount</td>
                <td class="text-secondary" colspan="2">Date</td>
              </tr>
              <?php
              require_once 'db.php';
              $query = "SELECT * FROM `payments` ";
              $resultat = mysqli_query($connecter, $query);
              
              if (mysqli_num_rows($resultat) > 0) {
                $i = 0;
                while ($row = mysqli_fetch_row($resultat)) {
                  echo '
                <tr>
                <td class="text-black">' . $row[1] . '</td>
                <td class="text-black">' . $row[2] . '</td>
                <td class="text-black">' . $row[3] . '</td>
                <td class="text-black">' . $row[4] . '</td>
                <td class="text-black">' . $row[5] . '</td>
                <td class="text-black">' . $row[6] . '</td>
                <td><i class="bi bi-eye text-info"></i></td>
              </tr>
                ';
                  $i++;
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