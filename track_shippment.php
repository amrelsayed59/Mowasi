<?php
include "includes/header.php";
?>
<!--   My Orders - Order info Page : Start -->
<section class="order_info_page track_shippment_steps">
    <div class="container">
        <div class="row a_info_block">
            <div class="col-md-12">
                <div class="payment_method_section ">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="payment_method_block">
                                <h4> Shipment 1 of 1 </h4>
                                <h3> Out for Delivery </h3>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="payment_method_block">
                                <h4> Tracking # </h4>
                                <h3> 846516161651916 </h3>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="payment_method_block">
                                <h4>Delivery Time </h4>
                                <h3> 12 Nov 2018 - 10:00pm  </h3>
                            </div>
                        </div>
                    </div> <!-- // payment_method_section ROW-->
                </div>
            </div>
        </div> <!-- // row 1  -->
    </div> <!-- // container   -->
</section> <!-- // Section   -->
<!--   My Orders - Order info Page : End -->

<!--    track shippment : Start -->
<section class=" track_shippment_steps padd_b_40">
    <div class="container">
        <div class="row a_info_block">
            <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="top_steps">
                    <ul> 
                        <li class="list-inline-item">
                            <div class="t_step">
                                <div class="t_step_icon done">
                                </div>
                                <h3> Order Placed </h3>
                                <p> 19 November 2018 </p>
                            </div>   
                        </li>
                        <li class="list-inline-item">
                            <div class="t_step">
                                <div class="t_step_icon done">
                                </div>
                                <h3> Order Confirmed </h3>
                                <p> 19 November 2018 </p>
                            </div>   
                        </li> 
                        <li class="list-inline-item">
                            <div class="t_step">
                                <div class="t_step_icon done">
                                </div>
                                <h3> Handeld By the Seller </h3>
                                <p> 19 November 2018 </p>
                            </div>   
                        </li>
                        <li class="list-inline-item">
                            <div class="t_step">
                                <div class="t_step_icon active">
<!--                                    <i class="fas fa-pencil-alt icon_edit"></i>-->
                                    <img src="img/icons/delivery-truck.png" class="img-responsive  icon_edit" alt=""> 
                                </div>
                                <h3> On its way to you! </h3>
                                <p> 19 November 2018 </p>
                            </div>   
                        </li>
                        <li class="list-inline-item">
                            <div class="t_step">
                                <div class="t_step_icon default">
                                    <img src="img/icons/Delivered.png" class="img-responsive  icon_edit" alt=""> 
                                </div>
                                <h3> Delivered </h3>
                                <p> -- </p>
                            </div>   
                        </li>
                    </ul>
                </div>
            </div>
        </div> <!-- // row 1 -->
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
                            </ul>
                        </div>
                    </div> <!-- // Product Info  -->
                </div> <!-- // Product Block  2 -->
            </div>
        </div><!-- // row 2 -->
    </div> <!-- // container   -->
</section> <!-- // Section   -->
<!--    track shippment : End -->

<?php
include "includes/footer.php";
?>