<div class="modal fade" id="login">
    <div class="modal-dialog">
        <!-- modal content -->
        <div class="modal-content">
            <!-- modal body -->
            <div class="modal-body">
                <!-- close modal button -->
                <button type="button" class="close" data-dismiss="modal">&times;</button>

                <!-- container one -->
                <div class="form-container active" id="login_form">
                    <!-- title -->
                    <h3 class="font-weight-bold text-center mb-3 mt-5">Login</h3>
                    
                    <!-- form -->
                    <form class="mb-4">
                        <p class="text-danger text-center" id="login_error"></p>

                        <!-- email div -->
                        <div class="form-group mb-4">
                            <input type="email" class="form-control" placeholder="Email" id="login_email">
                        </div>
                    
                        <!-- password div -->
                        <div class="form-group mb-5">
                            <input type="password" class="form-control" placeholder="Password" id="login_pass">
                            <!-- forgot password link -->
                            <a href="#" class="text-primary">Forgot Password?</a>
                        </div>
                    
                        <!-- submit button -->
                        <div class="mb-4">
                            <button type="button" id="log_btn" class="btn btn-primary w-100 py-3">Login</button>
                        </div>
                    
                        <!-- text -->
                        <small class="text-muted">Do not have an account yet? </small><a href="javascript:void(0)" id="register_btn">Create an account now!</a>
                    </form>
                </div>


                <!-- container two -->
                <div class="form-container" id="register_form">
                    <!-- title -->
                    <h3 class="font-weight-bold text-center mb-3 mt-5">Create Account</h3>
                    
                    <!-- form -->
                    <form class="mb-4">
                        <p class="text-danger text-center" id="reg_error"></p>
                        <!-- email div -->
                        <div class="form-group mb-4">
                            <input type="email" class="form-control" placeholder="Email" id="reg_email">
                        </div>
                    
                        <!-- password div -->
                        <div class="form-group mb-4">
                            <input type="password" class="form-control" placeholder="Password" id="reg_pass">
                        </div>

                        <!-- confirm password div -->
                        <div class="form-group mb-5">
                            <input type="password" class="form-control" placeholder="Confirm Password" id="reg_confirm">
                        </div>
                    
                        <!-- submit button -->
                        <div class="mb-4">
                            <button type="button" id="reg_btn" class="btn btn-primary w-100 py-3">Register</button>
                        </div>
                    
                        <!-- text -->
                        <small class="text-muted">Already have an account? </small><a href="javascript:void(0)" id="login_btn">Login!</a>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>