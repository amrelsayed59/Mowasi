<?php
include "includes/header.php";
?>
<!--  My orders return items Steps : Start  s_w_u_Steps -->
<section class=" my_orders_return_items_steps padding40">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="return_item_top_section">
                    <ul>
                        <li class="list-inline-item"> 
                            <a href="my_orders.php"> My Orders </a>
                        </li>
                        <li class="list-inline-item"> 
                            <p> /    Return an item  </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div> <!-- // row   -->
        <div class="row">
            <div class="col-md-12">
                <div class="my_orders_return_items_completed_title">
                    <h3> Confirmation has been send to your email </h3>
                </div>
            </div>
        </div>
    </div> <!-- // container   -->
</section> <!-- // Section   -->

<section class="my_orders_return_items_completed padding40"  id="print-div">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="img/icons/QR_code.png" class="igm-responsive" alt="">
            </div>
            <div class="col-md-3">
                <div class="payment_method_block">
                    <h3> Order Number </h3>
                    <p> 4173 </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="payment_method_block">
                    <h3> Receipient </h3>
                    <ul>
                        <li> 
                            <p>  Mostafa El-Nahhas, Nasr city </p>
                        </li> 
                        <li> 
                            <p>  Cairo </p>
                        </li> 
                        <li> 
                            <p>  Egypt. </p>
                        </li>  
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="payment_method_block">
                    <h3> New Tracking Number </h3>
                    <p> 511218111512923 </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="print_btn">
                <button class="btn print" type="button">
                    <img src="img/icons/printer.png" class="img-responsive" alt=""> Print </button>
            </div>
        </div>
    </div>
</section>



<?php
include "includes/footer.php";
?>