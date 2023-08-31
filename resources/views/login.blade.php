<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('') }}assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('') }}assets/img/klinik2.png">
    <title>
        KFS
    </title>
    <!--     Fonts and icons     -->
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('') }}assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="{{ asset('') }}assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('') }}assets/css/nucleo-svg.css" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('') }}assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
    <style>
        .field-icon {
            right: 10px;
            top: 50%;
            position: absolute;
            z-index: 100;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>
    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>

</head>

<body class="bg-gray-200">
    @include('sweetalert::alert')


    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <!-- Navbar -->

                <!-- End Navbar -->
            </div>
        </div>
    </div>
    <main class="main-content  mt-0">

        <div class="page-header align-items-start min-vh-100"
            style="background-image: url('{{ asset('') }}assets/img/aaa.jpg');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container my-auto">
                <div class="row">
                    <div class="col-lg-4 col-md-8 col-12 mx-auto">
                        <div class="card z-index-0 fadeIn3 fadeInBottom">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-green shadow-primary border-radius-lg py-3 pe-1">
                                    <h4 class="text-white font-weight-bolder text-center mt-2 mb-0"><img
                                            src="{{ asset('') }}assets/img/login3.png" alt="HTML tutorial"
                                            style="width:50px;height:50px;"></h4>
                                    <div class="row mt-2">
                                        <h5 class="text-white font-weight-bolder text-center mb-0">KINIK FOKUS SEHAT
                                        </h5>
                                        <p class=" text-white text-center mb-0 mt-1 text-sm">Silahkan masuk untuk
                                            melanjutkan.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('login.action') }}" method="POST" role="form"
                                    class="text-start">
                                    @csrf
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="Username"
                                            name="username" required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" class="form-control " placeholder="Password"
                                            name="password" required>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn  w-100 my-3 mb-2 text-white"
                                            style="background-color: rgb(3, 131, 3)">MASUK</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer position-absolute bottom-2 py-2 w-100">
                <div class="container">

                </div>
            </footer>
        </div>
    </main>
    <!--   Core JS Files   -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="{{ asset('') }}assets/js/core/popper.min.js"></script>
    <script src="{{ asset('') }}assets/js/core/bootstrap.min.js"></script>
    <script src="{{ asset('') }}assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('') }}assets/js/plugins/smooth-scrollbar.min.js"></script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('') }}assets/js/argon-dashboard.min.js?v=2.0.4"></script>

    <script>
        $(document).on('click', '.toggle-password', function(e) {
            e.preventDefault();
            let target = $($(this).attr('data-target'))
            if (target.attr('type') == 'password') {
                target.attr('type', 'text')
                $(this).addClass('fa-eye-slash')
            } else {
                target.attr('type', 'password')
                $(this).removeClass('fa-eye-slash')
            }
        })
    </script>
    {{-- eye icon --}}

</body>

</html>
