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

    // STRINGS
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



    // NUMBERS
    echo 40;
    echo "<br>";
    echo -30;
    echo "<br>";
    echo 40.22;
    echo "<br>";
    echo 40+22;
    echo "<br>";
    echo 40%3;
    echo "<br>";
    echo (4+44)*9;
    echo "<br>";

    $num=10;
    $num++;
    $num--;
    $num+=25;
    $num*+25;
    echo $num;
    echo "<br>";

   // get absolute num
   echo abs(-800);
   echo "<hr>";

   // get a number to the power
   echo pow(8, 2);

  echo "<hr>";
// square root
   echo sqrt(64);

  echo "<hr>";
   // max
   echo max(2,10);

  echo "<hr>";
   // min
   echo min(44,11);

  echo "<hr>";

  // round a number
  echo round(45.44);

  echo "<hr>"; 

  // round up

  echo ceil(4.1);


  echo "<hr>";

  // round a number down
  echo floor(4.9);

    
    ?>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
</body>

</html>