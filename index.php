<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMT - E Learning</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/logo/favicon.png" type="image/x-icon">
    <!-- bootstrap link -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="vendor/fontawesome-free-5.13.0-web/fontawesome-free-5.13.0-web/css/all.min.css">
    <!-- Slick slider CSS link -->
    <link rel="stylesheet" href="vendor/slick-1.7.1/slick-1.7.1/slick/slick.css">
    <link rel="stylesheet" href="vendor/slick-1.7.1/slick-1.7.1/slick/slick-theme.css">
    <!-- external css link -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- 
        ========================  P R E L O A D E R  =======================
    -->
    <div id="preloader">
        <img loading="lazy" src="./assets/preloader/loader (2).gif" alt="preloader">
    </div>

    <!-- 
        ***************************
            N  A  V  B  A  R
        ***************************
    -->
    <?php 
        // include modal.php
        include 'components/modal.php';
    ?>
    <nav class="navbar navbar-light bg-white navbar-expand-lg shadow-sm fixed-top">
        <div class="container">
            <!-- navbar logo -->
            <a href="javascript:void(0)" class="navbar-brand">
                <img src="assets/logo/logo.png" width="40" height="40" alt="">
            </a>

            <!-- navbar toggle button -->
            <button class="navbar-toggler border-0" data-target="#navbarMenu" data-toggle="collapse">
                <!-- icon -->
                <span class="navbar-toggler-icon"></span>
            </button>


            <!-- navbar -->
            <div class="collapse navbar-collapse" id="navbarMenu">
                <!-- list -->
                <ul class="navbar-nav ml-auto">
                    <!-- link -->
                    <li class="nav-item">
                        <a href="javascript:void(0)" data-toggle="modal" data-target="#login" class="nav-link">
                            Get Started
                        </a>
                    </li>

                    <!-- link -->
                    <li class="nav-item">
                        <a href="https://imt.edu.ng/" target="_blank" class="nav-link">
                            Go to School Portal
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <!-- 
        ******************************
            M  A  S  T  H  E  A  D
        ******************************    
    -->
    <section class="masthead">
        <div class="container">
            <div class="masthead-container">
                <div class="col-lg-8">
                    <!-- callout header -->
                    <h1 class="font-weight-bold masthead-title text-light">E - Learning System</h1>
                    <!-- buttons -->
                    <a href="#" class="btn btn-light px-5 py-3 m-1">Classroom</a>
                    <a href="#" class="btn btn-primary px-5 py-3 m-1">Take CBT</a>
                </div>
            </div>
        </div>
    </section>


    <!-- 
        ******************************
            F  E  A  T  U  R  E  S
        ******************************  
    -->
    <section class="features section">
        <div class="container">
            <div class="row">

                <!-- feature 1 -->
                <div class="col-md-6">
                    <div class="card overflow-hidden border-0 my-3 shadow-sm rounded bg-white">
                        <!-- image -->
                        <img src="./assets/class.jpg" class="img-fluid" alt="">
                        <!-- card body -->
                        <div class="card-body px-3">
                            <!-- card content / media -->
                            <div class="media">
                                <!-- content icon -->
                                <i class="fas fa-users text-primary mr-3" style="font-size: 30px"></i>

                                <!-- media body -->
                                <div class="media-body">
                                    <!-- content title -->
                                    <h5 class="font-weight-bold text-primary">Virtual Classroom</h5>
                                    <!-- content text -->
                                    <p class="text-muted">
                                        <a href="#feature-text-1" data-toggle="collapse" class="text-muted stretched-link">Lorem ipsum dolor sit amet consectetur</a>
                                        <span id="feature-text-1" class="collapse">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi accusamus perspiciatis nobis molestias sapiente inventore expedita, doloribus saepe accusantium, voluptate, hic perferendis obcaecati alias quos! Ea voluptatibus magni nesciunt repellat!
                                        </span>
                                    </p>
                                    <small class="blockquote-footer">Click to read more</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- feature 2 -->
                <div class="col-md-6">
                    <div class="card overflow-hidden border-0 my-3 shadow-sm rounded bg-white">
                        <!-- image -->
                        <img src="./assets/cbt.jpg" class="img-fluid" alt="">
                        <!-- card body -->
                        <div class="card-body px-3">
                            <!-- card content / media -->
                            <div class="media">
                                <!-- content icon -->
                                <i class="fas fa-laptop text-primary mr-3" style="font-size: 30px"></i>

                                <!-- media body -->
                                <div class="media-body">
                                    <!-- content title -->
                                    <h5 class="font-weight-bold text-primary">Computer Based Test</h5>
                                    <!-- content text -->
                                    <p class="text-muted">
                                        <a href="#feature-text-2" data-toggle="collapse" class="text-muted stretched-link">Lorem ipsum dolor sit amet consectetur</a>
                                        <span id="feature-text-2" class="collapse">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi accusamus perspiciatis nobis molestias sapiente inventore expedita, doloribus saepe accusantium, voluptate, hic perferendis obcaecati alias quos! Ea voluptatibus magni nesciunt repellat!
                                        </span>
                                    </p>
                                    <small class="blockquote-footer">Click to read more</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <!-- 
        ****************************
            C  O  U  R  S  E  S
        ****************************
    -->
    <section class="courses section bg-white">
        <div class="container">
            <h4 class="font-weight-bold text-center text-primary mb-5">Our Courses</h4>
            <div class="row slider">
                <!-- courses in functions -->
                <?php include 'components/features.php';

                    course('Accounting', 'accounting.jpg');
                    course('Agric Engineering', 'agric-engineering.jpg');
                    course('Architecture', 'archi-tech.jpg');
                    course('Banking and Finance', 'bankng-and-finance.jpeg');
                    course('Building Technology', 'Bulding-tech.jpg');
                    course('Business Administration', 'business-administration.jpg');
                    course('Chemical Engineering', 'chem-engineering.jpg');
                    course('Civil Engineering', 'civil-engineering.jpg');
                    course('Computer Science', 'comp-science.jpg');
                    course('Co-operative Economics and Managements', 'cooperative-econsjpg.jpg');
                    course('Electrical Engineering', 'electrical-engineering.jpg');
                    course('Estate Management', 'estate-mgt.jpg');
                    course('Insurance', 'insurancepolicies.jpg');
                    course('Library and Information Science', 'library.jpg');
                    course('Marketing', 'marketing.jpg');
                    course('Mass Communication', 'mass-comm.png');
                    course('Mechanical Enginerring', 'mech-engineering.jpeg');
                    course('Mechatronics', 'mechatronics.jpg');
                    course('Office Technology and Management', 'office-mgt.jpg');
                    course('Painting', 'paintig-department.jpg');
                    course('Public administration', 'public-admin.jpg');
                    course('Quantity Survey', 'quantity-survey.jpg');
                    course('Sculpture', 'sculpture.jpg');
                    course('Statistics', 'statistics.jpg');
                    course('Textile Design', 'textile-design.jpg');
                    course('Urban and regional planning', 'urban-and-reg-planning.jpg');
                    
                ?>
            </div>
            <small class="blockquote-footer">
                Slide to view all courses.
            </small>
        </div>
    </section>


    <!-- 
        *********************************
            F   I   G   U   R   E   S
        *********************************
    -->
    <section class="figures section bg-primary text-white">
        <div class="container">
            <div class="row">
                <!-- figure one -->
                <div class="col-lg-3 col-6 my-3">
                    <!-- number -->
                    <h1 class="mb-n1 fa-6x counter">44</h1>
                    <!-- surfix -->
                    <hr class="border-bottom border-light">
                    <h4>Years</h4>
                </div>

                <!-- figure two -->
                <div class="col-lg-3 col-6 my-3">
                    <!-- number -->
                    <h1 class="mb-n1 fa-6x counter">40</h1>
                    <!-- surfix -->
                    <hr class="border-bottom border-light">
                    <h4>Departments</h4>
                </div>

                <!-- figure three -->
                <div class="col-lg-3 col-6 my-3">
                    <!-- number -->
                    <h1 class="mb-n1 fa-6x counter">9</h1>
                    <!-- surfix -->
                    <hr class="border-bottom border-light">
                    <h4>Schools</h4>
                </div>

                <!-- figure four -->
                <div class="col-lg-3 col-6 my-3">
                    <!-- number -->
                    <h1 class="mb-n1 fa-6x counter">2</h1>
                    <!-- surfix -->
                    <hr class="border-bottom border-light">
                    <h4>Campuses</h4>
                </div>
            </div>
        </div>
    </section>



    <!-- 
        ****************************
            A   D   M   I   N   S
        ****************************
    -->
    <section class="admins section">
        <div class="container">
            <h4 class="font-weight-bold text-center text-primary mb-5">Our Principal Officers</h4>
            <div class="row slider2">
                <?php
                    // Admin cards in functions
                    admin('Professor Austin Uchechukwu', 'Rector', 'https://imt.edu.ng/research/rector/', 'rector.png');
                    admin('Mr Vincent O Egbo', 'Deputy Rector', 'https://imt.edu.ng/research/deputyrector/', 'dep-rector.png');
                    admin('Dr Mrs Ijeoma C Aneke', 'Registrar', 'https://imt.edu.ng/research/registrar/', 'registrar.png');
                    admin('Mr Sunday Ede', 'Bursar', 'https://imt.edu.ng/research/bursar/', 'bursar.png');
                    admin('Dr Innocent Eze', 'Librarian', 'https://imt.edu.ng/research/librarian/', 'librarian.png');
                    admin('Dr Ajah Kanayochukwu Charles', 'Director of Works', 'https://imt.edu.ng/research/dow/', 'director-of-works.png');
                    admin('Barr. Mark Akuna Eze', 'Public Relation Officer', 'https://imt.edu.ng/research/pro/', 'Public Relation Officer.png');
                    
                    
                ?>
            </div>
            <small class="blockquote-footer">
                Slide to view all Officers.
            </small>
        </div>
    </section>




    <!-- 
        *********************************
                F  O  O  T  E  R
        *********************************
    -->
    <footer class="bg-white py-5">
        <div class="container">
            <div class="text-center">
                <img src="./assets/logo-details.png" class="img-fluid" alt="">
            </div>
        </div>
    </footer>











    <!-- jQuery Link -->
    <script src="vendor/jQuery/jquery-3.5.1.min.js"></script>
    <!-- popper js link -->
    <script src="vendor/popper.js/umd/popper.min.js"></script>
    <!-- Bootstrap link -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Waypoint Script link -->
    <script src="vendor/waypoints-4.0.1/waypoints-4.0.1/lib/jquery.waypoints.min.js"></script>
    <!-- Counter Up Script Link -->
    <script src="vendor/Counter-Up-1.0.0/Counter-Up-1.0.0/jquery.counterup.min.js"></script>
    <!-- Slick slider JS link -->
    <script src="vendor/slick-1.7.1/slick-1.7.1/slick/slick.min.js"></script>
    <!-- slick slider configuration -->
    <script>
        $('.slider').slick({
            dots: false,
            infinite: false,
            speed: 200,
            slidesToShow: 3,
            slidesToScroll: 2,
            responsive: [
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                }
            ]
        });


        $('.slider2').slick({
            dots: false,
            infinite: false,
            speed: 200,
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                }
            ]
        });
                
        
        jQuery(document).ready(function( $ ) {
            $('.counter').counterUp({
                delay: 100,
                time: 2000
            });
        });

    </script>
    <!-- exteral js -->
    <script src="./js/script.js"></script>
    <script src="./js/login.js"></script>
    <script src="./js/register.js"></script>

    
</body>
</html>