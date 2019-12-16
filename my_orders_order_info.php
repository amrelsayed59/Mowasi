<?php
include "includes/header.php";
?>

<!--   My Orders - Order info Page : Start -->
<section class="order_info_page padding40">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="order_info_top_00">
                    <ul>
                        <li class="list-inline-item">
                            <a href="index.php"> Mowasi.com  / </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="account.php"> My Account  /  </a>
                        </li>
                        <li class="list-inline-item">
                            <p> Order No. 1391548118 </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-12">
                <div class="main-titl-1">
                    <h3> My Orders </h3>
                </div>
                <div class="order_s_info_0">
                    <ul>
                        <li class="list-inline-item"><p> Order #1391548118  </p></li>
                        <li class="list-inline-item"><p> Order Placed: 19 November 2018 </p></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row a_info_block">
            <div class="col-md-12">
                <div class="payment_method_section ">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="payment_method_block">
                                <h3> Payment Method </h3>
                                <p> Credit or Depit Cards </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="payment_method_block">
                                <h3> Receipient </h3>
                                <ul>
                                    <li> 
                                        <p><b>  Adam Mahmoud </b> </p>
                                    </li> 
                                    <li> 
                                        <p>  Nasr City, Cairo, Egypt. </p>
                                    </li> 
                                    <li> 
                                        <p>  Street Name/No: Mostafa El-nahhas </p>
                                    </li> 
                                    <li> 
                                        <p> Location Type: Home </p>
                                    </li> 
                                    <li> 
                                        <p>  Adam Mahmoud </p>
                                    </li> 
                                    <li> 
                                        <p>  Phone: +20 10 90071233 </p>
                                    </li> 
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="payment_method_block">
                                <h3> Order Summary </h3>
                                <ul>
                                    <li> 
                                        <p>  Subtotal ( 1 Items ): 955.99 SAR </p>
                                    </li> 
                                    <li> 
                                        <p> Shipping Fees: 20.00 SAR </p>
                                    </li> 
                                    <li> 
                                        <p><b> Grand Total: 975.99 SAR </b></p>
                                    </li> 
                                    <li> 
                                        <p> Order Total Includes any applicable VAT </p>
                                    </li> 
                                </ul>
                            </div>
                        </div>
                    </div> <!-- // payment_method_section ROW-->
                </div>
            </div>
        </div> <!-- // row 1  -->
        <div class="row  a_info_block">
            <div class="col-md-4">
                <div class="track_shipment_section">
                    <div class="payment_method_block">
                        <p> <b> Shipment 1 of 1 </b> </p>
                        <p><span> Out for delivery </span> Arriving: Tomorrow </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="track_shipment_section">
                    <div class="payment_method_block">
                        <p> Shepped by: <b> Saudi Post</b> </p>
                        <p> Tracking #: <b> 5198165519915165 </b> </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="main-btn-01">
                    <a href="track_shippment.php"> Track Shipment </a>
                </div>
            </div>
        </div><!-- // row  2 -->
        <div class="row a_info_block">
            <div class="col-md-12">
                <div class="product-item track_shipment_item"> <!-- Product Block  2 -->
                    <div class="product-item-img"> <!-- product-img  -->
                        <img src="img/products/img-10.png" class="img-responsive" alt="">
                    </div> <!-- // Product-img  -->
                    <div class="product-item-info"> <!-- Product Info  -->
                        <div class="product-item-info-title">
                            <a href="product_details_fixed.php"> Andora T-Shirt For Men, Blue. </a>
                        </div>
                        <div class="item-key_features">
                            <ul>
                                <li> 
                                    <p> <b> Quantity: </b> 1 </p>
                                </li>
                                <li> 
                                    <p> <b> Shipped by: </b> Saudi Post </p>
                                </li>
                                <li> 
                                    <p> <b> Delivery Time: </b> 20 November 2018 </p>
                                </li>
                                <li> 
                                    <p> <b> Order Status: </b> Order Confirmed </p>
                                </li>
                                <li> 
                                    <p> <b> Order ID: #1391548118 </b> </p>
                                </li>
                            </ul>

                        </div>
                    </div> <!-- // Product Info  -->
                    <div class="product-item-price item-price-00 "> <!-- Product Price & Button Details  -->
                        <h3> 955.99 SAR </h3>
                    </div> <!--//  Product Price & Button Details  -->
                </div> <!-- // Product Block  2 -->
            </div>
        </div><!-- // row  3 -->
        <div class="row a_info_block">
            <div class="col-md-4 offset-md-8">
                <div class="payment_total_price">
                    <ul>
                        <li> <p> <b> Item(s) Subtotal: </b> <span> 955.99 SAR </span> </p> </li>
                        <li> <p> <b> Shipping Fees: </b> <span> 20.00 SAR </span> </p> </li>
                        <li> <p> <b> Amount to be Paid:  </b> <span>  975.99 SAR </span> </p> </li>
                    </ul>
                </div>
            </div>
        </div><!-- // row  3 -->
    </div> <!-- // container   -->
</section> <!-- // Section   -->
<!--   My Orders - Order info Page : End -->

<?php
include "includes/footer.php";
?>