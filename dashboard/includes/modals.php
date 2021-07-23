
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

                <form class="d-inline-block mr-1" action="<?php echo SITEURL ?>dashboard/php/logout.php" method="post">
                    <button type="submit" class="btn btn-primary px-5">Yes</button> 
                </form>

                <button type="button" data-dismiss="modal" class="btn btn-light px-5 ml-1">No</button>


            </div>
        </div>
    </div>
</div>