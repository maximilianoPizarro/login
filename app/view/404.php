﻿<!DOCTYPE html>
<?php include 'header.php'; ?>

  <body class="ba-404">
    <noscript class="how-to">
      <a class="alert-spot alert-spot-danger text-center" href="http://www.enable-javascript.com/es/" target="_blank">
        Para utilizar las funcionalidades completas de este sitio es necesario tener
        JavaScript habilitado. Aquí están las instrucciones para habilitar JavaScript en tu navegador web.
      </a>
    </noscript>
    <a class="lt-ie9-alert alert-spot alert-spot-danger text-center" href="http://browsehappy.com/" target="_blank">
      Tu navegador no está actualizado. Tiene conocidas fallos de seguridad y podría no mostrar todas las características de este y otros sitios web.
      Aprendé cómo podes actualizarlo.
    </a>
    <header class="navbar navbar-primary navbar-top yamm">
      <div class="ba-navbar-top">
        <div class="container">
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle btn btn-primary btn-block btn-sm" data-toggle="collapse" data-target="#header-main-nav">
              <span>Menú principal</span>
              <span class="glyphicon glyphicon-chevron-down"></span>
            </button>
          </div>
          <nav class="collapse navbar-collapse" id="header-main-nav" role="navigation">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">La Ciudad <b class="caret"></b></a>
                <ul class="dropdown-menu">
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gobierno <b class="caret"></b></a>
                <ul class="dropdown-menu">
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Trámites <b class="caret"></b></a>
                <ul class="dropdown-menu">
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Red En todo estás Vos <b class="caret"></b></a>
                <ul class="dropdown-menu">
                </ul>
              </li>
              <div class="menu-divider"></div>
              <li><a href="#">Transparencia</a></li>
              <li><a href="#">Turismo</a></li>
              <li><a href="#">Noticias</a></li>
              <li><a href="#">Accesible</a></li>
              <li class="sub-brand sub-brand-ba"><a href="#">Entrar a <img src="../../../sugpa/bastrap3/ba-btn.png" class="glyphicon glyphicon-ba" /></a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
    <header class="jumbotron jumbotron-main jumbotron-small area-header" style="background-image:url(../../../sugpa/bastrap3/img/misc2.jpg);">
      <div class="jumbotron-overlay">
        <div class="container">
          <div class="area-title col-md-8 col-md-offset-2">
            <div class="status-icon status-icon-no"></div>
            <h1>Página no encontrada</h1>
            <p class="lead">La dirección web no está bien escrita o fue dada de baja.<br />
            Te invitamos a usar el buscador o explorar los vínculos.</p>
          </div>
        </div>
      </div>
    </header>
    <main class="main-container" role="main">
      <section class="search-xl">
        <div class="container">
          <form class="navbar-right" action="http://www.buenosaires.gob.ar/tramites" role="search">
            <input class="form-control input-xl" placeholder="¿Qué estas buscando?" type="text">
            <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
          </form>
        </div>
      </section>
      <div class="container">
        <section>
          <div class="row row-shortcut">
            <a class="col-md-3 col-sm-6 shortcut shortcut-tramite" href="http://www.buenosaires.gob.ar/tramites">
              <span class="bg-gray-3">
                <span class="glyphicon glyphicon-list-alt"></span>
              </span>
              <h3>Guía de trámites</h3>
              <p>Tramitá licencias, infracciones, documentos, casamientos y más.</p>
            </a>
            <a class="col-md-3 col-sm-6 shortcut" href="http://www.buenosaires.gob.ar/aplicaciones-moviles">
              <span>
                <span class="glyphicon glyphicon-shortcut-evoluciona"></span>
              </span>
              <h3>BA Evoluciona</h3>
              <p>Aplicaciones e iniciativas pensadas para construir el futuro de la Ciudad.</p>
            </a>
            <a class="col-md-3 col-sm-6 shortcut" href="http://www.buenosaires.gob.ar/redentodoestasvos">
              <span>
                <span class="glyphicon glyphicon-shortcut-vos"></span>
              </span>
              <h3>Red En todo estás Vos</h3>
              <p>La red de programas que incluye a todos los ciudadanos.</p>
            </a>
            <a class="col-md-3 col-sm-6 shortcut" href="http://www.buenosaires.gob.ar/ciudadverde">
              <span>
                <span class="glyphicon glyphicon-shortcut-verde"></span>
              </span>
              <h3>Ciudad Verde</h3>
              <p>Iniciativas y planes urbanos para cuidar juntos el planeta.</p>
            </a>
          </div>
        </section>
        <section class="pagina-enlaces">
          <div class="list-group list-group-content list-group-multi">
            <a href="#" class="col-md-4 list-group-item list-thumb" data-original-title="" title="">
              <h4>Mapa interactivo</h4>
              <p>Buscá direcciones, información de lugares y recorridos en transporte público.</p>
            </a>
            <a href="#" class="col-md-4 list-group-item list-thumb" data-original-title="" title="">
              <h4>Agenda cultural</h4>
              <p>Toda la oferta cultural de la Ciudad en un solo lugar.</p>
            </a>
            <a href="#" class="col-md-4 list-group-item list-thumb" data-original-title="" title="">
              <h4>Turismo</h4>
              <p>Eventos, recorridos, y toda la información para conocer la Ciudad.</p>
            </a>
          </div>
        </section>
      </div>
    </main>
    <?php include 'footer.php'; ?>
    <script src="../../../sugpa/bastrap3/jquery.min.js"></script>
    <script src="../../../sugpa/bastrap3/bootstrap.min.js"></script>
    <script src="../../../sugpa/bastrap3/assets/buenosaires.js"></script>
  </body>
</html>