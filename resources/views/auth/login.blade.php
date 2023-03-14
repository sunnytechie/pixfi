<x-guest-layout>
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
          <div class="authentication-inner">
            <!-- Register -->
            <div class="row">
                <div class="col-md-4 offset-md-4 mt-5">
                    <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        {{-- <div class="app-brand justify-content-center mb-2">
                        <a href="{{ route('login') }}" class="app-brand-link gap-2">
                            
                            <span class="app-brand-logo demo">
                            <img width="50" height="50" src="{{ asset('assets/img/sfghb.png') }}" alt="SFGHB">
                            </span> 
                        </a>
                        </div> --}}
                        <!-- /Logo -->
                        
                        <h2 class="mb-4 mt-3 text-left" style="font-size: 30px">Hi there.</h2>
        
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />
                        
        
                        <form id="formAuthentication" class="mb-3" action="{{ route('login') }}" method="POST">
                            @csrf
        
                            <div class="form-password-toggle">
                                <div class="d-flex justify-content-between">
                                <label class="form-label" for="password">Email</label>
                                <a href="{{ route('register') }}">
                                    <small>Don't Have an Account?</small>
                                </a>
                            </div>
                        <div class="mb-3">
                            
                            <input
                            type="email"
                            class="form-control @error('email') is-invalid @enderror"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="Enter your email or username"
                            autofocus
                            
                            />
                            <span>
                            @error('email')
                                    <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                            </span>
                        </div>
        
        
                        <div class="form-password-toggle">
                            <div class="d-flex justify-content-between">
                            <label class="form-label" for="password">Password</label>
                            <a href="{{ route('password.request') }}">
                                <small>Forgot Password?</small>
                            </a>
                        </div>
        
                            <div class="input-group input-group-merge">
                            <input
                                type="password"
                                id="password"
                                class="form-control @error('password') is-invalid @enderror"
                                name="password"
                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                aria-describedby="password"
                            />
                            <span id="show-password-btn" class="input-group-text cursor-pointer" style="cursor: pointer">
                                Reveal
                            </span>
                            </div>
                            
                            <span>
                            @error('password')
                                    <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                            </span>
                        </div>
        
        
                        <div class="my-3">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="remember-me" name="remember" />
                            <label class="form-check-label" for="remember-me"> Remember Me </label>
                            </div>
                        </div>
        
        
                        <div class="mb-4 d-flex justify-content-end">
                            <button class="btn btn-success rounded-0 d-grid w-50" type="submit">Sign in</button>
                        </div>
        
                        {{-- <div class="mb-3">
                            <a href="{{ route('redirectToGoogle') }}" class="btn btn-default p-2 shadow w-100" type="button" style="background: #ffffff">
                                <span><i class='bx bxl-google'></i></span> <span>Sign in with Google</span>
                            </a>
                        </div> --}}
                        </form>
        
                        {{-- <p class="text-center">
                        <span>New on our platform?</span>
                        <a href="#">
                            <span>Create an account</span>
                        </a>
                        </p> --}}
                    </div>
                    </div>
                </div>
            </div>
            <!-- /Register -->
          </div>
        </div>
      </div>
  </x-guest-layout>