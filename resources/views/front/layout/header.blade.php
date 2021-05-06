<!DOCTYPE html>
<html lang="en">

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

    <style>
        @media only screen and (max-width: 800px){
            .responsive-login-text{
                display: none;
            }
        }
    </style>

    @stack('css')
</head>

<body>
    @csrf
    <div class="preloader">
        <div class="sk-double-bounce">
            <div class="sk-child sk-double-bounce1"></div>
            <div class="sk-child sk-double-bounce2"></div>
        </div>
    </div>

    <!-- Header Layout -->
    <div class="mdk-header-layout js-mdk-header-layout">

        <!-- Header -->

        <div id="header" class="mdk-header bg-dark js-mdk-header mb-0" data-effects="waterfall blend-background"
            data-fixed data-condenses>
            <div class="mdk-header__content">

                <div class="navbar navbar-expand-sm navbar-dark bg-dark pr-0 pr-md-16pt" id="navbar" data-primary>

                    <!-- Navbar toggler -->
                    <button class="navbar-toggler navbar-toggler-right d-block d-md-none" type="button"
                        data-toggle="sidebar">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Navbar Brand -->
                    <a href="/" class="navbar-brand">
                        <img class="navbar-brand-icon mr-0 mr-md-8pt" src="{{asset('template/assets/images/logo/white-100.svg')}}" width="30"
                            alt="Bliss">
                        <span class="d-none d-md-block">Bliss</span>
                    </a>

                    <button class="btn btn-black mr-16pt" data-toggle="modal" data-target="#courses">Formations <i
                            class="material-icons">arrow_drop_down</i></button>

                    <form class="search-form search-form--black search-form-courses d-none d-md-flex"
                        action="http://learndash-bootstrap.frontendmatter.com/library-filters.html">
                        <input type="text" class="form-control" placeholder="Que voulez-vous apprendre ?">
                        <button class="btn" type="submit" role="button"><i class="material-icons">search</i></button>
                    </form>

                    <!-- Main Navigation -->
                    @if (!Auth::check())
                        <ul class="nav navbar-nav ml-auto flex-nowrap" style="white-space: nowrap;">
                            <li class="ml-16pt nav-item">
                                <a href="{{ route('login') }}" class="nav-link">
                                    <i class="material-icons">lock_open</i>
                                    <span class="responsive-login-text">Connexion</span>
                                </a>
                            </li>
                            <li class="d-none d-sm-flex nav-item">
                                <a href="{{ route('register') }}" class="btn btn-accent">Inscription</a>
                            </li>
                        </ul>
                    @else
                        <nav class="nav navbar-nav ml-auto flex-nowrap">
                            <div class="nav-item dropdown d-none d-sm-flex ml-16pt">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                    <img width="32" height="32" class="rounded-circle" src="{{asset('template/assets/images/people/50/guy-3.jpg')}}" alt="student" />
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <h6 class="dropdown-header">Bienvenue {{ Auth::user()->name }}</h6>
                                    <h6 class="dropdown-header">Student</h6>
                                    <a class="dropdown-item {{ $page == "Dashboard" ? 'active' : '' }}" href="/">Dashboard</a>
                                    <a class="dropdown-item" href="student-my-courses.html">My Courses</a>
                                    <a class="dropdown-item" href="student-quiz-results.html">Quiz Results</a>
                                    <div class="dropdown-divider"></div>
                                    <h6 class="dropdown-header">Account</h6>
                                    <a class="dropdown-item" href="student-edit-account.html">Edit Account</a>
                                    <a class="dropdown-item" href="student-billing.html">Billing</a>
                                    <a class="dropdown-item" href="student-billing-history.html">Payments</a>
                                    <a class="dropdown-item" href="{{route('logout')}}">Logout &nbsp;&nbsp;<i class="fa fa-power-off"></i></a>


                                </div>
                            </div>
                        </nav>
                    @endif
                    <!-- // END Main Navigation -->

                </div>

            </div>
        </div>

        <!-- // END Header -->

        <!-- Header Layout Content -->
        <div class="mdk-header-layout__content page-content ">

            <div class="navbar navbar-expand-sm navbar-mini navbar-dark bg-dark d-none d-sm-flex p-0">
                <div class="container-fluid">

                    <!-- Main Navigation -->
                    <ul class="nav navbar-nav flex-nowrap">
                        <li class="nav-item {{ $page == "Accueil" ? 'active' : '' }}">
                            <a href="{{ route('home') }}" class="nav-link">Accueil</a>
                        </li>
                        <li class="nav-item {{ $page == "A Propos" ? 'active' : '' }}">
                            <a href="#" class="nav-link">A Propos</a>
                        </li>
                        <li class="nav-item {{ $page == "Formations" ? 'active' : '' }}">
                            <a href="#" class="nav-link">Formations</a>
                        </li>
                        <li class="nav-item {{ $page == "Blog" ? 'active' : '' }}">
                            <a href="{{ route('blog') }}" class="nav-link">Blog</a>
                        </li>
                        <li class="nav-item {{ $page == "Contact" ? 'active' : '' }}">
                            <a href="{{route('contact')}}" class="nav-link">Contact</a>
                        </li>
                        {{-- <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Components</a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="ui-buttons.html">Buttons</a>
                                <a class="dropdown-item" href="ui-charts.html">Charts</a>
                                <a class="dropdown-item" href="ui-avatars.html">Avatars</a>
                                <a class="dropdown-item" href="ui-forms.html">Forms</a>
                                <a class="dropdown-item" href="ui-loaders.html">Loaders</a>
                                <a class="dropdown-item" href="ui-tables.html">Tables</a>
                                <a class="dropdown-item" href="ui-cards.html">Cards</a>
                                <a class="dropdown-item" href="ui-icons.html">Icons</a>
                                <a class="dropdown-item" href="ui-tabs.html">Tabs</a>
                                <a class="dropdown-item" href="ui-alerts.html">Alerts</a>
                                <a class="dropdown-item" href="ui-badges.html">Badges</a>
                                <a class="dropdown-item" href="ui-progress.html">Progress</a>
                                <a class="dropdown-item" href="ui-pagination.html">Pagination</a>
                            </div>
                        </li> --}}
                    </ul>
                    <!-- // END Main Navigation -->

                </div>
            </div>

            @yield('contentFront')


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
    <script src="{{asset('template/assets/js/vanilla-toast-main/lib/vanilla-toast.min.js')}}"></script>

    @stack('script')
</body>

</html>