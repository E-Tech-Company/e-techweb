<!--
******************************************************************
Autor: Inmar Cortez - inmarcortez2014@outlook.com 
E-Tech Company
CEO
Creado el: 05-01-2020 14:45:47
******************************************************************
-->

<?php

$titulo = "Casos de Estudio";
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
                        <h3>Casos de Exito</h3>
                        <nav class="brad_cam_lists">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Casos de Exito</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /bradcam_area  -->

    <!-- case_study_area  -->
    <div class="case_study_area white_case_study">
        <div class="patrn_1 d-none d-lg-block">
            <img src="../src/img/pattern/patrn_1.png" alt="">
        </div>
        <div class="patrn_2 d-none d-lg-block">
            <img src="../src/img/pattern/patrn.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_study text-center white_single_study">
                        <div class="thumb">
                            <a href="Case_details.html">
                                <img src="../src/img/case_study/1.png" alt="">
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
                            <a href="Case_details.html">
                                <img src="../src/img/case_study/2.png" alt="">
                            </a>
                        </div>
                        <div class="subheading white_subheading">
                            <h4><a href="Case_details.html">Custom Website</a></h4>
                            <p>UI/UX, Design</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_study text-center white_single_study">
                        <div class="thumb">
                            <a href="Case_details.html">
                                <img src="../src/img/case_study/3.png" alt="">
                            </a>
                        </div>
                        <div class="subheading white_subheading">
                            <h4><a href="Case_details.html">Digital Marketing</a></h4>
                            <p>UI/UX, Design</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_study text-center white_single_study">
                        <div class="thumb">
                            <a href="Case_details.html">
                                <img src="../src/img/case_study/4.png" alt="">
                            </a>
                        </div>
                        <div class="subheading white_subheading">
                            <h4><a href="Case_details.html">Product Design</a></h4>
                            <p>UI/UX, Design</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_study text-center white_single_study">
                        <div class="thumb">
                            <a href="Case_details.html">
                                <img src="../src/img/case_study/5.png" alt="">
                            </a>
                        </div>
                        <div class="subheading white_subheading">
                            <h4><a href="Case_details.html">Custom Website</a></h4>
                            <p>UI/UX, Design</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_study text-center white_single_study">
                        <div class="thumb">
                            <a href="Case_details.html">
                                <img src="../src/img/case_study/6.png" alt="">
                            </a>
                        </div>
                        <div class="subheading white_subheading">
                            <h4><a href="Case_details.html">Digital Marketing</a></h4>
                            <p>UI/UX, Design</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ case_study_area  -->

    <!-- testimonial_area  -->
    <?php
    
    require_once("estructure/testimonials.php");
    
    ?>
    <!-- /testimonial_area  -->

    <!-- footer start -->
    <?php
        
        require_once("estructure/footer.php");
        
        ?>
    <!-- footer end -->

</body>

</html>