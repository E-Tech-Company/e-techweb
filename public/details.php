<!--
******************************************************************
Autor: Inmar Cortez - inmarcortez2014@outlook.com 
E-Tech Company
CEO
Creado el: 05-01-2020 14:45:47
******************************************************************
-->

<?php

$titulo = "Detalle de Servicios";
require_once("estructure/head.php");

?>

<body>


    <!-- header-start -->
    <?php
        
        require_once("estructure/menu.php");
        
        ?>
    <!-- header-end -->

    <!-- bradcam_area  -->
    <div class="bradcam_area">
        <div class="bradcam_shap">
            <img src="../src/img/ilstrator/bradcam_ils.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text ">
                        <h3>Product Design</h3>
                        <nav class="brad_cam_lists">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Mobile app</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Design</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /bradcam_area  -->
    <!-- case_details_area  -->
    <div class="case_details_area">
        <div class="container">
            <div class="border_bottom">
                <div class="row ">
                    <div class="col-xl-12">
                        <div class="case_thumb">
                            <img src="../src/img/case_study/case_banner.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="details_main_wrap">
                            <p class="details_info">
                                “Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor
                                sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.
                                Fusce ac mattis nulla. Morbi eget ornare dui.
                            </p>
                            <div class="single_details">
                                <span>Problem</span>
                                <p>Esteem spirit temper too say adieus who direct esteem. It esteems luckily or picture
                                    placing drawing. Apartments frequently or motionless on reasonable sed do eiusmod
                                    tempor inciunt ut labore et dolore magna liqua.abore et dolore incididunt ut labore
                                    et dolore magna liqua abore et dolore</p>
                            </div>
                            <div class="single_details">
                                <span>Solution</span>
                                <p>Esteem spirit temper too say adieus who direct esteem. It esteems luckily or picture
                                    placing drawing. Apartments frequently or motionless on reasonable sed do eiusmod
                                    tempor inciunt ut labore et dolore magna liqua.abore et dolore incididunt ut labore
                                    et dolore magna liqua abore et dolore</p>
                            </div>
                            <div class="single_details">
                                <span>Result</span>
                                <p>Esteem spirit temper too say adieus who direct esteem. It esteems luckily or picture
                                    placing drawing. Apartments frequently or motionless on reasonable sed do eiusmod
                                    tempor inciunt ut labore et dolore magna liqua.abore et dolore incididunt ut labore
                                    et dolore magna liqua abore et dolore</p>
                            </div>
                            <div class="single_details mb-60">
                                <ul>
                                    <li>
                                        <a href="#"> <i class="fa fa-facebook"></i> Facebook </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-twitter"></i> Twitter </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-pinterest-p"></i> Pinterest </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /case_details_area  -->

    <!-- case_study_area  -->
    <div class="case_study_area white_case_study study_page">
        <div class="patrn_1 d-none d-lg-block">
            <img src="../src/img/pattern/patrn_1.png" alt="">
        </div>
        <div class="patrn_2 d-none d-lg-block">
            <img src="../src/img/pattern/patrn.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="details_title">
                        <h3>Related Case</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_study text-center white_single_study">
                        <div class="thumb">
                            <a href="#">
                                <img src="../src/img/case_study/4.png" alt="">
                            </a>
                        </div>
                        <div class="subheading white_subheading">
                            <h4><a href="#">Product Design</a></h4>
                            <p>UI/UX, Design</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_study text-center white_single_study">
                        <div class="thumb">
                            <a href="#">
                                <img src="../src/img/case_study/5.png" alt="">
                            </a>
                        </div>
                        <div class="subheading white_subheading">
                            <h4><a href="#">Custom Website</a></h4>
                            <p>UI/UX, Design</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_study text-center white_single_study">
                        <div class="thumb">
                            <a href="#">
                                <img src="../src/img/case_study/6.png" alt="">
                            </a>
                        </div>
                        <div class="subheading white_subheading">
                            <h4><a href="#">Digital Marketing</a></h4>
                            <p>UI/UX, Design</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ case_study_area  -->

    <!-- footer start -->
    <?php
        
        require_once("estructure/footer.php");
        
        ?>
    <!-- footer end -->
</body>

</html>