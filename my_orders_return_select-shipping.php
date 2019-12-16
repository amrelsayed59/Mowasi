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
        </div>
        <div class="row justify-content-md-center ">
            <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
                <div class="top_steps">
                    <ul> 
                        <li class="list-inline-item">
                            <div class="t_step">
                                <a href="my_orders_return_item.php">
                                    <div class="t_step_icon done">
                                        <i class="fas fa-check icon_done"></i>
                                        <img src="img/icons/My-Orders-return-an-item.png" class="img-responsive icon_edit" alt=""/>
                                    </div>
                                </a>
                                <h3> Select Item </h3>
                            </div>   
                        </li>
                        <li class="list-inline-item">
                            <div class="t_step">
                                <a href="my_orders_return_reason-for-item.php">
                                    <div class="t_step_icon done">
                                        <i class="fas fa-check icon_done"></i>
                                        <img src="img/icons/box.png" class="img-responsive icon_edit" alt=""/>
                                    </div>
                                </a>
                                <h3> Reason For Return </h3>
                            </div>   
                        </li>
                        <li class="list-inline-item">
                            <div class="t_step">
                                <a href="my_orders_return_select-shipping.php">
                                    <div class="t_step_icon active">
                                        <i class="fas fa-check icon_done"></i>
                                        <img src="img/icons/shipped.png" class="img-responsive icon_edit" alt=""/>
                                    </div>
                                </a>
                                <h3> Select Shipping </h3>
                            </div>   
                        </li>
                        <li class="list-inline-item">
                            <div class="t_step">
                                <a href="my_orders_return_item_completed.php">
                                    <div class="t_step_icon">
                                        <i class="fas fa-check icon_done"></i>
                                        <i class="fas fa-pencil-alt icon_edit"></i>
                                    </div>
                                </a>
                                <h3> Completed </h3>
                            </div>   
                        </li>
                    </ul>
                </div>
            </div>
        </div> <!-- // row   -->
    </div> <!-- // container   -->
</section> <!-- // Section   -->
<!--   My orders return items Steps : End -->


<!--    r_i_reson_for_return_section : Start -->
<section class=" r_i_reson_for_return_section">
    <div class="container">
        <div class="row justify-content-md-center ">
            <div class="col-lg-8 col-md-10">
                <div class="a_info_block r_i_reson_for_return_block">
                   <div class="select-country form-group main-check ">
                       <label for="input-text" class="control-label"> Select Shipping Service </label>
                       <select>
                            <option value=""> -- Select -- </option>
                            <option> 1 </option>
                            <option> 2 </option>
                            <option> 3 </option>
                            <option> 4 </option>
                        </select>
                    </div>
                </div>
            </div>
        </div> <!-- // row   -->
        <div class="row justify-content-md-center">
            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                <div class="return_item_btn">
                    <a href="#"> Continue </a>
                </div>
            </div>
        </div>
    </div> <!-- // container   -->
</section> <!-- // Section   -->
<!--    r_i_reson_for_return_section : Start -->



<?php
include "includes/footer.php";
?>