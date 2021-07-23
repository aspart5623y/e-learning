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
            
                if(isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $showLecture = mysqli_query($conn, "SELECT * FROM lectures WHERE lecture_id = '$id'");
 
                    if ($showLecture) { 
                        $row = mysqli_fetch_assoc($showLecture); 
                    } else {
                        header('Location: '. SITEURL . 'lecturer/classroom-lectures.php');
                    }

                } else {
                    header('Location: '. SITEURL . 'lecturer/classroom-lectures.php');
                }

            ?>

            <!-- header card -->
            <section class="section">
                <div class="container">
                    <div class="card shadow-sm my-3 border-0">
                        <div class="card-body">
                            <h5 class="font-weight-bold text-center mb-5">Lecture</h5>

                            <div class="row">
                               
                                <div class="col-lg-6">
                                    <small class="text-muted blockquote-footer">Course name</small>
                                    <p>
                                        <?php 

                                            $course_id = $row['course_name'];
                                            $getCourse = mysqli_query($conn, "SELECT * FROM courses WHERE course_id = '$course_id'");
                                            $getRow = mysqli_fetch_assoc($getCourse);
                                            echo $getRow['course_name'];
                                        ?>
                                    </p>
                                    
                                    <small class="text-muted blockquote-footer">Title</small>
                                    <p><?php echo $row['title'] ?></p>

                                    <small class="text-muted blockquote-footer">Description</small>
                                    <p><?php echo $row['description'] ?></p>

                                    <a href="../materials/<?php echo $row['course_file']; ?>" download><i class="fas fa-download mb-3"></i> &nbsp; download material</a>

                                   

                                    
                                    <form action="<?php echo SITEURL ?>lecturer/deleteLecture.php?id=<?php echo $row['lecture_id'] ?>&doc=<?php echo $row['course_file'] ?>" method="post">
                                        <button type="submit" class="btn btn-danger px-5 py-3">Delete lecture</button>
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



    <?php include './includes/footer-link.php' ?>

    
</body>
</html>