<?php
include "includes/header.php";
?>
<!--  Sell With Us Steps : Start -->
<section class="s_w_u_Steps padding40">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="top_steps">
                    <ul> 
                        <li class="list-inline-item">
                            <div class="t_step">
                                <a href="sell_with_us_steps.php">
                                    <div class="t_step_icon done">
                                        <i class="fas fa-check icon_done"></i>
                                        <i class="fas fa-pencil-alt icon_edit"></i>
                                    </div>
                                </a>
                                <h3> Contact Information </h3>
                            </div>   
                        </li>
                        <li class="list-inline-item">
                            <div class="t_step">
                                <a href="sell_with_us_account_verification.php">
                                    <div class="t_step_icon active">
                                        <i class="fas fa-check icon_done"></i>
                                        <i class="fas fa-pencil-alt icon_edit"></i>
                                    </div>
                                </a>
                                <h3> Account Verification </h3>
                            </div>   
                        </li>
                        <li class="list-inline-item">
                            <div class="t_step">
                                <a href="sell_with_us_bank_information.php">
                                    <div class="t_step_icon">
                                        <i class="fas fa-check icon_done"></i>
                                        <i class="fas fa-pencil-alt icon_edit"></i>
                                    </div>
                                </a>
                                <h3> Bank Information </h3>
                            </div>   
                        </li>
                        <li class="list-inline-item">
                            <div class="t_step">
                                <a href="sell_with_us_store_name.php">
                                    <div class="t_step_icon">
                                        <i class="fas fa-check icon_done"></i>
                                        <i class="fas fa-pencil-alt icon_edit"></i>
                                    </div>
                                </a>
                                <h3> Store Name </h3>
                            </div>   
                        </li>
                        <li class="list-inline-item">
                            <div class="t_step">
                                <a href="sell_with_us_registration_overview.php">
                                    <div class="t_step_icon">
                                        <i class="fas fa-check icon_done"></i>
                                        <i class="fas fa-pencil-alt icon_edit"></i>
                                    </div>
                                </a>
                                <h3> Registration Overview </h3>
                            </div>   
                        </li>
                    </ul>
                </div>
            </div>
        </div> <!-- // row   -->
    </div> <!-- // container   -->
</section> <!-- // Section   -->
<!--  Sell With Us Steps : End -->


<!--  Sell With Us - Account Verification : Start -->
<section class="s_w_u_all_pages a_v_page s_w_u_contact_info padding40">
    <div class="container">
        <div class="row"><!-- row ( 1 ) -->
            <div class="col-md-12">
                <div class="c_i_block_0">
                    <h3> Account Verification </h3>
                    <p> Please provide us with a relevant document in order for us to verify your account.  </p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="s_w_u_account_verification">
                    <div class="s_w_u_account_type">
                        <h3> 
                            Account type 
                            <span> This defines the choice of documents you can upload </span>
                        </h3>
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                          <label data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseTwo" class="collapsed">
                            <input type="checkbox" /> 
                              Individual Professional. 
                          </label>
                        </div>
                    </div>
                    <div id="collapseOne" aria-expanded="true" class="collapse in ">
                        <div class="well">
                            <div class="row">
                                <div class="col-md-4">
                                   <div class="select-country form-group main-check ">
                                       <select>
                                            <option value=""> National ID </option>
                                            <option>  National ID #1 </option>
                                            <option>  National ID #2 </option>
                                            <option>  National ID #3 </option>
                                            <option>  National ID #4 </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="box upload">
                                        <input type="file" name="" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" multiple />
                                        <label for="file-1"><span> Select front </span></label>
                                    </div>

                                    <div class="box upload">
                                        <input type="file" name="" id="file-2" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" multiple />
                                        <label for="file-2"><span> Select back </span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                              <div class="col-md-4 col-sm-12 col-xs-12">
                                   <div class="form-group document_00">
                                        <input type="text" class="form-control" placeholder=" Document ID">
                                       <span> Note: English, Arabic characters (a-z,A-Z), digits(0-9), - , spaces. </span>
                                    </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-4 col-sm-12 col-xs-12">
                                   <div class="form-group document_00">
                                        <input type="text" class="form-control" placeholder=" Expiry date">
                                       <span> Note: JPEG, PNG or PDF only and 2MB file size. </span>
                                    </div>
                              </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                          <label data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" class="collapsed">
                            <input type="checkbox" /> 
                              Business (Selling On Behalf of a Business Entity). 
                          </label>
                        </div>
                    </div>
                    <div id="collapseTwo" aria-expanded="true" class="collapse in ">
                        <div class="well">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="select-country_div">
                                       <div class="select-country form-group main-check ">
                                           <select>
                                                <option value=""> Company Registration </option>
                                                <option>  Company Registration #2 </option>
                                                <option>  Company Registration #3 </option>
                                                <option>  Company Registration #4 </option>
                                            </select>
                                        </div>
                                        <div class="box upload">
                                            <input type="file" name="" id="file-3" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" multiple />
                                            <label for="file-3"><span> Upload </span></label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="vat_number_block">
                                        <div class="form-group document_00">
                                           <label> Vat Number </label>
                                           <input type="text" class="form-control" placeholder=" Vat Number ">
                                        </div>
                                    </div> 
                                </div>
                                <div class="col-md-3">
                                    <div class="vat_number_block">
                                        <div class="box upload">
                                            <input type="file" name="" id="file-3" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" multiple />
                                            <label for="file-3"><span> Upload Certificate Image </span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="co_agreement">
                        <div class="main-check">
                            <div class="form-check">
                                <label>
                                    <input type="checkbox" name="check"> 
                                        <p class="label-text delivery_schedul_p"> I have read and accepted terms and conditions of the agreement.</p>
                                </label>
                            </div>
                         </div>
                    </div>
                </div>
             </div>
        </div> <!-- // row ( 1 )  -->
        <div class="row"><!-- row ( 2 ) -->
            <div class="col-md-12 col-xs-12">
                <div class="s_w_u_all_pages_buttons">
                    <div class="buttons_style s_w_u_buttons_style ">
                        <button type="button" class="btn save_btn "> Back </button>
                        <button type="button" class="btn close_btn save" data-dismiss="modal"> Save and continue </button>
                    </div>
                </div>
            </div>
        </div> <!-- // row ( 2 )  -->
    </div> <!-- // container   -->
</section> <!-- // Section   -->
<!--  Sell With Us - Account Verification : End -->


<?php
include "includes/footer.php";
?>