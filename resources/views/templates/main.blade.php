<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/home.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <title>@yield('title')</title>
</head>
<body>
    <body id="body-pd">
        <header class="header" id="header">
            <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i>
            </div>
            <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
        </header>
        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div> <a href="{{url('/')}}" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">MY Arsip</span> </a>
                    <div class="nav_list"> 
                        <a href="{{url('/')}}" class="nav_link {{ Request::is('/') ? 'active' : '' }}"> 
                            <i class='bx bx-grid-alt nav_icon'></i> 
                            <span class="nav_name">Tabel Arsip</span> 
                        </a> 
                        <a href="{{url('/tambahArsip')}}" class="nav_link {{ Request::is('tambahArsip') ? 'active' : '' }}"> 
                            <i class='bx bx-message-square-detail nav_icon'></i> 
                            <span class="nav_name">Tambah Arsip</span> 
                        </a> 
                        <a href="#" class="nav_link"> 
                            <i class='bx bx-folder nav_icon'></i> 
                            <span class="nav_name">Surat Masuk</span> 
                        </a> 
                        <a href="#" class="nav_link"> 
                            <i class='bx bx-bar-chart-alt-2 nav_icon'></i> 
                            <span class="nav_name">Surat Keluar</span> 
                        </a> 
                    </div>
                </div> 
                <a href="#" class="nav_link"> 
                    <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Log-out</span> 
                </a>
            </nav>
        </div>
        <!--Container Main start-->
        <div class="height-100 bg-light">
            @yield('content')
        </div>
        <!--Container Main end-->

    <script src="{{asset('assets/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>
</body>
</html>