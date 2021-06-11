<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arriendo de apartamentos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- <link href="<?php echo base_url()?>/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="<?php echo base_url()?>/css/form_style_login.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/css/apartment_style.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/css/styles.css">
</head>
<body class="text-center background">
    <header class="mb-auto sticky-top">
        <nav class="navbar navbar-expand-lg navbar-dark bg">
            <div class="container-fluid">
                <a class="navbar-brand" href="http://localhost/WebApartamentos/public/">Arrendamientos</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav mx-auto">
                        <a class="nav-link text-white" aria-current="page" href="http://localhost/WebApartamentos/public/">Home</a>
                        <a class="nav-link text-white" href="#">Features</a>
                    </div>
                    <!-- <a class="nav-link text-white" href="<?php echo base_url()?>/login"><i class="fas fa-user"></i> Login</a> -->
                    <ul class="navbar-nav mr-3">
                        <li class="nav-item dropdown">
                            <?php if(strlen($username) > 0):?>
                                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-user m-1"></i><?php echo($username)?>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                    <li><a class="dropdown-item text-white" href="<?php echo base_url()?>/my-apartments">Mis Apartamentos</a></li>
                                    <li><a class="dropdown-item text-white" href="<?php echo base_url()?>/profile">Perfil</a></li>
                                    <li><a class="dropdown-item text-white" href="<?php echo base_url()?>/logout">cerrar sesion</a></li>
                                </ul>
                                <?php else:?>
                                    <a class="nav-link text-white" href="<?php echo base_url()?>/login">Iniciar Sesion</a>
                            <?php endif;?>
                            
                        </li>
                    </ul>
                </div>  
            </div>
        </nav>
    </header>