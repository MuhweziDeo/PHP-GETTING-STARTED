<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>PHP</title>
  </head>
  <body>
    <nav>
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo">PHP</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">php</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="checkboxes.php">Checkboxes</a></li>
          <li><a href="arrays.php">arrays</a></li>
          <li><a href="madlibs.php">madlibs game</a></li>
          <li><a href="forms.php">forms</a></li>
          <li><a href="assocaite-arrays.php">assocaite arrays</a></li>
          <li><a href="functions.php">functions</a></li>
           <li><a href="if-statements.php">if-statements</a></li>
           <li><a href="comparison.php">comparsion</a></li>
        </ul>
      </div>
    </nav>
    <ul class="sidenav" id="mobile-demo">
      <li><a href="forms.php">forms</a></li>
      <li><a href="sass.html">Sass</a></li>
      <li><a href="badges.html">Components</a></li>
      <li><a href="collapsible.html">Javascript</a></li>
      
    </ul>
    
    <h1 class="red-text">If statements</h1>
    <div class="row container">

        
    </div>
    
    <?php

    $isMale=true;
    $isTall=true;

    if ($isMale && $isTall) {
      print "u are male and tall";
    }
    else{
       print "u are not female";
    }


   
    
    ?>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
  </body>
</html>