@extends('frontend.dashboard.layout')
@section('dashboardContent')
    <!-- Start Instructor Setting  -->
    <?php $avatar = App\Http\Controllers\UserController::get_meta(Auth::id(), 'avatar');
    $cover_photo = App\Http\Controllers\UserController::get_meta(Auth::id(), 'cover_photo');
    ?>
    <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
        <div class="content">

            <div class="section-title">
                <h4 class="rbt-title-style-3">Settings</h4>
            </div>

            <div class="advance-tab-button mb--30">
                <ul class="nav nav-tabs tab-button-style-2 justify-content-start" id="settinsTab-4" role="tablist">
                    <li role="presentation">
                        <a href="#" class="tab-button active" id="profile-tab" data-bs-toggle="tab"
                            data-bs-target="#profile" role="tab" aria-controls="profile" aria-selected="true">
                            <span class="title">Profile</span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#" class="tab-button" id="password-tab" data-bs-toggle="tab"
                            data-bs-target="#password" role="tab" aria-controls="password" aria-selected="false">
                            <span class="title">Password</span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#" class="tab-button" id="social-tab" data-bs-toggle="tab" data-bs-target="#social"
                            role="tab" aria-controls="social" aria-selected="false">
                            <span class="title">Social Share</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="tab-content">
                <div class="tab-pane fade active show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="rbt-dashboard-content-wrapper">
                        <div class="tutor-bg-photo bg_image bg_image--23 height-245"
                            style="{{ $cover_photo ? 'background-image:url(' . $cover_photo . ')' : '' }}"></div>
                        <!-- Start Tutor Information  -->
                        <div class="rbt-tutor-information">
                            <div class="rbt-tutor-information-left">
                                <div class="thumbnail rbt-avatars size-lg position-relative">
                                    @if ($avatar)
                                        <img src="{{ url('avatar/' . $avatar) }}" alt="Instructor">
                                    @else
                                        <img src="{{ url('https://cdn-icons-png.flaticon.com/512/6596/6596121.png') }}"
                                            alt="Instructor">
                                    @endif
                                    <div class="rbt-edit-photo-inner">
                                        <button class="rbt-edit-photo" title="Upload Photo">
                                            <i class="feather-camera"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="rbt-tutor-information-right">
                                <div class="tutor-btn">
                                    <a class="rbt-btn btn-sm btn-border color-white radius-round-10" href="#">Edit
                                        Cover Photo</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Tutor Information  -->
                    </div>
                    <!-- Start Profile Row  -->
                    <form action="{{ url('update-profile') }}" method="POST"
                        class="rbt-profile-row rbt-default-form row row--15">
                        @csrf
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="rbt-form-group">
                                <label for="firstname">Name</label>
                                <input id="firstname" name="name" type="text" value="{{ $user->name }}">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="rbt-form-group">
                                <label for="pin">PIN</label>
                                <input id="pin" name="pin" type="number"
                                    value="{{ App\Http\Controllers\UserController::get_meta(Auth::id(), 'pin') }}">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="rbt-form-group">
                                <label for="city">City</label>
                                <input id="city" name="city" type="text"
                                    value="{{ App\Http\Controllers\UserController::get_meta(Auth::id(), 'city') }}">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="rbt-form-group">
                                <label for="state">State</label>
                                <input id="state" name="state" type="text"
                                    value="{{ App\Http\Controllers\UserController::get_meta(Auth::id(), 'state') }}">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="rbt-form-group">
                                <label for="institute">Institute</label>
                                <input id="institute" name="institute" type="text"
                                    value="{{ App\Http\Controllers\UserController::get_meta(Auth::id(), 'institute') }}">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="rbt-form-group">
                                <label for="bio">Bio</label>
                                <textarea id="bio" name="bio" cols="20" rows="5">{{ $user->bio }}</textarea>
                            </div>
                        </div>
                        <div class="col-12 mt--20">
                            <div class="rbt-form-group">
                                <button type="submit" class="rbt-btn btn-gradient" href="#">Update Info</button>
                            </div>
                        </div>
                    </form>
                    <!-- End Profile Row  -->
                </div>

                <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
                    <!-- Start Profile Row  -->
                    <form action="{{ url('update-password') }}" method="POST"
                        class="rbt-profile-row rbt-default-form row row--15">
                        @csrf
                        <div class="col-12">
                            <div class="rbt-form-group">
                                <label for="currentpassword">Current Password</label>
                                <input id="currentpassword" name="currentpassword" type="password"
                                    placeholder="Current Password">
                                <i class="feather-eye-off" onclick="toggle_password('currentpassword')"
                                    id="togglePassword" style="cursor: pointer;margin-left: -30px"></i>
                                @error('currentpassword')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="rbt-form-group">
                                <label for="newpassword">New Password</label>
                                <input id="newpassword" name="newpassword" type="password" placeholder="New Password">
                                <i class="feather-eye-off" onclick="toggle_password('newpassword')" id="togglePassword"
                                    style="cursor: pointer;margin-left: -30px"></i>
                                @error('newpassword')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="rbt-form-group">
                                <label for="retypenewpassword">Re-type New Password</label>
                                <input id="retypenewpassword" type="password" name="retypenewpassword"
                                    placeholder="Re-type New Password">
                                <i class="feather-eye-off" onclick="toggle_password('retypenewpassword')"
                                    id="togglePassword" style="cursor: pointer;margin-left: -30px"></i>
                                @error('retypenewpassword')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 mt--10">
                            <div class="rbt-form-group">
                                <button type="submit" class="rbt-btn btn-gradient" href="#">Update
                                    Password</button>
                            </div>
                        </div>
                    </form>
                    <!-- End Profile Row  -->
                </div>

                <div class="tab-pane fade" id="social" role="tabpanel" aria-labelledby="social-tab">
                    <!-- Start Profile Row  -->
                    <form action="{{ url('update-social') }}" method="POST"
                        class="rbt-profile-row rbt-default-form row row--15">
                        @csrf
                        <div class="col-12">
                            <div class="rbt-form-group">
                                <label for="facebook"><i class="feather-facebook"></i> Facebook</label>
                                <input id="facebook" name="facebook" type="text" placeholder="https://facebook.com/"
                                    value="{{ App\Http\Controllers\UserController::get_meta(Auth::id(), 'facebook') }}">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="rbt-form-group">
                                <label for="twitter"><i class="feather-twitter"></i> Twitter</label>
                                <input id="twitter" name="twitter" type="text" placeholder="https://twitter.com/"
                                    value="{{ App\Http\Controllers\UserController::get_meta(Auth::id(), 'twitter') }}">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="rbt-form-group">
                                <label for="linkedin"><i class="feather-linkedin"></i> Linkedin</label>
                                <input id="linkedin" name="linkedin" type="text" placeholder="https://linkedin.com/"
                                    value="{{ App\Http\Controllers\UserController::get_meta(Auth::id(), 'linkedin') }}">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="rbt-form-group">
                                <label for="instagram"><i class="feather-instagram"></i> Instagram</label>
                                <input id="instagram" name="instagram" type="text"
                                    placeholder="https://instagram.com/"
                                    value="{{ App\Http\Controllers\UserController::get_meta(Auth::id(), 'instagram') }}">
                            </div>
                        </div>
                        <div class="col-12 mt--10">
                            <div class="rbt-form-group">
                                <button type="submit" class="rbt-btn btn-gradient" href="#">Update Social</button>
                            </div>
                        </div>
                    </form>
                    <!-- End Profile Row  -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Instructor Setting  -->
    <script>
        function toggle_password(id) {
            const togglePassword = document.querySelector("#" + id);
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
