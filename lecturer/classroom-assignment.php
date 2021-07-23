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
                            <i class="fas fa-file-alt text-info fa-5x"></i>

                            <h5 class="font-weight-bold my-3">
                                ASSIGNMENTS
                            </h5>
                        </div>
                    </div>
                </div>
            </section>






            <section>
                <div class="container">
                    <div class="card shadow-sm my-3 border-0">
                        <div class="card-body text-center">
                            <p class="text-muted mb-0">
                                <i class="fas fa-plus"></i>
                                &nbsp;
                                Upload Assignment
                            </p>
                            <a href="<?php echo SITEURL ?>lecturer/upload-assignment.php" class="stretched-link"></a>
                        </div>
                    </div>

                    <?php 
                        if (isset($_SESSION['success'])) {
                            echo $_SESSION['success'];
                            unset($_SESSION['success']);
                        }
                    ?>
                </div>
            </section>





            <!-- students table -->
            <section>
                <div class="container">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Course name</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="ass_list">
                                <!-- ajax is handling this -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>


            



            <!-- side bar overlay -->
            <a href="javascript:void(0)" class="sidebar-overlay"></a>

        </section>
    </main>



    <?php include './includes/footer-link.php' ?>
    <script src="<?php echo SITEURL ?>lecturer/js/show-assignment.js"></script>

    
</body>
</html>