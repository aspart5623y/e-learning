<?php 
    $page = 'test';
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
                    $showLecture = mysqli_query($conn, "SELECT * FROM test_tb WHERE test_id = '$id'");
 
                    if ($showLecture) { 
                        $row = mysqli_fetch_assoc($showLecture); 
                    } else {
                        header('Location: '. SITEURL . 'lecturer/set-test.php');
                    }

                } else {
                    header('Location: '. SITEURL . 'lecturer/set-test.php');
                }

            ?>

            <!-- header card -->
            <section class="section">
                <div class="container">

                    <div class="card shadow-sm my-3 border-0">
                        <div class="card-body">
                            <h5 class="font-weight-bold text-center mb-5">Test</h5>
                            <p>Course name:  
                                <?php 

                                    $course_id = $row['test_course'];
                                    $getCourse = mysqli_query($conn, "SELECT * FROM courses WHERE course_id = '$course_id'");
                                    $getRow = mysqli_fetch_assoc($getCourse);
                                    echo $getRow['course_name'];
                                ?>
                            </p>
                            
                            <p>Title: <?php echo $row['test_title'] ?></p>

                            <p>Date: <?php echo $row['test_date'] ?></p>

                            <p>Time: <?php echo $row['test_time'] ?></p>

                            <p>Status: <?php echo $row['test_status'] ?></p>
                                
                            <?php $table_name = $row['test_table']; ?>
                            
                        </div>
                    </div>



                    <div class="card shadow-sm my-3 border-0">
                        <div class="card-body">
                            <button class="btn btn-primary px-5 py-3 m-1" type="button" data-toggle="modal" data-target="#addQuestion">Add Question</button>
                            

                            <form class="d-inline-block" action="<?php echo SITEURL ?>lecturer/deleteTest.php?id=<?php echo $table_name ?>&link=<?php echo $row['test_id'] ?>" method="post">
                                <button type="submit" class="btn btn-danger px-5 py-3 m-1">Delete Test</button>
                            </form>
                        </div>
                    </div>



                    <div class="card shadow-sm my-3 border-0">
                        <div class="card-body">
                            <h5 class="font-weight-bold text-center mb-5">Questions</h5>


                            <?php 
                                $show_ques = mysqli_query($conn2, "SELECT * FROM `$table_name`");

                                $sn = 1;

                                if (mysqli_num_rows($show_ques) > 0) {
                                    while($show_ques_arr = mysqli_fetch_assoc($show_ques)){
                                        ?>
                                            <h6 class="font-weight-bold mb-4"><?php echo $sn++ . '. ' . $show_ques_arr['question']; ?></h6>
                                            <p class="text-muted"><?php echo 'A. '. $show_ques_arr['answer_1']; ?></p>
                                            <p class="text-muted"><?php echo 'B. '. $show_ques_arr['answer_2']; ?></p>
                                            <p class="text-muted"><?php echo 'C. '. $show_ques_arr['answer_3']; ?></p>
                                            <p class="text-muted"><?php echo 'D. '. $show_ques_arr['answer_4']; ?></p>
                                            <p class="text-muted"><?php echo 'E. '. $show_ques_arr['answer_5']; ?></p>
                                            <form class="d-inline-block" action="<?php echo SITEURL ?>lecturer/deleteQues.php?id=<?php echo $show_ques_arr['ques_id'] ?>&table=<?php echo $table_name; ?>" method="post">
                                                <button type="submit" class="btn btn-danger">Delete question</button>
                                            </form>
                                            <hr>

                                        <?php
                                    }
                                } else {
                                    ?>
                                        <p class="text-muted">You have not set any question for this test.</p>
                                    <?php
                                }
                            ?>


                        </div>
                    </div>

                </div>
            </section>





            <!-- side bar overlay -->
            <a href="javascript:void(0)" class="sidebar-overlay"></a>

        </section>
    </main>



    <?php include './includes/footer-link.php' ?>
    <script src="<?php echo SITEURL ?>lecturer/js/addQues.js"></script>

    
</body>
</html>