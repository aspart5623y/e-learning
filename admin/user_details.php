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



            <?php 
                global $conn;
            
                if(isset($_GET['id']) AND isset($_GET['type'])) {
                    $id = $_GET['id'];
                    $showUser = mysqli_query($conn, "SELECT * FROM users_table WHERE portal_id = '$id'");
 
                    if ($showUser) { 
                        $row = mysqli_fetch_assoc($showUser); 
                    } 

                } 

            ?>


            <!-- header card -->
            <section class="section">
                <div class="container">
                    <div class="card shadow-sm my-3 border-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="text-center mb-5">
                                        <img src="<?php echo SITEURL ?>assets/avatar/avatar.jpeg" width="120" height="120" alt="" class="rounded-circle">
                                    </div>

                                    <small class="text-muted blockquote-footer">Fullname</small>
                                    <p><?php echo $row['user_name'] ?></p>

                                    <small class="text-muted blockquote-footer">Email</small>
                                    <p><?php echo $row['user_email'] ?></p>

                                    

                                </div>

                                <div class="col-lg-6">
                                    <small class="text-muted blockquote-footer">Gender</small>
                                    <p><?php echo $row['gender'] ?></p>
                                    
                                    <small class="text-muted blockquote-footer">Date of Birth</small>
                                    <p><?php echo $row['user_dob'] ?></p>

                                    <small class="text-muted blockquote-footer">Country</small>
                                    <p><?php echo $row['country'] ?></p>

                                    <small class="text-muted blockquote-footer">State of Origin</small>
                                    <p><?php echo $row['state_of_origin'] ?></p>

                                    <small class="text-muted blockquote-footer">LGA</small>
                                    <p><?php echo $row['lga'] ?></p>

                                   <?php
                                        if($_GET['type'] == 'student') {
                                            ?>
                                                <small class="text-muted blockquote-footer">Department</small>
                                                <p><?php echo $row['department'] ?></p>

                                                <small class="text-muted blockquote-footer">Level</small>
                                                <p><?php echo $row['level'] ?></p>

                                                <small class="text-muted blockquote-footer">Session</small>
                                                <p><?php echo $row['session'] ?></p>
                                            <?php
                                        }
                                   ?>

                                    
                                    <form action="<?php echo SITEURL ?>admin/php/deleteUser.php?id=<?php echo $row['portal_id'] ?>" method="post">
                                        <button type="submit" class="btn btn-danger px-5 py-3"><i class="fas fa-user-minus"></i> &nbsp; Delete User</button>
                                    </form>

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
    <script src="<?php echo SITEURL ?>admin/js/users.js"></script>
    
  
</body>
</html>