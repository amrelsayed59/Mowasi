<?php
include "includes/header.php";
?>


<style>
.main_image_00{
    width: 100%;
/*        height: 100%;*/
    background: #e6e6e6;
    height: 320px;
}
.all_images_for_upload{
    width: 100%;
    display: block;
}+++++++++++++++++++++++++++++++++++++++++++++++++++++++++                                                                                       6666666666666666
#media-list li img {
    width: 100px;
    height: 100px;
    object-fit: scale-down;
}

#media-list li {
    height: 102px
}

#media-list li video {
    width: 100px;
    position: absolute;
    left: 0;
    right: 0;
    top: 50%;
    transform: translateY(-50%)
}

div#hint_brand .modal-dialog {
    top: 110px;
    width: 567px;
    max-width: 100%
}

li.myupload span {
    position: relative;
    width: 100px;
    height: 100px;
    display: block;
    background: #fff
}

li.myupload span input {
    opacity: 0;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0
}

li.myupload span i {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #ccc;
    font-size: 54px
}

#media-list li {
    float: left;
    border: 1px solid #ccc;
    background: #f3f3f3;
    position: relative;
    margin: 0 5px 5px 0;
    width: 102px
}

#media-list li:last-child {
    margin-right: 0
}

.post-thumb {
    position: absolute;
    background: rgba(0, 0, 0, 0.4);
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    display: none
}

#media-list li:hover .post-thumb {
    display: block
}

a.remove-pic {
    position: absolute;
    top: 5px;
    right: 5px;
    font-size: 12px;
    color: #fff;
    border: 1px solid #fff;
    border-radius: 50%;
    display: block;
    height: 25px;
    width: 25px;
    text-align: center;
    padding: 3px 0
}

.inner-post-thumb {
    position: relative
}

.user-post-text-wrap {
    position: relative
}

.user-pic-post {
    position: absolute;
    width: 50px;
    height: 50px;
    top: 0;
    left: 0
}

.user-pic-post img {
    width: 100%
}

.user-txt-post {
    padding: 0 0 0 65px
}

textarea.form-control.upostTextarea {
    border: 0;
    box-shadow: none;
    height: 85px;
    resize: none
}

.user-post-text-wrap {
    border-bottom: 1px solid #ccc;
    margin: 0 0 15px
}

.user-post-btn-wrap {
    margin: 25px 0 0
}

ul.btn-nav {
    list-style: none;
    padding: 0;
    margin: 0
}

ul.btn-nav li {
    position: relative;
    float: left;
    margin: 0 10px 0 0
}

ul.btn-nav li span input {
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    width: 100%;
    z-index: 9;
    opacity: 0;
    filter: alpha(opacity=100)
}

ul#media-list {
    list-style: none;
    padding: 0;
    margin: 0
}
    
.all_images_for_upload0{
    overflow: hidden;
    height: 320px;
}
</style>



<section class="padding60">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
<!--
        <ul id="media-list" class="clearfix">
            <li class="myupload">
                <span><i class="fa fa-plus" aria-hidden="true"></i><input type="file" click-type="type2" id="picupload" class="picupload" multiple></span>
            </li>
        </ul>
-->
            </div>
            <div class="col-xs-9">
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
</section>







<?php
include "includes/footer.php";
?>