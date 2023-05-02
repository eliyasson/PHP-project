<!DOCTYPE html>
<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <link rel="stylesheet" href="tyylit.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
    span {
        font-size: 20px;
        font-family: 'Open Sans', sans-serif;
        color: #333;
    }
  </style>
  
 </head>
 <body>

    <div class="header">
        <h3> PHP Tehtävät  1 - 6</h3>
    </div>

   <div class="row">

        <div class="col-3 col-s-3 menu">
          <ul>
            <a href="index.php" id="viiva"><li> Tehtävät  1 - 6 </li></a>
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
      <h3> Tehtävä 1 </h3>
        ?php
              echo "Hyvää päivä! Tämä on ensimmäinen PHP-kodi.</span>";<br>
              echo "Tässä on tehtävän 1 ratkaisu.</span>";
        ?><br>
        <a href="http://tietokanta.dy.fi/ohjelmointi/uusi_opiPHP/sivu1.php" target="_blank">Lue tehtävä klikkaamalla linkkiä...</a>
      <div class="koodi" id="vari1">
        <?php
            echo "<span id='vari2'> Hyvää päivä! Tämä on ensimmäinen PHP-kodi.</span><br>";
            echo "Tässä on tehtävän 1 ratkaisu.</span>";
          ?> 
      </div>

    	  
<!------------- TEHT 1 ---------------------------------------------->	  
	  
<!------------- TEHT 2 ---------------------------------------------->
      <h3> Tehtävä 2 </h3>
      
        ?php
            $teksti1 = "Jukolan talo sijaitsee eteläisessä Hämeessä.  
            Karhunmetsästyksessä kuollut isäntä on jättänyt talon viljelykset hunningolle, 
            emäntä on jäänyt huolehtimaan talosta seitsemän poikansa kanssa. Veljeksistä vanhin on Juhani, 
            seuraavaksi tulevat kaksoset Tuomas ja Aapo, Simeoni sekä kaksoset Timo ja Lauri. 
            Veljessarjan nuorin on nimeltään Eero. Nuorena pojat olivat välillä aika vallattomia.";<br>

            $teksti2 = "Kerran, Eeron vielä ollessa äitinsä helmoissa kotona, 
            kuusi vanhinta veljestä varasti naapurista kananmunia ja karkasi sitten metsään. 
            Karkulaisten elämä metsässä kesti muutaman päivän ennen kuin äiti apujoukkoineen löysi heidät.  
            Seurasi kova löylytys.";<br>

            $otsikko1 = "<h4>Veljeksiä seitsemän</h4>";
            $otsikko2 = "<h4>Porukalla kosimaan</h4>";
            echo "$otsikko1 <p style='color:slateblue'>$teksti1</p> $otsikko2 <p style='color:slateblue'>$teksti2</p>";
          ?><br>
          <a href="http://tietokanta.dy.fi/ohjelmointi/uusi_opiPHP/sivu1.php" target="_blank">Lue tehtävä klikkaamalla linkkiä...</a>
      <div class="koodi" id="vari1">
        <?php
          $teksti1 = "Jukolan talo sijaitsee eteläisessä Hämeessä.  
          Karhunmetsästyksessä kuollut isäntä on jättänyt talon viljelykset hunningolle, 
          emäntä on jäänyt huolehtimaan talosta seitsemän poikansa kanssa. Veljeksistä vanhin on Juhani, 
          seuraavaksi tulevat kaksoset Tuomas ja Aapo, Simeoni sekä kaksoset Timo ja Lauri. 
          Veljessarjan nuorin on nimeltään Eero. Nuorena pojat olivat välillä aika vallattomia.";
          $teksti2 = "Kerran, Eeron vielä ollessa äitinsä helmoissa kotona, 
          kuusi vanhinta veljestä varasti naapurista kananmunia ja karkasi sitten metsään. 
          Karkulaisten elämä metsässä kesti muutaman päivän ennen kuin äiti apujoukkoineen löysi heidät.  
          Seurasi kova löylytys.";
          $otsikko1 = "<h3>Veljeksiä seitsemän</h3>";
          $otsikko2 = "<h3>Porukalla kosimaan</h3>";
          echo "$otsikko1 <br> <p style='color:slateblue'>$teksti1</p> <br> $otsikko2 <br> <p style='color:slateblue'>$teksti2</p>";
        ?>
      </div>
	  
