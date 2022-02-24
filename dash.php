<?php
session_start();
?>
<?php
if (empty($_SESSION['username'])) {

  header('location: index.php');
} else {
?>
  <?php
  include_once 'db.php';
  $count_s = "SELECT COUNT(id) FROM students;";
  $count_d = "SELECT COUNT(id) FROM courses;";
  $count_p = "SELECT SUM(amount) FROM payments;";
  $resultat_s = mysqli_query($connecter, $count_s);
  $resultat_d = mysqli_query($connecter, $count_d);
  $resultat_p = mysqli_query($connecter, $count_p);
  $data_s = mysqli_fetch_row($resultat_s);
  $data_d = mysqli_fetch_row($resultat_d);
  $data_p = mysqli_fetch_column($resultat_p);

  $titre_page = 'home';
  require 'header.php';
  ?>
  <div class="container-fluid">
    <div class="row flex-nowrap">
      <?php
      $active_d = 'active px-3';
      include 'sidebar.php';
      ?>
    </div>
    <!-- nav bar -->
    <div class="col ">
      <?php
      include 'navbar.php';
      ?>
      <div class="container-fluid px-4">
        <div class="row g-5 my-2">
          <div class="col-md-6 col-lg-3">
            <div class=" p-3  shadow-sm rounded" style="background-color: #F0F9FF;">
              <div>
                <i class="bi bi-mortarboard fs-1 text-info"></i>
                <p class="fs-5 mt-2 text-secondary"><?php /* echo $_SESSION['email'];*/ ?> Students</p>
                <div class="d-flex justify-content-end">
                  <p class="fs-2 fw-5 h3 "><?php echo $data_s[0]; ?></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class=" p-3  shadow-sm rounded" style="background-color: #FEF6FB;">
              <div>
                <i class="bi bi-bookmark fs-1  p-3 " style="color: #EE95C5;"></i>
                <p class="fs-5 mt-2 text-secondary">Course</p>
                <div class="d-flex justify-content-end">
                  <p class="fs-2 h3 fw-5 "><?php echo $data_d[0]; ?></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class=" p-3 shadow-sm rounded payments-c" style="background-color: #FEFBEC;">
              <div>
                <i class="bi bi-wallet fs-1  p-3 text-info "></i>
                <p class="fs-5 mt-2 text-secondary">Payments</p>
                <div class="d-flex justify-content-end">
                  <div class="d-flex align-items-center">
                    <h6 class=" me-1 price">DHS</h6>
                    <h5 class="fs-2 fw-5 price1 "><?php echo $data_p; ?></h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class=" p-3 shadow-sm rounded" style=" background: linear-gradient(110.42deg, #00C1FE 18.27%, #FAFFC1 91.84%);">
              <div>
                <i class="bi bi-person fs-1  p-3 text-white "></i>
                <p class="fs-5 mt-2 text-secondary">Users</p>
                <div class="d-flex justify-content-end">
                  <p class="fs-2 fw-5 h3 ">2</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
<?php

}
require 'footer.php';
?>