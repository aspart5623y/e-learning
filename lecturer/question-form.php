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


            <?php 
            
                if (isset($_GET['id'])) {
                    $ques_id = $_GET['id'];
                    $getQuestion = mysqli_query($conn, "SELECT * FROM questions WHERE question_id = '$ques_id'");

                    $q_arr = mysqli_fetch_assoc($getQuestion);

                    $c_id = $q_arr['course'];
                    $c_name = mysqli_query($conn, "SELECT * FROM courses WHERE course_id = '$c_id'");
                    $c_arr = mysqli_fetch_assoc($c_name);

                }

            ?>






            <section class="section">
                <div class="container">
                    <div class="col-lg-7">
                        <div class="card shadow-sm my-3 border-0">
                            <div class="card-body">
                                <p class="text-muted">
                                    <?php echo $q_arr['question']; ?>
                                </p>
                                <small class="blockquote-footer text-dark"><?php echo $c_arr['course_name']; ?></small>

                        
                                <form method="post" enctype="multipart/form-data">
                                    <?php 
                                        include "./php/sendAnswer.php";
                                    ?>

                                    <h5 class="font-weight-bold text-center my-4">Answer question</h5>
                        
                                    <p class="text-danger text-center"><?php echo $error; ?></p>
                                  
                        
                                    <div class="form-group">
                                        <textarea name="answer" class="form-control" rows="3" placeholder="enter your answer"><?php echo $answer; ?></textarea>
                                        
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