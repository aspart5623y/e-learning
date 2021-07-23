<?php 
    $page = 'users';
    include './includes/config.php'; 
    include './includes/header-link.php'; 
?>

<body>

    <!-- 
        ========================  P R E L O A D E R  =======================
    -->
    <?php 
        include 'includes/preloader.php';
    ?>
    
    
    <main>
        <!-- 
            ***********************************
                    S  I  D  E  B  A  R
            ***********************************
        -->
       <?php 
            include 'includes/sidebar.php';
       ?>


        <!-- 
            **************************************
                    M  A  I  N  P  A  G  E
            **************************************
        -->
        <section id="main-page">

            <!-- 
                **************************************
                       N    A   V   B   A   R
                **************************************
            -->
            
            <?php 
                include 'includes/navbar.php';
            ?>

            <!-- 
                This page main items starts here!
            -->

            <div class="my-4">
                <div class="container-fluid">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo SITEURL ?>admin/index.php">Dashboard</a></li>
                        <li class="breadcrumb-item">Users</li>
                    </ul>
                </div>
            </div>

            <section class="section">
                <div class="container">
                    <?php 
                        if (isset($_SESSION['success'])) {
                            echo $_SESSION['success'];
                            unset($_SESSION['success']);
                        }
                    ?>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card shadow-sm my-3 border-0">
                                <div class="card-body text-center">
                                    <i class="fas fa-users text-success fa-5x"></i>
                                    <p class="text-muted">
                                        View all students!
                                    </p>
                                    <a href="<?php echo SITEURL ?>admin/users-students.php" class="stretched-link"></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card shadow-sm my-3 border-0">
                                <div class="card-body text-center">
                                    <i class="fas fa-user-tag text-info fa-5x"></i>
                                    <p class="text-muted">
                                        View all Lecturers!
                                    </p>
                                    <a href="<?php echo SITEURL ?>admin/users-lecturer.php" class="stretched-link"></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card shadow-sm my-3 border-0">
                                <div class="card-body text-center">
                                    <i class="fas fa-user-shield text-danger fa-5x"></i>
                                    <p class="text-muted">
                                        View all Admins!
                                    </p>
                                    <a href="<?php echo SITEURL ?>admin/users-admin.php" class="stretched-link"></a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </section>  










            <!-- side bar overlay -->
            <a href="javascript:void(0)" class="sidebar-overlay"></a>

        </section>
    </main>


    <?php include './includes/footer-link.php'; ?>
    
  
</body>
</html>