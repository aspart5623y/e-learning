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
        // include 'includes/preloader.php';
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
                            <i class="fas fa-user-shield text-danger fa-5x"></i>
                            <h5 class="font-weight-bold my-3">
                                ADMIN
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
                                <i class="fas fa-user-plus"></i>
                                &nbsp;
                                Add Admin
                            </p>
                            <a href="#addAdmin" data-toggle="modal" class="stretched-link"></a>
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
                                    <th>Fullname</th>
                                    <th>Email</th>
                                    <th>State of Origin</th>
                                    <th>LGA</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="admin_list">
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
    <script src="<?php echo SITEURL ?>admin/js/add-admin.js"></script>
    
  
</body>
</html>