<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
          <li><a href="collapsible.html">Javascript</a></li>
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
    
    <h1 class="red-text">Calculator</h1>
    <div class="row">
      <form action="calculator.php" method="get">

         <div class="input-field col s6">
          <input name="num1"  id="num1" type="number" class="validate" required>
          <label for="num1">num1</label>
        </div>

         <div class="input-field col s6">
          <input name="num2"  type="number" id="num2"class="validate" required>
          <label for="num2">num2</label>
        </div>
       

        <div class="input-field col s6">
          <button class="btn waves-effect waves-light " type="submit" name="action">Calculate
          </button>
        </div>
        
        
      </form>
    </div>

    <?php
    echo  $_GET['num1']+$_GET['num2'];
    ?>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
  </body>
</html>