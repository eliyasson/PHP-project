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
      <div><pre>
        &LTdiv class="pun">
        &LT?php
          $sade = 5;
          echo "Säde on: " . $sade . ;
          $ympyran_keha = 2 * pi() * $sade;
          $ympyran_keha = number_format($ympyran_keha, 2,',', ' ');
          echo "Ympyrän kehä: " . $ympyran_keha .;

          // Ympyrän pinta-alan laskeminen
          $ympyran_pintaala = pi() * pow($sade, 2);
          $ympyran_pintaala = number_format($ympyran_pintaala, 2,',', ' ');
          echo "Ympyrän pinta-ala: " . $ympyran_pintaala .;

          // Pallon tilavuuden laskeminen
          $pallon_tilavuus = (4/3) * pi() * pow($sade, 3);
          $pallon_tilavuus = number_format($pallon_tilavuus, 2,',', ' ');
          echo "Pallon tilavuus: " . $pallon_tilavuus;
        ?> 
        <a href="http://tietokanta.dy.fi/ohjelmointi/uusi_opiPHP/sivu3.php" target="_blank">Lue tehtävä klikkaamalla linkkiä...</a>
      </pre></div>
        
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
      <div><pre>
        &LTdiv class="pun" >
        &LT?php
          $num1 = 10;
          $num2 = 9;

          $tulos1 = -$num2 + $num1;
          $tulos2 = -$num1 + $num2;

          echo "Luku $num1 vähennettynä luvulla $num2 on: $tulos1";
          echo "Luku $num2 vähennettynä luvulla $num1 on: $tulos2";

        ?>
        <a href="http://tietokanta.dy.fi/ohjelmointi/uusi_opiPHP/sivu3.php" target="_blank">Lue tehtävä klikkaamalla linkkiä...</a>
      </pre></div>
        
      <div class="pun" >
        <?php
          $num1 = 10;
          $num2 = 9;

          $tulos1 = -$num2 + $num1;
          $tulos2 = -$num1 + $num2;

          echo "Luku $num1 vähennettynä luvulla $num2 on: $tulos1<br>";
          echo "Luku $num2 vähennettynä luvulla $num1 on: $tulos2";

        ?>
      </div>
	  
<!------------- TEHT 14 ---------------------------------------------->		  
	  
<!------------- TEHT 15 ---------------------------------------------->
      <h3> Tehtävä 15 </h3>
      <div><pre>
        &LTdiv class="pun">
        LT?php
          $luku1 = 50;
          $luku2 = 100;

          if ($luku1 >= 50 && $luku1 < 100) {
            echo "Luku 1 on 50 tai suurempi kuin 100";
          }

          if ($luku2 > 100) {
            echo "Luku 2 on suurempi kuin 100";
          }
        ?>
        <a href="http://tietokanta.dy.fi/ohjelmointi/uusi_opiPHP/sivu3.php" target="_blank">Lue tehtävä klikkaamalla linkkiä...</a>
      </pre></div>
        
      <div class="pun">
        <?php
          $luku1 = 50;
          $luku2 = 100;

          if ($luku1 >= 50 && $luku1 < 100) {
            echo "Luku 1 on 50 tai suurempi kuin 100<br>";
          }

          if ($luku2 > 100) {
            echo "Luku 2 on suurempi kuin 100";
          }
        ?>

    </div>

	  
<!------------- TEHT 15 ---------------------------------------------->		  
	  
<!------------- TEHT 16 ---------------------------------------------->
    <h3> Tehtävä 16 </h3> 
   <div><pre>
    &LTdiv class="pun">
      &LT?php
        $otsikko1 = "Be Strong And Courageous";
        $otsikko2 = "Humble Yourself";

        $teksti1 = "Have I not commanded you? Be strong and courageous.Do not be afraid; do not be discouraged, 
          for the LORD your God will be with you wherever you go.";
        $teksti2 = "Therefore humble yourselves under the mighty hand of God, that He may exalt you at the proper time, 
          casting all your anxiety on Him, because He cares for you.";
        
        $kokoteksti = $otsikko1 . $teksti1 . $otsikko2 . $teksti2;
        
        echo $kokoteksti;
      ?>
   </pre></div>

    <div class="pun">
      <?php
        $otsikko1 = "<h3>Be Strong And Courageous</h3>";
        $otsikko2 = "<h3>Humble Yourself</h3>";
        
        $teksti1 = "<p>Have I not commanded you? Be strong and courageous.</p>
                    <p>Do not be afraid; do not be discouraged, for the LORD your God will be with you wherever you go.</p>";
        
        $teksti2 = "<p>Therefore humble yourselves under the mighty hand of God,</p>
                    <p>that He may exalt you at the proper time, casting all your anxiety on Him, because He cares for you.</p>";
        
        $kokoteksti = $otsikko1 . $teksti1 . $otsikko2 . $teksti2;
        
        echo $kokoteksti;
      ?>

    </div>
	  
<!------------- TEHT 16 ---------------------------------------------->		  
	  
