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
<!------------- TEHT 1 ---------------------------------------------->
      <h3> Tehtävä 7 </h3>
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

    	  
<!------------- TEHT 1 ---------------------------------------------->	  
	  
<!------------- TEHT 2 ---------------------------------------------->
      <h3> Tehtävä 8 </h3>
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
	  
<!------------- TEHT 2 ---------------------------------------------->		  
	  
<!------------- TEHT 3 ---------------------------------------------->
      <h3> Tehtävä 9 </h3>
      <div class="pun">
        <?php
          $hedelmat = array("Mango", "Kiivi", "Meloni", "Banaani");

          echo "<strong style='color: white;'>Array is: (\"Mango\", \"Kiivi\", \"Meloni\", \"Banaani\")</strong><br><br>";
          echo "The count of hedelmat array is: " .count($hedelmat) . "<br>";
          echo "The sizeof hedelmat array is: " .sizeof($hedelmat);
        ?>
    </div>

	  
<!------------- TEHT 3 ---------------------------------------------->		  
	  
<!------------- TEHT 4 ---------------------------------------------->
    <h3> Tehtävä 10 </h3> 
    <div class="esimerkki">
      <?php
        echo "<table> <tbody><tr>
                    <th> TUOTE </th>
                    <th> MALLI </th>
                    <th> Varasto </th>
                    <th> Tilattu </th>
                    <th> Toimitettu </th>
            </tr>";
        $varasto = array(
                    array("Skoda","Octacia","32","23","16"),
                    array("Skoda","SuperB","15","9","7"),
                    array("Volvo","V90","10","4","3"),
                    );
                
        for ($rivi = 0; $rivi <= count($varasto)-1; $rivi++) {
            echo "<tr>";
            for ($sarake = 0; $sarake <= 4; $sarake++){
            echo "<td>". $varasto[$rivi][$sarake] ."</td>";
            }
            echo "</tr>";
            }
            echo "</tr></tbody></table>";
      ?>

    </div>
	  
<!------------- TEHT 4 ---------------------------------------------->		  
	  
<!------------- TEHT 5 ---------------------------------------------->
    <h3> Tehtävä 11 </h3>
    <div class="esimerkki">
      <?php
        

      ?>
    </div>
	  
<!------------- TEHT 5 ---------------------------------------------->		  
	  
<!------------- TEHT 6 ---------------------------------------------->
    <h3> Tehtävä 12 </h3>
    <div  class="koodisini">
      <?php
        
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