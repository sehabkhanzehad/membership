<!DOCTYPE html>
<!--
Template Name: NobleUI - HTML Bootstrap 5 Admin Dashboard Template
Author: NobleUI
Website: https://www.nobleui.com
Portfolio: https://themeforest.net/user/nobleui/portfolio
Contact: nobleui123@gmail.com
Purchase: https://1.envato.market/nobleui_admin
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">

<!-- Mirrored from www.nobleui.com/html/template/demo1/pages/auth/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Oct 2024 09:00:17 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords"
        content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>NobleUI - HTML Bootstrap 5 Admin Dashboard Template</title>

    <!-- color-modes:js -->
    <script src="{{ asset('assets') }}/js/color-modes.js"></script>
    <!-- endinject -->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&amp;display=swap"
        rel="stylesheet">
    <!-- End fonts -->

    <!-- core:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/core/core.css') }}">
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/feather-font/css/iconfont.css') }}">
    <!-- endinject -->

    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/demo1/style.css') }}">
    <!-- End layout styles -->

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
</head>

<body>
    <div class="main-wrapper">
        <div class="page-wrapper full-page">
            <div class="page-content d-flex align-items-center justify-content-center">

                <div class="row w-100 mx-0 auth-page">
                    <div class="col-md-10 col-lg-8 col-xl-6 mx-auto">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-4 pe-md-0">
                                    <div class="auth-side-wrapper">

                                    </div>
                                </div>
                                <div class="col-md-8 ps-md-0">
                                    <div class="auth-form-wrapper px-4 py-5">
                                        <a href="#" class="nobleui-logo d-block mb-2">Noble<span>UI</span></a>
                                        <h5 class="text-secondary fw-normal mb-4">Create a free account.</h5>
                                        @if (session('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                        @endif

                                        <form class="forms-sample" method="POST" action="{{ route('user.sign-up') }}">
                                            @csrf

                                            <div class="mb-3">
                                                <label class="form-label">Name</label>
                                                <input type="text" name="name"
                                                    class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                                    id="exampleInputUsername1" placeholder="Name">
                                                @error('name')
                                                    <p class="text-danger"> {{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputUsername1" class="form-label">Username</label>
                                                <input type="text" name="username" class="form-control"
                                                    id="exampleInputUsername1" autocomplete="Username"
                                                    placeholder="Username">
                                                @error('username')
                                                    <p class="text-danger"> {{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="userEmail" class="form-label">Email address</label>
                                                <input type="email" name="email" class="form-control" id="userEmail"
                                                    placeholder="Email">
                                                @error('email')
                                                    <p class="text-danger"> {{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="userPassword" class="form-label">Password</label>
                                                <input type="password" name="password" class="form-control"
                                                    id="userPassword" autocomplete="current-password"
                                                    placeholder="Password">
                                                @error('password')
                                                    <p class="text-danger"> {{ $message }}</p>
                                                @enderror
                                            </div>

                                            <a href="{{ route('user.signIn') }}" class="d-block mt-3 text-secondary">
                                                Already have an account? Sign-in</a>

                                            <button type="submit" class="btn btn-primary float-end">Sign-up</button>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- core:js -->
    <script src="{{ asset('assets') }}/vendors/core/core.js"></script>
    <!-- endinject -->

    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->

    <!-- inject:js -->
    <script src="{{ asset('assets') }}/vendors/feather-icons/feather.min.js"></script>
    <script src="{{ asset('assets') }}/js/app.js"></script>
    <!-- endinject -->

    <!-- Custom js for this page -->
    <!-- End custom js for this page -->

</body>

<!-- Mirrored from www.nobleui.com/html/template/demo1/pages/auth/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Oct 2024 09:00:17 GMT -->

</html>
