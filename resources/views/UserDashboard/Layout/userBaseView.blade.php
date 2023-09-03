<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="time_color" content="#712cf9">
    <title>BOOKING MANAGEMENT SYSTEM | @yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{asset('assets/image/favicon.png')}}">
    @include('layout.css')
    @yield('style')
    <style>
        /* Your existing styles */
        .header-content {
            background: black;
            color: white;
            /* height: 70px; */
        }

        .logo img {
            max-width: 100px;
            margin-bottom: 10px;
        }

        .logo span {
            font-size: 1.2em;
            display: block;
        }

        /* Sidebar */
        aside {
            width: 250px;
            height: 800px;
            background-color: grey;
            color: #fff;
            padding: 20px;
        }

        /* Flexbox layout for main content and aside */
        .flex-container {
            display: flex;
        }

        .aside {
            width: 250px;
            /* Adjust the height as needed */
            background-color: grey;
            color: #fff;
            padding: 20px;
            margin: 0;
        }

        .main-content {
            flex: 1;
            padding: 20px;
        }

        .header-content {
            background: black;
            color: white;
            height: 70px;
            padding: 10px 20px;
        }

        .user-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .sidebar {
            width: 250px;
            background-color: grey;
            color: #fff;
            padding-top: 20px;
        }

        .menu {
            list-style: none;
            padding: 0;
        }

        .menu li {
            margin-bottom: 10px;
        }

        .menu a {
            color: #fff;
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        .menu i {
            margin-right: 10px;
            font-size: 1.2em;
        }

        .submenu {
            margin-left: 15px;
            list-style: none;
            padding: 0;
        }

        .submenu li {
            margin-bottom: 5px;
        }

        .submenu a {
            color: #fff;
            text-decoration: none;
        }
        
    </style>
</head>

<body>
    <header>
        <div class="header-content">
            <div class="user-info d-flex justify-content-between align-items-center">
                <h3>Welcome, {{ Auth::user()->name}}</h3>
                <form action="{{ route('logout') }}" method="get">
                    <button class="btn btn-danger " type="submit">LogOut</button>
                </form>
            </div>
        </div>
    </header>

    <div class="flex-container">
        <aside class="aside">
            <div class="logo">
                <img src="{{asset('assets/image/logo.png')}}" alt="Company Logo">
                <span>Company Name</span>
                <br>
            </div>
            <nav >
                <ul class="menu">
                    <li><a href="{{ route('dashboard.user') }}"><i class="bi bi-house-door"></i> Dashboard</a></li>
                    <li><a href="{{ route('booking.my') }}"><i class="bi bi-calendar-check"></i> Bookings</a></li>
                    
                    <li>
                        <a href="#"><i class="bi bi-gear"></i> Settings</a>
                        <ul class="submenu">
                            <li><a href="{{ route('user.profile.get') }}"><i class="bi bi-person"></i> Profile</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>

        </aside>
        <main class="main-content">
            @yield('dashContent')
        </main>
    </div>

    <!-- Include your scripts -->
    @include('layout.js')
    @yield('customjs')
<script>
    $(document).ready(function() {
        $('#editor').summernote({
            height: 400, // Set the height of the editor
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic']],
                ['para', ['ul', 'ol']],
                ['insert', ['link', 'picture']],
                ['codeview', ['codeview']],
                ['fullscreen', ['fullscreen']],
                ['code', ['code']] // Add the 'code' option for source code
            ]
        });
    });
</script>

</body>

</html>