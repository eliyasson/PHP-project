<!DOCTYPE html>
<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <link rel="stylesheet" href="tyylit.css">
  
 </head>
 <body>

    <div class="header">
        <h3> PHP Tehtävät 25 - 30</h3>
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
<!------------- TEHT 1 ---------------------------------------------->
      <h3> Tehtävä 25 </h3>
      <div><pre>
        &LTdiv class="pun">
        &LT?php
          $taulu = array(
            array("Nimi", "Koe 1", "Koe 2", "Koe 3", "Koe 4", "Yht.", "Arvosana"),
            array("Ykkönen Alli", 30, 40, 50, 60, 0, 0),
            array("Kakkonen Bertta", 40, 50, 60, 70, 0, 0),
            array("Kolmonen Carita", 50, 60, 70, 80, 0, 0)
          );

          $rowCount = count($taulu);
          $colCount = count($taulu[0]);

          for ($rivi = 0; $rivi < $rowCount; $rivi++) {
            for ($sarake = 0; $sarake < $colCount; $sarake++) {
              echo " " . $taulu[$rivi][$sarake] . " ";
            }
            echo;
          }
        ?>
      </pre></div>
      <div class="pun">
        <?php
          $taulu = array(
            array("Nimi", "Koe 1", "Koe 2", "Koe 3", "Koe 4", "Yht.", "Arvosana"),
            array("Ykkönen Alli", 30, 40, 50, 60, 0, 0),
            array("Kakkonen Bertta", 40, 50, 60, 70, 0, 0),
            array("Kolmonen Carita", 50, 60, 70, 80, 0, 0)
          );

          $rowCount = count($taulu);
          $colCount = count($taulu[0]);

          for ($rivi = 0; $rivi < $rowCount; $rivi++) {
            for ($sarake = 0; $sarake < $colCount; $sarake++) {
              echo " " . $taulu[$rivi][$sarake] . " ";
            }
            echo "<br>";
          }
        ?>
      </div>


    	  
<!------------- TEHT 1 ---------------------------------------------->	  
	  
<!------------- TEHT 2 ---------------------------------------------->
      <h3> Tehtävä 26 </h3>
      <div><pre>
        &LTdiv class="pun"> 
        &LT?php
          $numero = 10;

          while($numero >= 1) {
            echo "Numero on: $numero";
            $numero--;
          }
        ?>
      </pre></div>
      <div class="pun"> 
        <?php
          $numero = 10;

          while($numero >= 1) {
            echo "Numero on: $numero <br>";
            $numero--;
          }
        ?>
  </div>
	  
<!------------- TEHT 2 ---------------------------------------------->		  
	  
<!------------- TEHT 3 ---------------------------------------------->
      <h3> Tehtävä 27 </h3>
      <div><pre>
        &LTdiv class="pun">
        &LT?php
          $marjat = array(
            "soluA" => "Anthony",
            "soluB" => "Bertha",
            "soluC" => "Cecilia",
            "soluD" => "David",
            "soluE" => "Edward",
            "soluF" => "Felicia"
          );

          $kirjain = 'A';

          do {
            $nimi = "solu" . $kirjain;
            echo $marjat[$nimi] .;
            $kirjain++;
          } while ($kirjain <= 'F');
        ?>
      </pre></div>
      
      <div class="pun">
        <?php
          $marjat = array(
            "soluA" => "Anthony",
            "soluB" => "Bertha",
            "soluC" => "Cecilia",
            "soluD" => "David",
            "soluE" => "Edward",
            "soluF" => "Felicia"
          );

          $kirjain = 'A';

          do {
            $nimi = "solu" . $kirjain;
            echo $marjat[$nimi] . "<br>";
            $kirjain++;
          } while ($kirjain <= 'F');
        ?>
    </div>



	  
<!------------- TEHT 3 ---------------------------------------------->		  
	  
<!------------- TEHT 4 ---------------------------------------------->
    <h3> Tehtävä 28 </h3> 
    <div><pre>
      &LTdiv class="pun"> 
      &LT?php
      for ($numero = 0; $numero <= 10; $numero++) {
        echo "Näytetään numero $numero.";
        
        if ($numero >= 0 && $numero <= 4 || $numero >= 8 && $numero <= 10) {
          echo "Tämä näkyy.";
        }
        
        continue;
        echo "Tätä ei näytetä koskaan.";
      }
    ?>
    </pre></div>
    <div class="pun"> 
    <?php
      for ($numero = 0; $numero <= 10; $numero++) {
        echo "Näytetään numero $numero. <br>";
        
        if ($numero >= 0 && $numero <= 4 || $numero >= 8 && $numero <= 10) {
          echo "Tämä näkyy. <br>";
        }
        
        continue;
        echo "Tätä ei näytetä koskaan. <br>";
      }
    ?>
</div>

	  
<!------------- TEHT 4 ---------------------------------------------->		  
	  
<!------------- TEHT 5 ---------------------------------------------->
    <h3> Tehtävä 29 </h3>
    <div><pre>
      &LTdiv class="esimerkki">
      &LT?php
        function laske($R1, $R2, $R3) {
          $Rkok = 1 / (1 / $R1 + 1 / $R2 + 1 / $R3);
        
          echo "R1 - $R1 Ω";
          echo "R2 - $R2 Ω";
          echo "R3 - $R3 Ω";
          echo "Rkok - $Rkok Ω";
        }
        
        laske(100, 100, 100);
      ?>
    </pre></div>
    <div class="esimerkki">
      <?php
        function laske($R1, $R2, $R3) {
          $Rkok = 1 / (1 / $R1 + 1 / $R2 + 1 / $R3);
        
          echo "R1 - $R1 Ω<br>";
          echo "R2 - $R2 Ω<br>";
          echo "R3 - $R3 Ω<br>";
          echo "Rkok - $Rkok Ω";
        }
        
        laske(100, 100, 100);
      ?>
    </div>
	  
<!------------- TEHT 5 ---------------------------------------------->		  
	  
<!------------- TEHT 6 ---------------------------------------------->
    <h3> Tehtävä 30 </h3>
    <div><pre>
      &LTdiv  class="pun">
      &LT?php
        function laskeYmpyra($sade) {
          // Laske pinta-ala
          $pinta_ala = pi() * pow($sade, 2);
        
          // Laske kehän pituus
          $kehapiiri = 2 * pi() * $sade;
        
          echo "Ympyrän pinta-ala: $pinta_ala";
          echo "Ympyrän kehän pituus: $kehapiiri";
        }
        
        laskeYmpyra(5);
        
      ?>
    </pre></div>
    <div  class="pun">
      <?php
        function laskeYmpyra($sade) {
          // Laske pinta-ala
          $pinta_ala = pi() * pow($sade, 2);
        
          // Laske kehän pituus
          $kehapiiri = 2 * pi() * $sade;
        
          echo "Ympyrän pinta-ala: $pinta_ala<br>";
          echo "Ympyrän kehän pituus: $kehapiiri";
        }
        
        laskeYmpyra(5);
        
      ?>
    </div>
	  
<!------------- TEHT 6 ---------------------------------------------->		  
	  
	  
	  
    </div>
  </div>

  <div class="footer">
     <p>Eliyas Kassaye</p>
  </div>

 </body>
</html>