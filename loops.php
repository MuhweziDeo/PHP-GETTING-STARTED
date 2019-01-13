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
          <li><a href="madlibs.php">madlibs game</a></li>
          <li><a href="forms.php">forms</a></li>
          <li><a href="switch.php">forms</a></li>
          <li><a href="loops.php">loops</a></li>
        </ul>
      </div>
    </nav>
    <ul class="sidenav" id="mobile-demo">
      <li><a href="forms.php">forms</a></li>
      <li><a href="sass.html">Sass</a></li>
      <li><a href="badges.html">Components</a></li>
      <li><a href="collapsible.html">Javascript</a></li>
      
    </ul>
    
    <h1 class="red-text">Loops</h1>
    <div class="row">
      <form action="" method="POST">
         <div class="input-field col s6">
        
          <input name="grade"  id="num1" type="text" class="validate" required>
          <label for="num1">num1</label>
        </div>


        <div class="input-field col s6">
          <button class="btn waves-effect waves-light " type="submit" name="action">submit
          </button>
        </div>
        
        
      </form>
    </div>


    <?php
 
    // while loops
    $index=1;
    while ( $index<= 10) {
      print "$index <br>";

      $index++;
    }
    // do while loop
    do {
     print $index;
     $index++;
    } while ( $index<= 10);


    // for loops

    for ($i=0; $i <6 ; $i++) { 
      print "<p class='red-text'>$i</p><br>";
    }

    // loop over an array
    $luckyNumbers=array(2,5,3,7,9,11,55);

    for ($i=0; $i < count($luckyNumbers); $i++) { 

      print "$luckyNumbers[$i] <br>" ;
    }

    
    ?>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
  </body>
</html>