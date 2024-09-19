<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <title>Welcome Page</title>
  </head>

  <body>
    
    <?php
    $username = "";
    if ( isset( $_GET["userName"] ) ){
      $userName = $_GET["userName"]
    }
    echo "<h1>Welcome ".$userName."!</h1>\n";
    echo "Seriously your name is actually ".$userName."? Like damn mb bro but I feel bad."
    ?>
  </body>
  
</html>
