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
  
        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/bootstrap-icons.min.css">
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.0/dropzone.min.css">
        
        <!-- Bootstrap 5.0.2 JS CDN -->
        <!-- JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.min.js"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.2/dist/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.0/dropzone.js"></script>
        
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

                .nav-item .dropdown-toggle::after {
                    display: none;
                }
        </style>
    </head>
    <body>
		<!-- NAVIGATION -->
        <nav class="navbar navbar-expand-sm navbar-light fixed-top bg-transparent">
            <div class="container">
              <a class="navbar-brand" href="/" style="color: #fff">Pixfi</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item mt-1">
                    <a class="nav-link" href="#" style="color: #fff">Explore</a>
                  </li>
                  @guest
                        <li class="nav-item mt-1 mx-2">
                            <a class="nav-link" href="{{ route('login') }}" style="color: #fff">Login</a>
                        </li>
                        <li class="nav-item mt-1 mx-2">
                            <a class="nav-link" href="{{ route('register') }}" style="color: #fff">Join</a>
                        </li>

                      @else
                    <li class="nav-item mx-1 dropdown">
                        <a class="nav-link dropdown-toggle dropdown-toggle-no-caret" href="#" style="color: #fff; font-size: 25px" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <ion-icon name="person-circle"></ion-icon>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="">{{ Auth::user()->name }}</a></li>
                            <li><a class="dropdown-item" href="mailto:sunnyict001@gmail.com">Feedback</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <!-- Authentication -->
                          <form method="POST" action="{{ route('logout') }}">
                              @csrf
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                      this.closest('form').submit();">
                              <i class="bx bx-power-off me-2"></i>
                              <span class="align-middle">Log Out</span>
                            </a>
                          </form>
                          </li>
                        </ul>
                    </li>
                      <li class="nav-item">
                        <button type="button" class="nav-link nav-link-upload border-0 btn px-3 ms-3 mt-1" style="color: #fff; background: #14BC7D; border-radius: 50px; box-shadow: none;" data-bs-toggle="modal" data-bs-target="#exampleModal"><ion-icon name="cloud-upload-outline"></ion-icon> Upload</button>
                      </li>
                  @endguest
                  
                  
                </ul>
              </div>
            </div>
        </nav>
		<!-- /NAVIGATION -->

        {{-- Search Section --}}
        <div class="header" style="background-image: url('https://cdn.pixabay.com/photo/2018/01/24/19/49/people-3104635_960_720.jpg'); height: 68vh; background-position: center; background-repeat: no-repeat; background-size: cover; opacity: 1; background-color: rgba(0, 0, 0, 0.5);">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2 hide-from-others">
                        <div class="spacer" style="height: 45vh"></div>
                        <form class="d-flex py-2 justify-content-center align-items-center" style="background: #FFFFFF; border-radius: 100px">
                            <button class="border-0" type="submit" style="background: #FFF; margin-top: 4px"><ion-icon name="search"></ion-icon></button>
                            <input type="text" class="form-control border-0" placeholder="Search" aria-label="Search" style="width: 70%; box-shadow: none;">
                            <select class="form-select btn btn-light category-btn border-0 me-2" aria-label="Category" style="width: 20%;">
                                <option value="music" selected>Music</option>
                                <option value="video">Videos</option>
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
                        <h3 class="navbar-brand" style="font-size: 25px; font-weight:600">Pixfi</h3>
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

        {{-- Modal section --}}
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Publish a post</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="title">Title.</label>
                            <input type="text" class="form-control rounded-0" name="title" value="{{ old('title') }}" placeholder="Give this post a title.">
                        </div>

                        <div class="form-group">
                            <label for="description">Description your post.</label>
                            <textarea class="form-control rounded-0" name="description" id="description" placeholder="Kindly make you tags and or descriptions." cols="10" rows="5">{{ old('description') }}</textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary rounded-0" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary rounded-0">Proceed</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
        {{-- End section --}}

        <footer style="background: #F7F7F7; padding: 20px">
            <p class="text-center text-black">This site is protected by reCAPTCHA and the Google Privacy Policy and Terms of Service apply.</p>
        </footer>

        <!-- Ionicons -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

        <script type="text/javascript">
            Dropzone.options.dropzone =
            {
                maxFilesize: 12,
                renameFile: function(file) {
                    var dt = new Date();
                    var time = dt.getTime();
                    return time+file.name;
                },
                acceptedFiles: ".jpeg,.jpg,.png,.gif",
                addRemoveLinks: true,
                timeout: 5000,
                success: function(file, response) {
                    console.log(response);
                },
                error: function(file, response){
                    return false;
                }
            };
        </script>       

        <script>
            $(document).ready(function() {
                $(window).scroll(function() {
                    var scroll = $(window).scrollTop();
                    if (scroll > 50) {
                        $("nav").removeClass("bg-transparent");
                        $("nav").addClass("bg-white");
                        $("nav").addClass("shadow-sm");
                        $(".nav-link").css("color", "black");
                        $(".navbar-brand").css("color", "black");
                    } else {
                        $("nav").removeClass("bg-white");
                        $("nav").removeClass("shadow-sm");
                        $("nav").addClass("bg-transparent");
                        $(".nav-link").css("color", "white");
                        $(".navbar-brand").css("color", "white");
                    }
                });
            });
        </script>

</body>
</html>
