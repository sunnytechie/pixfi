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
        
        <!-- Bootstrap 5.0.2 JS CDN -->
        <!-- JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.min.js"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.2/dist/jquery.min.js"></script>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Style+Script&display=swap');

            body, p, li, a, ul, div, span, section, button, h1, h2, h3, h4, h5, input, form{
                font-family: 'Poppins', sans-serif;
                font-size: 14px;
                font-weight: 400px;
            }

            input {
                font-family: 'Poppins', sans-serif !important;
                border-radius: 0 !important;
                box-shadow: none !important;
                border: 2px solid #D1D5DB !important;
            }

            input:active, input:focus {
                border: 2px solid #6366F1 !important;
            }
        </style>
    </head>
    <body class="font-sans text-gray-900 antialiased">

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>

    <script>
        const passwordInput = document.getElementById("password");
        const showPasswordBtn = document.getElementById("show-password-btn");
        const showIcon = "Show";
        const hideIcon = "Hide";

        showPasswordBtn.addEventListener("click", function () {
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            showPasswordBtn.innerHTML = hideIcon;
        } else {
            passwordInput.type = "password";
            showPasswordBtn.innerHTML = showIcon;
        }
        });
      </script>
</html>
