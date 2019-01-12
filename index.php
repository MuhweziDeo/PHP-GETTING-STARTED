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
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html">Sass</a></li>
    <li><a href="badges.html">Components</a></li>
    <li><a href="collapsible.html">Javascript</a></li>
    <li><a href="mobile.html">Mobile</a></li>
  </ul>



    <?php
    // echo "<h1>dee<h1/>";
    // echo "there was once named a man $characterName <br>";
    // echo "he was $characterAge years old <br>";
    // $characterName='dee';
    // echo "really liked the name $characterName <br>";
    // echo "but he didnt like being $characterAge <br>";

    // variables
    // string
    $characterName="John";
    // int
    $characterAge=45;
    // float
    $gpa=4.4444;
    // boolean
    $is_active=flase;

    // null value
    null;

    echo "$is_active <br>";


    $myName="muhwezi";
    // convert to upper case
    echo strtoupper("$myName <br>");
    // convert to uppercase
    echo strtolower("MUHWEZI <br>");

    // prints length of a strinf
    echo strlen($myName);
    echo "<br>";
    // index 
     echo "<br>";
    // replace index
    $myName[0]="d";
    echo $myName;
    echo "<br>";
    // replace string
    echo str_replace("wezi", "aggrey", $myName);

    // get a subtring
    echo substr($myName, 3);


  
    
    ?>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
</body>

</html>