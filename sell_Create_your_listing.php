<?php
include "includes/header.php";
?>
<!--    Create Listing : Start -->
<section class=" padding40">
    <div class="container">
        <div class="main-titl-0">
            <h3> Create your listing </h3>
        </div>
        <div class="row listing_details">
            <div class="listing_details_main_title">
                <h3> Listing details </h3>
            </div>
            <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="row ">
                    <h5 for="input-text" class="col-lg-2 col-md-2"> Title <span> * </span></h5>
                    <div class=" list_categ col-lg-10 col-md-10">
                        <input type="text" class="form-control" placeholder=" ">
                    </div>
                </div> 
                
                <div class="row ">
                    <h5 for="input-text" class="col-lg-2 col-md-2"> Category <span> * </span></h5>
                    <ul class="list_categ col-lg-10 col-md-10" >
                        <li class="list-inline-item"> <p> Computers/Tablets & Networking > Laptops & Netbooks > Apple Laptops </p> </li>
                        <li class="list-inline-item"> <a href="#"> Change category </a> </li>
                    </ul>
                </div> 
                
                <div class="row ">
                    <h5 for="input-text" class="col-lg-2 col-md-2"> Condition Select <span> * </span></h5>
                    <div class="select-country form-group list_categ col-lg-4 col-md-4">
                       <select>
                            <option value=""> New </option>
                            <option>  Used </option>
                        </select>
                    </div>
                </div>  
                            
                <div class="row ">
                    <h5 for="input-text" class="col-lg-2 col-md-2"> Photos (0) <span> * </span></h5>
                    <div class="list_categ col-md-10" >
                        <div class="list_categ_photos_title">
                            <h4> Add up to 3 more photos </h4>
                            <div class="latest_drafts_data">
                                <ul>
                                    <li class="list-inline-item"> 
                                        <a href="#"> Delete all </a>
                                    </li>
                                    <li class="list-inline-item"> 
                                        <a href="#"> Import from web </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="add_photos_plugin">
                                <div class="upload_imgs">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="main_image_00">

                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="all_images_for_upload0">
                                                <ul id="media-list" class="clearfix">
                                                    <li class="myupload">
                                                        <span><i class="fa fa-plus" aria-hidden="true"></i><input type="file" click-type="type2" id="picupload" class="picupload" multiple></span>
                                                    </li>
                                                    <li class="list-inline-item myupload">
                                                        <span><i class="far fa-image"></i></span>
                                                    </li>    
                                                    <li class="list-inline-item myupload">
                                                        <span><i class="far fa-image"></i></span>
                                                    </li>    
                                                    <li class="list-inline-item myupload">
                                                        <span><i class="far fa-image"></i></span>
                                                    </li>    
                                                    <li class="list-inline-item myupload">
                                                        <span><i class="far fa-image"></i></span>
                                                    </li>    
                                                    <li class="list-inline-item myupload">
                                                        <span><i class="far fa-image"></i></span>
                                                    </li>
                                                    <li class="list-inline-item myupload">
                                                        <span><i class="far fa-image"></i></span>
                                                    </li>    
                                                    <li class="list-inline-item myupload">
                                                        <span><i class="far fa-image"></i></span>
                                                    </li>    
                                                    <li class="list-inline-item myupload">
                                                        <span><i class="far fa-image"></i></span>
                                                    </li>                                    

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 

                <div class="row ">
                    <h5 for="input-text" class="col-lg-2 col-md-2"> Item Features <span> * </span></h5>
                    <div class="col-lg-8 col-md-10">
                        <div class="row listing_details listing_item_features">
                            <div class="select-country form-group list_categ col-md-6">
                               <label for="input-text" class="control-label"> Brand <span> * </span> </label>
                               <select>
                                    <option value=""> -- select -- </option>
                                    <option>  1 </option>
                                    <option>  2 </option>
                                </select>
                            </div>                    
                            <div class="select-country form-group list_categ col-md-6">
                               <label for="input-text" class="control-label"> Model <span> * </span> </label>
                               <select>
                                    <option value=""> -- select -- </option>
                                    <option>  1 </option>
                                    <option>  2 </option>
                                </select>
                            </div>
                            <div class="clearfix"></div>
                            <div class="select-country form-group list_categ col-md-6">
                               <label for="input-text" class="control-label"> color <span> * </span> </label>
                               <select>
                                    <option value=""> -- select -- </option>
                                    <option>  1 </option>
                                    <option>  2 </option>
                                </select>
                            </div>                    
                            <div class="select-country form-group list_categ col-md-6">
                               <label for="input-text" class="control-label"> Processor Type <span> * </span> </label>
                               <select>
                                    <option value=""> -- select -- </option>
                                    <option>  1 </option>
                                    <option>  2 </option>
                                </select>
                            </div>
                            <div class="clearfix"></div>
                            <div class="select-country form-group list_categ col-md-6">
                               <label for="input-text" class="control-label"> Screen Size <span> * </span> </label>
                               <select>
                                    <option value=""> -- select -- </option>
                                    <option>  1 </option>
                                    <option>  2 </option>
                                </select>
                            </div>                    
                            <div class="select-country form-group list_categ col-md-6">
                               <label for="input-text" class="control-label"> Processor Speed <span> * </span> </label>
                               <select>
                                    <option value=""> -- select -- </option>
                                    <option>  1 </option>
                                    <option>  2 </option>
                                </select>
                            </div>
                            <div class="clearfix"></div>
                            <div class="select-country form-group list_categ col-md-6">
                               <label for="input-text" class="control-label"> Memory <span> * </span> </label>
                               <select>
                                    <option value=""> -- select -- </option>
                                    <option>  1 </option>
                                    <option>  2 </option>
                                </select>
                            </div>                    
                            <div class="select-country form-group list_categ col-md-6">
                               <label for="input-text" class="control-label"> Storage Type <span> * </span> </label>
                               <select>
                                    <option value=""> -- select -- </option>
                                    <option>  1 </option>
                                    <option>  2 </option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>  
                <div class="row ">
                    <h5 for="input-text" class=" col-md-2"> Item Description <span> * </span>
                    <span tabindex="0" data-toggle="popover" data-trigger="focus" data-content="It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. "> <img class="info_img" src="img/icons/info.png"> </span>
                    </h5>
                    <div class="select-country form-group list_categ col-md-10">

                        <div id="editor" contenteditable="false">
                            <section id="toolbar">
                                <div id="bold" class="icon fas fa-bold"></div>
                                <div id="italic" class="icon fas fa-italic"></div>
                                <div id="underline" class="icon fas fa-underline"></div>
                                <div id="strikeThrough" class="icon fas fa-strikethrough"></div>
                                <div id="createLink" class="icon fas fa-link"></div>
                                <div id="insertUnorderedList" class="icon fas fa-list-ul"></div>
                                <div id="insertOrderedList" class="icon fas fa-list-ol"></div>
                                <div id="justifyLeft" class="icon fas fa-align-left"></div>
                                <div id="justifyRight" class="icon fas fa-align-right"></div>
                                <div id="justifyCenter" class="icon fas fa-align-center"></div>
                                <div id="justifyFull" class="icon fas fa-align-justify"></div>
                            </section>
                        <section id="page" contenteditable="true">
                            <p id="page-content"></p>
                        </section>
                        </div>
                    </div>
                </div>  
            </div><!-- // col-md-12   --> 
        </div> <!-- // row 1   -->
        <div class="row listing_details">
            <div class="listing_details_main_title">
                <h3> Selling details  </h3>
            </div>
            <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="row ">
                    <h5 for="input-text" class=" col-md-2"> Format <span> * </span></h5>
                    <div class="select-country form-group list_categ col-md-4">
                       <select>
                            <option value=""> Auction-Style </option>
                            <option>  Fixed-Style </option>
                        </select>
                    </div>
                </div> 
            </div> 
            <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="row ">
                    <h5 for="input-text" class="col-md-2"> Duration Select <span> * </span></h5>
                    <div class=" col-md-8">
                        <div class="select-country form-group list_categ">
                           <select class="">
                                <option value=""> 7 Days </option>
                                <option>  8 Days </option>
                            </select>
                            <div class="main-check ">
                                <div class="form-check col-md-12">
                                    <label>
                                        <input type="checkbox" name="check"> 
                                            <p class="label-text delivery_schedul_p"> 
                                            Start my listings when I submit them.
                                            </p>
                                    </label>
                                </div>
                                <div class="form-check col-md-12">
                                    <label data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                        <input type="checkbox" name="check"> 
                                            <p class="label-text delivery_schedul_p"> 
                                            Schedule to start on.
                                            </p>
                                    </label>
                                    <div class="row">
                                        <div id="collapseTwo" aria-expanded="true" class="collapse in col-md-12">
                                            <div class="well">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="select-country_div">
                                                           <div class="select-country form-group main-check ">
                                                               <select>
                                                                    <option value=""> Sundaym, Nov 25 </option>
                                                                    <option>  #1 </option>
                                                                    <option>  #2 </option>
                                                                    <option>  #3 </option>
                                                                    <option>  #4 </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="select-country_div">
                                                           <div class="select-country form-group main-check ">
                                                               <select>
                                                                    <option value=""> 1 </option>
                                                                    <option>  2 </option>
                                                                    <option>  3 </option>
                                                                    <option>  4 </option>
                                                                    <option>  5 </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="select-country_div">
                                                           <div class="select-country form-group main-check ">
                                                               <select>
                                                                    <option value=""> 00 </option>
                                                                    <option>  2 </option>
                                                                    <option>  3 </option>
                                                                    <option>  4 </option>
                                                                    <option>  5 </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="select-country_div">
                                                           <div class="select-country form-group main-check ">
                                                               <select>
                                                                    <option value=""> AM </option>
                                                                    <option>  PM </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            
            <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="row ">
                    <h5 for="input-text" class=" col-md-2"> Price <span> * </span></h5>
                    <div class="select-country form-group list_categ col-md-8">
                        <div class="row">
                            <div class="select-country form-group list_categ col-md-4">
                                <label for="input-text" class="control-label"> Starting price <span> * </span> </label>
                                <div class="starting_price_input">
                                    <span> $ </span>
                                    <input type="number" class="form-control" placeholder=" ">
                                </div>
                            </div>
                            <div class="select-country form-group list_categ col-md-4">
                                <label for="input-text" class="control-label"> Buy It Now price  <span> * </span> </label>
                                <div class="starting_price_input">
                                    <span> $ </span>
                                    <input type="number" class="form-control" placeholder=" ">
                                </div>
                            </div>  
                        </div>
                    </div>
                </div> 
            </div>         
            
            <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="row ">
                    <h5 for="input-text" class=" col-md-2"> Quantity </h5>
                    <div class="select-country form-group list_categ col-md-2">
                        <input type="number" class="form-control" placeholder=" ">
                    </div>
                </div> 
            </div>   
            
            <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="row ">
                    <h5 for="input-text" class=" col-md-2"> Private listing </h5>
                    <div class="form-check col-md-8">
                        <div class="main-check ">
                            <div class="form-check">
                                <label>
                                    <input type="checkbox" name="check"> 
                                        <p class="label-text delivery_schedul_p"> 
                                        Allow buyers to remain anonymous to other Mowasi users
                                        </p>
                                </label>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>   
            
            <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="row ">
                    <h5 for="input-text" class=" col-md-2"> Payment options <span> * </span> </h5>
                    <div class="form-check col-md-8">
                        <div class="main-check ">
                            <div class="form-check">
                                <label>
                                    <input type="checkbox" name="check"> 
                                        <p class="label-text delivery_schedul_p"> 
                                        Visa / MasterCard
                                        </p>
                                </label>
                            </div>
                            <div class="form-check">
                                <label>
                                    <input type="checkbox" name="check"> 
                                        <p class="label-text delivery_schedul_p"> 
                                       Sadad
                                        </p>
                                </label>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>             
        </div> <!-- // row 2   -->
        <div class="row listing_details">
            <div class="listing_details_main_title">
                <h3> Shipping details  </h3>
            </div>
            
            <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="row ">
                    <h5 for="input-text" class=" col-md-2"> Services <span> * </span></h5>
                    <div class="select-country form-group list_categ col-md-8">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="select-country_div">
                                   <div class="select-country form-group main-check ">
                                       <select>
                                            <option value=""> Saudi Post </option>
                                            <option>  2 </option>
                                            <option>  3 </option>
                                            <option>  4 </option>
                                            <option>  5 </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="main-check ">
                                    <div class="form-check">
                                        <label>
                                            <input type="checkbox" name="check"> 
                                                <p class="label-text delivery_schedul_p"> 
                                                    Free Shipping
                                                </p>
                                        </label>
                                    </div>
                                </div>
                            </div>                           
                            <div class="col-md-12">
                                <div class="calculate_btn">
                                    <p data-toggle="modal" data-target="#calculate_modal">  Calculate Shipping </p>
                                </div>
                            </div>         
                            <div class="col-md-4">
                                <div class="select-country form-group list_categ ">
                                    <label for="input-text" class="control-label"> Cost <span> * </span>
                                    <span tabindex="0" data-toggle="popover" data-trigger="focus" data-content="It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. "> <img class="info_img" src="img/icons/info.png"> </span>
                                    </label>
                                    <div class="starting_price_input">
                                        <span> $ </span>
                                        <input type="number" class="form-control" placeholder=" ">
                                    </div>
                                </div>
                                <div class="select-country form-group list_categ ">
                                    <label for="input-text" class="control-label"> Handling time <span> * </span> </label>
                                    <div class="starting_price_input">
                                        <div class="select-country_div">
                                           <div class="select-country form-group main-check ">
                                               <select>
                                                    <option value=""> 1 Business Day </option>
                                                    <option>  2 </option>
                                                    <option>  3 </option>
                                                    <option>  4 </option>
                                                    <option>  5 </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>


                        </div>
                    </div>
                </div> 
            </div>    
            <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="row ">
                    <h5 for="input-text" class=" col-md-2"> Item location <span> * </span> </h5>
                    <div class="form-check col-md-8">
                        <div class="main-check ">
                            <div class="form-check">
                                <p class="label-text delivery_schedul_p"> 
                                Mostafa El-Nahas, Nasr City, Cairo, Egypt.  <a href="#"> Change </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div> <!-- // row 3   -->
        <div class="row">
            <div class="listing_buttons">
                <ul>
                    <li class="list-inline-item">
                        <div class="l_btn active">
                            <a href="#" data-toggle="modal" data-target="#create_list_end"> List Item </a>
                        </div>
                    </li>
                    <li class="list-inline-item">
                        <div class="l_btn">
                            <a href="#"> Preview </a>
                        </div>
                    </li>
                    <li class="list-inline-item">
                        <div class="l_btn">
                            <a href="#"> Save as draft </a>
                        </div>
                    </li>
                    <li class="list-inline-item">
                        <div class="l_btn">
                            <a href="#"> Cancel </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div> <!-- // row 3   -->
    </div> <!-- // container   -->
