<?php

    $error = '';
    $me = $_SESSION['user_id'];


    if (isset($_POST['submit_ass'])) {

        $ass_id = mysqli_real_escape_string($conn, $_POST['ass_id']);


        if (isset($_FILES['submit_file']['name'])) {
            $document = $_FILES['submit_file']['name'];

            if ($document != "") {
                $explode = explode('.', $document);
                $ext = end($explode);
                if ($ext == 'zip') {
                    $document = 'submitted-'.date('dmy').time().".".$ext;

                    $src = $_FILES['submit_file']['tmp_name'];
                    $dst = "../submit_assignment/".$document;
                    $upload = move_uploaded_file($src, $dst);

                    if ($upload == false) {

                        $error = "Failed to upload";
                        die();
                        
                    } else {
                        $submission_id = 'e-learning/submit_ass/'.date('d-m-y').time();


                        $query = mysqli_query($conn, "INSERT INTO submit_ass (ass_id, submission_id, student_id, ass_file) VALUES ('$ass_id', '$submission_id', '$me', '$document')");

                        if ($query) {
                            $_SESSION['success'] = "<div class='alert alert-success'>Assignment uploaded successfully</div>";

                            header('Location: ' . SITEURL . 'dashboard/classroom-assignment.php');
                            
                        }

                    }

                } else {

                    $error = "The file you uploaded is not in zip format";

                }
               
            } else {
                
                $error = "Upload a zipped file of your assignment";

            }

        } else {
            $error = "Please upload a zipped file of your ass";
        }


    }

    


?>