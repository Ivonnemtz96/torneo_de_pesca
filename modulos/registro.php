<?php 

if(isset($_REQUEST['submit']) and $_REQUEST['submit']!=""){
	extract($_REQUEST);

    if(($equipo=="")&($correo=="")&($telefono=="")){
		header('location: /?msg=equipo');
		exit;
        
	}else if($pescador1==""){
		header('location: /?msg=equipo-incompleto');
		exit;
	}else if($ciudad1==""){
		header('location: /?msg=equipo-incompleto');
		exit;
	}else if($pescador2==""){
		header('location: /?msg=equipo-incompleto');
		exit;
	}else if($ciudad2==""){
		header('location: /?msg=equipo-incompleto');
		exit;
	}else {
        
		require_once($_SERVER["DOCUMENT_ROOT"]."/modulos/mail.php");
		      
	   }
    
    } else { 
        header('location:/index.html');
        exit;
    }
    
?>
<!DOCTYPE html>
<html lang="es">

    
<head>
<meta charset="utf-8">
<title>2do Torneo de pesca deportivo</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">


<!-- Responsive File -->
<link href="css/responsive.css" rel="stylesheet">
<link href="css/espacios.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive Settings -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"><div class="icon"></div></div>

    <!-- Main Header -->
    <header class="main-header header-style-one">
        <div class="logo-desktop">
            <div class="logo"><a href="index.html"><img src="images/logo.png" alt="2do Torneo de pesca deportivo"></a></div>
        </div>
        <!-- Header Top -->
        <div class="header-top header-top-one">
            <div class="outer-container">
				<div class="inner clearfix">
                    <div class="top-left clearfix">
                        <!--Info-->
                        <div class="info">
                            <ul class="clearfix">
                                <li class="phone"><a href="tel:624 205 2495"><span class="icon fa fa-phone-alt"></span> 624 205 2495</a></li>
                                <li class="email"><a href="mailto:info@torneodepesca.com"><span class="icon fa fa-envelope"></span> info@torneodepesca.com</a></li>
                            </ul>
                        </div>

                        <div class="top-text"><span class="icon flaticon-surf-1"></span> Puerto San Carlos, Bahía Magdalena, B.C.S.</div>
                    </div>
    
                    
                </div>
            </div>
        </div>

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="outer-container">
                <div class="inner clearfix">
                    <!--Logo-->
                    <div class="logo-box">
                        <div class="logo"><a href="index.html"><img src="images/logo-two.png" alt="Sailing - Water Sports HTML Template" title="Sailing - Water Sports HTML Template"></a></div>
                    </div>
                    <div class="nav-content clearfix">
                        <div class="nav-outer clearfix">
                            <!--Mobile Navigation Toggler-->

                        </div>

                        <div class="other-links clearfix">
                            <!--Social Links-->
                            <div class="social-links social-links-one">
                                <ul class="clearfix">
                                    <li><a target="_blank" href="https://www.facebook.com/Torneo-la-Misi%C3%B3n-de-Magdalena-101978351223084/"><span class="fab fa-facebook-f"></span></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="index.html" title=""><img src="images/sticky-logo.png" alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="pull-right clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav><!-- Main Menu End-->

                    
                </div>
            </div>
        </div><!-- End Sticky Menu -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-targeting-cross"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="images/nav-logo.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
				<!--Social Links-->
				<div class="social-links">
					<ul class="clearfix">
						<li><a href="#"><span class="fab fa-twitter"></span></a></li>
						<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
						<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
						<li><a href="#"><span class="fab fa-instagram"></span></a></li>
						<li><a href="#"><span class="fab fa-youtube"></span></a></li>
					</ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->
    </header>
    <!-- End Main Header -->

    

   

