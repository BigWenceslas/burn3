<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from learndash-bootstrap.frontendmatter.com/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Jan 2019 00:32:48 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $page }} - Bliss</title>

    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">

    <!-- Perfect Scrollbar -->
    <link type="text/css" href="{{asset('template/assets/vendor/perfect-scrollbar.css')}}" rel="stylesheet">

    <!-- Fix Footer CSS -->
    <link type="text/css" href="{{asset('template/assets/vendor/fix-footer.css')}}" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="{{asset('template/assets/css/material-icons.css')}}" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link type="text/css" href="{{asset('template/assets/css/fontawesome.css')}}" rel="stylesheet">

    <!-- Preloader -->
    <link type="text/css" href="{{asset('template/assets/css/preloader.css')}}" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="{{asset('template/assets/css/app.css')}}" rel="stylesheet">

</head>

<body>

    <div class="preloader">
        <div class="sk-double-bounce">
            <div class="sk-child sk-double-bounce1"></div>
            <div class="sk-child sk-double-bounce2"></div>
        </div>
    </div>

    <!-- Header Layout -->
    <div class="mdk-header-layout js-mdk-header-layout">

        <!-- Header -->

        <div id="header" class="mdk-header bg-dark js-mdk-header mb-0" data-effects="waterfall blend-background" data-fixed data-condenses>
            <div class="mdk-header__content">

                <div data-primary class="navbar navbar-expand-sm navbar-dark bg-dark p-0" id="navbar">
                    <div class="container">

                        <!-- Navbar Brand -->
                        <a href="index.html" class="navbar-brand">
                            <img class="navbar-brand-icon" src="{{asset('template/assets/images/logo/white-100.svg')}}" width="30" alt="Bliss">
                            <span class="d-none d-md-block">Bliss</span>
                        </a>

                        <!-- Main Navigation -->
                        <ul class="nav navbar-nav ml-auto d-none d-sm-flex">
                            {{-- <li class="nav-item">
                                <a href="pricing.html" class="nav-link">Pricing</a>
                            </li> --}}
                            <li class="nav-item active">
                                <a href="{{ route('register') }}" class="nav-link">Inscription</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link">Connexion</a>
                            </li>
                        </ul>
                        <!-- // END Main Navigation -->

                        <!-- Navbar toggler -->
                        <button class="navbar-toggler navbar-toggler-right d-block d-md-none" type="button" data-toggle="sidebar">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                    </div>
                </div>

            </div>
        </div>

        <!-- // END Header -->

        <!-- Header Layout Content -->
        <div class="mdk-header-layout__content page-content pb-0">

            <div class="navbar navbar-expand-sm navbar-mini navbar-dark bg-dark d-none d-sm-flex p-0">
                <div class="container">

                    <!-- Main Navigation -->
                    <ul class="nav navbar-nav flex-nowrap">
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">A Propos</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Formations</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Contact</a>
                        </li>
                    </ul>
                    <!-- // END Main Navigation -->

                </div>
            </div>

            <div class="bg-gradient-primary py-32pt">
                <div class="container d-flex flex-column flex-md-row align-items-center text-center text-md-left">
                    <img src="{{asset('template/assets/images/illustration/student/128/white.svg')}}" class="mr-md-32pt mb-32pt mb-md-0" alt="student">
                    <div class="flex mb-32pt mb-md-0">
                        <h1 class="text-white mb-0">Inscription</h1>
                        <p class="lead measure-lead text-white-50">Change your future today with over 1.000 professional courses from the top industry leading teachers and professionals.</p>
                    </div>
                    <a href="{{ route('register') }}" class="btn btn-outline-white flex-column">
                        Question ?
                        <span class="btn__secondary-text">Contactez-nous !</span>
                    </a>
                </div>
            </div>
            
            <div class="py-32pt bg-white border-bottom-2">
                <div class="container page__container">
                    <div class="progression-bar progression-bar--active-accent">
                        <a href="pricing.html" class="progression-bar__item progression-bar__item--complete">
                            <span class="progression-bar__item-content">
                                <i class="material-icons progression-bar__item-icon">done</i>
                                <span class="progression-bar__item-text h5 mb-0 text-uppercase">Tableau des Prix</span>
                            </span>
                        </a>
                        <a href="signup.html" class="progression-bar__item progression-bar__item--complete progression-bar__item--active">
                            <span class="progression-bar__item-content">
                                <i class="material-icons progression-bar__item-icon"></i>
                                <span class="progression-bar__item-text h5 mb-0 text-uppercase">Détails du compte</span>
                            </span>
                        </a>
                        <a href="signup-payment.html" class="progression-bar__item">
                            <span class="progression-bar__item-content">
                                <i class="material-icons progression-bar__item-icon"></i>
                                <span class="progression-bar__item-text h5 mb-0 text-uppercase">Détails du paiement</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="bg-white py-32pt py-lg-64pt">
                <div class="container page__container">
                    <div class="col-lg-10 p-0 mx-auto">
                        <div class="row">
                            <div class="col-md-6 mb-24pt mb-md-0">
                                <form action="http://learndash-bootstrap.frontendmatter.com/signup-payment.html">
                                    <div class="form-group">
                                        <label for="name">Nom complet:</label>
                                        <input id="name" type="text" class="form-control" placeholder="Nom complet ...">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Votre email:</label>
                                        <input id="email" type="email" class="form-control" placeholder="Votre email ...">
                                    </div>
                                    <div class="form-group mb-24pt">
                                        <label for="password">Mot de passe:</label>
                                        <input id="password" type="password" class="form-control">
                                    </div>
                                    <button class="btn btn-lg btn-accent">Inscription</button>
                                </form>
                            </div>
                            <div class="col-md-6">
                                <div class="card mb-0">
                                    <div class="card-body">
                                        <h5>Purchase summary</h5>
                                        <div class="d-flex mb-8pt">
                                            <div class="flex"><strong class="text-black-70">Subscription</strong></div>
                                            <strong>Student</strong>
                                        </div>
                                        <div class="d-flex mb-16pt pb-16pt border-bottom">
                                            <span class="material-icons text-muted mr-8pt">check</span>
                                            <span class="text-black-70">Access to over 1.000 high quality courses. For individuals.</span>
                                        </div>
                                        <div class="d-flex mb-16pt pb-16pt border-bottom">
                                            <div class="flex"><strong class="text-black-70">Price</strong></div>
                                            <strong>US &dollar;9 per month</strong>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" checked id="topic-all">
                                            <label class="custom-control-label">Terms and conditions</label>
                                            <small class="form-text text-muted">By checking here and continuing, I agree to the LearnDash Terms of Use</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="page-separator m-0">
                <div class="page-separator__text">or sign-in with</div>
                <div class="page-separator__bg-top bg-white"></div>
            </div>
            <div class="bg-body pt-32pt pb-32pt pb-md-64pt text-center">
                <div class="container page__container">
                    <a href="student-dashboard.html" class="btn btn-lg btn-secondary btn-block-xs">Facebook</a>
                    <a href="student-dashboard.html" class="btn btn-lg btn-secondary btn-block-xs">Twitter</a>
                    <a href="student-dashboard.html" class="btn btn-lg btn-secondary btn-block-xs">Google+</a>
                </div>
            </div> --}}


        </div>
        <!-- // END Header Layout Content -->

    </div>
    <!-- // END Header Layout -->

    <!-- Footer Layout -->
    <div class="bg-white js-fix-footer border-top-2">
        <div class="container page-section py-lg-48pt">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-6 col-md-4 mb-24pt mb-md-0">
                            <h4 class="text-black-70">Learn</h4>
                            <nav class="nav nav-links nav--flush flex-column">
                                <a class="nav-link" href="library.html">Library</a>
                                <a class="nav-link" href="library-featured.html">Featured</a>
                                <a class="nav-link" href="library-filters.html">Explore</a>
                                <a class="nav-link" href="paths.html">Learning Paths</a>
                            </nav>
                        </div>
                        <div class="col-6 col-md-4 mb-24pt mb-md-0">
                            <h4 class="text-black-70">Join us</h4>
                            <nav class="nav nav-links nav--flush flex-column">
                                <a class="nav-link" href="pricing.html">Pricing</a>
                                <a class="nav-link" href="login.html">Login</a>
                                <a class="nav-link" href="signup.html">Sign Up</a>
                                <a class="nav-link" href="signup-payment.html">Payment</a>
                            </nav>
                        </div>
                        <div class="col-6 col-md-4 mb-32pt mb-md-0">
                            <h4 class="text-black-70">Community</h4>
                            <nav class="nav nav-links nav--flush flex-column">
                                <a class="nav-link" href="student-discussions.html">Discussions</a>
                                <a class="nav-link" href="student-discussions-ask.html">Ask Question</a>
                                <a class="nav-link" href="student-profile.html">Student Profile</a>
                                <a class="nav-link" href="instructor-profile.html">Instructor Profile</a>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-md-right">
                    <p class="text-black-70 brand justify-content-md-end">
                        <img class="brand-icon" src="{{asset('template/assets/images/logo/black-70.svg')}}" width="30" alt="Bliss">
                        Bliss
                    </p>
                    <p class="text-muted">Bliss is an online learning platform that helps anyone achieve their
                        personal and professional goals.</p>
                </div>
            </div>
        </div>
        <div class="bg-footer page-section py-lg-32pt">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-4 mb-24pt mb-md-0">
                        <p class="text-white-70 mb-8pt"><strong>Suivez-nous</strong></p>
                        <nav class="nav nav-links nav--flush">
                            <a href="#" class="nav-link mr-8pt"><img src="{{asset('template/assets/images/icon/footer/facebook-square.svg')}}"
                                    alt="Facebook"></a>
                            <a href="#" class="nav-link mr-8pt"><img src="{{asset('template/assets/images/icon/footer/twitter-square.svg')}}"
                                    alt="Twitter"></a>
                            <a href="#" class="nav-link mr-8pt"><img src="{{asset('template/assets/images/icon/footer/vimeo-square.svg')}}"
                                    alt="Vimeo"></a>
                            <a href="#" class="nav-link"><img src="{{asset('template/assets/images/icon/footer/youtube-square.svg')}}"
                                    alt="YouTube"></a>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-4 mb-24pt mb-md-0 d-flex align-items-center">
                        {{-- <a href="#" class="btn btn-outline-white">English <span
                                class="icon--right material-icons">arrow_drop_down</span></a> --}}
                    </div>
                    <div class="col-md-4 text-md-right">
                        <p class="mb-8pt d-flex align-items-md-center justify-content-md-end">
                            <a href="#" class="text-white-70 text-underline mr-16pt">Terms</a>
                            <a href="#" class="text-white-70 text-underline">Privacy policy</a>
                        </p>
                        <p class="text-white-50 mb-0">Copyright 2019 &copy; Tous droits réservés.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- // END Footer Layout -->

    <!-- drawer mobile responsive -->
    <div class="mdk-drawer js-mdk-drawer" id="default-drawer">
        <div class="mdk-drawer__content">
            <div class="sidebar sidebar-dark sidebar-left" data-perfect-scrollbar>
                <div class="sidebar-p-a sidebar-b-b sidebar-m-b pt-0">

                    <!-- Brand -->
                    <a href="index.html" class="sidebar-brand">
                        <img class="sidebar-brand-icon" src="{{asset('template/assets/images/logo/white-100.svg')}}" width="30"
                            alt="Bliss">
                        <span>Bliss</span>
                    </a>
                    <!-- // END Brand -->

                    <!-- Search -->
                    <form action="http://learndash-bootstrap.frontendmatter.com/library-filters.html"
                        class="search-form search-form--black">
                        <input type="text" class="form-control" placeholder="Search">
                        <button class="btn" type="submit" role="button"><i class="material-icons">search</i></button>
                    </form>

                </div>

                <ul class="sidebar-menu">
                    <li class="sidebar-menu-item active">
                        <a class="sidebar-menu-button" href="/">Accueil
                            <span class="ml-auto sidebar-menu-toggle-icon"></span></a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button">
                            A Propos
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        {{-- <ul class="sidebar-submenu collapse sm-indent" id="catalog_menu">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="library.html">Library</a>
                            </li>
                        </ul> --}}
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button">
                            Formations
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button">
                            Blog
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button">
                            Contact
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                    </li>
                </ul>

                {{-- <div class="sidebar-heading">Roles</div>
                <ul class="sidebar-menu">
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" data-toggle="collapse" href="#student_menu">
                            Student
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse sm-indent" id="student_menu">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-dashboard.html">Dashboard</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-my-courses.html">My Courses</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-quiz-results.html">My Quizzes</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-take-course.html">Take Course</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-take-lesson.html">Take Lesson</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-take-quiz.html">Take Quiz</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-quiz-result-details.html">Quiz Result</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-path-assessment.html">Skill Assessment</a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-path-assessment-result.html">Skill
                                    Result</a>
                            </li>
                        </ul>
                    </li>
                </ul> --}}

            </div>
        </div>
    </div>
    <!-- // END drawer -->

    <!-- Modal Formation -->
    <div class="modal" id="courses" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-i8-plus bg-body pr-0">
                            <div class="py-16pt pl-16pt menu">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#courses-development"
                                            data-toggle="tab">Developmezaeant</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#courses-design" data-toggle="tab">Design</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#courses-photography"
                                            data-toggle="tab">Photography</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#courses-marketing" data-toggle="tab">Marketing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#courses-business" data-toggle="tab">Business</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-6 col-i8-plus-auto tab-content">


                            <div id="courses-development" class="tab-pane show active">
                                <div class="row no-gutters">
                                    <div class="col-md-6 p-0">
                                        <div class="p-24pt d-flex h-100 flex-column">
                                            <div class="flex">
                                                <h5>Courses</h5>
                                                <ul class="nav flex-column mb-24pt">

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Web Development</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">JavaScript</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">HTML</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">CSS</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">WordPress</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">PHP</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">iOS Development</a>
                                                    </li>

                                                </ul>
                                            </div>
                                            <div>
                                                <a href="library.html"
                                                    class="btn btn-block text-center btn-secondary">Library</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 p-0">
                                        <div class="p-24pt d-flex h-100 flex-column">
                                            <div class="flex">
                                                <h5>Learning Paths</h5>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media">
                                                        <img src="{{asset('template/assets/images/paths/angular_40x40.png')}}" alt="Angular"
                                                            class="media-left rounded">
                                                        <span class="media-body">
                                                            <span
                                                                class="card-title text-body d-block mb-0">Angular</span>
                                                            <span class="text-muted d-flex lh-1">24 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media">
                                                        <img src="{{asset('template/assets/images/paths/swift_40x40.png')}}" alt="Swift"
                                                            class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title text-body d-block mb-0">Swift</span>
                                                            <span class="text-muted d-flex lh-1">22 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media">
                                                        <img src="{{asset('template/assets/images/paths/react_40x40.png')}}"
                                                            alt="React Native" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title text-body d-block mb-0">React
                                                                Native</span>
                                                            <span class="text-muted d-flex lh-1">18 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media">
                                                        <img src="{{asset('template/assets/images/paths/wordpress_40x40.png')}}"
                                                            alt="WordPress" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span
                                                                class="card-title text-body d-block mb-0">WordPress</span>
                                                            <span class="text-muted d-flex lh-1">13 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-24pt">
                                                    <a href="path.html" class="media">
                                                        <img src="{{asset('template/assets/images/paths/devops_40x40.png')}}"
                                                            alt="Development Tools" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title text-body d-block mb-0">Development
                                                                Tools</span>
                                                            <span class="text-muted d-flex lh-1">5 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="paths.html"
                                                    class="btn btn-block text-center btn-outline-secondary">Learning
                                                    Paths</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div id="courses-design" class="tab-pane">
                                <div class="row no-gutters">
                                    <div class="col-md-6 p-0">
                                        <div class="p-24pt d-flex h-100 flex-column">
                                            <div class="flex">
                                                <h5>Courses</h5>
                                                <ul class="nav flex-column mb-24pt">

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Illustration</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Design Skills</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Design
                                                            Techniques</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Page Layout</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Projects</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Drawing</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Typography</a>
                                                    </li>

                                                </ul>
                                            </div>
                                            <div>
                                                <a href="library.html"
                                                    class="btn btn-block text-center btn-secondary">Library</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 p-0">
                                        <div class="p-24pt d-flex h-100 flex-column">
                                            <div class="flex">
                                                <h5>Learning Paths</h5>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media">
                                                        <img src="{{asset('template/assets/images/paths/angular_40x40.png')}}" alt="Angular"
                                                            class="media-left rounded">
                                                        <span class="media-body">
                                                            <span
                                                                class="card-title text-body d-block mb-0">Angular</span>
                                                            <span class="text-muted d-flex lh-1">24 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media">
                                                        <img src="{{asset('template/assets/images/paths/swift_40x40.png')}}" alt="Swift"
                                                            class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title text-body d-block mb-0">Swift</span>
                                                            <span class="text-muted d-flex lh-1">22 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media">
                                                        <img src="{{asset('template/assets/images/paths/react_40x40.png')}}"
                                                            alt="React Native" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title text-body d-block mb-0">React
                                                                Native</span>
                                                            <span class="text-muted d-flex lh-1">18 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media">
                                                        <img src="{{asset('template/assets/images/paths/wordpress_40x40.png')}}"
                                                            alt="WordPress" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span
                                                                class="card-title text-body d-block mb-0">WordPress</span>
                                                            <span class="text-muted d-flex lh-1">13 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-24pt">
                                                    <a href="path.html" class="media">
                                                        <img src="{{asset('template/assets/images/paths/devops_40x40.png')}}"
                                                            alt="Development Tools" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title text-body d-block mb-0">Development
                                                                Tools</span>
                                                            <span class="text-muted d-flex lh-1">5 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="paths.html"
                                                    class="btn btn-block text-center btn-outline-secondary">Learning
                                                    Paths</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div id="courses-photography" class="tab-pane">
                                <div class="row no-gutters">
                                    <div class="col-md-6 p-0">
                                        <div class="p-24pt d-flex h-100 flex-column">
                                            <div class="flex">
                                                <h5>Courses</h5>
                                                <ul class="nav flex-column mb-24pt">

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Cameras</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Raw Processing</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Masking</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Compositing</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Portraits</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Photo
                                                            Management</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Lighting</a>
                                                    </li>

                                                </ul>
                                            </div>
                                            <div>
                                                <a href="library.html"
                                                    class="btn btn-block text-center btn-secondary">Library</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 p-0">
                                        <div class="p-24pt d-flex h-100 flex-column">
                                            <div class="flex">
                                                <h5>Learning Paths</h5>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media">
                                                        <img src="{{asset('template/assets/images/paths/angular_40x40.png')}}" alt="Angular"
                                                            class="media-left rounded">
                                                        <span class="media-body">
                                                            <span
                                                                class="card-title text-body d-block mb-0">Angular</span>
                                                            <span class="text-muted d-flex lh-1">24 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media">
                                                        <img src="{{asset('template/assets/images/paths/swift_40x40.png')}}" alt="Swift"
                                                            class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title text-body d-block mb-0">Swift</span>
                                                            <span class="text-muted d-flex lh-1">22 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media">
                                                        <img src="{{asset('template/assets/images/paths/react_40x40.png')}}"
                                                            alt="React Native" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title text-body d-block mb-0">React
                                                                Native</span>
                                                            <span class="text-muted d-flex lh-1">18 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media">
                                                        <img src="{{asset('template/assets/images/paths/wordpress_40x40.png')}}"
                                                            alt="WordPress" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span
                                                                class="card-title text-body d-block mb-0">WordPress</span>
                                                            <span class="text-muted d-flex lh-1">13 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-24pt">
                                                    <a href="path.html" class="media">
                                                        <img src="{{asset('template/assets/images/paths/devops_40x40.png')}}"
                                                            alt="Development Tools" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title text-body d-block mb-0">Development
                                                                Tools</span>
                                                            <span class="text-muted d-flex lh-1">5 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="paths.html"
                                                    class="btn btn-block text-center btn-outline-secondary">Learning
                                                    Paths</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div id="courses-marketing" class="tab-pane">
                                <div class="row no-gutters">
                                    <div class="col-md-6 p-0">
                                        <div class="p-24pt d-flex h-100 flex-column">
                                            <div class="flex">
                                                <h5>Courses</h5>
                                                <ul class="nav flex-column mb-24pt">

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Small Business</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Marketing</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Enterprise
                                                            Marketing</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Content
                                                            Marketing</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Online
                                                            Marketing</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Social Media
                                                            Marketing</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Advertising</a>
                                                    </li>

                                                </ul>
                                            </div>
                                            <div>
                                                <a href="library.html"
                                                    class="btn btn-block text-center btn-secondary">Library</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 p-0">
                                        <div class="p-24pt d-flex h-100 flex-column">
                                            <div class="flex">
                                                <h5>Learning Paths</h5>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media">
                                                        <img src="{{asset('template/assets/images/paths/angular_40x40.png')}}" alt="Angular"
                                                            class="media-left rounded">
                                                        <span class="media-body">
                                                            <span
                                                                class="card-title text-body d-block mb-0">Angular</span>
                                                            <span class="text-muted d-flex lh-1">24 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media">
                                                        <img src="{{asset('template/assets/images/paths/swift_40x40.png')}}" alt="Swift"
                                                            class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title text-body d-block mb-0">Swift</span>
                                                            <span class="text-muted d-flex lh-1">22 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media">
                                                        <img src="{{asset('template/assets/images/paths/react_40x40.png')}}"
                                                            alt="React Native" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title text-body d-block mb-0">React
                                                                Native</span>
                                                            <span class="text-muted d-flex lh-1">18 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media">
                                                        <img src="{{asset('template/assets/images/paths/wordpress_40x40.png')}}"
                                                            alt="WordPress" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span
                                                                class="card-title text-body d-block mb-0">WordPress</span>
                                                            <span class="text-muted d-flex lh-1">13 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-24pt">
                                                    <a href="path.html" class="media">
                                                        <img src="{{asset('template/assets/images/paths/devops_40x40.png')}}"
                                                            alt="Development Tools" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title text-body d-block mb-0">Development
                                                                Tools</span>
                                                            <span class="text-muted d-flex lh-1">5 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="paths.html"
                                                    class="btn btn-block text-center btn-outline-secondary">Learning
                                                    Paths</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div id="courses-business" class="tab-pane">
                                <div class="row no-gutters">
                                    <div class="col-md-6 p-0">
                                        <div class="p-24pt d-flex h-100 flex-column">
                                            <div class="flex">
                                                <h5>Courses</h5>
                                                <ul class="nav flex-column mb-24pt">

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Business Skills</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Productivity</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Communication</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Leadership</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Management</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Career
                                                            Development</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link px-0" href="library.html">Spreadsheets</a>
                                                    </li>

                                                </ul>
                                            </div>
                                            <div>
                                                <a href="library.html"
                                                    class="btn btn-block text-center btn-secondary">Library</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 p-0">
                                        <div class="p-24pt d-flex h-100 flex-column">
                                            <div class="flex">
                                                <h5>Learning Paths</h5>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media">
                                                        <img src="{{asset('template/assets/images/paths/angular_40x40.png')}}" alt="Angular"
                                                            class="media-left rounded">
                                                        <span class="media-body">
                                                            <span
                                                                class="card-title text-body d-block mb-0">Angular</span>
                                                            <span class="text-muted d-flex lh-1">24 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media">
                                                        <img src="{{asset('template/assets/images/paths/swift_40x40.png')}}" alt="Swift"
                                                            class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title text-body d-block mb-0">Swift</span>
                                                            <span class="text-muted d-flex lh-1">22 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media">
                                                        <img src="{{asset('template/assets/images/paths/react_40x40.png')}}"
                                                            alt="React Native" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title text-body d-block mb-0">React
                                                                Native</span>
                                                            <span class="text-muted d-flex lh-1">18 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-16pt">
                                                    <a href="path.html" class="media">
                                                        <img src="{{asset('template/assets/images/paths/wordpress_40x40.png')}}"
                                                            alt="WordPress" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span
                                                                class="card-title text-body d-block mb-0">WordPress</span>
                                                            <span class="text-muted d-flex lh-1">13 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-24pt">
                                                    <a href="path.html" class="media">
                                                        <img src="{{asset('template/assets/images/paths/devops_40x40.png')}}"
                                                            alt="Development Tools" class="media-left rounded">
                                                        <span class="media-body">
                                                            <span class="card-title text-body d-block mb-0">Development
                                                                Tools</span>
                                                            <span class="text-muted d-flex lh-1">5 courses</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="paths.html"
                                                    class="btn btn-block text-center btn-outline-secondary">Learning
                                                    Paths</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{asset('template/assets/vendor/jquery.min.js')}}"></script>

    <!-- Bootstrap -->
    <script src="{{asset('template/assets/vendor/popper.min.js')}}"></script>
    <script src="{{asset('template/assets/vendor/bootstrap.min.js')}}"></script>

    <!-- Perfect Scrollbar -->
    <script src="{{asset('template/assets/vendor/perfect-scrollbar.min.js')}}"></script>

    <!-- DOM Factory -->
    <script src="{{asset('template/assets/vendor/dom-factory.js')}}"></script>

    <!-- MDK -->
    <script src="{{asset('template/assets/vendor/material-design-kit.js')}}"></script>

    <!-- Fix Footer -->
    <script src="{{asset('template/assets/vendor/fix-footer.js')}}"></script>

    <!-- Chart.js -->
    <script src="{{asset('template/assets/vendor/Chart.min.js')}}"></script>

    <!-- App JS -->
    <script src="{{asset('template/assets/js/app.js')}}"></script>

    <!-- Highlight.js -->
    <script src="{{asset('template/assets/js/hljs.js')}}"></script>




</body>
</html>