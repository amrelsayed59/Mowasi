<?php
include "includes/header.php";
?>

<!--  Account Section : START    -->
<section class=" accountSection padding60">
    <div class="container">
        <div class="row ">
            <div class="accountPage_title">
                <h3> Account Settings  </h3>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> <!-- col   -->
                <div class="m_block_style a_info_block"><!-- block 1   -->
                    <div class="row">
                        <div class="col-lg-10 col-md-9 col-sm-12 col-xs-12">
                            <div class="accountBlock">
                                <div class="accountBlockTitle">
                                    <h3>Account Information</h3>
                                </div>
                                <div class="account_all_info">
                                    <ul>
                                        <li>
                                            <p><span> Email: </span> adam_mahmoud@gmail.com  </p> 
                                        </li>
                                        <li>
                                            <p><span> Password: </span> ********  </p> 
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-12 col-xs-12">
                            <div class="edit-btn">
                                <button class="btn" type="button" data-toggle="modal" data-target="#account_information"> Edit </button>
                            </div>
                        </div>
                    </div>
                </div><!--// block 1   -->

                <div class="m_block_style a_info_block"><!-- block 2   -->
                    <div class="row">
                        <div class="col-lg-10 col-md-9 col-sm-12 col-xs-12">
                            <div class="accountBlock">
                                <div class="accountBlockTitle">
                                    <h3> Personal Information </h3>
                                </div>
                                <div class="account_all_info">
                                    <ul>
                                        <li>
                                            <p><span> Name: </span> Adam Mahmoud  </p> 
                                        </li>
                                        <li>
                                            <p><span> User Name: </span> Adam Mahmoud  </p> 
                                        </li>
                                        <li>
                                            <p><span> Gender: </span> Male  </p> 
                                        </li>
                                        <li>
                                            <p><span> Birthdate: </span> 20-5-1993  </p> 
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-12 col-xs-12">
                            <div class="edit-btn">
                                <button class="btn" type="button" data-toggle="modal" data-target="#personal_information"> Edit </button>
                            </div>
                        </div>
                    </div>
                </div><!--// block 2   -->

                <div class="m_block_style a_info_block"><!-- block 3   -->
                    <div class="row">
                        <div class="col-lg-10 col-md-9 col-sm-12 col-xs-12">
                            <div class="accountBlock">
                                <div class="accountBlockTitle">
                                    <h3> Address Information </h3>
                                </div>
                                <div class="account_all_info address_info">
                                    <h4> Adam Mahmoud </h4>
                                    <ul>
                                        <li>
                                            <p> Nasr City </p> 
                                        </li>
                                        <li>
                                            <p> 10 </p> 
                                        </li>
                                        <li>
                                            <p> Cairo, Egypt </p> 
                                        </li>
                                        <li>
                                            <p> +20 10 90071233 </p> 
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-12 col-xs-12">
                            <div class="edit-btn">
                               <a href="account_shipping_addresses.php"> Edit </a>
                            </div>
                        </div>
                    </div>
                </div><!--// block 3   -->
                <div class="m_block_style a_info_block"><!-- block 4   -->
                    <div class="row">
                        <div class="col-lg-10 col-md-9 col-sm-12 col-xs-12">
                            <div class="accountBlock">
                                <div class="account_all_info address_info bank_account ">
                                    <h4> Bank Account information <span> (Sellers Account) </span> </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-12 col-xs-12">
                            <div class="edit-btn">
                                <button class="btn" type="button"> Edit </button>
                            </div>
                        </div>
                    </div>
                </div><!--// block 4   -->
                <div class="m_block_style a_info_block"><!-- block 5   -->
                    <div class="row">
                        <div class="col-lg-10 col-md-9 col-sm-12 col-xs-12">
                            <div class="accountBlock">
                                <div class="account_all_info address_info bank_account ">
                                    <h4> VAT registration </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-12 col-xs-12">
                            <div class="edit-btn">
                                <button class="btn" type="button"> Register </button>
                            </div>
                        </div>
                    </div>
                </div><!--// block 5   -->                
                <div class="m_block_style a_info_block"><!-- block 6   -->
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="accountBlock">
                                <div class="accountBlockTitle">
                                    <h3> Connecting with Facebook </h3>
                                </div>
                                <div class="account_all_info connect_with_fb">
                                    <div class="user_profile_img">
                                        <img src="img/profile_img.png" class="img-responsive" alt=""/>  
                                    </div>
                                    <div class="connect_with_fb_info">
                                        <p> Your <span> Mowasi.com  </span> account is connected with facebook. </p>
                                        <div class="fb_sharing">
                                            <p>  Facebook Sharing: </p>
                                            <form class="main-check form-group">
                                                <ul> 
                                                    <li class="list-inline-item">
                                                        <div class="form-check">
                                                            <label>
                                                                <input type="checkbox" name="check"> 
                                                                <p class="label-text"> On </p>
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <div class="form-check">
                                                            <label>
                                                                <input type="checkbox" name="check"> 
                                                                <p class="label-text"> Off </p>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--// block 6   -->
            </div>
        </div> <!-- // row   -->
    </div> <!-- // container   -->
