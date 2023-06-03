<!DOCTYPE html>
<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <link rel="stylesheet" href="tyylit.css">
  <style>

    form {
      margin-bottom: 20px;
    }

    label {
      display: inline-block;
      width: 100px;
      font-weight: bold;
    }

    input[type="text"],
    textarea {
      width: 200px;
      padding: 5px;
    }

    input[type="submit"] {
      padding: 5px 10px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }

    .results {
      margin-top: 20px;
      border: 1px solid #ccc;
      padding: 10px;
    }
  </style>
 </head>
 <body>

    <div class="header">
        <h3> PHP Tehtävät 37 - 42</h3>
    </div>

   <div class="row">

      <div class="col-3 col-s-3 menu">
        <?php include 'PHPmenu.php';?>
      </div>

    <div class="col-9 col-s-9">
<!------------- TEHT 1 ---------------------------------------------->
      <h3> Tehtävä 37 </h3>
      <div><pre>
        &LTdiv class="esimerkki">
        
        &LT?php
        $R1 = $R2 = $R3 = $Rkok = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $R1 = test_input($_POST["R1"]);
          $R2 = test_input($_POST["R2"]);
          $R3 = test_input($_POST["R3"]);

          // Calculate the parallel connection of resistors
          $Rkok = 1 / ((1 / $R1) + (1 / $R2) + (1 / $R3));
          $Rkok = number_format($Rkok, 2,',', ' ');
        }

        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
        ?>

        &LTh3>Vastukset sarjassa esimerkki&LT/h3>
        &LTform method="post" action="&LT?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
          R1: &LTinput type="text" name="R1" placeholder="Anna R1 arvo...">
          R2: &LTinput type="text" name="R2" placeholder="Anna R1 arvo...">
          R3: &LTinput type="text" name="R3" placeholder="Anna R1 arvo...">
          &LTinput type="submit" name="submit" value="Laske sarjassa">  
          &LT/form>

          &LT?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          echo "Kolme sarjassa:";
          echo "R1: $R1 Ω";
          echo "R2: $R2 Ω";
          echo "R3: $R3 Ω";
          echo "Rkok: $Rkok Ω";
        }
      ?>
      </pre></div>
      <div class="esimerkki">
        
        <?php
        // Define variables and set to empty values
        $R1 = $R2 = $R3 = $Rkok = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $R1 = test_input($_POST["R1"]);
          $R2 = test_input($_POST["R2"]);
          $R3 = test_input($_POST["R3"]);

          // Calculate the parallel connection of resistors
          $Rkok = 1 / ((1 / $R1) + (1 / $R2) + (1 / $R3));
          $Rkok = number_format($Rkok, 2,',', ' ');
        }

        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
        ?>

        <h3>Vastukset sarjassa esimerkki</h3>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
          R1: <input type="text" name="R1" placeholder="Anna R1 arvo..."><br>
          R2: <input type="text" name="R2" placeholder="Anna R1 arvo..."><br>
          R3: <input type="text" name="R3" placeholder="Anna R1 arvo..."><br>
          <input type="submit" name="submit" value="Laske sarjassa">  
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          echo "<h3>Kolme sarjassa:</h3>";
          echo "R1: $R1 Ω<br>";
          echo "R2: $R2 Ω<br>";
          echo "R3: $R3 Ω<br>";
          echo "Rkok: $Rkok Ω";
        }
      ?>

      </div>
      

    	  
<!------------- TEHT 1 ---------------------------------------------->	  
	  
