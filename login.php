<?php
include "includes/header.php";
?>
<!--   Sign Up Section : START    -->
<section class="signUpSection padding40">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12"> <!-- col   -->
                <div class="register-block m_block_style">
                    <div class="logo-img">
                        <img src="img/main-logo.png"class="img-responsive" alt="logo"/>  
                    </div>
                    <div class="register-head">
                        <h3> Login </h3>
                        <a href="sign_up.php"> Sign Up </a>
                    </div>

                    <div class="register_form">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="input-text" class="control-label"> Email or Username </label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="input-text" class="control-label">Password</label>
                                    <input type="Password" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="forgot_remember">
                                    <div class="forgot_password">
                                        <div class="main-check">
                                            <div class="form-check">
                                                <label>
                                                    <input type="checkbox" name="check"> 
                                                        <p class="label-text delivery_schedul_p"> Forgot Password? </p>
                                                </label>
                                            </div>
                                         </div>
                                    </div>
                                    <div class="remember_me">
                                        <a href="#"> Remember Me [?] </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="main-btn">
                                    <button class="btn" type="button"> Login </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="between-form">
                        <p> Or </p>
                    </div>
                    <div class="register_via_fb">
                        <a href="#">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                            Login With Facebook 
                        </a>
                    </div>
                    <div class="h-account">
                        <p> Don’t have an account? <a href="sign_up.php"> Sign Up </a> </p>
                    </div>
                </div>
            </div> <!-- // col   -->
        </div> <!-- // row   -->
    </div> <!-- // container   -->
</section> <!-- // Section   -->
<!--   Sign Up Section : START    -->


<?php
include "includes/footer.php";
?>