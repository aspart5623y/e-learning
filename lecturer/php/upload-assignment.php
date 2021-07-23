<?php 

    $title = $desc = $course_name = $submit_date = $error = "";
    

    if(isset($_POST['addAssignmentBtn'])) {
        
        if (empty($_POST['ass_title'])){
            $error = "Please enter your assignment title";
        } else {
            $title = $_POST['ass_title'];
        }

        if (empty($_POST['ass_desc'])){
            $error = "Please enter a assignment description";
        } else {
            $desc = $_POST['ass_desc'];
        }
        
        if (empty($_POST['course'])){
            $error = "Please select course name";
        } else {
            $course_name = $_POST['course'];
        }

         if (empty($_POST['submit_date'])){
            $error = "Please enter submit date";
        } else {
            $submit_date = $_POST['submit_date'];
        }



        if (isset($_FILES['ass_file']['name'])) {
            $document = $_FILES['ass_file']['name'];

            if ($document != "") {
                $explode = explode('.', $document);
                $ext = end($explode);
                if ($ext == 'zip') {
                    $document = 'assignment-'.$title."-".date('dmy').time().".".$ext;

                    $src = $_FILES['ass_file']['tmp_name'];
                    $dst = "../assignment/".$document;
                    $upload = move_uploaded_file($src, $dst);

                    if ($upload == false) {

                        $error = "Failed to upload";
                        die();
                        
                    } else {
                        $ass_id = 'e-learning/ass/'.date('d-m-y').time();
                        $lecturer = $_SESSION['user_id'];


                        $query = mysqli_query($conn, "INSERT INTO assignment (ass_id, ass_title, ass_desc, course_name, course_lecturer, ass_file, submit_date) VALUES ('$ass_id', '$title', '$desc', '$course_name', '$lecturer', '$document', '$submit_date')");

                        if ($query) {
                            $_SESSION['success'] = "<div class='alert alert-success'>Assignment uploaded successfully</div>";


                            header('Location: ' . SITEURL . 'lecturer/classroom-assignment.php');
                        }

                        

                    }


                } else {
                    $error = "The file you uploaded is not in zip format";
                }
               
            } else {
                $document = "";

                $ass_id = 'e-learning/ass/'.date('d-m-y').time();
                $lecturer = $_SESSION['user_id'];


               $query = mysqli_query($conn, "INSERT INTO assignment (ass_id, ass_title, ass_desc, course_name, course_lecturer, submit_date) VALUES ('$ass_id', '$title', '$desc', '$course_name', '$lecturer', '$submit_date')");


                if ($query) {
                    $_SESSION['success'] = "<div class='alert alert-success'>Assignment uploaded successfully</div>";


                    header('Location: ' . SITEURL . 'lecturer/classroom-assignment.php');
                }

            }

        } else {
            $error = "Please upload a zipped file of your ass";
        }




    }
    
?>