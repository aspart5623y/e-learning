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









            <section>
                <div class="container">
                    <div class="col-lg-7">
                        <div class="card shadow-sm my-3 border-0">
                            <div class="card-body">
                        
                                <form method="post" enctype="multipart/form-data">
                                    <?php 
                                        include "./php/upload-assignment.php";
                                    ?>

                                    <h5 class="font-weight-bold text-center my-4">Upload Assignment</h5>
                        
                                    <p class="text-danger text-center" id="ass_error"><?php echo $error; ?></p>
                        
                                    <div class="form-group">
                                        <label for="">Title:</label>
                                        <input type="text" class="form-control" name="ass_title" placeholder="Enter title of assignment" value="<?php echo $title; ?>">
                                    </div>
                        
                                    <div class="form-group">
                                        <label for="">Description:</label>
                                        <input type="text" class="form-control" name="ass_desc" placeholder="Enter assignment description" value="<?php echo $desc; ?>">
                                    </div>
                        
                                    
                        
                                    <label for="">Course Name:</label>
                                    <select name="course" class="custom-select mb-3">
                                        <option value="">Choose the course</option>
                        
                                        <?php                         
                                            $user_id = $_SESSION['user_id'];
                                            
                                            $getCourses = mysqli_query($conn, "SELECT * FROM courses WHERE course_lecturer = '$user_id'");
                        
                                            while ($course = mysqli_fetch_assoc($getCourses)) {
                                                ?>
                                                    <option value="<?php echo $course['course_id'] ?>" <?php if($course_name == $course['course_id']){echo 'selected';} ?>><?php echo $course['course_name'] ?></option>
                                                <?php
                                            }
                                        ?>
                                    </select>
                        

                                    <div class="form-group">
                                        <label for="">Submission date:</label>
                                        <input type="date" class="form-control" name="submit_date" value="<?php echo $submit_date; ?>">
                                    </div>

                        
                                    <div class="form-group my-3">
                                        <label for="">Assignment file:</label> <br>
                                        <input type="file" name="ass_file"> <br>
                                        <small class="text-muted">(upload a zipped file only)</small>
                                    </div>
                        
                                    
                                    <div class="my-4">
                                        <button class="btn btn-primary w-100 py-3" name="addAssignmentBtn" type="submit">Submit</button>
                                    </div>
                                </form>
                                
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
    <script src="<?php echo SITEURL ?>lecturer/js/upload-lecture.js"></script>

    
</body>
</html>

<?php ob_flush(); ?>