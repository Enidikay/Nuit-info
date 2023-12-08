<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../css/nvl.css" rel="stylesheet" />
  <title>Document</title>
  <style>
    /* ... Votre code CSS existant ... */

    /* Ajoutez une classe pour les blocs qui révéleront la lettre */
    .reveal-block {
      position: absolute;
      width: 100px;
      height: 100px;
      background-color: #f5f5f5;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 24px;
      color: white;
      cursor: pointer;
      background-color: black;
    }

    .reveal-block block1 {
      color: white;
    }

    .reveal-letter {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      opacity: 0;
      font-size: 36px;
      color: red; /* Couleur de la lettre révélée */
      transition: opacity 0.3s ease;
    }

    .reveal-block:hover .reveal-letter {
      opacity: 1;
    }

    .block1 { top: 20%; left: 30%; }
    .block2 { top: 40%; left: 70%; }
    .block3 { top: 60%; left: 50%; }
    .block4 { top: 10%; left: 80%; }
    .block5 { top: 80%; left: 20%; }
    .block6 { top: 30%; left: 10%; }
    .block7 { top: 70%; left: 40%; }

    /* Ajoutez du style pour la nouvelle div */
    .key-text {
      color: red;
      font-size: 18px;
      margin-bottom: 10px;
    }

    /* ... Votre code CSS existant ... */
  </style>
</head>

<body>
  <div class="center-container">
    <div class="reveal-block block1">1<div class="reveal-letter">E</div></div>
    <div class="reveal-block block2">2<div class="reveal-letter">R</div></div>
    <div class="reveal-block block3">3<div class="reveal-letter">I</div></div>
    <div class="reveal-block block4">4<div class="reveal-letter">Y</div></div>
    <div class="reveal-block block5">5<div class="reveal-letter">P</div></div>
    <div class="reveal-block block6">6<div class="reveal-letter">Q</div></div>
    <div class="reveal-block block7">7<div class="reveal-letter">L</div></div>

    <form action="traitement2.php" method="post" id="myForm">
      <!-- Placez la nouvelle div au-dessus du bouton "Envoyer" -->
      <div class="key-text">Clé : CRANE</div>

      <label for="zoneTexte">Entrez votre texte :</label>
      <textarea id="zoneTexte" name="texte" rows="1" cols="50"></textarea>
      <br>
      <input type="submit" value="Envoyer">
    </form>

    <div id="feedback" style="display: none;"></div>
  </div>

  <script src="script.js"></script>
</body>

</html>
