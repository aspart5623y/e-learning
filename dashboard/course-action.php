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
                        <li class="breadcrumb-item"><a href="<?php echo SITEURL ?>dashboard/index.php">Dashboard</a></li>
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
                                Are you sure you want to perfom this action?
                            </p>


                            <form method="post" class="d-inline-block">

                                <?php
                                    global $conn;

                                    if (isset($_POST['click'])){
                                        $id = $_POST['user'];
                                        $course = $_POST['course_id'];
                                        $action = $_POST['action'];

                                        if ($action == 'delete'){
                                            $query = mysqli_query($conn, "DELETE FROM course_reg WHERE course_id = '$course' AND student_id = '$id'");

                                            if($query) {
                                                $_SESSION['success'] = "<div class='alert alert-danger'>course unregisteration successful!</div>";
                                                header('Location: '.SITEURL.'dashboard/course.php');
                                            } else {
                                                echo 'error';
                                            }
                                            
                                        } elseif ($action == 'add') {

                                            $query = mysqli_query($conn, "INSERT INTO course_reg (student_id, course_id) VALUES ('$id', '$course')");
 
                                            if($query) {
                                                $_SESSION['success'] = "<div class='alert alert-success'>Course Registeration successful</div>";
                                                header('Location: '.SITEURL.'dashboard/course.php');
                                            } else {
                                                echo 'error';
                                            }

                                        }
                                        
                                    }
                                ?>



                                <input type="hidden" name="user" value="<?php echo $_GET['id'] ?>">
                                <input type="hidden" name="course_id" value="<?php echo $_GET['course'] ?>">
                                <input type="hidden" name="action" value="<?php echo $_GET['action'] ?>">
                                <button type="submit" name="click" class="btn btn-danger px-5" >Yes</button>
                            </form>
                            <a href="<?php echo SITEURL ?>dashboard/course.php" class="btn btn-primary px-5">No</a>


                        </div>
                    </div>
                </div>
            </section>











            <!-- side bar overlay -->
            <a href="javascript:void(0)" class="sidebar-overlay"></a>

        </section>
    </main>


    <?php include './includes/footer-link.php'; ?>
    <?php ob_flush() ?>
  
</body>
</html>


