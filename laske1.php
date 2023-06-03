<!DOCTYPE html>
  <html>
   <head>
    <meta charset="UTF-8">
  <style>
    .pun {
        font-size: medium;
        background-color: #33b5e5;
        width: 70%;
        border: 1px solid RGB(41, 20, 82);
        padding: 20px;
        margin: 20px;
        box-shadow: 7px 7px 5px grey;
    }
    .pun2 {
        font-size:large;
        background-color: #ceceff;
        width: 70%;
        border: 1px solid RGB(41, 20, 82);
        padding: 20px;
        margin: 20px;
        box-shadow: 7px 7px 5px grey;
    }
    .pun3 {
        border: 2px solid #aeaeff;
        border-radius: 12px;
        padding: 5px;
        margin-bottom: 7px;
        background-color :#ccccff;
        color: #000033;
        box-shadow: 10px 10px 5px gray;
    }
    .pun3:hover {
        background-color: #0099cc;
        color: white;
        box-shadow: 5px 5px 5px gray;
    }
  </style>
   </head>
   <body>
    <div class="pun">
        <h3>Rkok:</h3>
        R1 = <?php echo $_POST["R1"]; ?><br>
        R2 = <?php echo $_POST["R2"]; ?><br>
        R3 = <?php echo $_POST["R3"]; ?><br>
        <?php
            $R1 = $_POST['R1'];
            $R2 = $_POST['R2'];
            $R3 = $_POST['R3'];

            // Calculate the parallel connection of resistors
            $Rkok = 1 / ((1 / $R1) + (1 / $R2) + (1 / $R3));
            $Rkok = number_format($Rkok, 2,',', ' ');

            // Display the results
            echo "<div class='pun2'>";
            echo "Vastusten rinnankytkennän tulos: $Rkok ohmia";
            echo "</div>";
            ?>
        

        <a href="sivu5.php#36"><button class="pun3">Palaa</button></a>
    <div>
  
   </body>
  </html>

