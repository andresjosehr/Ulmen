<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Elmun S.A.</title>

    <!-- Favicon -->
    <link rel="icon" href="img/favicon2.ico">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">
      <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/4.13.0/bodymovin_light.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">



    <style>

        .link{
        color: white !important;
        stroke: white !important;
    }
    .node text {
        font: 20px sans-serif;
    }
    .elemento{
        color:white !important;
        stroke: white !important;
    }

        .heda .custom_container-fluid{
            padding-right: 70px;
            padding-left: 50px;
        }
        div .custom_single-hero-slide{
            height: 604px;
        }
        body .custom_welcome_area{
            height: 700px;
        }
    </style>

    <script>

      window.onload = function() {
        $(document).ready(function(){
          $('a[href^="#"]').on('click', function (e) {
            e.preventDefault();

            var target = this.hash;
            var $target = $(target);

            $('html, body').animate({
              'scrollTop': $target.offset().top
            }, 1000, 'swing');
          });
        });
      };
    </script>

</head>

<body>


    <!-- ***** Header Area Start ***** -->
    <header class="header_area clearfix">
        <div class="container-fluid h-100 custom_container-fluid">
            <div class="row h-100">
                <!-- Menu Area Start -->
                <div class="col-12 h-100">
                    <div class="menu_area h-100">
                        <nav class="navbar h-100 navbar-expand-lg align-items-center">
                            <!-- Logo -->
                            <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="logo"> <span style="color: white;font-size: 2rem;margin-left: 15px">Elmun S.A.</span></a>

                            <!-- Menu Area -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mosh-navbar" aria-controls="mosh-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                            <div class="collapse navbar-collapse justify-content-end" id="mosh-navbar">
                                <ul class="navbar-nav animated" id="nav">
                                    <li class="nav-item active"><a class="nav-link" href="index.php">Inicio</a></li>
<!--                                     <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="moshDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                                        <div class="dropdown-menu" aria-labelledby="moshDropdown">
                                            <a class="dropdown-item" href="index.html">Inicio</a>
                                            <a class="dropdown-item" href="about.html">Nosotros</a>
                                            <a class="dropdown-item" href="services.html">Servicios</a>
                                            <a class="dropdown-item" href="portfolio.html">Trabajos</a>
                                            <a class="dropdown-item" href="blog.html">Blog</a>
                                            <a class="dropdown-item" href="contact.html">Contacto</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="elements.html">Elements</a>
                                        </div>
                                    </li> -->
                                    <li class="nav-item"><a class="nav-link" href="#nosotros">Nosotros</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#servicios">Servicios</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#mision">Mision</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#productos">Productos</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
                                </ul>
                                <!-- Search Form Area Start -->
<!--                                 <div class="search-form-area animated">
                                    <form action="#" method="post">
                                        <input type="search" name="search" id="search" placeholder="Type keywords &amp; hit enter">
                                        <button type="submit" class="d-none"><img src="img/core-img/search-icon.png" alt="Search"></button>
                                    </form>
                                </div> -->
                                <!-- Search btn -->
<!--                                 <div class="search-button">
                                    <a href="#" id="search-btn"><img src="img/core-img/search-icon.png" alt="Search"></a>
                                </div> -->
                                <!-- Login/Register btn -->
