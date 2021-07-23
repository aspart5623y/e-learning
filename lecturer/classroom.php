<?php 
    $page = 'classroom';
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


            <section>
                <div class="container-fluid">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="<?php echo SITEURL ?>lecturer/index.php">Home</a>
                        </li>
                        <li class="breadcrumb-item">classroom</li>
                    </ul>
                </div>
            </section>




            <!-- header card -->
            <section>
                <div class="container">
                    <div class="card shadow-sm my-3 border-0">
                        <div class="card-body text-center">
                            <i class="fas fa-users text-secondary fa-5x"></i>
                            <h5 class="font-weight-bold my-3">
                                CLASSROOM
                            </h5>
                        </div>
                    </div>
                </div>
            </section>


            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card shadow-sm my-3 border-0">
                                <div class="card-body text-center">
                                    <i class="fas fa-layer-group text-success fa-5x"></i>
                                    <br><br>
                                    <p class="text-muted">
                                        Manage Lecture
                                    </p>
                                    <a href="<?php echo SITEURL ?>lecturer/classroom-lectures.php" class="stretched-link"></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card shadow-sm my-3 border-0">
                                <div class="card-body text-center">
                                    <i class="fas fa-file-alt text-info fa-5x"></i>
                                    <br><br>
                                    <p class="text-muted">
                                        Manage Assignment
                                    </p>
                                    <a href="<?php echo SITEURL ?>lecturer/classroom-assignment.php" class="stretched-link"></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card shadow-sm my-3 border-0">
                                <div class="card-body text-center">
                                    <i class="fas fa-question text-danger fa-5x"></i>
                                    <br><br>
                                    <p class="text-muted">
                                        Answer Questions
                                    </p>
                                    <a href="<?php echo SITEURL ?>lecturer/classroom-question.php" class="stretched-link"></a>
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



    <?php include './includes/footer-link.php' ?>

    
</body>
</html>