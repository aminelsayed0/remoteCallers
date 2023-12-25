<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="/assets/images/LOGO.png"
    />
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;0,800;1,400;1,700;1,800&display=swap"
      rel="stylesheet"
    />
    @yield('style')
  </head>

<body>
     <!-- start header -->
     <header>
        <div class="container">
          <a href={{route('home')}} class="logo">
            <img src="/assets/images/LOGO.png" alt="logo" />
          </a>
          <nav>
            <i class="fas fa-bars toggle-menu"></i>
            <ul class="links">
              <li><a href={{route('home')}}>Home</a></li>
              <li>
                <a href={{route('plans')}}>Plans</a>
              </li>
              <li><a href="../#about">About</a></li>
              <li><a href="../#contact">Contact Us</a></li>
            </ul>
          </nav>
        </div>
      </header>
      <!-- end header -->


    @yield('content')

    <!-- start contact section -->
    <footer id="contact">
        <div class="container">
          <a href={{route('home')}} class="logo">
            <img src="/assets/images/LOGO.png" alt="logo" />
          </a>
          <div class="f-links">
            <h3>Links</h3>
            <ul class="links">
              <li><a href={{route('home')}}>Home</a></li>
              <li>
                <a href={{route('plans')}}>Plans</a>
              </li>
              <li><a href="../#about">About</a></li>
              <li><a href="../#contact">Contact Us</a></li>
            </ul>
          </div>
          <div class="contact-us">
            <h3>Contact Us</h3>
            <ul>
              <li>Sales Team : (469) 887-6088</li>
              <li>callersremote@gmail.com</li>
            </ul>
          </div>
        </div>
        <p>Copyright © Remote Callers | All Rights Reserved 2023</p>
      </footer>
      <!-- end contact section -->
    @yield('js')
</body>

</html>
