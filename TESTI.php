<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <style>
      #vari1 {
        color: slateblue; 
      }
    </style>
  </head>
  <body>
    <div id="vari1">
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
  </body>
</html>
