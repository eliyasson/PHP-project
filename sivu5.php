<!DOCTYPE html>
<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <link rel="stylesheet" href="tyylit.css">
  
 </head>
 <body>

    <div class="header">
        <h3> PHP Tehtävät 31 - 36</h3>
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
      <h3> Tehtävä 31 </h3>
      <div><pre>
        &LTdiv class="pun">
        &LT?php
            function etuNimi($nimi, $ika)
            {
              $vuosi = date("Y");
              $syntyvuosi = $vuosi - $ika;
            
              echo "$nimi Rupunen. Syntyi vuonna $syntyvuosi";
            }
            
            etuNimi("Tuomas", 25);
            etuNimi("Henri", 27);
            etuNimi("Petteri", 30);
            
          ?>
      </pre></div>
      <div class="pun">
        <?php
            function etuNimi($nimi, $ika)
            {
              $vuosi = date("Y");
              $syntyvuosi = $vuosi - $ika;
            
              echo "$nimi Rupunen. Syntyi vuonna $syntyvuosi<br>";
            }
            
            etuNimi("Tuomas", 25);
            etuNimi("Henri", 27);
            etuNimi("Petteri", 30);
            
          ?> 
      </div>

    	  
<!------------- TEHT 1 ---------------------------------------------->	  
	  
<!------------- TEHT 2 ---------------------------------------------->
      <h3> Tehtävä 32 </h3>
      <div><pre>
        &LTdiv class="pun">
        &LT?php
          $korkeus1 = 350;
          $korkeus2 = 50;
          $korkeus3 = 135;
          $korkeus4 = 80;
          function testiKorkeus($minimiKorkeus = 50)
          {
            echo "Korkeus on: $minimiKorkeus";
          }

          testiKorkeus($korkeus1);
          testiKorkeus($korkeus2);
          testiKorkeus($korkeus3);
          testiKorkeus($korkeus4);
        ?>
      </pre></div>
      <div class="pun">
        <?php
          $korkeus1 = 350;
          $korkeus2 = 50;
          $korkeus3 = 135;
          $korkeus4 = 80;
          function testiKorkeus($minimiKorkeus = 50)
          {
            echo "Korkeus on: $minimiKorkeus <br>";
          }

          testiKorkeus($korkeus1);
          testiKorkeus($korkeus2);
          testiKorkeus($korkeus3);
          testiKorkeus($korkeus4);
        ?>
      </div>

	  
<!------------- TEHT 2 ---------------------------------------------->		  
	  
<!------------- TEHT 3 ---------------------------------------------->
      <h3> Tehtävä 33 </h3>
      <div><pre>
        &LTdiv class="esimerkki koodisini">
        &LT?php
          function pyoristaLuku($luku) {
              $pyoristetty = floor($luku); 
              echo "Luku $luku on pyöristettynä $pyoristetty";
          }

          $luvut = array(2.35, 5.55, -101.2, -219.7);

          foreach ($luvut as $luku) {
              pyoristaLuku($luku);
          }
        ?>
      </pre></div>
      <div class="esimerkki koodisini">
        <?php
          function pyoristaLuku($luku) {
              $pyoristetty = floor($luku); 
              echo "Luku $luku on pyöristettynä $pyoristetty <br>";
          }

          $luvut = array(2.35, 5.55, -101.2, -219.7);

          foreach ($luvut as $luku) {
              pyoristaLuku($luku);
          }
        ?>

    </div>

	  
<!------------- TEHT 3 ---------------------------------------------->		  
	  
<!------------- TEHT 4 ---------------------------------------------->
    <h3> Tehtävä 34 </h3> 
    <div><pre>
      &LTdiv class="esimerkki">
      &LT?php
        $R1 = 10; 
        $R2 = 15; 
        $R3 = 20; 

        function parallelCalculation($R1, $R2, $R3)
        {
            $Rkok = 1 / (($R1 + 1) + ($R2+1) + ($R3+1));
            return $Rkok;
        }

        echo "Parallel connection resistance: " . parallelCalculation($R1, $R2, $R3) . " ohmia";
        ?>
    </pre></div>
    <div class="esimerkki">
      <?php
        $R1 = 10; 
        $R2 = 15; 
        $R3 = 20; 

        function parallelCalculation($R1, $R2, $R3)
        {
            $Rkok = 1 / (($R1 + 1) + ($R2+1) + ($R3+1));
            return $Rkok;
        }

        echo "Parallel connection resistance: " . parallelCalculation($R1, $R2, $R3) . " ohmia";
        ?>
      </div>
	  
<!------------- TEHT 4 ---------------------------------------------->		  
	  
