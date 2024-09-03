<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../public/images/raimond-solar-logo.png" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>{{ config('app.name') }} - @yield('title')</title>
  <style>
    [x-cloak] {
      display: none !important;
    }    
  </style>
  <script>
    tailwind.config = {
      theme: {
        extend: {
            fontFamily:{
                montserrat:"'montserrat',sans-serif",
            },
          colors: {
            heading: '#292929',
            accent:'#6E3DAD',
          }
        }
      }
    }
  </script>
</head>
<body class="font-montserrat">
    <div class="h-10 bg-blue-600 w-full flex justify-center items-center space-x-6 fixed z-20">
      <p class="text-neutral-200 text-sm hidden md:flex">email us at: raimondsolar83@gmail.com</p> 
      <p class="text-neutral-200 mx-auto text-sm md:text-md">Helpline number: 9073059780 / 9073249403</p>      
    </div>
    <header class="relative z-20 flex justify-between items-center px-4 py-6 md:py-6 md:px-36" x-data="{ open: false }"
    x-on:open.window="open ? document.body.style.overflow = 'hidden' : document.body.style.overflow = 'auto'">
    
    

    <a href="/" class="flex items-center mt-6 md:mt-8">
      <img class="h-6 md:h-10" src="{{ asset('images/raimond-solar-logo.png')}}" alt="Raimond Solar">
      <h2 class="text-xl md:text-2xl font-bold uppercase">Raimond Solar</h2>
    </a>

    <button x-on:click="open = !open" :class="{ 'hidden': open }"
      class="md:hidden mt-6">
          <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
          </svg>
      </button>

      <div x-cloak class="fixed inset-0 z-1 bg-gray-800/50" x-show="open" x-transition:enter="ease-out duration-300" 
      x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-50" 
      x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-50" 
      x-transition:leave-end="opacity-0"></div>

    <!-- Mobile Nav -->
    <ul x-cloak x-show="open" 
      x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-x-full" 
      x-transition:enter-end="opacity-100 translate-x-0"
      x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-x-0" 
      x-transition:leave-end="opacity-0 translate-x-full" 
      class="absolute top-0 right-0 w-9/12 space-y-12 text-left
       items-center justify-center text-lg flex flex-col
       font-semibold px-4 bg-white h-screen overflow-hidden">
          
        @auth
        <a href="/products/manage">Manage Products</a>
        <span class="h-[1px] w-1/2 bg-gray-300"></span>
        <form action="/logout" method="POST" class="inline">
            @csrf
            <button type="submit">
              <ion-icon name="log-out-outline"></ion-icon>Logout
            </button>
            </form>
        @else
        <li>
            <a href="/products">Products</a>
          </li>
          <span class="h-[1px] w-1/2 bg-gray-300"></span>
          <li>
            <a href="/about">About us</a>
          </li>
          <span class="h-[1px] w-1/2 bg-gray-300"></span>
          <li>
            <a href="/contact">Contact</a>
          </li>
          <span class="h-[1px] w-1/2 bg-gray-300"></span>
        <li>
            <a href="/login">Sign in</a>
          </li>
        @endauth
          
      </ul>
    
      <button x-cloak x-on:click="open = !open" :class="{ 'hidden': !open }" class="relative z-10">
        <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"></path>
        </svg>
    </button>

    <!-- Desktop Nav -->
    <nav class="hidden space-x-12 font-semibold text-gray-800 md:flex items-center md:mt-8">
    @auth
    <div x-data="dropdown()" class="relative inline-block text-left">
      <!-- Button -->
      <button @click="toggleDropdown" class="inline-flex 
      justify-center items-center px-4 py-2 text-md 
      font-semibold text-neutral-700  
      focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 space-x-2">
      <ion-icon name="settings-outline"></ion-icon> 
      Manage
      </button>
      
      <!-- Dropdown content -->
      <div x-show="isOpen" @click.away="closeDropdown" 
      class="origin-top-right absolute right-0 mt-2 w-56 rounded-md 
      shadow-lg bg-white ring-1 ring-black ring-opacity-5">
        <!-- Dropdown items -->
        <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
          <a href="/products/manage" class="block px-4 py-2 
          text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" 
          role="menuitem">Products</a>
          <a href="{{ route('categories.index') }}" class="block px-4 py-2 
          text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" 
          role="menuitem">Categories</a>
        </div>
      </div>
    </div>
    <form action="/logout" method="POST" class="inline">
        @csrf
        <button type="submit" class="flex items-center space-x-2">
          <ion-icon name="log-out-outline"></ion-icon>Logout
        </button>
        </form>
    @else

    <a href="/products">Products</a>
    <a href="/about">About Us</a>
    <a href="/contact">Contact</a>

    @endauth      
    </nav>
  </header>

  @yield('content')

  <footer id="footer">
    <!-- Flex Container -->
    <div class="flex flex-col space-y-2 py-4 font-montserrat bg-neutral-800">
      <!-- Logo & Socials -->
      <div class="flex flex-col md:flex-row text-neutral-100 items-center justify-between
      md:px-36">

        <a href="/" class="flex title-font font-medium 
        items-center text-gray-900 mb-4 md:mb-0">
              <img src="{{asset('images/raimond-solar-logo.png')}}" class="h-6 md:h-10" 
              alt="raimond solar logo">
              <span class="font-montserrat text-xl font-bold md:text-2xl 
              uppercase text-neutral-100">Raimond Solar</span>
        </a>
        <div class="flex space-x-6">
          <a href="#">            
            <ion-icon class="text-2xl hover:fill-accent" name="logo-youtube"></ion-icon>
          </a>          
          <a href="#">            
            <ion-icon class="text-2xl hover:fill-accent" name="logo-facebook"></ion-icon>
          </a>          
          <a href="#">            
            <ion-icon class="text-2xl hover:fill-accent" name="logo-instagram"></ion-icon>
          </a>          
        </div>

        @auth
            
        <p>Welcome To <span class=" font-semibold text-accent">Raimond Solar</span></p>

        @else
        
        <span>are you admin? <a href="/login" class="text-violet-500">login.</a></span>

        @endauth

      </div>
      <p class="text-center md:text-left px-10 md:px-36 text-sm text-neutral-400 pt-2">&copy; Copyright 2023 Raimond Solar</p>
    </div>
  </footer>

  <script>
    function dropdown() {
      return {
        isOpen: false,
        toggleDropdown() {
          this.isOpen = !this.isOpen;
        },
        closeDropdown() {
          this.isOpen = false;
        }
      };
    }
  </script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>