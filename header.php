<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Famigerado blog</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">

        <?php wp_head(); ?>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
    </head>

    <body>

    <!-- NAVBAR -->
    <div class="navbar-fixed"> 
          
          <nav class="grey darken-4 z-depth-0 ">
              <div class="nav-wrapper container">
                  <img src="<?php echo get_template_directory_uri(); ?>/logo.png" id="logo" class="brand-logo left">
                  <ul class="right hide-on-med-and-down">
                    <li><a class="texto_navbar" href="#section1">Nossos produtos</a></li>
                    <li><a class="texto_navbar" href="#section2">Portifólio</a></li>
                    <li><a class="texto_navbar" href="#section3">Sobre nós</a></li>
                    <li><a class="texto_navbar" href="#section4">Curiosidades</a></li>
                    <li><a class="texto_navbar" href="#section5">Sobre a byron</a></li>
                  </ul>
                  <!-- Ícone de Menu Mobile -->
                  <a href="#" data-target="slide-out" class="sidenav-trigger right"><i class="material-icons">menu</i></a>
              </div> 
          </nav>
        </div> 

        <!-- Menu Mobile -->
        <ul id="slide-out" class="sidenav">
          <li><a href="#section1">Nossos produtos</a></li>
          <li><a href="#section2">Portifólio</a></li>
          <li><a href="#section3">Sobre nós</a></li>
          <li><a href="#section4">Curiosidades</a></li>
          <li><a href="#section5">Sobre a byron</a></li>
        </ul>

     <!-- HEADER -->  
    
     <header >  
         <div id="div_img_header">
            <img src="<?php echo get_template_directory_uri(); ?>/fundo_header.jpg" id="img_header">
        </div>
        <div id="div_texto_header">
            <p id="texto_header">Bem vindo ao glob, o blog</p>
        </div>
       
    </header>