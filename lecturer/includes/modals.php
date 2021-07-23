
<!-- Logout modal --> 
<div class="modal fade" id="logout">
    <div class="modal-dialog">
        <!-- modal content -->
        <div class="modal-content">
            <!-- modal body -->
            <div class="modal-body text-center">
                <!-- close modal button -->
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <p class="text-muted">
                    Are you sure you want to logout?
                </p>

                <form class="d-inline-block mr-1" action="<?php echo SITEURL ?>lecturer/php/logout.php" method="post">
                    <button type="submit" class="btn btn-primary px-5">Yes</button> 
                </form>

                <button type="button" data-dismiss="modal" class="btn btn-light px-5 ml-1">No</button>


            </div>
        </div>
    </div>
</div>














<!-- set test modal --> 
<div class="modal fade" id="setTest">
    <div class="modal-dialog">
        <!-- modal content -->
        <div class="modal-content">
            <!-- modal body -->
            <div class="modal-body">
                <!-- close modal button -->
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                

                <form class="mt-4">
                    <p class="text-danger text-center" id="test_error"></p>

                    <div class="form-group">
                        <label for="">Title:</label>
                        <input type="text" id="test_title" class="form-control" placeholder="Enter a title for the exam">
                    </div>  

                    <label for="">Select a course</label>
                    <select id="test_course" class="custom-select mb-3">
                        <option value="">Choose a course</option>
                        <?php 
                            $getCourse = mysqli_query($conn, "SELECT * FROM courses WHERE course_lecturer = '$user_id'");

                            if (mysqli_num_rows($getCourse) > 0) {

                                while ($row = mysqli_fetch_assoc($getCourse)) {
                                    ?>
                                        <option value="<?php echo $row['course_id'] ?>"><?php echo $row['course_name'] ?></option>
                                    <?php
                                }
                            }
                        ?>
                    </select>
                    
                    <div class="form-group">
                        <label for="">Pick a date for the test:</label>
                        <input type="date" id="test_date" class="form-control">
                    </div>  

                    <div class="form-group">
                        <label for="">Set a time for the test:</label>
                        <input type="time" id="test_time" class="form-control" value="08:00">
                    </div>  


                    <button type="button" id="setTestBtn" class="btn btn-primary w-100 py-3">
                        Set test
                    </button>
                
                </form>
            </div>
        </div>
    </div>
</div>











<!-- set test modal --> 
<div class="modal fade" id="addQuestion">
    <div class="modal-dialog modal-dialog-scrollable">
        <!-- modal content -->
        <div class="modal-content">
            <!-- modal body -->
            <div class="modal-body">
                <!-- close modal button -->
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                

                <form class="mt-4">
                    <p class="text-danger text-center" id="ques_error"></p>

                    <div class="form-group">
                        <label for="">Question:</label>
                        <input type="text" id="ques" class="form-control" placeholder="Enter a question">
                    </div>  
                    
                    <div class="form-group">
                        <label for="">Option 1:</label>
                        <input type="text" id="option_1" class="form-control" placeholder="Enter option 1">
                    </div>  

                    <div class="form-group">
                        <label for="">Option 2:</label>
                        <input type="text" id="option_2" class="form-control" placeholder="Enter option 2">
                    </div> 

                    <div class="form-group">
                        <label for="">Option 3:</label>
                        <input type="text" id="option_3" class="form-control" placeholder="Enter option 3">
                    </div> 

                    <div class="form-group">
                        <label for="">Option 4:</label>
                        <input type="text" id="option_4" class="form-control" placeholder="Enter option 4">
                    </div> 

                    <div class="form-group">
                        <label for="">Option 5:</label>
                        <input type="text" id="option_5" class="form-control" placeholder="Enter option 5">
                    </div> 

                     <div class="form-group">
                        <label for="">correct:</label>
                        <select id="correct" class="custom-select">
                            <option value="">Choose the correct option</option>
                            <option value="a">option 1</option>
                            <option value="c">option 2</option>
                            <option value="c">option 3</option>
                            <option value="d">option 4</option>
                            <option value="e">option 5</option>
                        </select>
                    </div> 

                    <input type="hidden" id="table_name" value="<?php echo $_GET['table']; ?>">


                    <button type="button" id="AddQuesBtn" class="btn btn-primary w-100 py-3">
                        Add Question
                    </button>
                
                </form>
            </div>
        </div>
    </div>
</div>






