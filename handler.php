<!DOCTYPE html>
<html>
  <head>
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
      <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
      <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
      <link rel="manifest" href="./site.webmanifest">
      <link rel="mask-icon" href="./safari-pinned-tab.svg" color="#5bbad5">
      <meta name="msapplication-TileColor" content="#da532c">
      <meta name="theme-color" content="#ffffff">
      <meta name="viewport" content="width = device-width, initial-scale = 1">
      <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
      <link rel="manifest" href="./site.webmanifest">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <title>Welcome Page</title>
  </head>

  <body>
    <button id="demo-menu-lower-left" class="mdl-button mdl-js-button mdl-button--icon">
      <i class="material-icons">more_vert</i>
    </button>
    
    <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect"
    for="demo-menu-lower-left">
    <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect"
    for="demo-menu-lower-left">
    <p href="/1-7-php-form-handling-Bryson-Mazzarello/index.html" class="mdl-menu__item">Go back to first page</p>
    <li disabled class="mdl-menu__item">Another Action</li>
    <li disabled class="mdl-menu__item">Disabled Action</li>
    <li disabled class="mdl-menu__item">Yet Another Action</li>
    </ul>

    <p>Hello, trying to see if this will make the handler load no matter what.</p>
    
    <?php
    $userName = "";
    if ( isset( $_GET["userName"] ) ){
      $userName = $_GET["userName"]
    }
    echo "<h1>Welcome ".$userName."!</h1>\n";
    echo "Seriously your name is actually".$userName."? Like damn mb bro but I feel bad.";
    ?>
  </body>
  
</html>
