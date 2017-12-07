<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Chants</title>

    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/materialize.min.css">
    <link rel="stylesheet" href="./css/chants.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <style media="screen">
      body{
        background: url("./resources/bg_grey.png");
      }
      h1{
        color: rgba(48,66,160,1);
      }


    </style>
  </head>
  <body>
    <?php include './header.php'; ?>

    <div class="container wbb-container">
      <h1>CHANTS</h1>
      <?php
        for ($i=1; $i <=10 ; $i+=2) {
          echo '<div class="row">
            <div class="col l5 offset-l1">
              <audio controls controlsList="nodownload" id="chantPlayer">
                <source src="./resources/chants/bfc'.$i.'.aac" type="audio/aac" >
                Your browser does not support the audio element.
              </audio>
            </div>
            <div class="col l5 offset-l1">
              <audio controls controlsList="nodownload" id="chantPlayer">
                <source src="./resources/chants/bfc'.($i+1).'.aac" type="audio/aac" >
                Your browser does not support the audio element.
              </audio>
            </div>
          </div>';
        }
       ?>

    </div>
    <div class="container">
      <div class="row">
        <div class="col s12 m12 l6">
          <div class="card">
              dafigjheirjn
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="container">
  <div class="player">
    <div class="like waves-effect waves-light">
      <i class="icon-heart"></i>
    </div>
    <div id="play-button" class="unchecked">
      <i class="icon icon-play"></i>
    </div>
    <div class="control-row">
      <div class="waves-animation-one"></div>
      <div class="waves-animation-two"></div>
      <div id="pause-button">
        <i class="icon"></i>
      </div>
      <div class="seek-field">
        <input id="audioSeekBar" min="0" max="334" step="1" value="0" type="range" oninput="audioSeekBar()" onchange="this.oninput()">
      </div>
      <div class="volume-icon">
        <i class="icon-volume-up"></i>
      </div>
      <div class="volume-field">
        <input type="range" min="0" max="100" value="100" step="1" oninput="audio.volume = this.value/100" onchange="this.oninput()">
      </div>
    </div>
  </div>
</div> -->
<audio id="audio-player" ontimeupdate="SeekBar()" ondurationchange="CreateSeekBar()" preload="auto" loop>
  <source src="https://michael-zhigulin.github.io/mz-codepen-projects/Material%20Design%20UI%20Audio%20Player/audio/Tim%20Minchin%20%E2%80%94%20Rock%20n%20Roll%20Nerd.ogg" type="audio/ogg">
      <source src="https://michael-zhigulin.github.io/mz-codepen-projects/Material%20Design%20UI%20Audio%20Player/audio/Tim%20Minchin%20%E2%80%94%20Rock%20n%20Roll%20Nerd.mp3" type="audio/mpeg">
</audio>
    <script src="./js/jquery.js" charset="utf-8"></script>
    <script src="./js/materialize.min.js" charset="utf-8"></script>
    <script src="./js/jquery.poptrox.min.js" charset="utf-8"></script>
  </body>
</html>
