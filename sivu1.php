<!DOCTYPE html>
<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <link rel="stylesheet" href="tyylit.css">
  
 </head>
 <body>

    <div class="header">
        <h3> PHP Tehtävät  7 - 12</h3>
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
<!------------- TEHT 7 ---------------------------------------------->
      <h3> Tehtävä 7 </h3>
        ?php
              $vastukset = array(10, 20, 30, 0) ;<br>
              echo "Taulukon sisälto:";<br>
              echo "R1 = " .$vastukset[0]. "Ω";<br>
              echo "R2 = " .$vastukset[1]. "Ω";<br>
              echo "R3 = " .$vastukset[2]. "Ω";<br>
              echo "Rkok =" .$vastukset[3]. "Ω";<br>

              echo "Vastusten rinnankytkennän laskenta:";<br>
              $Rkok = 1/(1/$vastukset[0] + 1/$vastukset[1] + 1/$vastukset[2]) ;<br>
              $Rkok = number_format($Rkok, 2,',', ' ') ;<br>

              echo "Rkok = " .$Rkok. "Ω" ;<br>
            
            ?>
      <div class="pun" >
        <?php
            $vastukset = array(10, 20, 30, 0);
            echo "Taulukon sisälto:<br>";
            echo "R1 = " .$vastukset[0]. "Ω<br>";
            echo "R2 = " .$vastukset[1]. "Ω<br>";
            echo "R3 = " .$vastukset[2]. "Ω<br>";
            echo "Rkok =" .$vastukset[3]. "Ω<br>";

            echo "Vastusten rinnankytkennän laskenta:<br>";
            $Rkok = 1/(1/$vastukset[0] + 1/$vastukset[1] + 1/$vastukset[2]);
            $Rkok = number_format($Rkok, 2,',', ' ');

            echo "Rkok = " .$Rkok. "Ω";
           
          ?> 
      </div>

    	  
<!------------- TEHT 7 ---------------------------------------------->	  
	  
<!------------- TEHT 8 ---------------------------------------------->
      <h3> Tehtävä 8 </h3>
      ?php
          $aforismit = array(<br>
            '"Lähes kaikki suuri on nuorten tekemää." - Benjamin Franklin', <br>
            '"Nuoressa ei huilaaminen mene hukkaan." - Suomalainen sananlasku', <br>
            '"Nuoret ovat säännöllisesti ajattelemattomia." - Homeros'<br>
          );<br>

          echo '<span class="aphorism-font">' . $aforismit[0] . '</span>';<br>
          echo '<span class="aphorism-font">' . $aforismit[1] . '</span>';<br>
          echo '<span class="aphorism-font">' . $aforismit[2] . '</span>';<br>
        ?>
      <div class="pun">
        <?php
          $aforismit = array(
            '"Lähes kaikki suuri on nuorten tekemää." - Benjamin Franklin',
            '"Nuoressa ei huilaaminen mene hukkaan." - Suomalainen sananlasku',
            '"Nuoret ovat säännöllisesti ajattelemattomia." - Homeros'
          );

          echo '<span class="aphorism-font">' . $aforismit[0] . '</span><br>';
          echo '<span class="aphorism-font">' . $aforismit[1] . '</span><br>';
          echo '<span class="aphorism-font">' . $aforismit[2] . '</span><br>';
        ?>
      </div>
	  
<!------------- TEHT 8 ---------------------------------------------->		  
	  
<!------------- TEHT 9 ---------------------------------------------->
      <h3> Tehtävä 9 </h3>
      <div class="pun">
        <?php
          $hedelmat = array("Mango", "Kiivi", "Meloni", "Banaani");

          echo "<strong style='color: white;'>Array is: (\"Mango\", \"Kiivi\", \"Meloni\", \"Banaani\")</strong><br><br>";
          echo "The count of hedelmat array is: " .count($hedelmat) . "<br>";
          echo "The sizeof hedelmat array is: " .sizeof($hedelmat);
        ?>
    </div>

	  
<!------------- TEHT 9 ---------------------------------------------->		  
	  
