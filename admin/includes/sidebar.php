<!-- 
    ***********************************
            S  I  D  E  B  A  R
    ***********************************
-->

<?php
    $user_id = $_SESSION['user_id'];
    $userQuery = mysqli_query($conn, "SELECT * FROM users_table WHERE portal_id = '$user_id'");

    $userRow = mysqli_fetch_assoc($userQuery);
?>

<section class="bg-white shadow" id="sidebar">
    <!-- user card -->
    <div class="user-image bg-light rounded mx-auto my-5 d-flex flex-column align-items-center justify-content-center" style="height: 200px; width: 200px">
        <img src="<?php echo SITEURL ?>assets/avatar/avatar.jpeg" class="rounded-circle" width="100" height="100" alt="">
        <h5 class="font-weight-bold mt-3"><?php echo $userRow['user_name'] ?></h5>
        <p class="text-muted">ADMIN</p>
    </div>

    <ul class="sidebar-nav">
        <!-- sidebar link -->
        <li class="sidebar-item">
            <a href="<?php echo SITEURL ?>admin/index.php" class="sidebar-link <?php if ($page == 'dashboard'){echo 'active';} ?>">
                <!-- icon -->
                <i class="fas fa-tachometer-alt"></i>
                <!-- name -->
                <span class="sidebar-text">Dashboard</span>
            </a>
        </li>

       
        <!-- sidebar link -->
        <li class="sidebar-item">
            <a href="<?php echo SITEURL ?>admin/users.php" class="sidebar-link <?php if ($page == 'users'){echo 'active';} ?>">
                <!-- icon -->
                <i class="fas fa-user-friends"></i>
                <!-- name -->
                <span class="sidebar-text">Users</span>
            </a>
        </li>

        
        <!-- sidebar link -->
        <li class="sidebar-item">
            <a href="<?php echo SITEURL ?>admin/courses.php" class="sidebar-link <?php if ($page == 'courses'){echo 'active';} ?>">
                <!-- icon -->
                <i class="fas fa-edit"></i>
                <!-- name -->
                <span class="sidebar-text">Manage courses</span>
            </a>
        </li>

        

    </ul>
</section>