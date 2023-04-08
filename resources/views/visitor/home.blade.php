<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home</title>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  @vite('resources/js/app.js')
</head>
<body>
  <header class="z-[9999] fixed flex justify-center w-full py-0.5 px-1 transition-all duration-200 bg-secondary">
    <div class="container">
      <div class="relative flex flex-row items-center justify-between w-full flex-nowrap">
        <h5 class="text-3xl font-bold font-raleway text-primary">ForTest</h5>
        <nav class="hidden sm:relative sm:flex sm:flex-row sm:items-center">
          <a href="#hero" class="hidden sm:nav-item">
            Home
          </a>
          <a href="#services" class="hidden sm:nav-item">
            Services
          </a>
          <a href="#portfolio" class="hidden sm:nav-item">
            Portfolio
          </a>
          <a href="#contact" class="hidden sm:nav-item">
            Kontak
          </a>
        </nav>

        <!-- Mobile menu -->
        <div id="menu-bar" ref="menu-bar" class="absolute right-0 flex items-center sm:hidden">
          <button type="button" id="menu-btn" ref="menu-btn" class="relative block">
            <span class="menu-line"></span>
            <span class="menu-line"></span>
            <span class="menu-line"></span>
          </button>
        </div>
      </div>
    </div>
  </header>

  <!-- Hero Section -->
  <section id="hero" class="flex items-center justify-center min-h-screen bg-tertiary">
    <div class="container">
      <div class="flex flex-wrap justify-center w-full sm:flex-no-wrap sm:gap-1 md:gap-2 md:justify-evenly">
        <div class="flex justify-center w-full leading-none sm:w-5/12 md:w-5/12 md:justify-start lg:justify-start">
          <div class="flex flex-col self-center">
            <h5 class="text-3xl font-bold tracking-wider text-primary sm:text-2xl xl:ml-1">We are,</h5>
            <h1 class="font-bold text-[6.4em] text-raleway sm:text-7xl md:text-[6.4em]">ForTest</h1>
            <hr class="bg-secondary border-secondary border-2 w-full mb-4 sm:w-[90%] md:w-[21em]">
            <p class="px-1 font-medium text-justify text-primary home-text mb-7 w-80 sm:w-[90%] md:w-[21rem]">
              Your best friend who will provide solutions for your digital needs.
            </p>
            <button class="self-start flex flex-row gap-2 uppercase rounded-md btn btn-lg btn-outline-secondary group sm:w-[90%] md:w-[21rem]">
              Our Project
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-[1.4rem] h-[1.4rem] fill-current animate-[bounce-left_1s_infinite]">
                <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/>
              </svg>
            </button>
          </div>
        </div>
        <div class="relative self-center hidden w-full min-h-full px-4 sm:flex sm:w-6/12 sm:h-72 md:h-80 lg:h-[30rem] lg:pt-5">
          <img src="{{ asset('img/hero-img.png') }}" alt="Expo Exhibit booth in vector" class="z-10 h-full mx-auto" />
        </div>
      </div>
    </div>
  </section>
  <!-- Hero Section -->

  <!-- Services Section -->
  <section id="services" class="flex items-center justify-center w-full min-h-screen py-10 bg-tertiary/30">
    <div class="container">
      <div class="flex flex-row flex-wrap justify-start text-center sm:flex-col sm:justify-center">
        <span class="section-title">
          <h5 class="sm:hidden">Our Services</h5>
          <h5 class="hidden sm:block">Our Services</h5>
        </span>
        <span class="w-28 h-1 self-center mt-[0.25rem] bg-secondary sm:w-1/5 lg:w-[9em]"></span>
        <h3 class="text-3xl uppercase text-secondary sm:hidden">Services you can use</h3>
      </div>
      <div class="grid grid-cols-1 px-2 pb-3 gap-x-3 gap-y-5 pt-7 sm:grid-cols-2 lg:grid-cols-4">
        <div class="col-span-1 service-content">
          <div class="flex flex-col items-center justify-center gap-2">
            <img src="{{ asset('img/icon/web-design.png') }}" class="w-16 h-16" alt="Icon web development">
          </div>
          <h5 class="font-medium">Web Development</h5>
          <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit rerum quibusdam facere.
            Quo enim ipsam sed pariatur libero nam laborum.</p>
          <hr class="w-full bg-gray-400">
          <a href="https://www.flaticon.com/free-icons/design" title="design icons" class="text-xs italic text-gray-500">
            Design icons created by Freepik - Flaticon
          </a>
        </div>
        <div class="col-span-1 service-content">
          <div class="flex flex-col items-center justify-center gap-2">
            <img src="{{ asset('img/icon/mobile-development.png') }}" class="w-16 h-16" alt="Icon web development">
          </div>
          <h5 class="font-medium">Mobile Development</h5>
          <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit rerum quibusdam facere.
            Quo enim ipsam sed pariatur libero nam laborum.</p>
          <hr class="w-full bg-gray-400">
          <a href="https://www.flaticon.com/free-icons/mobile-development" title="mobile development icons" class="text-xs italic text-gray-500">
            Mobile development icons created by Kalashnyk - Flaticon
          </a>
        </div>
        <div class="col-span-1 service-content">
          <div class="flex flex-col items-center justify-center gap-2">
            <img src="{{ asset('img/icon/app-development.png') }}" class="w-16 h-16" alt="Icon web development">
          </div>
          <h5 class="font-medium">Responsive Design</h5>
          <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit rerum quibusdam facere.
            Quo enim ipsam sed pariatur libero nam laborum.</p>
          <hr class="w-full bg-gray-400">
          <a href="https://www.flaticon.com/free-icons/app-development" title="app development icons" class="text-xs italic text-gray-500">
            App development icons created by justicon - Flaticon
          </a>
        </div>
        <div class="col-span-1 service-content">
          <div class="flex flex-col items-center justify-center gap-2">
            <img src="{{ asset('img/icon/coding.png') }}" class="w-16 h-16" alt="Icon web development">
          </div>
          <h5 class="font-medium">Continous Maintenance</h5>
          <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit rerum quibusdam facere.
            Quo enim ipsam sed pariatur libero nam laborum.</p>
          <hr class="w-full bg-gray-400">
          <a target="_blank" href="https://www.flaticon.com/free-icons/development" title="development icons" class="text-xs italic text-gray-500">
            Development icons created by Freepik - Flaticon
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Section -->
  <section id="portfolio" class="flex items-center justify-center w-full min-h-screen py-10 bg-tertiary/20">
    <div class="container">
      <div class="flex flex-row flex-wrap justify-start text-center sm:flex-col sm:justify-center">
        <span class="section-title">
          <h5 class="sm:hidden">Portfolio</h5>
          <h5 class="hidden sm:block">Our Work</h5>
        </span>
        <span class="w-28 h-1 self-center mt-[0.25rem] bg-secondary sm:w-1/5 lg:w-[9em]"></span>
        <h3 class="text-3xl uppercase text-secondary sm:hidden">Check Our Work</h3>
      </div>
      <div class="grid grid-cols-1 gap-3 px-2 pb-3 pt-7 sm:grid-cols-2 lg:grid-cols-3">
        <div class="col-span-1 portfolio-content group">
          <span class="flex items-center justify-center w-full overflow-hidden bg-gray-100 max-h-56">
            <img src="{{ asset('img/portfolio/ptf-1.jpg') }}" alt="" class="max-w-full min-h-56 max-h-56">
          </span>
          <div class="flex flex-col gap-[0.125rem] py-2 px-1">
            <h5 class="text-lg font-medium">Porfolio Number One A</h5>
            <p class="font-light tracking-wide text-justify">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque excepturi aliquid at quam quia incidunt.
            </p>
          </div>
        </div>
        <div class="col-span-1 portfolio-content group">
          <span class="flex items-center justify-center w-full overflow-hidden bg-gray-100 max-h-56">
            <img src="{{ asset('img/portfolio/ptf-2.jpg') }}" alt="" class="max-w-full min-h-56 max-h-56">
          </span>
          <div class="flex flex-col gap-[0.125rem] py-2 px-1">
            <h5 class="text-lg font-medium">Porfolio Number Two A</h5>
            <p class="font-light tracking-wide text-justify">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque excepturi aliquid at quam quia incidunt.
            </p>
          </div>
        </div>
        <div class="col-span-1 portfolio-content group">
          <span class="flex items-center justify-center w-full overflow-hidden bg-gray-100 max-h-56">
            <img src="{{ asset('img/portfolio/ptf-3.jpg') }}" alt="" class="max-w-full min-h-56 max-h-56">
          </span>
          <div class="flex flex-col gap-[0.125rem] py-2 px-1">
            <h5 class="text-lg font-medium">Porfolio Number Three A</h5>
            <p class="font-light tracking-wide text-justify">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque excepturi aliquid at quam quia incidunt.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Portfolio Section End -->

  <!-- Contact -->
  <section id="contact" class="flex items-center justify-center w-full h-full py-10 bg-gray-300">
    <div class="container">
      <div class="flex flex-row flex-wrap justify-start px-4 mb-5 text-start sm:flex-col sm:justify-center sm:text-center md:mb-6">
        <span class="section-title">
          <span class="sm:hidden">Contact</span>
          <span class="hidden sm:block">Leave A Message</span>
        </span>
        <span class="w-28 h-1 self-center mt-[0.25rem] bg-secondary sm:w-1/5 lg:w-[9em]"></span>
        <h3 class="text-3xl uppercase text-secondary sm:hidden">Leave A Message</h3>
      </div>
      <div class="flex flex-row flex-wrap gap-2 px-4 sm:flex-nowrap sm:px-0 sm:gap-4 lg:px-4">
        <div class="flex flex-col w-full gap-2 sm:w-6/12 sm:gap-4 md:gap-5">
          <div class="form-floating">
            <label for="leave-msg-name" class="form-label">Name</label>
            <input type="text" name="inputName" id="leave-msg-name" class="form-control" placeholder=" " />
          </div>
          <div class="form-floating">
            <label for="leave-msg-subject" class="form-label">Subject</label>
            <input type="text" name="inputSubject" id="leave-msg-subject" class="form-control" placeholder=" " />
          </div>
          <div class="form-floating">
            <label for="leave-msg-email" class="form-label">Email</label>
            <input type="text" name="inputEmail" id="leave-msg-email" class="form-control" placeholder=" " />
          </div>
        </div>
        <div class="flex flex-col w-full gap-4 sm:w-6/12 sm:gap-4 md:gap-5">
          <div class="form-floating">
            <label for="leave-msg-message" class="form-label">Message</label>
            <textarea name="" id="leave-msg-message" cols="10" rows="4" class="form-control-ta" placeholder=" "></textarea>
          </div>
          <a href="" class="btn btn-sm btn-secondary rounded w-full flex flex-row flex-nowrap justify-center items-center gap-2 sm:py-[0.6rem] md:btn-md md:w-fit">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5 fill-white">
              <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
              <path d="M498.1 5.6c10.1 7 15.4 19.1 13.5 31.2l-64 416c-1.5 9.7-7.4 18.2-16 23s-18.9 5.4-28 1.6L277.3 424.9l-40.1 74.5c-5.2 9.7-16.3 14.6-27 11.9S192 499 192 488V392c0-5.3 1.8-10.5 5.1-14.7L362.4 164.7c2.5-7.1-6.5-14.3-13-8.4L170.4 318.2l-32 28.9 0 0c-9.2 8.3-22.3 10.6-33.8 5.8l-85-35.4C8.4 312.8 .8 302.2 .1 290s5.5-23.7 16.1-29.8l448-256c10.7-6.1 23.9-5.5 34 1.4z"/>
            </svg>
            Leave a Message</a>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact Section End -->

  <!-- Footer -->
  <footer class="bottom-0 min-h-full">
    <section class="flex items-center justify-center w-full h-full py-10 bg-primary">
      <div class="container">
        <div class="container flex flex-col flex-wrap sm:flex-row sm:flex-nowrap">
          <div class="w-full mb-5 text-white sm:w-1/2">
            <span class="w-full py-1 uppercase border-b-2 border-white">
              ForTest
            </span>
            <p class="w-full mt-5 mb-5 leading-none text-justify">
              Your best friend who will provide solutions for your digital needs.
            </p>
            <table class="w-full mb-5 text-base border-collapse table-auto">
              <tr>
                <td class="pr-2">Phone</td>
                <td>:</td>
                <td class="px-3">+62 2x xxx xxx</td>
              </tr>
              <tr>
                <td class="pr-2">Whatsapp</td>
                <td>:</td>
                <td class="px-3">+62 8xxx xxxx</td>
              </tr>
              <tr>
                <td class="pr-2">E-mail</td>
                <td>:</td>
                <td class="px-3">email@xxxx.com</td>
              </tr>
              <tr>
                <td class="pr-2 align-top">Address</td>
                <td class="align-top">:</td>
                <td class="px-3 text-justify">Jl. Lokasi, Kota XXX, Prov. XXX, Indonesia</td>
              </tr>
            </table>
            <div class="flex flex-row flex-wrap justify-start gap-2">
              <a href="https://www.instagram.com/" class="p-1 bg-white rounded w-fit max-h-10">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-8 h-8 sm:mb-3"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
              </a>
              <a href="https://www.youtube.com/" class="p-1 bg-white rounded w-fit max-h-10">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-8 h-8 sm:mb-3">
                  <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                  <path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"/>
                </svg>
              </a>
              <a href="https://www.facebook.com/" class="p-1 bg-white rounded w-fit max-h-10">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-8 h-8 sm:mb-3">
                  <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                  <path d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"/>
                </svg>
              </a>
              <a href="https://www.twitter.com/" class="p-1 bg-white rounded w-fit max-h-10">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-8 h-8 sm:mb-3">
                  <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                  <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/>
                </svg>
              </a>
            </div>
          </div>
          <div class="flex flex-col w-full text-white sm:w-1/2">
            <p class="mb-5 underline underline-offset-2">Useful Link</p>
            <a href="#hero" class="flex flex-row">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="w-6 h-6 fill-white">
                <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                <path d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z"/>
              </svg>
              <p>Home</p>
            </a>
            <a href="#services" class="flex flex-row">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="w-6 h-6 fill-white">
                <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                <path d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z"/>
              </svg>
              <p>Our Services</p>
            </a>
            <a href="#portfolio" class="flex flex-row">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="w-6 h-6 fill-white">
                <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                <path d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z"/>
              </svg>
              <p>Our Work</p>
            </a>
            <a href="#contact" class="flex flex-row">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="w-6 h-6 fill-white">
                <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                <path d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z"/>
              </svg>
              <p>Leave a message</p>
            </a>
          </div>
        </div>
      </div>
    </section>
    <section class="text-center text-white bg-black">
      Wijoc Zoe - 8 April 2023 - Laravel & TailwindCSS
    </section>
  </footer>
  <!-- Footer End -->
</body>
</html>