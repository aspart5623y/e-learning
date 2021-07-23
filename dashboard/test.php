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
            // include 'includes/sidebar.php';
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
                // include 'includes/navbar.php';
            ?>


            <!-- <section>
                <div class="container-fluid">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="<?php #echo SITEURL ?>dashboard/index.php">Home</a>
                        </li>
                        <li class="breadcrumb-item">test</li>
                    </ul>
                </div>
            </section> -->




            <!-- header card -->
            <section>
                <div class="container">
                    <div class="card shadow-sm my-3 border-0">
                        <div class="card-body text-center">
                            <h5 class="font-weight-bold my-3">
                                TEST
                            </h5>
                        </div>
                    </div>
                </div>
            </section>

            <?php
                if(isset($_GET['id']) AND isset($_GET['table'])) {
                    $sn = 1;
                    $limit = 1;
                    
                    $curr_page = isset($_GET['page']) ? $_GET['page'] : 1;
                    $start = ($curr_page - 1) * $limit;
                    $table = $_GET['table'];
                    $showQuestions = mysqli_query($conn2, "SELECT * FROM `$table` LIMIT $start, $limit");
                    $showQuestionsNum = mysqli_query($conn2, "SELECT * FROM `$table`");
                    $totalQues = mysqli_num_rows($showQuestionsNum);

                    $totalPages = ceil($totalQues / $limit);
                    $prevPage = $curr_page - 1;
                    $nextPage = $curr_page + 1;
                }
            ?>





            <section>
                <div class="container">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <form method="post">
                                
                                <?php 
                                    
                                    include 'php/submitTest.php';
                                    

                                    if ($showQuestions) {
                                        while($row = mysqli_fetch_assoc($showQuestions)){
                                            ?>
                                                <h6 class="font-weight-bold"><?php echo $curr_page++ . '. ' . $row['question'] ?>?</h6>
                                                <div class="form-group">
                                                    <input type="radio" name="<?php echo $row['ques_id'] ?>" value="<?php echo $row['answer_1'] ?>" class="form">
                                                    <label for=""><?php echo $row['answer_1'] ?></label>
                                                </div>
                                                <div class="form-group">
                                                    <input type="radio" name="<?php echo $row['ques_id'] ?>" value="<?php echo $row['answer_2'] ?>" class="form">
                                                    <label for=""><?php echo $row['answer_2'] ?></label>
                                                </div>
                                                <div class="form-group">
                                                    <input type="radio" name="<?php echo $row['ques_id'] ?>" value="<?php echo $row['answer_3'] ?>" class="form">
                                                    <label for=""><?php echo $row['answer_3'] ?></label>
                                                </div>
                                                <div class="form-group">
                                                    <input type="radio" name="<?php echo $row['ques_id'] ?>" value="<?php echo $row['answer_4'] ?>" class="form">
                                                    <label for=""><?php echo $row['answer_4'] ?></label>
                                                </div>

                                                <div class="form-group">
                                                    <input type="radio" name="<?php echo $row['ques_id'] ?>" value="<?php echo $row['answer_5'] ?>" class="form">
                                                    <label for=""><?php echo $row['answer_5'] ?></label>
                                                </div>
                                            <?php
                                        }
                                    }
                                ?>


                                <button type="submit" name="submitTest" class="btn btn-success px-5 my-3 ml-auto d-block">Submit</button>
                            </form>

                            <ul class="pagination">
                                <li class="page-item <?php if($_GET['page'] == 1) {echo 'disabled';} ?>">
                                    <a href="<?php echo SITEURL . 'dashboard/test.php?id='.$_GET['id'].'&table='.$_GET['table'].'&page='.$prevPage; ?>" class="page-link">Prev</a>
                                </li>

                                <?php
                                    $i = 1;
                                    while ($i <= $totalPages) {
                                        ?>
                                        <li class="page-item">
                                            <a href="<?php echo SITEURL . 'dashboard/test.php?id='.$_GET['id'].'&table='.$_GET['table'].'&page='.$i; ?>" class="page-link"><?php echo $i ?></a>
                                        </li>
                                        <?php
                                        $i++;
                                    }
                                ?>

                                <li class="page-item <?php if($_GET['page'] == $totalQues) {echo 'disabled';} ?>">
                                    <a href="<?php echo SITEURL . 'dashboard/test.php?id='.$_GET['id'].'&table='.$_GET['table'].'&page='.$nextPage; ?>" class="page-link">Next</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            



            





            <!-- side bar overlay -->
            <a href="javascript:void(0)" class="sidebar-overlay"></a>

        </section>
    </main>



    <?php include './includes/footer-link.php' ?>
    <script src="<?php echo SITEURL ?>dashboard/js/showTest.js"></script>

    

    
</body>
</html>