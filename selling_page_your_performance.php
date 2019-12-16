<?php
include "includes/header.php";
?>
<!--    seller Page : START    -->
<section class="sellingPage padding40">
    <div class="container">
        <div class="main-titl-1">
          <h3>  My Mowasi Selling Overview  </h3>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="seller_page_left_side a_info_block">
                    <ul>
                        <li> <a href="selling_page.php"> Selling </a> </li>
                        <li> <a href="sold_page.php"> Sold  </a> </li>
                        <li> <a href="selling_page_your_performance.php" class="active"> Your Performance  </a> </li>
                        <li> <a href="selling_page_feedback.php"> My Feedback  </a> </li>
                    </ul>
                </div>
            </div> <!-- // col   -->
            <div class="col-md-9 col-sm-6 col-xs-12">
                <div class="seller_page_right_side a_info_block">
                    <div class="performance_section">
                        <h3> Your total to date. </h3>
                        <ul>
                            <li> 
                                <p><b> Transactions:</b> 25 </p>
                            </li>
                            <li> 
                                <p><b> Sales:  300 SAR </b></p>
                            </li>
                        </ul>                    
                    </div>
                </div>
            </div> <!-- // col   -->
        </div> <!-- // row   -->
    </div> <!-- // Container   -->
</section> <!-- // Section   -->
<!--    Saved Seller Section : END    -->


<!-- Calculate Modal Modal -->
<div class="main_modal calculate_modal">
    <div class="modal fade" id="calculate_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-title">
              <h3> Enter your shipping details  </h3>
              <p> Pack your item (but don't seal it) and tell us more about the package. Click Calculate shipping, and the Shipping Calculator will help you research shipping rates. </p>
          </div>
          <div class="modal-body">
              <h3> Package details </h3>
              <div class="package_data">
                  <h3> Weight </h3>
                  <ul>
                    <li class="list-inline-item"> 
                        <div class="package_data_02">
                            <div class="main-check">
                                <div class="form-check">
                                    <label>
                                        <input type="checkbox" name="check"> 
                                            <p class="label-text delivery_schedul_p"> 
                                                1kg : 20kg
                                            </p>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-inline-item"> 
                        <div class="package_data_02">
                            <div class="main-check">
                                <div class="form-check">
                                    <label>
                                        <input type="checkbox" name="check"> 
                                            <p class="label-text delivery_schedul_p"> 
                                                10kg : 20kg
                                            </p>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-inline-item"> 
                        <div class="package_data_02">
                            <div class="main-check">
                                <div class="form-check">
                                    <label>
                                        <input type="checkbox" name="check"> 
                                            <p class="label-text delivery_schedul_p"> 
                                                20kg : 30kg
                                            </p>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </li>
                  </ul>
              </div>
          </div>
          <div class="modal-buttons buttons_style ">
            <button type="button" class="btn save_btn "> Calculate shipping </button>
            <button type="button" class="btn close_btn" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
</div>

<!-- Bidders Modal -->
<div class="main_modal create_list_end bidders_modal">
    <div class="modal fade" id="biddersModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="account_pending create_list_end_info">
              <img src="img/icons/Bidders_img.png" class="img-responsive" alt="" />
              <h3> Sony 65 Inch 4K Ultra HD HDR OLED Android TV - KD-65A1 </h3>
            </div>
            <div class="bidders_modal_list">
                <ul>
                    <li class="list-inline-item"> 
                        <p><b> Bidders: 8 </b></p>
                    </li>
                    <li class="list-inline-item"> 
                        <p><b> Time left: 6days 15hours 46mins </b></p>
                    </li>
                </ul>
            </div>
            <div class="bidders_table">
                <table class=" table table-striped">
                  <thead>
                    <tr>
                      <th scope="col"> Bidder </th>
                      <th scope="col"> Bid Amount </th>
                      <th scope="col"> Bid Time </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row"> Ahmed Ibrahim </th>
                      <td> $400.00 </td>
                      <td> 25 Nov 2018 at 12:58:28AM  </td>
                    </tr>
                    <tr>
                      <th scope="row"> Mahmoud Ahmed </th>
                      <td> $320.00 </td>
                      <td> 25 Nov 2018 at 12:58:28AM  </td>
                    </tr>
                    <tr>
                      <th scope="row"> Eslam Osama </th>
                      <td> $250.00 </td>
                      <td> 25 Nov 2018 at 12:58:28AM  </td>
                    </tr>
                    <tr>
                      <th scope="row"> Mahmoud Ahmed </th>
                      <td> $100.00 </td>
                      <td> 25 Nov 2018 at 12:58:28AM  </td>
                    </tr>
                    <tr>
                      <th scope="row"> Ahmed Ibrahim </th>
                      <td> $400.00 </td>
                      <td> 25 Nov 2018 at 12:58:28AM  </td>
                    </tr>
                    <tr>
                      <th scope="row"> Mahmoud Ahmed </th>
                      <td> $320.00 </td>
                      <td> 25 Nov 2018 at 12:58:28AM  </td>
                    </tr>
                    <tr>
                      <th scope="row"> Eslam Osama </th>
                      <td> $250.00 </td>
                      <td> 25 Nov 2018 at 12:58:28AM  </td>
                    </tr>
                    <tr>
                      <th scope="row"> Mahmoud Ahmed </th>
                      <td> $100.00 </td>
                      <td> 25 Nov 2018 at 12:58:28AM  </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="bidders_modal_footer_list">
                <ul>
                    <li class="list-inline-item"> 
                        <p><b> Starting Price	$10.00	 </b></p>
                    </li>
                    <li class="list-inline-item"> 
                        <p><b> 19 Nov 2018 at 7:24:01PM</b></p>
                    </li>
                </ul>
              </div>
          </div>
        </div>
      </div>
    </div>
</div>

<!-- Delete Modal -->
<div class="main_modal create_list_end delete_item_modal">
    <div class="modal fade" id="delete_item" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="account_pending create_list_end_info delete_item_body">
              <img src="img/icons/delete_item.png" class="img-responsive" alt="" />
              <h3> Are you sure you want to delete this product? </h3>
            </div>
              <div class="main-btn modal-buttons buttons_style ">
                  <ul>
                      <li class="list-inline-item"> 
                        <button class="btn s_delete" type="button"> Delete </button>
                      </li>
                      <li class="list-inline-item"> 
                        <button class="btn s_cancel"> Cancel </button>
                      </li>
                  </ul>
              </div>
          </div>
        </div>
      </div>
    </div>
</div>

<?php
include "includes/footer.php";
?>