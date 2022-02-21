

<!-- <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark" > -->
    <div class="col-auto col-md-3 col-xl-2 d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100" style="background-color: #FAFFC1;">
        <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <span class="fs-5 d-none d-sm-inline text-black">E-classe</span>
        </a>
        <div class="dropdown pb-4">
            <a href="#" class="d-flex flex-column align-items-center text-white text-decoration-none " id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="img/pexels-photo-2379004 1.png" alt="hugenerd" width="141" height="141" class="rounded-circle ms-1 d-none d-sm-inline" />
                <span class="d-none d-sm-inline mx-1 text-black fw-bold"><?= $_SESSION['username'] ?></span>
                <p class="d-none d-sm-inline mx-1 text-info ms-7 fw-bold ">admin</p>
            </a>  
        </div>
        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start mt-5 "  >
            <li  >

                <a href="dash.php" class="nav-link <?php if(isset($active_d)){ echo $active_d ;}?> align-middle  ">
                    
                    <i class="fs-6 home-lg-alt bi-house-door text-black"></i>
                    <span class="ms-1 d-none d-sm-inline text-black ">Home</span>
                </a>
            </li>
            <li  >
                <a href="courses.php" class=" nav-link <?php if(isset($active_c)){echo $active_c ;} ?> align-middle">
                    <i class="fs-6 bi-bookmark text-black"></i>
                    <span class="ms-1 d-none d-sm-inline text-black">courses</span></a>
            </li>
            <li>
                <a href="student.php"  class="nav-link <?php if(isset($active_s)){ echo $active_s ;} ?> align-middle">
                    <i class="fs-6 bi bi-mortarboard text-black"></i>
                    <span class="ms-1 d-none d-sm-inline text-black">students</span></a> 
            </li>
            <li>
                <a href="payement.php"  class="nav-link <?php if(isset($active_p )){ echo $active_p ;} ?> align-middle">
                    <span class="fs-6 iconify text-black" data-icon="uil:usd-square"></span>
                    <span class="ms-1 d-none d-sm-inline text-black">payement</span>
                </a>
                
            </li>
            <li>
                <a href="#submenu3"  class="nav-link px-3 align-middle">
                    <i class="fs-6 bi-file-earmark-bar-graph text-black"></i>
                    <span class="ms-1 d-none d-sm-inline text-black">report</span>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link px-3 align-middle">
                    <i class="fs-6 b bi-sliders text-black"></i>
                    <span class="ms-1 d-none d-sm-inline text-black">Settings</span>
                </a>
            </li>
        </ul>
        <hr />
        <div class="d-flex align-items-end pb-5 ">
            <a href="index.php" class="nav-link px-0 align-middle">
                <span class="ms-1 d-none d-sm-inline text-black">Logout</span>
                <i class="fs-6 b bi bi-box-arrow-in-right text-black"></i>
            </a>
        </div>
        
    <!-- </div> -->