<!------------- TEHT 17 ---------------------------------------------->
    <h3> Tehtävä 17 </h3>
   <div><pre>
    &LTdiv class="esimerkki">
      &LT?php
        $pisteet = 212;

        if ($pisteet >= 0 && $pisteet <= 118) {
          $arvosana = 0;
        } elseif ($pisteet >= 119 && $pisteet <= 212) {
          $arvosana = 1;
        } elseif ($pisteet >= 213 && $pisteet <= 305) {
          $arvosana = 2;
        } elseif ($pisteet >= 306 && $pisteet <= 400) {
          $arvosana = 3;
        } else {
          $arvosana = "Virhe!";
        }

        echo "Kokonaispisteet: " . $pisteet .;
        echo "Arvosana: " . $arvosana;

      ?>
   </pre></div>

    <div class="esimerkki">
      <?php
        $pisteet = 212;

        if ($pisteet >= 0 && $pisteet <= 118) {
          $arvosana = 0;
        } elseif ($pisteet >= 119 && $pisteet <= 212) {
          $arvosana = 1;
        } elseif ($pisteet >= 213 && $pisteet <= 305) {
          $arvosana = 2;
        } elseif ($pisteet >= 306 && $pisteet <= 400) {
          $arvosana = 3;
        } else {
          $arvosana = "Virhe!";
        }

        echo "Kokonaispisteet: " . $pisteet . "<br>";
        echo "Arvosana: " . $arvosana;

      ?>
    </div>
	  
<!------------- TEHT 17 ---------------------------------------------->		  
	  
<!------------- TEHT 18 ---------------------------------------------->
    <h3> Tehtävä 18 </h3>
    <div><pre>
      &LTdiv  class="CSSTableGenerator">
      &LT?php
        $eka_taulu = 
        array (
          array('Matti Markkanen', 85, 91, 78, 92, 50),
          array('Maija Laitinen', 67, 52, 80, 60, 30),
          array('Jukka Järvinen', 50, 69, 57, 61, 49)
        );

        for ($rivi = 0; $rivi < 3; $rivi++){
        echo "<tr>";
        $yhteispisteet = 0;
        for($sarake = 0; $sarake < 6; $sarake++){
        echo "<td>". $eka_taulu[$rivi][$sarake]. "</td>";
        $yhteispisteet += $eka_taulu[$rivi][$sarake];
        }
        $arvosana = 0;
        if ($yhteispisteet < 120) {
        $arvosana = 0;
        } elseif ($yhteispisteet <= 120 || $yhteispisteet < 175.9) {
        $arvosana = 1;
        } elseif ($yhteispisteet <= 176 || $yhteispisteet < 231.9) {
        $arvosana = 2;
        } elseif ($yhteispisteet <= 232 || $yhteispisteet < 287.9) {
        $arvosana = 3;
        } elseif ($yhteispisteet <= 288 || $yhteispisteet < 343.9) {
        $arvosana = 4;
        }elseif ($yhteispisteet <= 344 || $yhteispisteet <= 400) {
          $arvosana = 5;
        } else {
        $arvosana = "Virhe!";
        }

        }

      ?>

    </pre></div>

    <div  class="CSSTableGenerator">
      <?php
        $eka_taulu = 
        array (
          array('Matti Markkanen', 85, 91, 78, 92, 50),
          array('Maija Laitinen', 67, 52, 80, 60, 30),
          array('Jukka Järvinen', 50, 69, 57, 61, 49)
        );

        echo "<table><tr>
                <th>Nimi</th>
                <th>Koe 1</th>
                <th>Koe 2</th>
                <th>Koe 3</th>
                <th>Koe 4</th>
                <th>Koe 5</th>
                <th>Yhteispisteet</th>
                <th>Arvosana</th>
          </tr>";


        for ($rivi = 0; $rivi < 3; $rivi++){
        echo "<tr>";
        $yhteispisteet = 0;
        for($sarake = 0; $sarake < 6; $sarake++){
        echo "<td>". $eka_taulu[$rivi][$sarake]. "</td>";
        $yhteispisteet += $eka_taulu[$rivi][$sarake];
        }
        $arvosana = 0;
        if ($yhteispisteet < 120) {
        $arvosana = 0;
        } elseif ($yhteispisteet <= 120 || $yhteispisteet < 175.9) {
        $arvosana = 1;
        } elseif ($yhteispisteet <= 176 || $yhteispisteet < 231.9) {
        $arvosana = 2;
        } elseif ($yhteispisteet <= 232 || $yhteispisteet < 287.9) {
        $arvosana = 3;
        } elseif ($yhteispisteet <= 288 || $yhteispisteet < 343.9) {
        $arvosana = 4;
        }elseif ($yhteispisteet <= 344 || $yhteispisteet <= 400) {
          $arvosana = 5;
        } else {
        $arvosana = "Virhe!";
        }
        echo "<td>" . $yhteispisteet . "</td>";
        echo "<td>" . $arvosana . "</td>";
        echo"</tr>";
        }
        echo"</table>";

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