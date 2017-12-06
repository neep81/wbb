<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Chants</title>

    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/materialize.min.css">
    <style media="screen">
      body{
        background: url("./resources/bg_grey.png");
      }
    </style>
  </head>
  <body>
    <?php include './header.php'; ?>
    <audio controls controlsList="nodownload" id="chantPlayer">
      <source src="./resources/chants/bfc.aac" type="audio/aac" >
      <source src="horse.mp3" type="audio/mpeg">
    Your browser does not support the audio element.
    </audio>
    <script src="./js/jquery.js" charset="utf-8"></script>
    <script src="./js/materialize.min.js" charset="utf-8"></script>
    <script src="./js/jquery.poptrox.min.js" charset="utf-8"></script>
  </body>
</html>