</section> <!-- // Section   -->
<!--    Account Section : END    -->


<!-- Account Information Modal -->
<div class="main_modal">
    <div class="modal fade" id="account_information" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-title">
              <h3> Edit your account info  </h3>
          </div>
          <div class="modal-body">
               <div class="form-group">
                    <label for="input-text" class="control-label"> Email <span> * </span></label>
                    <input type="text" class="form-control" placeholder=" adam_mahmoud@gmail.com">
                </div>
               <div class="form-group">
                    <label for="input-text" class="control-label"> Old password <span> * </span></label>
                    <input type="text" class="form-control" placeholder="Old password">
                </div>
               <div class="form-group">
                    <label for="input-text" class="control-label"> New password <span> * </span></label>
                    <input type="text" class="form-control" placeholder="New password">
                </div>
               <div class="form-group">
                    <label for="input-text" class="control-label"> Re-type new password <span> * </span></label>
                    <input type="text" class="form-control" placeholder="Re-type new password">
                </div>
          </div>
          <div class="modal-buttons buttons_style ">
            <button type="button" class="btn save_btn ">Save </button>
            <button type="button" class="btn close_btn" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
</div>

<!-- Account Information Modal -->
<div class="main_modal">
    <div class="modal fade" id="account_information" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-title">
              <h3> Edit your account info  </h3>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="input-text" class="control-label"> Email <span> * </span></label>
                            <input type="text" class="form-control" placeholder=" adam_mahmoud@gmail.com">
                        </div>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="input-text" class="control-label"> Old password <span> * </span></label>
                            <input type="text" class="form-control" placeholder="Old password">
                        </div>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="input-text" class="control-label"> New password <span> * </span></label>
                            <input type="text" class="form-control" placeholder="New password">
                        </div>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="input-text" class="control-label"> Re-type new password <span> * </span></label>
                            <input type="text" class="form-control" placeholder="Re-type new password">
                        </div>
                  </div>
              </div>
          </div>
          <div class="modal-buttons buttons_style ">
            <button type="button" class="btn save_btn ">Save </button>
            <button type="button" class="btn close_btn" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
</div>

<!-- Personal Information Modal -->
<div class="main_modal">
    <div class="modal fade" id="personal_information" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-title">
              <h3> Edit your personal information  </h3>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-md-6 col-sm-12 col-xs-12">
                       <div class="form-group">
                            <label for="input-text" class="control-label"> First Name <span> * </span></label>
                            <input type="text" class="form-control" placeholder=" First name">
                        </div>
                  </div>
                  <div class="col-md-6 col-sm-12 col-xs-12">
                       <div class="form-group">
                            <label for="input-text" class="control-label"> Last Name <span> * </span></label>
                            <input type="text" class="form-control" placeholder=" Last name">
                        </div>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                       <div class="form-group">
                            <label for="input-text" class="control-label"> User Name <span> * </span> ( Your Store Name ) </label>
                            <input type="text" class="form-control" placeholder=" User Name">
                        </div>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <form class=" form-group">
                        <label for="input-text" class="control-label"> Gender </label>
                        <div class="main-check">
                            <div class="form-check ">
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
                        </div>

                    </form>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="select-country form-group main-check ">
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
                            <label for="input-text" class="control-label"> Birthdate </label>
                            <input type="text" class="form-control" placeholder=" dd / mm / yy ">
                        </div>
                  </div>
              </div>
          </div>
          <div class="modal-buttons buttons_style ">
            <button type="button" class="btn save_btn ">Save </button>
            <button type="button" class="btn close_btn" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
</div>

<?php
include "includes/footer.php";
?>