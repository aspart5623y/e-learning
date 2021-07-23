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
                            <a href="<?php echo SITEURL ?>dashboard/index.php">Home</a>
                        </li>
                        <li class="breadcrumb-item">classroom</li>
                    </ul>
                </div>
            </section>









            <section class="section">
                <div class="container">
                    <div class="col-lg-7">
                        <div class="card shadow-sm my-3 border-0">
                            <div class="card-body">
                        
                                <form method="post" enctype="multipart/form-data">
                                    <?php 
                                        include "./php/sendQuestion.php";
                                    ?>

                                    <h5 class="font-weight-bold text-center my-4">Ask question</h5>
                        
                                    <p class="text-danger text-center"><?php echo $error; ?></p>



                                    <label for="">Select course</label>
                                    <select name="course" class="custom-select mb-3">
                                        <option value="">select course</option>
                                        <?php 
                                        
                                            $getCourse = mysqli_query($conn, "SELECT * FROM courses");
                                            

                                            while ($getArray = mysqli_fetch_assoc($getCourse)) {

                                                $_course = $getArray['course_id'];


                                                $getRegCourse = mysqli_query($conn, "SELECT * FROM course_reg WHERE course_id = '$_course' AND student_id = '$user_id'");


                                                if (mysqli_num_rows($getRegCourse) < 1) {  
                                                    continue;  
                                                }  
                                                

                                                ?>
                                                    <option value="<?php echo $getArray['course_id'] ?>" <?php if ($course == $getArray['course_id']) {echo 'selected';} ?>><?php echo $getArray['course_name'] ?></option>
                                                <?php

                                            }
                                        ?>
                                    </select>



                        
                                    <div class="form-group">
                                        <label for="">Question:</label>
                                        <textarea name="question" class="form-control" rows="3" placeholder="enter your question"><?php echo $question ?></textarea>
                                    </div>
                        
                                    
                        
                                    
                                    <div class="my-4">
                                        <button class="btn btn-primary w-100 py-3" name="submitQues" type="submit">Submit</button>
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

    
</body>
</html>

<?php ob_flush(); ?>