<!--Page Title-->
    <section class="page-banner">
        <div class="image-layer" style="background-image:url(images/background/banner-1.jpg);"></div>

        <div class="banner-inner">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <h1>Registro de equipos</h1>
                    <div class="page-nav">
                        <ul class="bread-crumb clearfix">
                            <li><a href="index.html">Inicio</a></li>
                            <li>Registro</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Welcome Section-->
    <section class="welcome-section">
        <div class="auto-container">
            <div class="title-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                <h2>Gracias por registrar tu quipo <br><strong><?php echo $equipo; ?></strong></h2>
                <div class="text">Hemos recibido tu registro con éxito, por favor <b>realiza el pago de tu inscripción</b>. <br>Aquí tienes la información para los diferentes metodos de pago.</div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-80">
                    <div class="title-box wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1500ms">
                        <h4>A nombre de: <strong>Bahía Magdalena Estates S.A. de C.V.</strong></h4>
                        <div class="text mt-20"><h5>BBVA Bancomer</h5></div>
                        <p><b>Cuenta pesos: </b>0148892148</p>
                        <p><b>Clabe interbancaria: </b>012045001488921481</p>
                        <p><b>Tarjeta de débito: </b>4555 1130 0085 1149 <br><i>(Déposito en Oxxo)</i></p>
                        <h5 class="mt-50">Envía tu comprobante por messenger a <a target="_blank" href="https://www.facebook.com/Torneo-la-Misi%C3%B3n-de-Magdalena-101978351223084/">Nuestra página de Facbook</a> con el nombre de tu equipo, también puedes hacerlo por <a href="https://api.whatsapp.com/send?phone=526242052495">WhatsApp 624 205 2495</a> con <b>Abraham Torres</b></h5>
                    </div>
                </div>
            
                <!--Price Column-->
                <div class="price-column col-md-6 mt-120  wow fadeInUp" data-wow-delay="1000ms" data-wow-duration="1500ms">
                    <div class="price-block">
                        <div class="inner-box">
                            <div class="plan-header">
                                <h4 class="plan-title">Bahía Magdalena</h4>
                                <div class="subtitle">Los días 21 y 22 de noviembre</div>
                                <div class="price">
                                    <span class="sign">$</span>
                                    <span class="amount">3,000</span>
                                    <span class="cycle">/ MXN</span>
                                </div>
                                <div class="best-title"><span> Costo por equipos de máximo 4 personas en pre-inscripción.</span></div>
                                <div class="subtitle"><i><b>Despúes del 1ro de Noviembre el costo será de $3,500</b></i></div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <?php 
                    if (($embarcacion=="")) {
                        ?>
                        <div class="col-md-12 mt-80">
                            <div class="title-box wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1500ms">
                                <h4>¿Necesitas <strong>embarcación</strong>?</h4>
                                <p>Llámanos al: 624 205 2495 o escríbenos por WhatsApp con <b>Abraham Torres</b></p>
                            </div>
                        </div>
                       
                        <?php 
                        
                    }
                ?>
                
                
            </div>
            

        </div>
    </section>

    <!--About Section-->
    

    

    <!-- Main Footer -->
    <footer class="main-footer">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="auto-container">
                <div class="row justify-content-center clearfix">
                    
                    
                    <!--Column-->
                    <div class="column col-md-6 col-sm-12">
                        <div class="footer-widget gallery-widget">
                            <div class="widget-title">
                                <h4>Galería</h4>
                            </div>
                            <div class="widget-content">
                                <div class="images clearfix">
                                    <figure class="image">
                                        <img src="images/gallery/gallery-thumb-1.jpg" alt="">
                                        <a class="lightbox-image" href="images/gallery/01.JPG" data-fancybox="gallery"><span class="icon flaticon-cross"></span></a>
                                    </figure>
                                    <figure class="image">
                                        <img src="images/gallery/gallery-thumb-2.jpg" alt="">
                                        <a class="lightbox-image" href="images/gallery/02.JPG" data-fancybox="gallery"><span class="icon flaticon-cross"></span></a>
                                    </figure>
                                    <figure class="image">
                                        <img src="images/gallery/gallery-thumb-3.jpg" alt="">
                                        <a class="lightbox-image" href="images/gallery/03.JPG" data-fancybox="gallery"><span class="icon flaticon-cross"></span></a>
                                    </figure>
                                    <figure class="image">
                                        <img src="images/gallery/gallery-thumb-4.jpg" alt="">
                                        <a class="lightbox-image" href="images/gallery/04.JPG" data-fancybox="gallery"><span class="icon flaticon-cross"></span></a>
                                    </figure>
                                    <figure class="image">
                                        <img src="images/gallery/gallery-thumb-5.jpg" alt="">
                                        <a class="lightbox-image" href="images/gallery/05.JPG" data-fancybox="gallery"><span class="icon flaticon-cross"></span></a>
                                    </figure>
                                    <figure class="image">
                                        <img src="images/gallery/gallery-thumb-6.jpg" alt="">
                                        <a class="lightbox-image" href="images/gallery/06.JPG" data-fancybox="gallery"><span class="icon flaticon-cross"></span></a>
                                    </figure>
                                    <figure class="image">
                                        <img src="images/gallery/gallery-thumb-7.jpg" alt="">
                                        <a class="lightbox-image" href="images/gallery/7.jpeg" data-fancybox="gallery"><span class="icon flaticon-cross"></span></a>
                                    </figure>
                                    <figure class="image">
                                        <img src="images/gallery/gallery-thumb-9.jpg" alt="">
                                        <a class="lightbox-image" href="images/gallery/09.jpeg" data-fancybox="gallery"><span class="icon flaticon-cross"></span></a>
                                    </figure>
                                    <figure class="image">
                                        <img src="images/gallery/gallery-thumb-10.jpg" alt="">
                                        <a class="lightbox-image" href="images/gallery/10.jpeg" data-fancybox="gallery"><span class="icon flaticon-cross"></span></a>
                                    </figure>
                                    <figure class="image">
                                        <img src="images/gallery/gallery-thumb-11.jpg" alt="">
                                        <a class="lightbox-image" href="images/gallery/11.jpeg" data-fancybox="gallery"><span class="icon flaticon-cross"></span></a>
                                    </figure>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="inner clearfix">
                    <div class="text-center">2do Torneo de pesca deportivo - La Misión de Magdalena 2020 - Sitio web creado por <a target="_blank" href="https:bananagroup.mx">Banana Group</a></div>
                    
                </div>
            </div>
        </div>
        
    </footer>

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon flaticon-back"></span></div>

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/owl.js"></script>
<script src="js/appear.js"></script>
<script src="js/wow.js"></script>
<script src="js/scrollbar.js"></script>
<script src="js/validate.js"></script>
<script src="js/element-in-view.js">
</script><script src="js/custom-script.js"></script>

</body>

<!-- Mirrored from st.ourhtmldemo.com/new/sailing-demo/index.html by HTTrack Website Copier/3.x [XR&CO'2017], Thu, 11 Jun 2020 20:14:11 GMT -->
</html>