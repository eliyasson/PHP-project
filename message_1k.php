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
    .pun:hover {
        background-color: #0099cc;
        color: white;
        box-shadow: 5px 5px 5px gray;
    }
  </style>
   </head>
   <body>
        <div class="pun">
        <p> Kiitos yhteyden otostasi.<br> Otamme pikaisesti yhteyttä sinuun.<br>
        (ilmoitus sulkeutuu automaattisesti 4 sekunnin kuluttua)</p>
        </div> 
        <script type="text/javascript">
            function validateForm() {
            var name = document.forms["paluu"]["nimi"].value;
            var email = document.forms["paluu"]["sahkoposti"].value;
            var message = document.forms["paluu"]["kommentti"].value;

            if (name === "" || email === "" || message === "") {
                alert("Please fill out all fields.");
                return false;
            }
            }

            setTimeout(function(){
            window.location = "http://tietokanta.dy.fi/softa23b/eliyas.kassaye/PHP_2023/sivu6.php";
            }, 4000);
        </script>

    </body>
</html>