<!------------- TEHT 10 ---------------------------------------------->
    <h3> Tehtävä 10 </h3> 
    <div class="CSSTableGenerator">
      <?php
        $taulukko = array (
                    array(1, 2, 3, 4, 5, 6, 7),
                    array(8, 9, 10, 11, 12, 13, 14),
                    array(15, 16, 17, 18, 19, 20, 21)
        );

        echo "<table>";
        for ($rivi = 0; $rivi < 3; $rivi++){
          echo "<tr>";
          for($sarake = 0; $sarake < 7; $sarake++){
            echo "<td>". $taulukko[$rivi][$sarake]. "</td>";
          }
          echo "</tr>";
        }
        
        
        echo "</table>";
      ?>

    </div>
	  
<!------------- TEHT 10 ---------------------------------------------->		  
	  
<!------------- TEHT 11 ---------------------------------------------->
    <h3> Tehtävä 11 </h3>
    <div class="CSSTableGenerator">
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
            } elseif ($yhteispisteet < 176) {
              $arvosana = 1;
            } elseif ($yhteispisteet < 232) {
              $arvosana = 2;
            } elseif ($yhteispisteet < 288) {
              $arvosana = 3;
            } elseif ($yhteispisteet < 344) {
              $arvosana = 4;
            } else {
              $arvosana = 5;
            }
            echo "<td>" . $yhteispisteet . "</td>";
            echo "<td>" . $arvosana . "</td>";
            echo"</tr>";
          }
          echo"</table>";

            

          /*
          $eka_taulu[0][3] = $eka_taulu[0][1] + $eka_taulu[0][2];
          $eka_taulu[1][3] = $eka_taulu[1][1] + $eka_taulu[1][2];
          $eka_taulu[2][3] = $eka_taulu[2][1] + $eka_taulu[2][2];

          $eka_taulu[3][1] = $eka_taulu[0][1] + $eka_taulu[1][1] + $eka_taulu[2][1];
          $eka_taulu[3][2] = $eka_taulu[0][2] + $eka_taulu[1][2] + $eka_taulu[2][2];
          $eka_taulu[3][3] = $eka_taulu[0][3] + $eka_taulu[1][3] + $eka_taulu[2][3];

          
          echo $eka_taulu[0][0]. " ".$eka_taulu[0][1]. " ".$eka_taulu[0][2]. " ". $eka_taulu[0][3]."<br>";
          echo $eka_taulu[1][0]. " ".$eka_taulu[1][1]. " ".$eka_taulu[1][2]. " ". $eka_taulu[1][3]."<br>";
          echo $eka_taulu[2][0]. " ".$eka_taulu[2][1]. " ".$eka_taulu[2][2]. " ". $eka_taulu[2][3]."<br>";
          echo $eka_taulu[3][0]. " ".$eka_taulu[3][1]. " ".$eka_taulu[3][2]. " ". $eka_taulu[3][3]."<br>";
          

          for($r = 0; $r < 4; $r++)
          {
            for($sarake = 0; $sarake < 4; $sarake++)
            {
              echo $eka_taulu[$r][$sarake]. " ";
            }
            echo "<br>";
          }
          */

          
    ?>
    </div>
	  
<!------------- TEHT 11 ---------------------------------------------->		  
	  
<!------------- TEHT 12 ---------------------------------------------->
<h3> Tehtävä 12 </h3>
  <div class="pun" >
    <?php
      $arvio = array(
        "koe1" => 80,
        "koe2" => 74,
        "koe3" => 98,
        "teksti"=>"laskeYhteispisteet:",
        "yhteispisteet" => 0
      );
      $arvio["yhteispisteet"] = $arvio["koe1"] + $arvio["koe2"] + $arvio["koe1"];

      echo $arvio["teksti"] . "<br>";
      echo "koe 1 = " . $arvio["koe1"] . "<br>";
      echo "koe 2 = " . $arvio["koe2"] . "<br>";
      echo "koe 3 = " . $arvio["koe3"] . "<br>";
      echo "Yhteispisteet: " . $arvio["yhteispisteet"];
    ?>
    </div>

	  
<!------------- TEHT 12 ---------------------------------------------->		  
	  
	  
	  
    </div>
  </div>

  <div class="footer">
     <p>Eliyas Kassaye</p>
  </div>

 </body>
</html>