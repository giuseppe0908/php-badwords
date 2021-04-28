<!-- Creare una variabile con un paragrafo di testo. Visualizzare
a schermo il paragrafo con la relative lunghezza e sostituire
 la badword passata in GET con tre * -->
<?php
 $text="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
 $badword = $_GET['nome'];
 $title = "Benvenuto questo è il mio primo progetto in php";
 $array = ["alfonzo","fabio","turuzzu"];
 ?>
  <link rel="stylesheet" href="./master.css">
  <h1><?php echo $title ?></h1>
 <p id="blue"><?php echo $text ?></p>

 <div class="">
  <p id="green"> i caratteri del testo sono: <?php echo strlen($text);?> </p>
  <p id="red"> <?php  echo str_replace($badword, '***', $text);?>  </p>
 </div>
