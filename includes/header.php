<?php

session_start();
define("APPURL", "http://localhost/ecommerce");

?>

<!DOCTYPE html>
<html>
<head>
    <title>Tecnochapas El Paisa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="<?php echo APPURL; ?>/assets/fonts/sb-bistro/sb-bistro.css" rel="stylesheet" type="text/css">
    <link href="<?php echo APPURL; ?>/assets/fonts/font-awesome/font-awesome.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" media="all" href="<?php echo APPURL; ?>/assets/packages/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo APPURL; ?>/assets/packages/o2system-ui/o2system-ui.css">
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo APPURL; ?>/assets/packages/owl-carousel/owl-carousel.css">
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo APPURL; ?>/assets/packages/cloudzoom/cloudzoom.css">
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo APPURL; ?>/assets/packages/thumbelina/thumbelina.css">
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo APPURL; ?>/assets/packages/bootstrap-touchspin/bootstrap-touchspin.css">
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo APPURL; ?>/assets/css/theme.css">

</head>
<body>
    <div class="page-header">
        <!--=============== Navbar ===============-->
        <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-transparent" id="page-navigation">
            <div class="container">
                <!-- Navbar Brand -->
                <a href="index.html" class="navbar-brand">
                    <img src="<?php echo APPURL; ?>/assets/img/logo/logoSinFondo.png" alt="IMAGEN">
                </a>

                <!-- Toggle Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarcollapse">
                    <!-- Navbar Menu -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="<?php echo APPURL;?>/shop.php" class="nav-link">Compras</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo APPURL;?>/faq.php" class="nav-link">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo APPURL;?>/contact.php" class="nav-link">Contacto</a>
                        </li>

                        <?php if(!isset($_SESSION['username'])) : ?>

                            <li class="nav-item">
                                <a href="<?php echo APPURL; ?>/auth/register.php" class="nav-link">Registro</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo APPURL; ?>/auth/login.php" class="nav-link">Ingresar</a>
                            </li>

                        <?php else : ?>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="avatar-header"><img src="<?php echo APPURL; ?>/assets/img/logo/<?php echo $_SESSION['image']; ?>"></div> <?php echo ucwords($_SESSION['fullname']); ?>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo APPURL; ?>/transaction.php">Transacciones</a>
                                    <a class="dropdown-item" href="<?php echo APPURL; ?>/setting.php">Configuración</a>
                                    <a class="dropdown-item" href="<?php echo APPURL; ?>/auth/logout.php">Salir</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="cart.html" class="nav-link" data-toggle="" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-shopping-basket"></i> <span class="badge badge-primary">5</span>
                                </a>
                            
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>

            </div>
        </nav>
    </div>