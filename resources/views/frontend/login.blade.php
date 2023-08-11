@extends('frontend.layout')
@section('content')    
    <div class="rbt-elements-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row gy-5 row--30">
                <div class="rbt-contact-form contact-form-style-1 max-width-auto">
                    <h3 class="title">Login</h3>
                    <form class="max-width-auto" method="POST" action="{{url('login')}}">
                        @csrf
                        <div class="form-group">
                            <input name="email" type="email" />
                            <label>Email *</label>
                            <span class="focus-border"></span>
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <span>
                                <input name="password" type="password" id="password">
                                <i class="feather-eye-off" onclick="toggle_password()" id="togglePassword" style="cursor: pointer;margin-left: -30px"></i>
                            </span>
                            <label>Password *</label>
                            <span class="focus-border"></span>
                            @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row mb--30">
                            <div class="col-lg-6">
                                <div class="rbt-checkbox">
                                    <input type="checkbox" id="rememberme" name="remember_me">
                                    <label for="rememberme">Remember me</label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="rbt-lost-password text-end">
                                    <a class="rbt-btn-link" href="#">Lost your password?</a>
                                </div>
                            </div>
                        </div>

                        <div class="form-submit-group">
                            <button type="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse w-100">
                                <span class="icon-reverse-wrapper">
                                    <span class="btn-text">Log In</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>  
    <script>
        function toggle_password(){
            const togglePassword = document.querySelector("#togglePassword");
            const password = document.querySelector("#password");

            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            // toggle the icon
            togglePassword.classList.toggle("feather-eye-off");
            togglePassword.classList.toggle("feather-eye");
        }
    </script>  
@endsection