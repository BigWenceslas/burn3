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
                        <a href="{{ route('home') }}" class="navbar-brand">
                            <img class="navbar-brand-icon" src="{{asset('template/assets/images/logo/white-100.svg')}}" width="30" alt="Bliss">
                            <span class="d-none d-md-block">Bliss</span>
                        </a>

                        <!-- Main Navigation -->
                        <ul class="nav navbar-nav ml-auto d-none d-sm-flex">
                            {{-- <li class="nav-item">
                                <a href="pricing.html" class="nav-link">Pricing</a>
                            </li> --}}
                            <li class="nav-item">
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
                            <a href="" class="nav-link">A Propos</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Formations</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('blog') }}" class="nav-link">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Contact</a>
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

                <div class="bg-gradient-primary py-32pt">
                    <div class="container d-flex flex-column flex-md-row align-items-center text-center text-md-left">
                        <img src="{{asset('template/assets/images/illustration/student/128/white.svg')}}" class="mr-md-32pt mb-32pt mb-md-0" alt="student">
                        <div class="flex mb-32pt mb-md-0">
                            <h1 class="text-white mb-0">Réinitialisation</h1>
                            <p class="lead measure-lead text-white-50">Réinitialiser votre mot de passe</p>
                        </div>
                        <a href="{{ route('register') }}" class="btn btn-outline-white flex-column">
                            Vous n'avez pas de compte ?
                            <span class="btn__secondary-text">Inscrivez-vous aujourd'hui !</span>
                        </a>
                    </div>
                </div>
                <div class="bg-white pt-32pt pt-sm-64pt pb-32pt">
                    <div class="container page__container">
                        <form class="col-md-5 p-0 mx-auto form_reset" autocomplete="off">
                            @csrf
                            <input type="hidden" name="id" value="{{ $id }}">
                            <div class="form-group">
                                <label for="email">Nouveau mot de passe:</label>
                                <input name="password" type="password" class="form-control password">
                            </div>
                            <div class="form-group">
                                <label for="email">Confirmation du nouveau mot de passe:</label>
                                <input type="password" class="form-control cpassword">
                            </div>
                            <div class="text-center">
                                <button class="btn btn-lg btn-accent se_connecter">Réinitialiser</button>
                            </div>
                        </form>
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

    <script>
        $('.se_connecter').on('click', function(e){
            e.preventDefault();
            
            $('.se_connecter').prepend("<span class='spinner-grow spinner-grow-sm'></span>");

            var $form = $('.form_reset');
            var formdata = (window.FormData) ? new FormData($form[0]) : null;
            var data = (formdata !== null) ? formdata : $form.serialize();
            if ($('.password').val() == $('.cpassword').val()) {
                $.ajax({
                    url: "{{ route('reset_pwd') }}",
                    type: 'POST',
                    processData: false,
                    contentType: false,
                    data: data,
                    success: function(data) {
                        // console.log(data);
                        data = JSON.parse(data);
                        if (data.type == "success") {
                            $('.spinner-grow').remove();
                            vt.success(data.message,{
                                title: undefined,
                                position: "top-center",
                                duration: 5000,
                                closable: true,
                                focusable: true,
                                callback: undefined
                            });
                            window.location.href = "{{ route('login') }}";
                        }else if (data.type == "error") {
                            $('.spinner-grow').remove();
                            vt.error(data.message,{
                                title: "Erreur !",
                                position: "top-center",
                                duration: 5000,
                                closable: true,
                                focusable: true,
                                callback: undefined
                            });
                        }else {
                            $('.spinner-grow').remove();
                            vt.error("Une erreur est survenue, veuillez reessayer plutard !",{
                                title: "Erreur !",
                                position: "top-center",
                                duration: 5000,
                                closable: true,
                                focusable: true,
                                callback: undefined
                            });
                        }
                    },
                    error: function(error) {
                        vt.error("Une erreur est survenue, veuillez reessayer plutard !",{
                            title: "Erreur !",
                            position: "top-center",
                            duration: 5000,
                            closable: true,
                            focusable: true,
                            callback: undefined
                        });
                        $('.spinner-grow').remove();
                        console.log(error);
                    }
                });
            } else {
                vt.error("Vos mots de passe ne correspondent pas !",{
                    title: "Erreur !",
                    position: "top-center",
                    duration: 5000,
                    closable: true,
                    focusable: true,
                    callback: undefined
                });
                $('.spinner-grow').remove();
            }
        });
    </script>


</body>
</html>