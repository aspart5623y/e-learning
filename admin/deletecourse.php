<?php 
    ob_start();
    $page = 'courses';
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
                        <li class="breadcrumb-item">courses</li>
                    </ul>
                </div>
            </div>



 


            <!-- header card -->
            <section>
                <div class="container">
                    <div class="card shadow-sm my-3 border-0">
                        <div class="card-body text-center">
                            <p class="text-muted">
                                Are you sure you want to delete this course?
                            </p>


                            <form method="post" class="d-inline-block">

                                <?php
                                    global $conn;

                                    if (isset($_POST['deletecourse'])){
                                        $id = $_POST['course_id'];

                                        $query = mysqli_query($conn, "DELETE FROM courses WHERE course_id = '$id'");

                                        if($query) {
                                            $_SESSION['success'] = "<div class='alert alert-danger'>Course Deleted</div>";
                                            header('Location: '.SITEURL.'admin/courses.php');
                                        }
                                        
                                    }
                                ?>



                                <input type="hidden" name="course_id" value="<?php echo $_GET['id'] ?>">
                                <button type="submit" name="deletecourse" class="btn btn-danger px-5" >Yes</button>
                            </form>
                            <a href="<?php echo SITEURL ?>admin/courses.php" class="btn btn-primary px-5">No</a>


                        </div>
                    </div>
                </div>
            </section>











            <!-- side bar overlay -->
            <a href="javascript:void(0)" class="sidebar-overlay"></a>

        </section>
    </main>


    <?php include './includes/footer-link.php'; ?>
    <script src="<?php echo SITEURL ?>admin/js/course.js"></script>
    <script src="<?php echo SITEURL ?>admin/js/add-course.js"></script>
    <?php ob_flush() ?>
  
</body>
</html>