<!------------- TEHT 2 ---------------------------------------------->
      <h3> Tehtävä 38 </h3>
      <div><pre>
        &LTdiv class="esimerkki">
        &LT?php
        $R4 = $R5 = $R6 = $Rkok = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $R4 = test_input($_POST["R4"]);
          $R5 = test_input($_POST["R5"]);
          $R6 = test_input($_POST["R6"]);

          // Check which button was clicked
          if (isset($_POST['series'])) {
            // Calculate the series connection of resistors
            $Rkok = calculateSeries($R4, $R5, $R6);
          } elseif (isset($_POST['parallel'])) {
            // Calculate the parallel connection of resistors
            $Rkok = calculateParallel($R4, $R5, $R6);
          }
        }

        function calculateSeries($R4, $R5, $R6) {
          // Calculate the series connection of resistors
          return $R4 + $R5 + $R6;
        }

        function calculateParallel($R4, $R5, $R6) {
          // Calculate the parallel connection of resistors
          return 1 / ((1 / $R4) + (1 / $R5) + (1 / $R6));
        }
        $Rkok = number_format($Rkok, 2,',', ' ');
        ?>

        &LTh3>Calculate Resistance
        &LTform method="post" action="&LT?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          R4: &LTinput type="text" name="R4" placeholder="Anna R4 arvo...">
          R5: &LTinput type="text" name="R5" placeholder="Anna R5 arvo...">
          R6: &LTinput type="text" name="R6" placeholder="Anna R6 arvo...">

          &LTinput type="submit" name="series" value="Laske sarja">
          &LTinput type="submit" name="parallel" value="Laske Rinnan">
          &LT/form>

          &LT?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          echo "&LTh3>Rkok:";
          if (isset($_POST['series'])) {
            echo "&LTp>Sarja-laskun tulos:: $Rkok Ω";
          } elseif (isset($_POST['parallel'])) {
            echo "&LTp>Rinnan-laskun tulos: $Rkok Ω";
          }

        echo "&LT/div>";
      }
      </pre></div>
      <div class="esimerkki">
        <?php
        $R4 = $R5 = $R6 = $Rkok = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $R4 = test_input($_POST["R4"]);
          $R5 = test_input($_POST["R5"]);
          $R6 = test_input($_POST["R6"]);

          // Check which button was clicked
          if (isset($_POST['series'])) {
            // Calculate the series connection of resistors
            $Rkok = calculateSeries($R4, $R5, $R6);
          } elseif (isset($_POST['parallel'])) {
            // Calculate the parallel connection of resistors
            $Rkok = calculateParallel($R4, $R5, $R6);
          }
        }

        function calculateSeries($R4, $R5, $R6) {
          // Calculate the series connection of resistors
          return $R4 + $R5 + $R6;
        }

        function calculateParallel($R4, $R5, $R6) {
          // Calculate the parallel connection of resistors
          return 1 / ((1 / $R4) + (1 / $R5) + (1 / $R6));
        }
        $Rkok = number_format($Rkok, 2,',', ' ');
        ?>

        <h3>Calculate Resistance</h3>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          R4: <input type="text" name="R4" placeholder="Anna R4 arvo..."><br>
          R5: <input type="text" name="R5" placeholder="Anna R5 arvo..."><br>
          R6: <input type="text" name="R6" placeholder="Anna R6 arvo..."><br>

          <input type="submit" name="series" value="Laske sarja">
          <input type="submit" name="parallel" value="Laske Rinnan">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          echo "<h3>Rkok:</h3>";
          if (isset($_POST['series'])) {
            echo "<p>Sarja-laskun tulos:: $Rkok Ω</p>";
          } elseif (isset($_POST['parallel'])) {
            echo "<p>Rinnan-laskun tulos: $Rkok Ω</p>";
          }

        echo "</div>";
      }
    ?>
  </div>
	  
<!------------- TEHT 2 ---------------------------------------------->		  
	  
<!------------- TEHT 3 ---------------------------------------------->
      <h3> Tehtävä 39 </h3>
      <div><pre>
        &LTdiv class="esimerkki">
        &LTform action="message_1k.php" method="post" id="paluu" onsubmit="return validateForm()">
            Nimesi:   
            &LTinput type="text" name="nimi">

            Sähköpostisi: 
            &LTinput type="text" name="sahkoposti">

            Viesti:
            &LTtextarea name="kommentti"></textarea>

            &LTinput type="submit" value="Lähetä"> 
            &LTform>
        </pre></div>
      <div class="esimerkki">
      <form action="message_1k.php" method="post" id="paluu" onsubmit="return validateForm()">
          Nimesi:<br>   
          <input type="text" name="nimi"><br><br>

          Sähköpostisi:<br> 
          <input type="text" name="sahkoposti"><br><br>

          Viesti:<br> 
          <textarea name="kommentti"></textarea><br><br>

          <input type="submit" value="Lähetä"> 
        </form>
    </div>

	  
<!------------- TEHT 3 ---------------------------------------------->		  
	  
<!------------- TEHT 4 ---------------------------------------------->
    <h3> Tehtävä 40 </h3> 
    <div id="koodi"><pre>
      &LTdiv class="col-3 col-s-3 menu">
        &LT?php include 'PHPmenu.php';?>
      &LT/div>
        !PHPmenu.php  ->
          &LTul>
       &LTa href="index.php" id="viiva">&LTli> Tehtävä 1 - 6 &LT/li>&LT/a>
       &LTa href="sivu1.php" id="viiva">&LTli> Tehtävä 7 - 12 &LT/li>&LT/a>
       &LTa href="sivu2.php" id="viiva">&LTli> Tehtävä 13 - 18 &LT/li>&LT/a>
       &LTa href="sivu3.php" id="viiva">&LTli> Tehtävä 19 - 24 &LT/li>&LT/a>
       &LTa href="sivu4.php" id="viiva">&LTli> Tehtävä 25 - 30 &LT/li>&LT/a>
       &LTa href="sivu5.php" id="viiva">&LTli> Tehtävä 31 - 36 &LT/li>&LT/a>
       &LTa href="sivu6.php" id="viiva">&LTli> Tehtävä 37 - 42 &LT/li>&LT/a>
      &LT/ul>
</pre></div>
	  
<!------------- TEHT 4 ---------------------------------------------->		  
	  
<!------------- TEHT 5 ---------------------------------------------->

	  
<!------------- TEHT 5 ---------------------------------------------->		  
	  
<!------------- TEHT 6 ---------------------------------------------->
	  
<!------------- TEHT 6 ---------------------------------------------->		  
	  
	  
	  
    </div>
  </div>

  <div class="footer">
     <p>Eliyas Kassaye</p>
  </div>

 </body>
</html>