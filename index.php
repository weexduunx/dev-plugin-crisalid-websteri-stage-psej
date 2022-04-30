<?php
 include 'requete-article.php';
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Test API Crisalid Websteri | Stage PSEJ</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="images/favicon.png">

   <!-- Materialize CSS -->
   <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
   <!-- Materialize CSS -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=fr">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- Theme CSS Material -->
    <!-- <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_purple-pink.min.css"> -->
    <!-- <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.lime-light_green.min.css" /> -->
    <!-- <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_purple-purple.min.css" /> -->
    <!-- Theme CSS Material -->
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="theme/purple-pink.css">

    <style>
        #view-source {
        position: fixed;
        display: block;
        right: 0;
        bottom: 0;
        margin-right: 40px;
        margin-bottom: 40px;
        z-index: 900;
        }
    </style>
  </head>
  <body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header mdl-layout__header--scroll mdl-color--primary">
        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
        </div>
        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
          <h3>OBTENTION DES LISTES</h3>
        </div>
        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
        </div>
        <div class="mdl-layout__tab-bar mdl-js-ripple-effect mdl-color--primary-dark">
          <a href="#articles" class="mdl-layout__tab is-active">Liste des articles</a>
          <a href="#familles" class="mdl-layout__tab">Liste des familles</a>
          <a href="#features" class="mdl-layout__tab"></a>
          <a href="#features" class="mdl-layout__tab"></a>
          <a href="#features" class="mdl-layout__tab"></a>
          <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored mdl-shadow--4dp mdl-color--accent" id="add">
            <i class="material-icons" role="presentation">add</i>
            <span class="visuallyhidden">Add</span>
          </button>
        </div>
      </header>
      <main class="mdl-layout__content">
        <!-- articles tab -->
            <div class="mdl-layout__tab-panel is-active" id="articles">
                <section class="mdl-shadow--2dp">
                    <div class="mdl-card mdl-cell mdl-cell--12-col">
                    <h4 class="mdl-cell mdl-cell--12-col">Liste des articles</h4>
                        <?php
                            include 'flux_articles.php';
                        ?>                             
                    </div>
                </section>
            </div>
        <!-- articles tab -->

        <!-- familles tab -->
            <div class="mdl-layout__tab-panel" id="familles">
                <section class="mdl-shadow--2dp">
                    <div class="mdl-card mdl-cell mdl-cell--12-col">
                    <h4 class="mdl-cell mdl-cell--12-col">Liste des familles</h4>
                        <?php
                            require 'requete-famille.php';
                            include 'flux_familles.php';
                        ?>                             
                    </div>
                </section>
            </div>
        <!-- familles tab -->
      </main>
    </div>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    <script src="mdl/material.min.js"></script>
  </body>
</html>



