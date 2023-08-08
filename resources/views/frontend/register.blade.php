@extends('frontend.layout')
@section('content')    
    <div class="rbt-elements-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row gy-5 row--30">
                <div class="rbt-contact-form contact-form-style-1 max-width-auto">
                    <h3 class="title">Register</h3>
                    <form class="max-width-auto" action="{{url('register')}}"  method="POST">
                        @csrf
                        <div class="form-group">
                            <input name="email" type="text" />
                            <label>Email *</label>
                            <span class="focus-border"></span>
                        </div>

                        <div class="form-group">
                            <input name="name" type="text">
                            <label>Full Name *</label>
                            <span class="focus-border"></span>
                        </div>

                        <div class="form-group">
                            <span>
                                <input name="password" type="password" id="password">
                                <i class="feather-eye-off" onclick="toggle_password()" id="togglePassword" style="cursor: pointer;margin-left: -30px"></i>
                            </span>
                            <label>Password *</label>                            
                            <span class="focus-border"></span>
                        </div>

                        <div class="form-group">
                            <input name="pin" type="text">
                            <label>PIN *</label>
                            <span class="focus-border"></span>
                        </div>

                        <div class="form-group">
                            <input name="city" type="text">
                            <label>City *</label>
                            <span class="focus-border"></span>
                        </div>

                        <div class="form-group">
                            <input name="state" type="text">
                            <label>State *</label>
                            <span class="focus-border"></span>
                        </div>

                        <div class="form-group">
                            <input name="institute" type="text">
                            <label>Institute/Place of work *</label>
                            <span class="focus-border"></span>
                        </div>

                        <div class="form-submit-group">
                            <button type="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse w-100">
                                <span class="icon-reverse-wrapper">
                                    <span class="btn-text">Register</span>
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
            togglePassword.classList.toggle("feather-eye");
        }
    </script>    
@endsection