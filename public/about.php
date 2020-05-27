<!--
******************************************************************
Autor: Inmar Cortez - inmarcortez2014@outlook.com 
E-Tech Company
CEO
Creado el: 05-01-2020 14:27:51
******************************************************************
-->

<?php

$titulo = "Acerca de";
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
                    <div class="bradcam_text text-center">
                        <h3>¿Quienes somos?</h3>
                        <nav class="brad_cam_lists">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Quienes somos</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /bradcam_area  -->

    <!-- compapy_info  -->
    <div class="compapy_info minus_padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-md-5">
                    <div class="man_thumb">
                        <img src="../src/img/ilstrator/man.png" alt="">
                    </div>
                </div>
                <div class="col-xl-7 col-md-7">
                    <div class="company_info">
                        <h3>We are an SEO company that <br>
                            specializes in developing.</h3>
                        <p>Esteem spirit temper too say adieus who direct esteem. It esteems luckily or picture placing
                            drawing. Apartments frequently or motionless on reasonable.
                            Steem spirit temper too say adieus who direct esteem.</p>

                        <a href="services.php" class="boxed-btn3">Nuestros servicios</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ compapy_info  -->


    <!-- accordion_area  -->
    <?php
    
    require_once("estructure/elegirnos.php");
    
    ?>
    <!--/ accordion_area  -->


    <!-- features_area  -->
    <div class="features_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center">
                        <h3>We have some awesome features <br>
                            to rank your business</h3>
                        <p>Esteem spirit temper too say adieus who direct esteem. It esteems luckily or <br> picture
                            placing drawing. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_feature">
                        <div class="icon">
                            <img src="../src/img/svg_icon/feature_1.svg" alt="">
                        </div>
                        <h4>Custom design</h4>
                        <p>Esteem spirit temper too say adieus who direct esteem.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_feature">
                        <div class="icon">
                            <img src="../src/img/svg_icon/feature_2.svg" alt="">
                        </div>
                        <h4>Paid Search result</h4>
                        <p>Esteem spirit temper too say adieus who direct esteem.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_feature">
                        <div class="icon">
                            <img src="../src/img/svg_icon/feature_3.svg" alt="">
                        </div>
                        <h4>Global Search option</h4>
                        <p>Esteem spirit temper too say adieus who direct esteem.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_feature">
                        <div class="icon">
                            <img src="../src/img/svg_icon/feature_4.svg" alt="">
                        </div>
                        <h4>Email Marketing</h4>
                        <p>Esteem spirit temper too say adieus who direct esteem.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_feature">
                        <div class="icon">
                            <img src="../src/img/svg_icon/feature_5.svg" alt="">
                        </div>
                        <h4>Custom Software</h4>
                        <p>Esteem spirit temper too say adieus who direct esteem.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_feature">
                        <div class="icon">
                            <img src="../src/img/svg_icon/feature_6.svg" alt="">
                        </div>
                        <h4>Setup business goal</h4>
                        <p>Esteem spirit temper too say adieus who direct esteem.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ features_area  -->


    <?php
     /* testimonial_area */
    require_once("estructure/testimonials.php");
    /* testimonial_area */

    /* start footer */
    require_once("estructure/footer.php");
    /* end footer */
    
    ?>


</body>

</html>