<!------------- TEHT 5 ---------------------------------------------->
    <h3> Tehtävä 35 </h3>
    <div><pre>
      &LTdiv class="esimerkki">
      &LT?php
      function getFinnishDay($paiva) {
        switch ($paiva) {
          case 'Monday':
            return 'maanantai';
          case 'Tuesday':
            return 'tiistai';
          case 'Wednesday':
            return 'keskiviikko';
          case 'Thursday':
            return 'torstai';
          case 'Friday':
            return 'perjantai';
          case 'Saturday':
            return 'lauantai';
          case 'Sunday':
            return 'sunnuntai';
          default:
            return '';
        }
      }

      function getFinnishMonth($kuukausi) {
        switch ($kuukausi) {
          case 'January':
            return 'tammikuu';
          case 'February':
            return 'helmikuu';
          case 'March':
            return 'maaliskuu';
          case 'April':
            return 'huhtikuu';
          case 'May':
            return 'toukokuu';
          case 'June':
            return 'kesäkuu';
          case 'July':
            return 'heinäkuu';
          case 'August':
            return 'elokuu';
          case 'September':
            return 'syyskuu';
          case 'October':
            return 'lokakuu';
          case 'November':
            return 'marraskuu';
          case 'December':
            return 'joulukuu';
          default:
            return '';
        }
      }

      function haeTervehdys($aika) {
        $tunnit = (int) date('H', $aika);

        if ($tunnit >= 5 && $tunnit <= 9) {
          return 'Hyvää huomenta';
        } elseif ($tunnit >= 9 && $tunnit <= 14) {
          return 'Hyvää päivää';
        } elseif ($tunnit >= 14 && $tunnit <= 18) {
          return 'Hyvää iltapäivää';
        } elseif ($tunnit >= 18 && $tunnit <= 22) {
          return 'Hyvää iltaa';
        } else {
          return 'Rauhallista yötä';
        }
      }

      $nyt = time();
      $viikon = getFinnishDay(date('l', $nyt));
      $kuukausi = getFinnishMonth(date('F', $nyt));
      $pvm = date('j.', $nyt);
      $vuosi = date('Y', $nyt);
      $kello = date('H:i', $nyt);

      $tervehdys = haeTervehdys($nyt);

      echo $tervehdys .;
      echo "Kello on $kello, $viikon $pvm $kuukausi $vuosi";
      ?>
    </pre></div>
    <div class="esimerkki">
      <?php
      function day($paiva) {
        switch ($paiva) {
          case 'Monday':
            return 'maanantai';
          case 'Tuesday':
            return 'tiistai';
          case 'Wednesday':
            return 'keskiviikko';
          case 'Thursday':
            return 'torstai';
          case 'Friday':
            return 'perjantai';
          case 'Saturday':
            return 'lauantai';
          case 'Sunday':
            return 'sunnuntai';
          default:
            return '';
        }
      }

      function month($kuukausi) {
        switch ($kuukausi) {
          case 'January':
            return 'tammikuu';
          case 'February':
            return 'helmikuu';
          case 'March':
            return 'maaliskuu';
          case 'April':
            return 'huhtikuu';
          case 'May':
            return 'toukokuu';
          case 'June':
            return 'kesäkuu';
          case 'July':
            return 'heinäkuu';
          case 'August':
            return 'elokuu';
          case 'September':
            return 'syyskuu';
          case 'October':
            return 'lokakuu';
          case 'November':
            return 'marraskuu';
          case 'December':
            return 'joulukuu';
          default:
            return '';
        }
      }

      function haeTervehdys($aika) {
        $tunnit = (int) date('H', $aika);

        if ($tunnit >= 5 && $tunnit <= 9) {
          return 'Hyvää huomenta';
        } elseif ($tunnit >= 9 && $tunnit <= 14) {
          return 'Hyvää päivää';
        } elseif ($tunnit >= 14 && $tunnit <= 18) {
          return 'Hyvää iltapäivää';
        } elseif ($tunnit >= 18 && $tunnit <= 22) {
          return 'Hyvää iltaa';
        } else {
          return 'Rauhallista yötä';
        }
      }

      $nyt = time();
      $viikon = day(date('l', $nyt));
      $kuukausi = month(date('F', $nyt));
      $pvm = date('j.', $nyt);
      $vuosi = date('Y', $nyt);
      $kello = date('H:i', $nyt);

      $tervehdys = haeTervehdys($nyt);

      echo $tervehdys . "<br>";
      echo "Kello on $kello, $viikon $pvm $kuukausi $vuosi";
      ?>
</div>

	  
<!------------- TEHT 5 ---------------------------------------------->		  
	  
<!------------- TEHT 6 ---------------------------------------------->
    <h3> Tehtävä 36 </h3>
    <div class="esimerkki">
      <form action="laske1.php" method="POST"> 
      R1: <input type="text" name="R1"><br> 
      R2: <input type="text" name="R2"><br> 
      R3: <input type="text" name="R3"><br> 
      <input type="submit" value="Laske">
    </form>
  </div>
	  
<!------------- TEHT 6 ---------------------------------------------->		  
	  
	  
	  
    </div>
  </div>

  <div class="footer">
     <p>Eliyas Kassaye</p>
  </div>

 </body>
</html>