<!--                                 <div class="login-register-btn">
                                    <a href="#">Login</a>
                                    <a href="#">/ Register</a>
                                </div> -->
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Welcome Area Start ***** -->
    <section class="welcome_area custom_welcome_area clearfix" id="home" style="background-image: url(img/slide1.png)">
            <!-- Single Hero Slides -->
                <div class="hero-slide-content text-center" style="    padding-top: 136px;">
                    <h2>Nanotecnología y picotecnología</h2>
                    <h4>Aplicada al mundo de aditivos para concretos</h4>
                    <div id="enlace_quimico" style="padding-top: 16px"></div>
                </div>

    </section>
    <!-- ***** Welcome Area End ***** -->
    <div id="nosotros" style="position: absolute;margin-top: -80px"></div>
    <!-- ***** Few Words Area Start ***** -->
    <section class="few-words-from-ceo d-md-flex">
        <div class="few-words-contents d-flex align-items-center justify-content-center wow fadeInLeftBig" data-wow-delay="0.1s">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-11 col-lg-9 col-xl-7">
                        <div class="few-words-text">
                            <div class="section-heading">
                                <p>Nosotros</p>
                                <h2>¿Quienes somos?</h2>
                            </div>
                            <p>Industrias <strong> ULMEN</strong> es una empresa dedicada a la fabricación y comercialización de aditivos para concretos y morteros con sede principal en Chile, sucursales en Perú, Europa y Sudáfrica.</p>
                            <div class="ceo-meta-data d-flex align-items-center mt-50">
                                <div class="ceo-thumb bg-img" style="background-image: url(img/logo.png);"></div>
                                <div class="ceo-name">
                                    <h6>Ulmen S.A.</h6>
                                    <!-- <p>Company CEO</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="few-words-thumb bg-img wow fadeInRightBig" data-wow-delay="1.1s" style="background-image: url(img/slide7.jpg);"></div>
    </section>
    <!-- ***** Few Words Area End ***** -->

        <!-- ***** Workflow Area Start ***** -->
    <section class="mosh-workflow-area section_padding_100_0 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mb-0">
                        <p>Logros</p>
                        <h2>Tenemos una linea de tiempo que define nuestro trabajo</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="workflow-img">
            <img src="img/core-img/work-progress.png" alt="">
        </div>

        <div class="workflow-slides-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="mosh-workflow-slides owl-carousel">
                            <!-- Single Service Area -->
                            <div class="single-workflow-area d-flex">
                                <h2>1.</h2>
                                <div class="workflow-content ml-15">
                                    <h4>Año 2000<h4>
                                    <p>Inicio de Industrias ULMEN S.A. en Chile. Compartimentar lo ignorado del cemento, introduciendo el mundo de la química al del concreto, nos permite generar reacciones químicas secuenciales distintas en magnitud y temporalidad, lo que determina.</p>
                                </div>
                            </div>
                            <!-- Single Service Area -->
                            <div class="single-workflow-area d-flex">
                                <h2>2.</h2>
                                <div class="workflow-content ml-15">
                                    <h4>Año 2004</h4>
                                    <p>Desde Diciembre 2004 a la fecha, abastecemos sin interrupciones, a la mina El TENIENTE. 2004 Marzo a octubre: ensayos de GAIA en Mina El Teniente. Aprobado en diciembre. Elimina la sílice.</p>
                                </div>
                            </div>
                            <!-- Single Service Area -->
                            <div class="single-workflow-area d-flex">
                                <h2>3.</h2>
                                <div class="workflow-content ml-15">
                                    <h4>Año 2006</h4>
                                    <p>- 2006 Award Issued- ene17,2006 INNOCENTIVE 2747504 Massachussets, USA.</p>
                                </div>
                            </div>
                            <!-- Single Service Area -->
                            <div class="single-workflow-area d-flex">
                                <h2>4.</h2>
                                <div class="workflow-content ml-15">
                                    <h4>Año 2007</h4>
                                    <p>- Innovar 2007 Argentina.- Premio por “Pangea”, Aditivo de sílice en escala nanométrica ideal para cementación de pozos petroleros, estabilizada y líquida.</p>
                                </div>
                            </div>
                            <div class="single-workflow-area d-flex">
                                <h2>5.</h2>
                                <div class="workflow-content ml-15">
                                    <h4>Año 2008</h4>
                                    <p>Después de 1 año y 9 meses de ensayos en laboratorios de cementación, aditivos nanotecnológicos son aplicados en pozos de petróleo / gas. El primer pozo tenía 6 kms de profundidad.</p>
                                </div>
                            </div>
                            <div class="single-workflow-area d-flex">
                                <h2>6.</h2>
                                <div class="workflow-content ml-15">
                                    <h4>Año 2010</h4>
                                    <p>- OLMOS 2010 Primera aproximación de aditivos ULMEN al shotcrete en Perú.</p>
                                </div>
                            </div>
                            <div class="single-workflow-area d-flex">
                                <h2>7.</h2>
                                <div class="workflow-content ml-15">
                                    <h4>Año 2011</h4>
                                    <p>Desde Diciembre 2011 a la fecha, abastecemos sin interrupciones, a la mina Horizonte. 2011 Colegio Ingenieros Lima: Nanotecnología en el concreto.</p>
                                </div>
                            </div>
                            <div class="single-workflow-area d-flex">
                                <h2>8.</h2>
                                <div class="workflow-content ml-15">
                                    <h4>Año 2012</h4>
                                    <p>9° Congreso Minería: Shotcretes Mineros</p>
                                </div>
                            </div>
                            <div class="single-workflow-area d-flex">
                                <h2>9.</h2>
                                <div class="workflow-content ml-15">
                                    <h4>Año 2013</h4>
                                    <p>eliminamos acelerante alcalino en Mina Horizonte. Inicio de la construcción de la Planta en Lima.</p>
                                </div>
                            </div>
                            <div class="single-workflow-area d-flex">
                                <h2>10.</h2>
                                <div class="workflow-content ml-15">
                                    <h4>Año 2014</h4>
                                    <p>Planta en Villa Salvador. Lima Capacidad productiva de 950 ton/mes.</p>
                                </div>
                            </div>
                            <div class="single-workflow-area d-flex">
                                <h2>11.</h2>
                                <div class="workflow-content ml-15">
                                    <h4>Año 2015</h4>
                                    <p>Iniciamos proceso de certificación ISO 9001-2015 para Ulmen Perú.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Service Area End ***** -->

        <section class="mosh-team-area section_padding_100" style="background-color: #211b31;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="section-heading text-center" style="margin-bottom: 0px">
                        <p>Nuestra distincion</p>
                        <h2 style="color: white">Es particularidad de ULMEN el diseño de aditivos específicos para cada aplicación.</h2>
                    </div>
                </div>
            </div>
          </div>
        </section>
    <div style="position: absolute;margin-top: -50px" id="servicios"></div>
    <!-- ***** Service Area Start ***** -->
    <section class="mosh-service-area clearfix" style="padding-bottom: 81px;padding-top: 70px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center" style="margin-bottom: 20px;">
                        <p>Servicios</p>
                        <h2>¿Qué ofrecemos?</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mosh-service-slides owl-carousel">
                        <!-- Single Service Area -->
                        <div class="single-service-area text-center">
                            <h2>01.</h2>
                            <h4>Almacén de aditivos</h4>
                            <img style="border-radius: 6%;" src="img/almacen.jpg" alt="">
                        </div>
                        <!-- Single Service Area -->
                        <div class="single-service-area text-center">
                            <h2>02.</h2>
                            <h4>Asesoría técnica</h4>
                            <img style="border-radius: 6%;" src="img/asesoria.jpg" alt="">
                        </div>
                        <!-- Single Service Area -->
                        <div class="single-service-area text-center">
                            <h2>03.</h2>
                            <h4>Capacitación CIP</h4>
                            <img style="border-radius: 6%;" src="img/capacitacion_cpi.jpg" alt="">
                        </div>
                        <!-- Single Service Area -->
                        <div class="single-service-area text-center">
                            <h2>04.</h2>
                            <h4>Capacitaciones concreteras</h4>
                            <img style="border-radius: 6%;" src="img/capacitacion_concretera.jpg" alt="">
                        </div>
                        <!-- Single Service Area -->
                        <div class="single-service-area text-center">
                            <h2>05.</h2>
                            <h4>Capacitaciones minería</h4>
                            <img style="border-radius: 6%;" src="img/capacitacion_mineria.jpg" alt="">
                        </div>
                        <div class="single-service-area text-center">
                            <h2>06.</h2>
                            <h4>Aditivos para morteros</h4>
                            <img style="border-radius: 6%;" src="img/desarrollo.jpg" alt="">
                        </div>
                        <!-- Single Service Area -->
                        <div class="single-service-area text-center">
                            <h2>07.</h2>
                            <h4>Producción y venta de aditivos</h4>
                            <img style="border-radius: 6%;" src="img/produccion.jpg" alt="">
                        </div>
                    </div>
                </div>
                <!-- Discover More btn -->
