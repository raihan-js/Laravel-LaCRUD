<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>LaCRUD Landing Page</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('admin/assets/images/lacrud.svg') }}" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Overpass&display=swap" rel="stylesheet">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('frontend/css/styles.css')}}" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
        <div class="container px-5">
            <a class="navbar-brand fw-bold " href="{{url('/')}}" style="font-size:28px; color:#031A61;">La<span style="color: #727CF5;">CRUD</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#">Teachers</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#">Students</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#">Features</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#">Documentation</a></li>
                </ul>
                <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal" data-bs-target="#feedbackModal">
                    <span class="d-flex align-items-center">
                        <span class="small">Login</span>
                    </span>
                </button>
            </div>
        </div>
    </nav>
    <!-- Mashead header-->
    <header class="masthead">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-5">
                    <!-- Mashead text and app badges-->
                    <div class="mb-5 mb-lg-0 text-center text-lg-start">
                        <h1 class="display-4 lh-1 mb-3 fw-bold">La<span style="color: #727CF5;">CRUD</span> - Laravel CRUD Application</h1>
                        <p class="lead fw-normal text-muted mb-1">A Laravel CRUD Application (Trial)</p>
                        <img style="width: 10%;margin-bottom:20px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1969px-Laravel.svg.png" alt="laravel.com">
                        <div class="d-flex flex-column flex-lg-row align-items-center">
                            <a href="{{ route('adminDashboard') }}" class="btn btn-primary btn-lg">Try now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <!-- Masthead device mockup feature-->
                    <div class="masthead-device-mockup">
                        <img style="width: 100%;" src="frontend/assets/img/hero-1.png">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Quote/testimonial aside-->
    <aside class="text-center" style="background-color: #727CF5;">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-xl-8">
                    <div class="h2 fs-1 text-white mb-4">“ Code is like humor. When you have to explain it, it's bad.”</div>
                    <h5 class="text-white">- Cory House -</h5>
                </div>
            </div>
        </div>
    </aside>
    <!-- App features section-->
    <section id="features">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-12 order-lg-1 mb-5 mb-lg-0">
                    <div class="container-fluid px-5">
                        <div class="row gx-5">
                            <div class="col-md-6 mb-5">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi-plus-square icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt">Create</h3>
                                    <p class="text-muted mb-0">The create function allows users to create a new record in the database.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-5">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi-eye icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt">Read</h3>
                                    <p class="text-muted mb-0">It allows users to search and retrieve specific records in the table and read their values.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-5 mb-md-0">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi-folder-check icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt">Update</h3>
                                    <p class="text-muted mb-0">The update function is used to modify existing records that exist in the database.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi-trash icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt">Delete</h3>
                                    <p class="text-muted mb-0">The delete function allows users to remove records from a database that is no longer needed.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- App badge section-->
    <section class="" style="background-color: #727CF5;" id="download">
        <div class="container px-5">
            <h1 class="text-center text-white font-alt mb-4">Test the app now!</h1>
            <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center">
                <a href="{{ route('adminDashboard') }}" class="btn btn-outline-light">Try now</a>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class=" text-center py-2" style="background-color: #404794;">
        <div class="container px-5">
            <div class="text-white-50 small">
                <div class="mb-2" style="padding-top: 10px;">&copy; LaCRUD 2022. All Rights Reserved.</div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('frontend/js/scripts.js') }}"></script>

    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>