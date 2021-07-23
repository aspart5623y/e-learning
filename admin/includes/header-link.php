<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMT - E Learning</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo SITEURL ?>assets/logo/favicon.png" type="image/x-icon">
    <!-- bootstrap link -->
    <link rel="stylesheet" href="<?php echo SITEURL ?>vendor/bootstrap/css/bootstrap.min.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="<?php echo SITEURL ?>vendor/fontawesome-free-5.13.0-web/fontawesome-free-5.13.0-web/css/all.min.css">
    <!-- external css link -->
    <link rel="stylesheet" href="<?php echo SITEURL ?>admin/css/style.css">
</head>

<?php 

    session_start();

    if (!isset($_SESSION['user_id'])) {
        header('Location: ' . SITEURL);
    } else if (isset($_SESSION['user_id']) AND $_SESSION['usertype'] == 'lecturer') {
        header('Location: '. SITEURL . 'lecturer');
    } else if (isset($_SESSION['user_id']) AND $_SESSION['usertype'] == 'student') {
        header('Location: '. SITEURL . 'dashboard');
    }

?>