<!------------- TEHT 2 ---------------------------------------------->		  
	  
<!------------- TEHT 3 ---------------------------------------------->
      <h3> Tehtävä 3 </h3>

        ?php
            $teksti_1 = "<h3>Ympyrän kehän laskeminen</h3>";
            $teksti_2 = "kehä";
            $teksti_3 = "<h3>Ympyrän pinta-ala laskeminen</h3>";
            $teksti_4 = "pinta-ala";
            $teksti_5 = "<h3>Pallon tilavuus laskeminen</h3>";
            $teksti_6 = "pallon tilavuus";
            $teksti_7 = "<h3>Pallon pinta-ala laskeminen</h3>";
            $teksti_8 = "pallon pinta-ala";

            $sade = 10;
            $pii = 3.14;

            print "" . $teksti_1 .;<br>
            print "Ympyrän " . $teksti_2 . " lasketaan kaavalla:";<br>
            print "Ala = π * säde^2";<br>
            print "Kehä = 2 * π * säde";<br><br>
            print "Jos säde on 10, niin:";<br>
            $kehä = 2 * $pii * $sade;
            print "- Kehä on " . $kehä . ;<br>
            
            print "" .$tekst_3 . ;<br>
            print "Ympyrän " . $teksti_4 . "lasketaan kaavalla:";<br>
            print "Jos säde on 10: ";<br>
            print "A = π​r2";<br><br>
            $pinta_ala = $pii * pow($sade, 2);
            print "pinta-ala on: " . $pinta_ala .;<br>

            print "" .$teksti_5 .;<br>
            print "Ympyrän " . $teksti_6 . "lasketaan kaavalla:";<br>
            print "Jos säde on 10: ";<br>
            print "t = 4 πr^3/3";<br><br>
            $tilavuus = (4 / 3) * $pii * pow($sade, 3);
            print "- Pallon tilavuus on " . $tilavuus . ;<br>


            print "" .$teksti_7 .;<br>
            print "Ympyrän " . $teksti_8 . "lasketaan kaavalla:";<br>
            print "Jos säde on 10: ";<br>
            print "A = 4 π​r2";<br><br>
            $pallon_pinta_ala = 4 * $pii * pow($sade, 2);
            print "- Pallon pinta-ala on " . $pallon_pinta_ala . ;<br>
          ?><br>
          <a href="http://tietokanta.dy.fi/ohjelmointi/uusi_opiPHP/sivu1.php" target="_blank">Lue tehtävä klikkaamalla linkkiä...</a>
      <div class="esimerkki koodisini">
        <?php
          $teksti_1 = "<h3>Ympyrän kehän laskeminen</h3>";
          $teksti_2 = "kehä";
          $teksti_3 = "<h3>Ympyrän pinta-ala laskeminen</h3>";
          $teksti_4 = "pinta-ala";
          $teksti_5 = "<h3>Pallon tilavuus laskeminen</h3>";
          $teksti_6 = "pallon tilavuus";
          $teksti_7 = "<h3>Pallon pinta-ala laskeminen</h3>";
          $teksti_8 = "pallon pinta-ala";

          $sade = 10;
          $pii = 3.14;

          print "" . $teksti_1 . "<br>";
          print "Ympyrän " . $teksti_2 . " lasketaan kaavalla:<br>";
          print "Ala = π * säde^2<br>";
          print "Kehä = 2 * π * säde<br><br>";
          print "Jos säde on 10, niin:<br>";
          $kehä = 2 * $pii * $sade;
          print "- Kehä on " . $kehä . "<br>";
          
          print "" .$tekst_3 . "<br>";
          print "Ympyrän " . $teksti_4 . "lasketaan kaavalla:<br>";
          print "Jos säde on 10: <br>";
          print "A = π​r2<br><br>";
          $pinta_ala = $pii * pow($sade, 2);
          print "pinta-ala on: " . $pinta_ala ."<br>";

          print "" .$teksti_5 ."<br>";
          print "Ympyrän " . $teksti_6 . "lasketaan kaavalla:<br>";
          print "Jos säde on 10: <br>";
          print "t = 4 πr^3/3<br><br>";
          $tilavuus = (4 / 3) * $pii * pow($sade, 3);
          print "- Pallon tilavuus on " . $tilavuus . "<br>";


          print "" .$teksti_7 ."<br>";
          print "Ympyrän " . $teksti_8 . "lasketaan kaavalla:<br>";
          print "Jos säde on 10: <br>";
          print "A = 4 π​r2<br><br>";
          $pallon_pinta_ala = 4 * $pii * pow($sade, 2);
          print "- Pallon pinta-ala on " . $pallon_pinta_ala . "<br>";
        ?>
    </div>

	  
