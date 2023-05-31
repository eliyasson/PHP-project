<!DOCTYPE html>
<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <link rel="stylesheet" href="tyylit.css">
  
 </head>
 <body>

    <div class="header">
        <h3> PHP Tehtävät 19 - 24</h3>
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
<!------------- TEHT 19 ---------------------------------------------->
      <h3> Tehtävä 19 </h3>
      <div><pre>
        &LTdiv class="pun">
        &LT?php
          $LUKU_1 = 12;
          $LUKU_2 = 14;
          $LUKU_3 = 16;

          if ($LUKU_2 >= 14) {
            $summa1 = $LUKU_1 + $LUKU_2;
            echo "LUKU_1 + LUKU_2 = " . $summa1 .;
            
            $summa2 = $LUKU_2 + $LUKU_3;
            echo "LUKU_2 + LUKU_3 = " . $summa2 .;
            
            $summa3 = $LUKU_1 + $LUKU_3;
            echo "LUKU_1 + LUKU_3 = " . $summa3 .;
          }
        ?>
        <a href="http://tietokanta.dy.fi/ohjelmointi/uusi_opiPHP/sivu4.php" target="_blank">Lue tehtävä klikkaamalla linkkiä...</a>
      </pre></div>
      <div class="pun">
      <?php
        $LUKU_1 = 12;
        $LUKU_2 = 14;
        $LUKU_3 = 16;

        if ($LUKU_2 >= 14) {
          $summa1 = $LUKU_1 + $LUKU_2;
          echo "LUKU_1 + LUKU_2 = " . $summa1 . "<br>";
          
          $summa2 = $LUKU_2 + $LUKU_3;
          echo "LUKU_2 + LUKU_3 = " . $summa2 . "<br>";
          
          $summa3 = $LUKU_1 + $LUKU_3;
          echo "LUKU_1 + LUKU_3 = " . $summa3 . "<br>";
        }
      ?>
 
      </div>

    	  
<!------------- TEHT 19 ---------------------------------------------->	  
	  
		  
	  
<!------------- TEHT 20 ---------------------------------------------->
      <h3> Tehtävä 20 </h3>
      <div><pre>
        &LTdiv class="esimerkki koodisini">
        &LT?php
          $tulos = 123;

          switch ($tulos) {
              case 123:
                  echo "Tulos on 123";
                  break;
              case 234:
                  echo "Tulos on 234";
                  break;
              case 456:
                  echo "Tulos on 456";
                  break;
              case 567:
                  echo "Tulos on 567";
                  break;
              default:
                  echo "Tulos ei vastaa mitään odotettua arvoa.";
                  break;
          }
        ?>

      </pre></div>
      <div class="esimerkki koodisini">
        <?php
          $tulos = 123;

          switch ($tulos) {
              case 123:
                  echo "Tulos on 123";
                  break;
              case 234:
                  echo "Tulos on 234";
                  break;
              case 456:
                  echo "Tulos on 456";
                  break;
              case 567:
                  echo "Tulos on 567";
                  break;
              default:
                  echo "Tulos ei vastaa mitään odotettua arvoa.";
                  break;
          }
        ?>

    </div>

	  
<!------------- TEHT 20 ---------------------------------------------->		  
<!------------- TEHT 21 ---------------------------------------------->
      <h3> Tehtävä 21 </h3>
      <div><pre>
        &LTdiv class="koodi" id="vari1">
        &LT?php
          for ($kertaa = 10; $kertaa >= 1; $kertaa--) {
              echo "Numero on: $kertaa  ";
          }
        ?>
      </pre></div>
      <div class="koodi" id="vari1">
        <?php
          for ($kertaa = 10; $kertaa >= 1; $kertaa--) {
              echo "Numero on: $kertaa <br> ";
          }
        ?>

      </div>
	  
<!------------- TEHT 21 ---------------------------------------------->
<!------------- TEHT 22 ---------------------------------------------->
    <h3> Tehtävä 22 </h3> 
    <div><pre>
      &LTdiv class="esimerkki">
      &LT?php
        for ($i = 0; $i <= 500; $i += 50) {
            echo $i .;
        }
      ?>
    </pre></div>
    <div class="esimerkki">
      <?php
        for ($i = 0; $i <= 500; $i += 50) {
            echo $i . "<br>";
        }
      ?>
    </div>
	  
<!------------- TEHT 4 ---------------------------------------------->		  
	  
<!------------- TEHT 5 ---------------------------------------------->
    <h3> Tehtävä 23 </h3>
    <div><pre>
      &LTdiv class="pun">
      &LT?php
        $aakkoset = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "Å", "Ä", "Ö");
        $taulukoko = count($aakkoset);

        for($i = 0; $i < $taulukoko; $i++) {
          echo $aakkoset[$i];
          echo;
        }
      ?>
    </pre></div>
    <div class="pun">
      <?php
        $aakkoset = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "Å", "Ä", "Ö");
        $taulukoko = count($aakkoset);

        for($i = 0; $i < $taulukoko; $i++) {
          echo $aakkoset[$i];
          echo "<br>";
        }
      ?>
</div>

	  
<!------------- TEHT 5 ---------------------------------------------->		  
	  
<!------------- TEHT 6 ---------------------------------------------->
    <h3> Tehtävä 24 </h3>
    <div><pre>
      &LTdiv class="pun">
      &LT?php
        $aakkoset = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "Å", "Ä", "Ö");
        $taulukoko = count($aakkoset);
        $kirjaimiaRivilla = 5;
        $rivienMaara = ceil($taulukoko / $kirjaimiaRivilla);

        for($rivi = 0; $rivi < $rivienMaara; $rivi++) {
          $alku = $rivi * $kirjaimiaRivilla;
          $loppu = min($alku + $kirjaimiaRivilla, $taulukoko);
          
          for($i = $alku; $i < $loppu; $i++) {
            echo $aakkoset[$i] . " ";
          }
          
          echo;
        }
      ?>
    </pre></div>
    <div class="pun">
      <?php
        $aakkoset = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "Å", "Ä", "Ö");
        $taulukoko = count($aakkoset);
        $kirjaimiaRivilla = 5;
        $rivienMaara = ceil($taulukoko / $kirjaimiaRivilla);

        for($rivi = 0; $rivi < $rivienMaara; $rivi++) {
          $alku = $rivi * $kirjaimiaRivilla;
          $loppu = min($alku + $kirjaimiaRivilla, $taulukoko);
          
          for($i = $alku; $i < $loppu; $i++) {
            echo $aakkoset[$i] . " ";
          }
          
          echo "<br>";
        }
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