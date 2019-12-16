<?php
include "includes/header.php";
?>

<!-- Checkout Section Start -->
<section class="checkoutSection padding60">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="top_steps">
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="paymentSection">
                    <ul>
                        <li>
                            <div class="suc_checkbox">
                                <input type="checkbox" id="chk2" name="chkdemo"><label for="chk2"></label> 
                                <span> Ship to my delivery address </span>
                            </div>
                        </li>
                        <li>
                            <div class="suc_checkbox">
                                <input type="checkbox" id="chk1" name="chkdemo"   checked><label for="chk1"></label>
                                <span> Ship to a nearby pickup location, I will pick it up myself </span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="shipping_option">
                    <div class="shipping_option_title">
                        <h3> Shipping Option </h3>
                        <a href="account_shipping_addresses.php"> Edit </a>
                    </div>
                    <div class="shipping_option_info a_info_block">
                        <div class="shipping_option_item">
                            <h3> Delivery address </h3>
                            <p> Adam Mahmoud,  10,  8,  Nasr City,  +20 1234567890</p>
                        </div>
                        <div class="shipping_option_item">
                            <h3> Shipping Service </h3>
                            <p> 1 item shipped locally | Delivered by Thursday, Nov 22 | +12.00 EGP </p>
                        </div>
                    </div>
                </div>
                <div class="shipping_option">
                    <div class="shipping_option_title">
                        <h3> Payment Method </h3>
                        <p> How would you like to pay   150.00 EGP </p>
                    </div>
                    <div class="payment_method_block a_info_block">
                        <div class="payment_method_block_title">
                            <div class="suc_checkbox">
                                <input type="checkbox" id="chk3" name="chkdemo">
                                <label for="chk3"></label> 
                                <h3> Credit or Debit Cards </h3>
                                <ul class="payment_logos">
                                    <li class="list-inline-item">
                                        <img src="img/MasterCard.png" class="img-responsive" alt="" />
                                    </li>    
                                    <li class="list-inline-item">
                                        <img src="img/visa.jpg" class="img-responsive" alt="" />
                                    </li>    
                                </ul>
                            </div>
                        </div>
                        <div class="payment_method_details main_modal">
                            <div class="row">
                                  <div class="col-md-12 col-sm-12 col-xs-12">
                                       <div class="form-group">
                                            <label for="input-text" class="control-label"> Card number  <span> * </span></label>
                                            <input type="text" class="form-control" placeholder=" ">
                                        </div>
                                  </div>
                                  <div class="col-md-12 col-sm-12 col-xs-12">
                                       <div class="form-group">
                                            <label for="input-text" class="control-label"> Card holder's name <span> * </span></label>
                                            <input type="text" class="form-control" placeholder=" ">
                                        </div>
                                  </div>
                                  <div class="col-md-6 col-sm-12 col-xs-12">
                                       <div class="form-group expiry_d">
                                            <label for="input-text" class="control-label"> Expiry date <span> * </span></label>
                                            <input type="text" class="form-control" placeholder=" ">
                                            <input type="text" class="form-control" placeholder=" ">
                                        </div>
                                      <div class="main-check">
                                        <div class="form-check">
                                            <label>
                                                <input type="checkbox" name="check"> 
                                                    <p class="label-text delivery_schedul_p"> Save for future use   </p>
                                            </label>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="col-md-6 col-sm-12 col-xs-12">
                                       <div class="form-group verification_code">
                                            <label for="input-text" class="control-label"> Card verification code <span> * </span></label>
                                            <i class="fas fa-credit-card"></i>
                                            <input type="text" class="form-control" placeholder=" ">
                                        </div>
                                  </div>
                                  <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="i_plans">
                                        <h3> Installment plans available as low as 0% interest </h3>
                                        <p> Fill your credit card number to show the available plans for your bank  </p> 
                                        <a href="#"> Show participating banks. </a>
                                     </div>
                                  </div>
                            </div>
                        </div>
                        <div class="payment_method_block sadad">
                            <div class="payment_method_block_title">
                                <div class="suc_checkbox">
                                    <input type="checkbox" id="chk4" name="chkdemo">
                                    <label for="chk4"></label> 
                                    <h3> Sadad </h3>
                                    <ul class="payment_logos">
                                        <li class="list-inline-item">
                                            <img src="img/sadad.png" class="img-responsive" alt="" />
                                        </li>    
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="checkout_btn main-cart-button">
                    <a href="#">
                       Place Order
                    </a>
                </div>
            </div> <!-- col 8 -->
            <div class="col-md-4">
                <div class="shopping_cart">
                    <div class="shipping_option_title">
                        <h3> Shopping Cart </h3>
                        <a href="product_details_fixed.php"> Back to cart </a>
                    </div>
                    <div class="s_product_item">
                        <div class="s_product_item_img">
                            <img src="img/products/img-1.jpg" class="img-responsive" alt=""/>
                        </div>
                        <div class="s_product_item_details">
                            <h3> Andora T-Shirt For Men, Blue </h3>
                            <p class="p_price"> 75.00 EGP </p>
                            <span> Qty: 1 </span>
                        </div>
                    </div>
                    <div class="s_product_item_more">
                        <ul>
                            <li> 
                                <p> Item(s): </p>
                                <span> 75.00 SAR  </span>
                            </li>
                            <li> 
                                <p> + Shipping </p>
                                <span> 12.00 SAR  </span>
                            </li>
                        </ul>
                    </div>
                    <div class="p_grand">
                        <h3> Grand Total </h3>
                        <span> 87.00 SAR </span>
                        <p> Order total includes any applicable VAT </p>
                    </div>
                    
                    <div class="clearfix"></div>
                    <div class=" main-cart-button">
                        <a href="#">
                           Place Order
                        </a>
                    </div>
                </div>

            </div>
        </div> <!-- row 2 -->
    </div> <!-- Container --> 
</section><!-- Section -->
<!-- Checkout Section End -->




<?php
include "includes/footer.php";
?>