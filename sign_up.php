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
                        <h3> Sign Up </h3>
                        <a href="login.php"> Login </a>
                    </div>
                    <div class="register_via_fb">
                        <a href="#">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                            Sign Up With Facebook 
                        </a>
                    </div>
                    <div class="between-form">
                        <p> Or </p>
                    </div>
                    <div class="register_form">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="input-text" class="control-label"> Name</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
<!--
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="input-text" class="control-label">Last Name</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
-->
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="input-text" class="control-label">Email</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <form class="main-check form-group">
                                    <div class="form-check">
                                        <label>
                                            <input type="checkbox" name="check"> 
                                            <p class="label-text"> Male </p>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label>
                                            <input type="checkbox" name="check"> 
                                            <p class="label-text"> Female </p>
                                        </label>
                                    </div>
                                </form>
                            </div>
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="select-country form-group ">
                                   <label for="input-text" class="control-label"> Country of Residence </label>
                                   <select>
                                        <option value="">Country</option>
                                        <option>  United Arab Emirates </option>
                                        <option>  Egypt </option>
                                        <option> Saudi Arabia </option>
                                        <option>  kuwait </option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="input-text" class="control-label"> Password </label>
                                    <input type="Password" class="form-control" placeholder="">
                                </div>
                            </div>    
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="input-text" class="control-label"> Confirm Password </label>
                                    <input type="Password" class="form-control" placeholder="">
                                </div>
                            </div>
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="p-form">
                                    <p> By clicking the 'Sign Up' button, you confirm that you accept our <a href="terms_and_conditions.php"> Terms of use </a> and <a href="privacy_policy.php"> Privacy Policy </a>. </p>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="main-btn">
                                    <button class="btn" type="button"> Sign Up </button>
                                </div>
                            </div>
                            <div class="h-account">
                                <p>Have an account? <a href="login.php"> LogIn </a> </p>
                            </div>
                        </div>
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