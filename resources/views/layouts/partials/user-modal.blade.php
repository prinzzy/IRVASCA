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

                    <button type="submit" class="btn btn-primary" style="background-color: #b3aa9b; border-color: #b3aa9b;">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Address Modal -->
<div class="modal fade" id="addressModal" tabindex="-1" aria-labelledby="addressModalLabel" aria-hidden="true">
    <div class="modal-dialog custom-modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addressModalLabel">Enter Address</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Address selection cards -->
                <div class="form-group">
                    <label>Select an Existing Address</label>
                    <div id="existingAddressCards" class="d-flex flex-wrap gap-2 mt-2">
                        <!-- Address cards will be populated here by JavaScript -->
                    </div>
                </div>

                <!-- New address form -->
                <form id="addressForm" style="display: none;">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="street">Street</label>
                        <input type="text" class="form-control" id="street" name="street" required>
                    </div>
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" class="form-control" id="city" name="city" required>
                    </div>
                    <div class="form-group">
                        <label for="state">State</label>
                        <input type="text" class="form-control" id="state" name="state" required>
                    </div>
                    <div class="form-group">
                        <label for="postal_code">Postal Code</label>
                        <input type="text" class="form-control" id="postal_code" name="postal_code" required>
                    </div>
                    <div class="form-group">
                        <label for="country">Country</label>
                        <input type="text" class="form-control" id="country" name="country" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" required>
                    </div>
                    <button type="button" id="addressSubmit" class="btn btn-primary mt-3" style="background-color: #b3aa9b; border-color: #b3aa9b;">Save Address</button>
                </form>

                <!-- Toggle button to add a new address -->
                <button type="button" id="addNewAddressButton" class="btn btn-link">add a new address</button>
                <button type="button" id="continueButton" class="btn btn-primary mt-3" style="display: none; background-color: #b3aa9b; border-color: #b3aa9b;">Continue</button>
            </div>
        </div>
    </div>
</div>






<!-- DELIVERY MODAL -->
<div class=" modal fade" id="deliveryMethodModal" tabindex="-1" role="dialog" aria-labelledby="deliveryMethodModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deliveryMethodModalLabel">Select Delivery Method</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="deliveryMethodForm">
                    <!-- Radio buttons for delivery methods -->
                    <button type="button" class="btn btn-primary" id="deliverySubmit" style="background-color: #b3aa9b; border-color: #b3aa9b;">Proceed to Payment</button>
                </form>
            </div>
        </div>
    </div>
</div>