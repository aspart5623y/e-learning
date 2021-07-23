<?php 
    $page = 'student';
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
                        <li class="breadcrumb-item">students</li>
                    </ul>
                </div>
            </section>




            <!-- header card -->
            <section>
                <div class="container">
                    <div class="card shadow-sm my-3 border-0">
                        <div class="card-body text-center">
                            <i class="fas fa-user-friends text-secondary fa-5x"></i>
                            <h5 class="font-weight-bold my-3">
                                ALL STUDENTS
                            </h5>
                        </div>
                    </div>
                </div>
            </section>


            <section>
                <div class="container">
                    <div class="card shadow-sm my-3 border-0">
                        <div class="card-body">
                            <div id="user_list"></div>
                        </div>
                    </div>
                </div>
            </section>




            <!-- side bar overlay -->
            <a href="javascript:void(0)" class="sidebar-overlay"></a>

        </section>
    </main>



    <?php include './includes/footer-link.php' ?>
    <script src="<?php echo SITEURL ?>lecturer/js/showStudents.js"></script>


    
</body>
</html>