<!--                 <div class="col-12 text-center mt-100">
                    <a href="#" class="btn mosh-btn">Discover More</a>
                </div> -->
            </div>
        </div>
    </section>
    <!-- ***** Service Area End ***** -->


    <div style="position: absolute;margin-top: -50px" id="mision"></div>
    <!-- ***** Features Area Start ***** -->
    <section class="mosh-features-area section_padding_100 clearfix">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-12 col-md-6">
                    <div class="section-heading" style="margin-bottom: 0px;">
                        <h3 style="color: white">Misión</h3>
                    </div>
                    <div class="features-content">
                        <p>Eliminar la brecha de 10 años mencionada en 9° Congreso de Trujillo como diferencia con países vecinos en el ámbito minero. En las minas de Perú que atendemos, la brecha la hemos invertido: tienen mayor desarrollo acompañado de nuestro principal competidor: los costos</p>
                        <!-- Progress Bar Content Area -->
                    </div>
                    <br><br>
                    <div class="section-heading" style="margin-bottom: 0px;">
                        <h3 style="color: white">Visión</h3>
                    </div>
                    <div class="features-content">
                        <p>Eliminar la brecha de 10 años mencionada en 9° Congreso de Trujillo como diferencia con países vecinos en el ámbito minero. En las minas de Perú que atendemos, la brecha la hemos invertido: tienen mayor desarrollo acompañado de nuestro principal competidor: los costos</p>
                        <!-- Progress Bar Content Area -->
                    </div>
                        <!-- Progress Bar Content Area -->
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .features-img{
                margin-left: 8%;
                    margin-top: 17px;
                position: absolute;
            }
            .fa-chevron-left{
                  margin-left: -80px;
            }

            .fa-chevron-right{
              margin-right: -80px;
            }
        </style>
        <!-- Feature Thumb -->
        <div class="features-img">
            <?php include "animaciones/Quimica2/index.html"; ?>
        </div>
    </section>
    <!-- ***** Feature Area End ***** -->