<!------------- TEHT 3 ---------------------------------------------->		  
	  
<!------------- TEHT 4 ---------------------------------------------->
    <h3> Tehtävä 4 </h3> 
    ?php
        $luku1 = 3;<br>
        $luku2 = 7;<br>
        $luku3 = 70;<br>

        $summa = $luku1 + $luku2 + $luku3;<br>

        echo "<div style='color: blue;'>Luku 1: $luku1</div>";<br>
        echo "<div style='color: green;'>Luku 2: $luku2</div>";<br>
        echo "<div style='color: red;'>Luku 3: $luku3</div>";<br>
        echo "<div style='color: purple;'>Summa: $summa</div>";<br>
      ?>
    <div class="esimerkki">
      <?php
        $luku1 = 3;
        $luku2 = 7;
        $luku3 = 70;

        $summa = $luku1 + $luku2 + $luku3;

        echo "<div style='color: blue;'>Luku 1: $luku1</div>";
        echo "<div style='color: green;'>Luku 2: $luku2</div>";
        echo "<div style='color: red;'>Luku 3: $luku3</div>";
        echo "<div style='color: purple;'>Summa: $summa</div>";
      ?>

    </div>
	  
<!------------- TEHT 4 ---------------------------------------------->		  
	  
<!------------- TEHT 5 ---------------------------------------------->
    <h3> Tehtävä 5 </h3>
    <div class="esimerkki">
      <?php
        $R1 = 10;
        $R2 = 20;
        $R3 = 30;
        $Rkok = 1/(1/$R1 + 1/$R2 + 1/$R3);
        $Rkok = number_format($Rkok, 2,',', ' ');
        echo "<div style='color: blue;'>Vastus 1: ".$R1." ohmia </div>";
        echo "<div style='color: red;'>Vastus 2: ".$R2." ohmia</div>";
        echo "<div style='color: green;'>Vastus 3: ".$R3." ohmia</div>";
        echo "<div style='color: black;'>Kokonaisvastus: ".$Rkok." ohmia</div>";

      ?>
    </div>
	  
<!------------- TEHT 5 ---------------------------------------------->		  
	  
<!------------- TEHT 6 ---------------------------------------------->
<h3> Tehtävä 6 </h3>
    <div class="koodisini">
      <?php
        $aforismi1 = "\"Lähes kaikki suuri on nuorten tekemää.\" - Benjamin Franklin";
        $aforismi2 = "\"Nuoressa ei huilaaminen mene hukkaan.\" - Suomalainen sananlasku";
        $aforismi3 = "\"Nuoret ovat säännöllisesti ajattelemattomia.\" - Homeros";

        echo '<span class="aphorism-font">' . $aforismi1 . '</span><br>';
        echo '<span class="aphorism-font">' . $aforismi2 . '</span><br>';
        echo '<span class="aphorism-font">' . $aforismi3 . '</span><br>';

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