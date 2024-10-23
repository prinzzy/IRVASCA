<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="login-email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="login-email" name="email" required autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="login-password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="login-password" name="password" required>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                        <label class="form-check-label" for="remember">Remember Me</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>

                <div class="mt-3">
                    <a href="{{ route('password.request') }}">Forgot Your Password?</a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- User Account Modal -->
<div class="modal fade" id="userAccountModal" tabindex="-1" aria-labelledby="userAccountModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="userAccountModalLabel">User Account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if(Auth::check())
                <!-- User is logged in, display user info and logout button -->
                <p>Hello, {{ Auth::user()->name }}!</p>
                <div class="mb-3">
                    <label for="user-email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="user-email" value="{{ Auth::user()->email }}" readonly>
                </div>
                <div class="d-grid gap-2 mt-3">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">Log Out</button>
                    </form>
                </div>
                @else
                <!-- User is not logged in, display login and register options -->
                <p>Manage your account, or login/register:</p>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
                    <button class="btn btn-secondary" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#registerModal">Register</button>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>



<!-- Register Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerModalLabel">Register</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="registerForm" method="POST">
                    @csrf
                    <div id="error-message" class="alert alert-danger d-none"></div>

                    <div class="mb-3">
                        <label for="register-name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="register-name" name="name" required>
                    </div>

                    <div class="mb-3">
                        <label for="register-email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="register-email" name="email" required>
                    </div>

                    <div class="mb-3">
                        <label for="register-password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="register-password" name="password" required>
                    </div>

                    <div class="mb-3">
                        <label for="register-password-confirmation" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="register-password-confirmation" name="password_confirmation" required>
                    </div>

                    <div class="mb-3">
                        <label for="register-otp" class="form-label">OTP</label>
                        <input type="text" class="form-control" id="register-otp" name="otp" required>
                        <button type="button" class="btn btn-link" id="requestOtpBtn">Request OTP</button>
                        <button type="button" class="btn btn-link" id="resendOtpBtn" style="display:none;">Resend OTP</button>
                    </div>

                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>