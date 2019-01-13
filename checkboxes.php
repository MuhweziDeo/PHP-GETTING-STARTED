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
        </ul>
      </div>
    </nav>
    <ul class="sidenav" id="mobile-demo">
      <li><a href="forms.php">forms</a></li>
      <li><a href="sass.html">Sass</a></li>
      <li><a href="badges.html">Components</a></li>
      <li><a href="collapsible.html">Javascript</a></li>
      
    </ul>
    
    <h1 class="red-text">Checkboxes</h1>
    <div class="row container">
      <form action="checkboxes.php" method="post">
        
        <p>
          <label>
            <input type="checkbox" name="fruits[]" value="apples" />
            <span>Apples</span>
          </label>
        </p>

          <p>
          <label>
            <input type="checkbox" name="fruits[]" value="oranges" />
            <span>oranges</span>
          </label>
        </p>


          <p>
          <label>
            <input type="checkbox" name="fruits[]" value="banana" />
            <span>banana</span>
          </label>
        </p>
        
        <div class="input-field col s3">
          <button class="btn waves-effect waves-light " type="submit" name="action">Generate
          </button>
        </div>
        
        
      </form>
    </div>
    
    <?php

    $fruits=$_POST["fruits"];
    print $fruits[0];
    
    
    ?>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
  </body>
</html>