<div style="position: absolute;margin-top: -50px" id="productos"></div>
    

     <div class="row" style="padding-top: 47px;margin-bottom: -61px;">
      <div class="col-12" align="center">
        <div class="section-heading">
          <p>Productos</p>
          <h2>Aditivos que implementamos</h2>
        </div>
      </div>
    </div>
    <!-- ***** Service Area Start ***** -->
    <section class="mosh-more-services-area d-sm-flex clearfix">
        <div class="single-more-service-area" data-toggle="modal" data-target="#Modal1" style="cursor: pointer;" onclick="a141()">
            <div class="more-service-content text-center wow fadeInUp" data-wow-delay=".1s">
                <i class="far fa-building" style="font-size: 70px;padding-bottom: 20px;color:#487bed"></i>
                <h4>A1-41</h4>
                <p>Multifuncional para alta densidad</p>
            </div>
        </div>
        <div class="single-more-service-area" data-toggle="modal" data-target="#Modal2" style="cursor: pointer;">
            <div class="more-service-content text-center wow fadeInUp" data-wow-delay=".4s">
                <i class="fas fa-wrench" style="font-size: 70px;padding-bottom: 20px;color:#487bed"></i>
                <h4>AR-125</h4>
                <p>Multifuncional para baja densidad</p>
            </div>
        </div>
        <div class="single-more-service-area" data-toggle="modal" data-target="#Modal3" style="cursor: pointer;">
            <div class="more-service-content text-center wow fadeInUp" data-wow-delay=".7s">
                <i class="fab fa-whmcs" style="font-size: 70px;padding-bottom: 20px;color:#487bed"></i>
                <h4>VPL-551</h4>
                <p>Retardador temperatura baja-media</p>
            </div>
        </div>
        <div class="single-more-service-area" data-toggle="modal" data-target="#Modal4" style="cursor: pointer;">
            <div class="more-service-content text-center wow fadeInUp" data-wow-delay="1s">
                <img src="img/core-img/presentation.png" alt="">
                <h4>VPL-553</h4>
                <p>Estabilizador</p>
            </div>
        </div>
    </section>
    <!-- ***** Service Area End ***** -->





        <!-- ***** Clients Area Start ***** -->
    <section class="mosh-clients-area section_padding_100 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <p>Clientes</p>
                        <h2>Empresas que aman nuestras tecnologias</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="clients-logo-area d-sm-flex align-items-center justify-content-between">
                        <a href="#"><img src="img/clients-img/1.png" alt=""></a>
                        <a href="#"><img src="img/clients-img/2.png" alt=""></a>
                        <a href="#"><img src="img/clients-img/3.png" alt=""></a>
                        <a href="#"><img src="img/clients-img/4.png" alt=""></a>
                        <a href="#"><img src="img/clients-img/5.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Clients Area End ***** -->

    <div style="position: absolute;margin-top: -50px" id="contacto"></div>

    <!-- ***** CTA Area Start ***** -->
    <section class="mosh-call-to-action-area bg-img bg-overlay section_padding_100" style="background-image: url(img/foot-img.jpeg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content text-center wow fadeIn" data-wow-delay="0.5s">
                        <div class="section-heading">
                            <p>Contactanos</p>
                            <h2>Estaremos complacidos de atender tus solicitudes</h2>
                            <a href="#" class="btn mosh-btn">Contactanos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** CTA Area End ***** -->

    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-area clearfix">
        <!-- Top Fotter Area -->
        <div class="top-footer-area section_padding_100_0">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-100">
                            <a href="#" class="mb-50 d-block"><img src="img/logo.png" alt=""></a>
                            <p>Elmun S.A</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-100">
                            <h5>Menu</h5>
                            <ul>
                                <li><a href="#">Inicio</a></li>
                                <li><a href="#">Nosotros</a></li>
                                <li><a href="#">Servicios</a></li>
                                <li><a href="#">Productos</a></li>
                                <li><a href="#">Contacto</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-100">
                            <h5>Blog</h5>
                            <div class="footer-single--blog-post">
                                <a href="#" class="blog-post-date">
                                    <p>23 September, 2017</p>
                                </a>
                                <a href="#" class="blog-post-title">
                                    <h6>Why we love stock photos</h6>
                                </a>
                            </div>
                            <div class="footer-single--blog-post">
                                <a href="#" class="blog-post-date">
                                    <p>22 September, 2017</p>
                                </a>
                                <a href="#" class="blog-post-title">
                                    <h6>Designin on grid. A few rules. </h6>
                                </a>
                            </div>
                            <div class="footer-single--blog-post">
                                <a href="#" class="blog-post-date">
                                    <p>20 September, 2017</p>
                                </a>
                                <a href="#" class="blog-post-title">
                                    <h6>2017 World Design Congress</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-100">
                            <h5>Informacion de contacto</h5>
                            <div class="footer-single-contact-info d-flex">
                                <div class="contact-icon">
                                    <img src="img/core-img/map.png" alt="">
                                </div>
                                <p>Chile: (56) 2 2545 0483 / (56) 2 2545 1643 
                                    Calle Lautaro N° 2430, La Pintana – Santiago de Chile 
                                    atencionalcliente@ulmen.cl </p>
                            </div>
                            <div class="footer-single-contact-info d-flex">
                                <div class="contact-icon">
                                    <img src="img/core-img/call.png" alt="">
                                </div>
                                <p>PERÚ 
                                    (01) 719 4126 CAL.4 Mza.C-1 Lote.2-F Coo. Las Vertientes Villa el Salvador 
                                    atencionalcliente@ulmen.cl </p>
                            </div>
                            <div class="footer-single-contact-info d-flex">
                                <div class="contact-icon">
                                    <img src="img/core-img/message.png" alt="">
                                </div>
                                <p>atencionalcliente@ulmen.cl </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fotter Bottom Area -->
        <div class="footer-bottom-area">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="footer-bottom-content h-100 d-md-flex justify-content-between align-items-center">
                            <div class="copyright-text">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                            </div>
                            <div class="footer-social-info">
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ***** Footer Area End ***** -->

<script src='https://cdnjs.cloudflare.com/ajax/libs/d3/3.4.13/d3.min.js'></script>
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    <script src="js/functions.js"></script>
    <?php include "modals.html" ?>
</body>

</html>

