<?php 

    function course($course, $img){
        $features = '
            <!-- course container -->
            <div class="col-12">
                <!-- card -->
                <div class="card bg-light my-3 overflow-hidden rounded border-0">
                    <img src="assets/courses/'.$img.'" alt="" class="img-fluid">
                    <!-- card body -->
                    <div class="card-body">
                        <p class="lead">'.$course.'</p>
                    </div>
                </div>
            </div>
        ';

        echo $features;
    }





    function admin($name, $office, $link, $img) {
        $features = '
            <!-- course container -->
            <div class="col-12">
                <!-- card -->
                <div class="card shadow-sm bg-white my-3 overflow-hidden rounded border-0">
                    <img src="assets/admins/'.$img.'" alt="" class="img-fluid" style="filter: drop-shadow(2px 4px 4px #41404080);">
                    <!-- card body -->
                    <div class="card-body">
                        <h4 class="font-weight-bold">'.$name.'</h4>
                        <p class="text-muted">'.$office.'</p>
                    </div>
                    <a class="stretched-link" href="'.$link.'" target="_blank"></a>
                </div>
            </div>
        ';

        echo $features;
    }
?>