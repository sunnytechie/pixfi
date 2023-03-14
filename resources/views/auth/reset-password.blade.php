<x-guest-layout>
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
          <div class="authentication-inner">
            <!-- Register Card -->
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center mb-2">
                            <a href="{{ route('login') }}" class="app-brand-link gap-2">
                                <span class="app-brand-logo demo">
                                    <img width="50" height="50" src="{{ asset('assets/img/sfghb.png') }}" alt="SFGHB">
                                </span> 
                            </a>
                        </div>
                        <!-- /Logo -->
                        <p class="mb-4 text-center">Reset your password</p>

                        <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />
        
                        <form id="formAuthentication" class="mb-3" action="{{ route('password.update') }}" method="POST">
                            @csrf

                            <!-- Password Reset Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <div class="form-password-toggle">
                        <div class="d-flex justify-content-between">
                        <label class="form-label" for="password">Email</label>
                        <a href="{{ route('login') }}">
                            <small>Login Instead.</small>
                        </a>
                    </div>
                        <div class="mb-3">
                            <x-text-input 
                            type="email" 
                            class="form-control shadow-none rounded-0" 
                            id="email" 
                            type="email" 
                            name="email" :value="old('email', $request->email)" 
                            required 
                            />
                        </div>

                        <div class="mb-3 form-password-toggle">
                            <label class="form-label" for="password">Password</label>
                            <div class="input-group input-group-merge">
                            <input
                                type="password"
                                id="password"
                                class="form-control @error('password') is-invalid @enderror"
                                value="{{ old('password') }}"
                                name="password"
                                placeholder="New Password"
                                aria-describedby="password"
                            />
                            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                            <span>
                            @error('password')
                                    <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                            </span>
                        </div>


                        <div class="mb-3 form-password-toggle">
                            <label class="form-label" for="password">Confirm Password</label>
                            <div class="input-group input-group-merge">
                            <input
                                type="password"
                                id="password"
                                class="form-control @error('password_confirmation') is-invalid @enderror"
                                name="password_confirmation" 
                                placeholder="Repeat Password"
                                aria-describedby="password"
                            />
                            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                            <span>
                            @error('password_confirmation')
                                    <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                            </span>
                        </div>
        
                        
                        <button type="submit" class="btn btn-success d-grid w-100">Reset Password</button>
                        </form>
        
                    
                    </div>
                    </div>
                </div>
            </div>
            <!-- Register Card -->
          </div>
        </div>
      </div>
</x-guest-layout>
