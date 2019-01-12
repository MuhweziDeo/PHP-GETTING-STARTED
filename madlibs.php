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
          <li><a href="sass.html">Sass</a></li>
          <li><a href="badges.html">Components</a></li>
          <li><a href="madlibs.php">madlibs game</a></li>
          <li><a href="forms.php">forms</a></li>
        </ul>
      </div>
    </nav>
    <ul class="sidenav" id="mobile-demo">
      <li><a href="forms.php">forms</a></li>
      <li><a href="sass.html">Sass</a></li>
      <li><a href="badges.html">Components</a></li>
      <li><a href="collapsible.html">Javascript</a></li>
      
    </ul>
    
    <h1 class="red-text">MadLibs Game</h1>
    <div class="row">
      <form action="madlibs.php" method="get">
        <div class="input-field col s3">
          <input name="Color"  id="text-1" type="text" class="validate" required>
          <label for="text-1">Color</label>
        </div>
        <div class="input-field col s3">
          <input name="pluralNoun"  type="text" id="text-2"class="validate" required>
          <label for="text-2">PuralNoun</label>
        </div>
        <div class="input-field col s3">
          <input name="Celebrity"  type="text" id="text-3"class="validate" required>
          <label for="text-3">Celebrity</label>
        </div>
        
        <div class="input-field col s3">
          <button class="btn waves-effect waves-light " type="submit" name="action">Generate
          </button>
        </div>
        
        
      </form>
    </div>
    <?php
    $color=$_GET['Color'];

    $pluralNoun=$_GET['pluralNoun'];

    $celebrity=$_GET['Celebrity'];

    echo "<p class='$color-text'>Roses are $color <br></p>";

    echo "$PuralNoun are blue <br>";

    echo "i love $celebrity <br>";
    
    ?>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
  </body>
</html>