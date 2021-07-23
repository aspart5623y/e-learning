<nav class="navbar navbar-light">
    <div class="container-fluid px-0">
        <!-- sidebar toggler -->
        <button class="btn btn-primary toggler rounded-0">
            <i class="fas fa-indent" style="font-size: 18px"></i>
        </button>
        <!-- navbar logo -->
        <a href="javascript:void(0)" class="navbar-brand d-none d-lg-flex">
            <img src="<?php echo SITEURL; ?>assets/logo/logo.png" width="40" height="40" alt="">
        </a>

        <!-- navbar nav -->
        <ul class="navbar-nav d-flex flex-row">
            <!-- notification -->
            <li class="nav-item dropdown align-self-center notification">
                <a href="#" class="nav-link" data-toggle="dropdown">
                    <i class="fas fa-bell" style="font-size:17px"></i>
                </a>

                <div class="dropdown-menu border-0 shadow">
                    <!-- notification -->
                    <a href="javascript:void(0)" class="dropdown-item  d-flex">
                        <!-- notification image -->
                        <span class="image align-self-start">
                            <i class="fas fa-edit text-danger" style="font-size: 20px;"></i>
                        </span>
                        <!-- notification text -->
                        <div class="ml-3 d-flex w-100 text-muted  justify-content-between">
                            <div>
                                <!-- notification title -->
                                <h6 class="font-weight-bold mb-0">
                                    Assignment 
                                </h6>
                                <!-- notification desc -->
                                <p class="mb-n1">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, eaque! Debitis ea aut aliquid, aliquam.
                                </p>
                            </div>
                            <!-- notification time -->
                            <span class="time">
                                12:00pm
                            </span>
                        </div>
                    </a>
                </div>
            </li>

            <!-- notification -->
            <li class="nav-item dropdown">
                <a href="#" class="nav-link" data-toggle="dropdown">
                    <img src="<?php echo SITEURL ?>assets/avatar/avatar.jpeg" width="40" height="40" alt="" class="rounded-circle">
                </a>

                <div class="dropdown-menu border-0 shadow">
                    <p class="border-bottom name">
                        Hello Staff
                    </p>
                    <a href="#" class="dropdown-item">
                        Profile
                    </a>
                    <a href="#logout" data-toggle="modal" class="dropdown-item">
                        Logout
                    </a>
                </div>
            </li>
        </ul>


    </div>
</nav>

<?php
    include 'modals.php';
?>