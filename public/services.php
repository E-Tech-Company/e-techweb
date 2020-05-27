<!--
******************************************************************
Autor: Inmar Cortez - inmarcortez2014@outlook.com 
E-Tech Company
CEO
Creado el: 04-01-2020 20:12:43
******************************************************************
-->

<?php
$titulo = "Servicios";
require_once("estructure/head.php");
?>


<body>

    <?php
    
    require_once("estructure/menu.php");
    
    ?>


    <!-- bradcam_area  -->
    <div class="bradcam_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Servicios</h3>
                        <nav class="brad_cam_lists">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Servicios</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /bradcam_area  -->


    <!-- features_area  -->
    <div class="features_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center">
                        <h3>Estos son los servicios que como <strong>E-Tech Company</strong> brindamos.</h3>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_feature">
                        <div class="icon">
                            <img src="../src/img/svg_icon/feature_1.svg" class="icono" alt="">
                        </div>
                        <h4 class="icono">Diseño personalizado</h4>
                        <p></p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_feature">
                        <div class="icon">
                            <img src="../src/img/svg_icon/feature_2.svg" class="icono" alt="">
                        </div>
                        <h4 class="icono">SEO (Posicionamiento en buscadores)</h4>
                        <p>.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_feature">
                        <div class="icon">
                            <img src="../src/img/svg_icon/feature_3.svg" class="icono" alt="">
                        </div>
                        <h4 class="icono">Global Search option</h4>
                        <p>.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_feature">
                        <div class="icon">
                            <img src="../src/img/svg_icon/feature_4.svg" class="icono" alt="">
                        </div>
                        <h4 class="icono">Email Marketing</h4>
                        <p>.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_feature">
                        <div class="icon">
                            <img src="../src/img/svg_icon/feature_5.svg" class="icono" alt="">
                        </div>
                        <h4 class="icono">Software personalizado</h4>
                        <p>.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_feature">
                        <div class="icon">
                            <img src="../src/img/svg_icon/feature_6.svg" class="icono" alt="">
                        </div>
                        <h4 class="icono">Establecer objetivo comercial</h4>
                        <p>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ features_area  -->


    <!-- start-footer -->
    <?php  require_once("estructure/footer.php"); ?>
    <!-- end-footer -->

</body>

</html>