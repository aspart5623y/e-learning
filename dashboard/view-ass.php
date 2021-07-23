<?php 
    ob_start();
    $page = 'classroom';
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



            <?php 
                global $conn;
            
                if(isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $showAss = mysqli_query($conn, "SELECT * FROM assignment WHERE ass_id = '$id'");
 
                    if ($showAss) { 
                        $row = mysqli_fetch_assoc($showAss); 
                    } else {
                        header('Location: '. SITEURL . 'lecturer/classroom-assignment.php');
                    }

                } else {
                    header('Location: '. SITEURL . 'lecturer/classroom-assignment.php');
                }

            ?>

            <!-- header card -->
            <section class="section">
                <div class="container">
                    <div class="card shadow-sm my-3 border-0">
                        <div class="card-body">
                            <h5 class="font-weight-bold text-center mb-5">Assignment</h5>


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
                                    <p><?php echo $row['ass_title'] ?></p>

                                    <small class="text-muted blockquote-footer">Description</small>
                                    <p><?php echo $row['ass_desc'] ?></p>

                                    <small class="text-muted blockquote-footer">Submission date</small>
                                    <p><?php echo $row['submit_date'] ?></p>

                                    <?php 
                                    
                                        if ($row['ass_file']) {
                                            ?>
                                                <a href="../assignment/<?php echo $row['ass_file']; ?>" download><i class="fas fa-download mb-3"></i> &nbsp; download material</a>
                                            <?php
                                        }
                                    
                                    ?>

                                </div>


                            </div>
                        </div>
                    </div>


                    <div class="card border-0 shadow-sm my-3">
                        <div class="card-body">
                                        
                            

                            <form method="post" enctype="multipart/form-data">
                                <?php 
                                    include 'submitAss.php';
                                ?>

                                <?php 
                                    $ass_id = $row['ass_id'];

                                    $checkSubmitted = mysqli_query($conn, "SELECT * FROM submit_ass WHERE ass_id = '$ass_id' AND student_id = '$me'");


                                    if (mysqli_num_rows($checkSubmitted) < 1) {
                                        ?>

                                            <p class="text-danger"><?php echo $error; ?></p>

                                            <div class="form-group">
                                                <label for="">Upload your assignment</label> <br>
                                                <input type="file" name="submit_file"> <br>
                                                <small class="text-muted">(upload a zipped file of your assignment)</small>
                                            </div>


                                            <input type="hidden" name="ass_id" value="<?php echo $row['ass_id'] ?>">

                                            
                                            <button type="submit" name="submit_ass" class="btn btn-success px-5 py-3">Submit assignment</button>

                                        <?php

                                    } else if (mysqli_num_rows($checkSubmitted) > 0) {
                                        ?>
                                            <p class="text-success">You assignment has been submitted!</p>
                                        <?php
                                    }
                                
                                ?>

                                
                            </form>
                        </div>
                    </div>
                </div>
            </section>





            <!-- side bar overlay -->
            <a href="javascript:void(0)" class="sidebar-overlay"></a>

        </section>
    </main>



    <?php 
        include './includes/footer-link.php';
        ob_flush();
    ?>

    
</body>
</html>