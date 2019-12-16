<?php
include "includes/header.php";
?>
<!--    Shipping Addresses Section : START    -->
<section class="shipping_addresses padding40">
    <div class="container">
        <div class="row justify-content-lg-center">
            <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12"> <!-- col   -->
                <div class="a_info_block main_modal Shipping_address_sec">
                     <div class="modal-title">
                          <h3> Edit your personal information  </h3>
                      </div>
                      <div class="row">
                          <div class="col-md-12 col-sm-12 col-xs-12">
                               <div class="form-group">
                                    <label for="input-text" class="control-label"> First Name <span> * </span></label>
                                    <input type="text" class="form-control" placeholder=" First name">
                                </div>
                          </div>
                          <div class="col-md-12 col-sm-12 col-xs-12">
                               <div class="form-group">
                                    <label for="input-text" class="control-label"> Last Name <span> * </span></label>
                                    <input type="text" class="form-control" placeholder=" Last name">
                                </div>
                          </div>
                          <div class="col-md-6 col-sm-12 col-xs-12">
                               <div class="select-country form-group main-check ">
                                   <label for="input-text" class="control-label"> City </label>
                                   <select>
                                        <option value=""> Cairo </option>
                                        <option>  United Arab Emirates </option>
                                        <option>  Egypt </option>
                                        <option> Saudi Arabia </option>
                                        <option>  kuwait </option>
                                    </select>
                                </div>
                          </div>
                          <div class="col-md-6 col-sm-12 col-xs-12">
                               <div class="select-country form-group main-check ">
                                   <label for="input-text" class="control-label"> Area </label>
                                   <select>
                                        <option value=""> Cairo </option>
                                        <option>  United Arab Emirates </option>
                                        <option>  Egypt </option>
                                        <option> Saudi Arabia </option>
                                        <option>  kuwait </option>
                                    </select>
                                </div>
                          </div>
                          <div class="col-md-12 col-sm-12 col-xs-12">
                               <div class="form-group">
                                    <label for="input-text" class="control-label"> Street Name/No. <span> * </span></label>
                                    <input type="text" class="form-control" placeholder=" ">
                                </div>
                          </div>
                          <div class="col-md-12 col-sm-12 col-xs-12">
                               <div class="form-group">
                                    <label for="input-text" class="control-label"> Building Name/No.<span> * </span></label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                          </div>
                          <div class="col-md-6 col-sm-12 col-xs-12">
                               <div class="form-group">
                                    <label for="input-text" class="control-label"> Floor No. </label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                          </div>
                          <div class="col-md-6 col-sm-12 col-xs-12">
                               <div class="form-group">
                                    <label for="input-text" class="control-label">  Apartment No.  </label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                          </div>
                          <div class="col-md-12 col-sm-12 col-xs-12">
                               <div class="select-country form-group main-check ">
                                   <label for="input-text" class="control-label"> Location Type <span> * </span></label>
                                   <select>
                                        <option value=""> -- select -- </option>
                                        <option>  Home </option>
                                        <option>  Business </option>
                                    </select>
                                </div>
                          </div>
                          <div class="col-md-6 col-sm-12 col-xs-12">
                               <div class="form-group ">
                                    <label for="input-text" class="control-label"> Mobile <span> * </span></label>
                                    <div class="input-phone"></div>
                                    <span class="f-phone-g">  Phone number verified! </span>
                                </div>
                          </div>
                          <div class="col-md-6 col-sm-12 col-xs-12">
                                 <div class="form-group">
                                    <label for="input-text" class="control-label"> Landline <span> * </span></label>
                                    <div class="input-phone"></div>
                                </div>
                          </div>
                          <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
                                 <div class="form-group">
                                     <div class="main-check">
                                        <div class="form-check">
                                            <label>
                                                <input type="checkbox" name="check"> 
                                                    <p class="label-text delivery_schedul_p"> 
                                                    Don't call for delivery schedule, deliver right away. 
                                                    </p>
                                                    <span class="d_s_span"> (Applicable for online payments only) </span>
                                            </label>
                                        </div>
                                     </div>
                                </div>
                          </div>
                          <div class="col-md-12 col-sm-12 col-xs-12">
                                 <div class="form-group">
                                    <label for="input-text" class="control-label"> Shipping Note </label>
                                     <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                          </div>
                      </div><!-- //  Shipping address sec row   -->
                      <div class="modal-buttons buttons_style ">
                        <button type="button" class="btn save_btn ">Save </button>
                        <button type="button" class="btn close_btn" data-dismiss="modal">Close</button>
                      </div>
                </div>
            </div> <!-- // col   -->
        </div> <!-- // row   -->
    </div> <!-- // container   -->
</section> <!-- // Section   -->
<!--    Shipping Addresses Section : START    -->


<?php
include "includes/footer.php";
?>