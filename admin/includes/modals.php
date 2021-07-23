
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

                <form class="d-inline-block mr-1" action="<?php echo SITEURL ?>admin/php/logout.php" method="post">
                    <button type="submit" class="btn btn-primary px-5">Yes</button> 
                </form>

                <button type="button" data-dismiss="modal" class="btn btn-light px-5 ml-1">No</button>


            </div>
        </div>
    </div>
</div>












<!-- add lecturer modal --> 
<div class="modal fade" id="addLecturer">
    <div class="modal-dialog">
        <!-- modal content -->
        <div class="modal-content">
            <!-- modal body -->
            <div class="modal-body">
                <!-- close modal button -->
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                
                <form>
                    <h5 class="font-weight-bold my-4">Add Lecturer</h5>

                    <p class="text-danger text-center" id="lecturer_error"></p>

                    <div class="form-group">
                        <label for="">Email:</label>
                        <input type="email" class="form-control" id="lecturer_email" placeholder="Enter email">
                    </div>

                    <div class="form-group">
                        <label for="">Password:</label>
                        <input type="password" class="form-control" id="lecturer_pass" placeholder="Enter password">
                    </div>

                    <div class="form-group">
                        <label for="">Confirm Password:</label>
                        <input type="password" class="form-control" id="lecturer_confirm" placeholder="confirm password">
                    </div>

                    <div class="my-4">
                        <button class="btn btn-primary w-100 py-3" id="addLecturerBtn" type="button">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>









<!-- add admin modal --> 
<div class="modal fade" id="addAdmin">
    <div class="modal-dialog">
        <!-- modal content -->
        <div class="modal-content">
            <!-- modal body -->
            <div class="modal-body">
                <!-- close modal button -->
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                
                <form>
                    <h5 class="font-weight-bold my-4">Add Admin</h5>

                    <p class="text-danger text-center" id="admin_error"></p>

                    <div class="form-group">
                        <label for="">Email:</label>
                        <input type="email" class="form-control" id="admin_email" placeholder="Enter email">
                    </div>

                    <div class="form-group">
                        <label for="">Password:</label>
                        <input type="password" class="form-control" id="admin_pass" placeholder="Enter password">
                    </div>

                    <div class="form-group">
                        <label for="">Confirm Password:</label>
                        <input type="password" class="form-control" id="admin_confirm" placeholder="confirm password">
                    </div>

                    <div class="my-4">
                        <button class="btn btn-primary w-100 py-3" id="addAdminBtn" type="button">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>




<!-- add course modal --> 
<div class="modal fade" id="addCourse">
    <div class="modal-dialog">
        <!-- modal content -->
        <div class="modal-content">
            <!-- modal body -->
            <div class="modal-body">
                <!-- close modal button -->
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                
                <form>
                    <h5 class="font-weight-bold my-4">Add Course</h5>

                    <p class="text-danger text-center" id="course_error"></p>

                    <div class="form-group">
                        <label for="">Course Name:</label>
                        <input type="text" class="form-control" id="course_name" placeholder="Enter course">
                    </div>

                    <div class="form-group">
                        <label for="">Course Title:</label>
                        <input type="text" class="form-control" id="course_title" placeholder="Enter course title">
                    </div>

                    <select id="course_lecturer" class="custom-select">
                        <option value="">Choose the course lecturer</option>

                        <?php 
                            $getLecturer = mysqli_query($conn, "SELECT * FROM users_table WHERE usertype = 'lecturer'");

                            while ($lecturer = mysqli_fetch_assoc($getLecturer)) {

                                if ($lecturer['user_name'] == "") {
                                    $name = $lecturer['user_email'];
                                } else {
                                    $name = $lecturer['user_name'];
                                }

                                ?>

                                    <option value="<?php echo $lecturer['portal_id'] ?>"><?php echo $name ?></option>

                                <?php
                            }
                            
                        ?>
                        
                    </select>

                    
                    <div class="my-4">
                        <button class="btn btn-primary w-100 py-3" id="addCourseBtn" type="button">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
