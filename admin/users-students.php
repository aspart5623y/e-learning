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



 


            <!-- header card -->
            <section>
                <div class="container">
                    <div class="card shadow-sm my-3 border-0">
                        <div class="card-body text-center">
                            <i class="fas fa-users text-success fa-5x"></i>
                            <h5 class="font-weight-bold my-3">
                                STUDENTS
                            </h5>
                        </div>
                    </div>
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
                                    <th>Fullname</th>
                                    <th>Email</th>
                                    <th>Department</th>
                                    <th>Level</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="student_list">
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


    <?php include './includes/footer-link.php'; ?>
    <script src="<?php echo SITEURL ?>admin/js/users.js"></script>
    
  
</body>
</html>