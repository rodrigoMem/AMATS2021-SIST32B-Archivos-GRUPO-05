<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - @yield('title') </title>
    <link rel="stylesheet" href="../../css/build.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

        
</head>


<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        @include('includes.sidebar')

        <div id="page-content-wrapper">
            {{-- navbar --}}
            @include('includes.navbar')
            <!-- Page Content-->

            <div class="container-fluid ">
                @yield('content')
            </div>
        </div>

    </div>
    <div>




</body>

</html>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="../../Ajax/ajax.js"></script>
{{-- <script src="../../js/build.js"></script> --}}
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

</script>
