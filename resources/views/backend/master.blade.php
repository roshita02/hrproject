<!DOCTYPE html>
<html class="chrome">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>HR System | @yield('title')</title>
    <!-- Favicon-->
        @include('backend.style')
        <style type="text/css">
            .form-inline{
                display: inline-block;
            }

        </style>

</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>

    <!-- #END# Page Loader -->
    @yield('text')
        
    @include('backend.script')    
</body>
</html>