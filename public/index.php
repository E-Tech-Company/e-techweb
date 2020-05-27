<!--
******************************************************************
Autor: Inmar Cortez - inmarcortez2014@outlook.com 
E-Tech Company
CEO
Creado el: 03-01-2020 20:31:09
******************************************************************
-->
<?php

/* Definiendo variables generales */
$titulo = "Home";
require_once("estructure/head.php");

?>

<body>

    <!-- header-start -->
    <?php require_once("estructure/menu.php") ?>
    <!-- header-end -->

    <div class="shap_big_2 d-none d-lg-block">
        <img src="../src/img/ilstrator/body_shap_2.png" alt="">
    </div>
    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="shap_img_1 d-none d-lg-block">
            <img src="../src/img/ilstrator/body_shap_1.png" alt="">
        </div>
        <div class="poly_img">
            <img src="../src/img/ilstrator/poly.png" alt="">
        </div>
        <div class="single_slider  d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-10 offset-xl-1">
                        <div class="slider_text text-center">
                            <div class="text">
                                <h3>
                                    E-Tech Company
                                </h3>
                                <a class="boxed-btn3" href="#">Empezemos</a>
                            </div>
                            <div class="ilstrator_thumb">
                                <img src="../src/img/ilstrator/illustration.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- service_area  -->
    <div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="single_service text-center">
                        <div class="icon">
                            <img src="../src/img/svg_icon/seo_1.svg" alt="">
                        </div>
                        <h3>Seguro</h3>
                        <a href="#" class="boxed-btn3-text">Saber más</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_service text-center">
                        <div class="icon">
                            <img src="../src/img/svg_icon/seo_2.svg" alt="">
                        </div>
                        <h3>Calidad Garantizada</h3>
                        <a href="#" class="boxed-btn3-text">Saber más</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_service text-center">
                        <div class="icon">
                            <img src="../src/img/svg_icon/seo_3.svg" alt="">
                        </div>
                        <h3>Disponibilidad</h3>
                        <a href="#" class="boxed-btn3-text">Saber más</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--/ service_area  -->

    <!-- compapy_info  -->
    <div class="compapy_info">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-md-5">
                    <div class="man_thumb">
                        <img src="../src/img/ilstrator/man.png" alt="">
                    </div>
                </div>
                <div class="col-xl-7 col-md-7">
                    <div class="company_info">
                        <h3>Somos una empresa que se especializa en diseñar y desarrollar soluciones para mejorar tu
                            negocio.</h3>
                        <p></p>

                        <a href="#" class="boxed-btn3">Saber más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ compapy_info  -->

    <!-- case_study_area  -->
    <div class="case_study_area case_bg_1">
        <div class="patrn_1 d-none d-lg-block">
            <img src="../src/img/pattern/patrn_1.png" alt="">
        </div>
        <div class="patrn_2 d-none d-lg-block">
            <img src="../src/img/pattern/patrn.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-95 white_text">
                        <h3>¿Qué hacemos?</h3>
                        <p>Prestamos servicios de desarrollo digital y soporte informático a medida, con el objetivo de
                            satisfacer necesidades profesionales a través de las nuevas tecnologías: reducción de
                            tiempos, mejora de procesos, ahorro económico, etc.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="case_active owl-carousel">
                        <div class="single_study text-center">
                            <div class="thumb">
                                <a href="#">
                                    <img src="../src/img/case_study/1.png" alt="">
                                </a>
                            </div>
                            <div class="subheading">
                                <h4><a href="#">Consultoría informática</a></h4>
                                <p>Nuestros profesionales ponen nuestra alta experiencia al servicio del Cliente para
                                    asistirle con las mejores opciones a implantar.</p>
                            </div>
                        </div>
                        <div class="single_study text-center">
                            <div class="thumb">
                                <a href="#">
                                    <img src="../src/img/case_study/2.png" alt="">
                                </a>
                            </div>
                            <div class="subheading">
                                <h4><a href="#">Desarrollo de Software</a></h4>
                                <p>Desarrollo de productos o en proyectos para la obtención de aplicaciones a medida de
                                    las necesidades de nuestros clientes.</p>
                            </div>
                        </div>
                        <div class="single_study text-center">
                            <div class="thumb">
                                <a href="#">
                                    <img src="../src/img/case_study/seo.jpg" alt="">
                                </a>
                            </div>
                            <div class="subheading">
                                <h4><a href="#">Social Media</a></h4>
                                <p>Manejo de redes sociales para una comunicación más efectiva con las audiencias, que
                                    ayuda a fortalecer la lealtad del cliente.</p>
                            </div>
                        </div>
                        <div class="single_study text-center">
                            <div class="thumb">
                                <a href="#">
                                    <img src="../src/img/case_study/3.png" alt="">
                                </a>
                            </div>
                            <div class="subheading">
                                <h4><a href="#">Aplicaciones Móviles</a></h4>
                                <p>Aprovecha la oportunidad de llegar a las millones de personas que ya usan
                                    dispositivos móviles en todo el mundo.</p>
                            </div>
                        </div>
                        <div class="single_study text-center">
                            <div class="thumb">
                                <a href="#">
                                    <img src="../src/img/case_study/1.png" alt="">
                                </a>
                            </div>
                            <div class="subheading">
                                <h4><a href="#">Gestión y Mantenimiento</a></h4>
                                <p>Estudio de las necesidades del cliente, pasando por el diseño de su infraestructura
                                    tecnológica, implantación y posterior soporte y mantenimiento informático de su red.
                                </p>
                            </div>
                        </div>
                        <div class="single_study text-center">
                            <div class="thumb">
                                <a href="#">
                                    <img src="../src/img/case_study/2.png" alt="">
                                </a>
                            </div>
                            <div class="subheading">
                                <h4><a href="#">Servicios Web</a></h4>
                                <p>El número de sitios y páginas web crece constantemente asi los clientes o el público
                                    puedan encontrarte fácilmente entre todos los sitios de nuestra competencia</p>
                            </div>
                        </div>
                        <div class="single_study text-center">
                            <div class="thumb">
                                <a href="#">
                                    <img src="../src/img/case_study/seo.jpg" alt="">
                                </a>
                            </div>
                            <div class="subheading">
                                <h4><a href="#">SEO (Posicionamiento en buscadores)</a></h4>
                                <p>Que tu empresa u organización tenga una presencia web es algo imprescindible hoy en
                                    día, pero ya no es suficiente</p>
                            </div>
                        </div>
                        <div class="single_study text-center">
                            <div class="thumb">
                                <a href="#">
                                    <img src="../src/img/case_study/4.png" alt="">
                                </a>
                            </div>
                            <div class="subheading">
                                <h4><a href="#">Help desk</a></h4>
                                <p>Disponer de ayuda inmediata para resolver cualquier cuestión tecnológica, y hacerlo
                                    de la mano de profesionales del sector.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ case_study_area  -->

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
                        <h3>Tenemos algunas características increíbles para mejorar su negocio</h3>
                        <p>Estas son algunas de ellas.<br></p>
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

    <!-- start-testimonials -->
    <?php  require_once("estructure/testimonials.php"); ?>
    <!-- end-testimonials -->

    <!-- start-footer -->
    <?php  require_once("estructure/footer.php"); ?>
    <!-- end-footer -->

</body>

</html>