<!DOCTYPE html>
<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <link rel="stylesheet" href="tyylit.css">
  
 </head>
 <body>

    <div class="header">
        <h3> PHP Tehtävät 13 - 18</h3>
    </div>

   <div class="row">

        <div class="col-3 col-s-3 menu">
          <ul>
            <a href="index.php" id="viiva"><li> Tehtävät  1 -  6 </li></a>
            <a href="sivu1.php" id="viiva"><li> Tehtävät  7 - 12 </li></a>
            <a href="sivu2.php" id="viiva"><li> Tehtävät 13 - 18 </li></a>
            <a href="sivu3.php" id="viiva"><li> Tehtävät 19 - 24 </li></a>
            <a href="sivu4.php" id="viiva"><li> Tehtävät 25 - 30 </li></a>
            <a href="sivu5.php" id="viiva"><li> Tehtävät 31 - 36 </li></a>
            <a href="sivu6.php" id="viiva"><li> Tehtävät 37 - 42 </li></a>
          </ul>
        </div>

    <div class="col-9 col-s-9">
<!------------- TEHT 13 ---------------------------------------------->
      <h3> Tehtävä 13 </h3>
      ?php
          $sade = 5 ;<br>
          echo "Säde on: " . $sade . ;<br>
          $ympyran_keha = 2 * pi() * $sade ;<br>
          $ympyran_keha = number_format($ympyran_keha, 2,',', ' ') ;<br>
          echo "Ympyrän kehä: " . $ympyran_keha . ;<br>

          $ympyran_pintaala = pi() * pow($sade, 2) ;<br>
          $ympyran_pintaala = number_format($ympyran_pintaala, 2,',', ' ') ;<br>
          echo "Ympyrän pinta-ala: " . $ympyran_pintaala . ;<br>

          $pallon_tilavuus = (4/3) * pi() * pow($sade, 3) ;<br>
          $pallon_tilavuus = number_format($pallon_tilavuus, 2,',', ' ') ;<br>
          echo "Pallon tilavuus: " . $pallon_tilavuus ;<br>
        ?> 
      <div class="pun">
        <?php
          $sade = 5;
          echo "Säde on: " . $sade . "<br>";
          $ympyran_keha = 2 * pi() * $sade;
          $ympyran_keha = number_format($ympyran_keha, 2,',', ' ');
          echo "Ympyrän kehä: " . $ympyran_keha . "<br>";

          // Ympyrän pinta-alan laskeminen
          $ympyran_pintaala = pi() * pow($sade, 2);
          $ympyran_pintaala = number_format($ympyran_pintaala, 2,',', ' ');
          echo "Ympyrän pinta-ala: " . $ympyran_pintaala . "<br>";

          // Pallon tilavuuden laskeminen
          $pallon_tilavuus = (4/3) * pi() * pow($sade, 3);
          $pallon_tilavuus = number_format($pallon_tilavuus, 2,',', ' ');
          echo "Pallon tilavuus: " . $pallon_tilavuus;
        ?> 
      </div>

    	  
<!------------- TEHT 13 ---------------------------------------------->	  
	  
<!------------- TEHT 14 ---------------------------------------------->
      <h3> Tehtävä 14 </h3>
      <div class="koodi" id="vari1">
        <?php
          
        ?>
      </div>
	  
<!------------- TEHT 14 ---------------------------------------------->		  
	  
<!------------- TEHT 15 ---------------------------------------------->
      <h3> Tehtävä 15 </h3>
      <div class="esimerkki koodisini">
        <?php
          
        ?>
    </div>

	  
<!------------- TEHT 15 ---------------------------------------------->		  
	  
<!------------- TEHT 16 ---------------------------------------------->
    <h3> Tehtävä 16 </h3> 
    <div class="esimerkki">
      <?php
        
      ?>

    </div>
	  
<!------------- TEHT 16 ---------------------------------------------->		  
	  
<!------------- TEHT 17 ---------------------------------------------->
    <h3> Tehtävä 17 </h3>
    <div class="esimerkki">
      <?php

      ?>
    </div>
	  
<!------------- TEHT 17 ---------------------------------------------->		  
	  
<!------------- TEHT 18 ---------------------------------------------->
    <h3> Tehtävä 18 </h3>
    <div  class="koodisini">
      <?php
        
      ?>
    </div>
	  
<!------------- TEHT 18 ---------------------------------------------->		  
	  
	  
	  
    </div>
  </div>

  <div class="footer">
     <p>Eliyas Kassaye</p>
  </div>

 </body>
</html>