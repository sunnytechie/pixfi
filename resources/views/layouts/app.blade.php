<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta property="og:url" content="{{ url()->current() }}" />
        <meta property="og:type" content="Welcome to pixfi platform" />
        <meta property="og:title" content="{{ config('app.name') }}" />
        <meta property="og:description" content="Image Store" />
        <meta property="og:image" content="{{ asset('assets/images/pixfi.png') }}" />
        <meta property="og:image:width" content="200" />
        <meta property="og:image:height" content="200" />
        <meta property="og:image:type" content="image/png" />
        <meta property="og:image:alt" content="{{ config('app.name') }}" />
        <meta name="description" content="Image Storage System for SFI.">
        <meta name="author" content="Sisters Fellowship International">
        <meta name="keywords" content="">

        <title>{{ config('app.name', 'Pixfi') }}</title>

        {{-- favicon --}}
        <link rel="icon" href="https://sfiloveinaction.org/wp-content/uploads/2022/07/cropped-SFI-Logo.png">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/bootstrap-icons.min.css">
        {{-- Dropzone --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.min.css" integrity="sha512-v6U9bYjCXz+TppwJhLBy6SRRJ8/od0Kyv1bbp0x+oINP8G02WgBv7jK52yOFOf2r75dR1aSl2l5oZ+C5jVmyeA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Style+Script&display=swap');

            body, p, li, a, ul, div, span, section, button, h1, h2, h3, h4, h5{
                font-family: 'Poppins', sans-serif;
                font-size: 14px;
                font-weight: 400px;
            }

            .navbar-brand {
                font-family: 'Style Script', cursive;
                font-size: 30px;
            }
            .category-btn:active, .category-btn:focus, .category-btn:hover {
                    background:#F7F7F7 !important; border-radius: 100px; box-shadow: none !important; color: #000 !important;
                }

                .category-btn {
                    border-radius: 100px;
                }
                .nav-link-upload {
                    color: #FFFFFF !important;
                }

                .grid {
                    columns: 4;
                    column-gap: 15px;
                }

                .grid-item {
                    margin-bottom: 15px;
                    break-inside: avoid;
                }

                .grid-item img {
                    width: 100%;
                    height: auto;
                    display: block;
                }
        </style>
    </head>
    <body>
   
		<!-- NAVIGATION -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-transparent">
            <div class="container">
              <a class="navbar-brand" href="#" style="color: #fff">Pixfi</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="#" style="color: #fff">Explore</a>
                  </li>
                  <li class="nav-item mx-2">
                    <a class="nav-link" href="#" style="color: #fff">Login</a>
                  </li>
                  <li class="nav-item mx-2">
                    <a class="nav-link" href="#" style="color: #fff">Join</a>
                  </li>
                  <li class="nav-item">
                    <button type="button" class="nav-link nav-link-upload border-0 btn px-3 ms-3" data-bs-toggle="modal" data-bs-target="#uploadModal" style="color: #fff; background: #14BC7D; border-radius: 50px">Upload</button>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
		<!-- /NAVIGATION -->

        {{-- Search Section --}}
        <div class="header" style="background-image: url('https://cdn.pixabay.com/photo/2018/01/24/19/49/people-3104635_960_720.jpg'); height: 68vh; background-position: center; background-repeat: no-repeat; background-size: cover; opacity: 1; background-color: rgba(0, 0, 0, 0.5);">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="spacer" style="height: 45vh"></div>
                        <form class="d-flex py-2 justify-content-center align-items-center" style="background: #FFFFFF; border-radius: 100px">
                            <button class="border-0" type="submit" style="background: #FFF; margin-top: 4px"><ion-icon name="search"></ion-icon></button>
                            <input type="text" class="form-control border-0" placeholder="Search" aria-label="Search" style="width: 70%; box-shadow: none;">
                            <select class="form-select btn btn-light category-btn border-0 me-2" aria-label="Category" style="width: 20%;">
                                <option selected>Category</option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                            </select>                     
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Search Section --}}
        <main>
            @yield('content')
        </main>
            
            
        <section style="border-top: 0.1rem solid #ddd; padding: 50px 0; margin-top: 40px; min-height: 50vh">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h3 style="font-size: 25px; font-weight:600">Pixfi</h3>
                        <p>Store software for only Sisters Fellowship International.</p>

                        <div class="d-flex">
                            <div style="margin-right: 10px; font-size: 35px"><ion-icon name="logo-facebook"></ion-icon></div>
                            <div style="margin-right: 10px; font-size: 35px"><ion-icon name="logo-youtube"></ion-icon></div>
                            <div style="margin-right: 10px; font-size: 35px"><ion-icon name="logo-linkedin"></ion-icon></div>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-md-4">
                                <h3 style="font-size: 14px; font-weight:600">Discover</h3>
                                <div>
                                    <div class="px-0 py-2"><a href="#" style="text-decoration: none; color: #000">Category</a></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <h3 style="font-size: 14px; font-weight:600">Community</h3>
                                <div>
                                    <div class="px-0 py-2"><a href="#" style="text-decoration: none; color: #000">Blog</a></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <h3 style="font-size: 14px; font-weight:600">About</h3>
                                <div>
                                    <div class="px-0 py-2"><a href="#" style="text-decoration: none; color: #000">About Us</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer style="background: #F7F7F7; padding: 20px">
            <p class="text-center text-black">This site is protected by reCAPTCHA and the Google Privacy Policy and Terms of Service apply.</p>
        </footer>

        <!-- Ionicons -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

        <!-- jQuery Plugins -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        {{-- Dropzone --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js" integrity="sha512-CWkSZewynvZfjKZCE9iee8WlGJnVn0f1cQRrQ6KPKU6ihG/l6N1Z6DF9U6bKTTsc0vTJw/0oUCPzKmz0o3OeOQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script>
            $(document).ready(function() {
                $(window).scroll(function() {
                    var scroll = $(window).scrollTop();
                    if (scroll > 50) {
                        $("nav").removeClass("bg-transparent");
                        $("nav").addClass("bg-white");
                        $(".nav-link").css("color", "black");
                        $(".navbar-brand").css("color", "black");
                    } else {
                        $("nav").removeClass("bg-white");
                        $("nav").addClass("bg-transparent");
                        $(".nav-link").css("color", "white");
                        $(".navbar-brand").css("color", "white");
                    }
                });
            });
            </script>
    </body>
</html>
