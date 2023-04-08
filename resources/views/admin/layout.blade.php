<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Dashboard</title>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

  @vite('resources/js/app.js')
</head>
<body class="min-h-screen">
  <header class="flex justify-center w-full py-0.5 px-2 transition-all duration-200 bg-secondary">
    <div class="relative flex flex-row items-center justify-between w-full flex-nowrap">
      <h5 class="text-3xl font-bold font-raleway text-primary">ForTest</h5>
      <div class="hidden sm:flex sm:flex-row sm:gap-5 sm:justify-between">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-5 h-5 fill-current">
          <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
          <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/>
        </svg>
        Logged User
      </div>

      <!-- Mobile menu -->
      <div id="menu-bar" ref="menu-bar" class="absolute right-0 flex items-center sm:hidden">
        <button type="button" id="menu-btn" ref="menu-btn" class="relative block">
          <span class="menu-line"></span>
          <span class="menu-line"></span>
          <span class="menu-line"></span>
        </button>
      </div>
    </div>
  </header>

  <main class="relative flex flex-row">
    <nav class="hidden md:flex md:flex-col md:gap-1 md:w-4/12 md:bg-tertiary md:min-h-screen md:px-4">
      <h2 class="text-xl font-extrabold uppercase text-primary">MENU</h2>
      <hr class="w-full mb-3 border-2 bg-primary border-primary">
      <a href="/admin" class="sidebar-nav {{ Request::is('admin') ? 'active' : '' }}">Dashboard</a>
      <a href="/admin/inbox" class="sidebar-nav {{ Request::is('admin/inbox') ? 'active' : '' }}">Inbox</a>
      <a href="/admin/services" class="sidebar-nav {{ Request::is('admin/services') ? 'active' : '' }}">Services</a>
      <a href="/admin/portfolio" class="sidebar-nav {{ Request::is('admin/portfolio') ? 'active' : '' }}">Portfolio</a>
      <a href="/admin/contact" class="sidebar-nav {{ Request::is('admin/contact') ? 'active' : '' }}">Contact</a>
      {{-- <a href="/admin/users" class="sidebar-nav {{ Request::is('admin/users') ? 'active' : '' }}">Users</a> --}}
    </nav>
    @yield('content')
  </main>

  <footer class="bottom-0 w-full text-center text-white bg-black">
    Wijoc Zoe - 8 April 2023 - Laravel & TailwindCSS
  </footer>

  {{-- @stack('scipts') --}} <!-- Not work, don't know why -->
</body>
</html>