</section> <!-- // Section   -->
<!--    Create Listing : End -->



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

<!--  Create list Modal -->
<div class="main_modal create_list_end">
    <div class="modal fade" id="create_list_end" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
              <div class="account_pending create_list_end_info">
                  <img src="img/icons/your-listing-Success.png" class="img-responsive" alt="" />
                  <h3> Success! You’ve listed your item for sale </h3>
              </div>
              <div class="create_list_end_item">
                  <div class="create_list_end_item_img">
                    <img src="img/products/img-4.png" class="img-respnsive" alt="">  
                  </div>
                  <div class="create_list_end_item_info">
                    <h5> Check it Out </h5>
                    <p> Computers/Tablets & Networking > Laptops & Netbooks > Apple Laptops <span> ( item ID 18545469846 ) </span> </p>
                    <ul class="product_share">
                        <li class="list-inline-item">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                    </ul>
                    <p> Want to create another listing? </p>
                    <button class="btn" type="button"> Sell another product </button>
                     <div class="latest_drafts_data create_list_end_item_links">
                        <ul>
                            <li class="list-inline-item"> 
                                <a href="#"> Create similer </a>
                            </li>
                            <li class="list-inline-item"> 
                                <a href="#"> Create New </a>
                            </li>
                            <li class="list-inline-item"> 
                                <a href="#"> Save as template </a>
                            </li>
                        </ul>
                    </div>
                      
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
</div>


<?php
include "includes/footer.php";
?>