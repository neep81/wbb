<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Gallery</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/materialize.min.css">
  </head>
  <body>
    <?php include 'header.php'; ?>
    <div class="container" id="gallery" style="margin-top: 5%;">
      <div class="row">
        <div class="col l6 m6 s12">
          <a href="./resources/gallery/car3.jpg"><img src="./resources/gallery/car3.jpg" class="img-responsive" style="width:100%;"/></a>
        </div>

        <div class="col l3 m3 s12">
          <a href="./resources/gallery/car2.jpg"><img src="./resources/gallery/car2.jpg" class="img-responsive" style="width:100%;"/></a>
        </div>
        <div class="col l3 m3 s12">
          <a href="./resources/gallery/logo.png"><img src="./resources/gallery/logo.png" class="img-responsive" style="width:100%;"/></a>
        </div>
        <div class="col l3 m3 s12">
          <a href="./resources/gallery/about_us_1.jpg"><img src="./resources/gallery/about_us_1.jpg" class="img-responsive" style="width:100%;"/></a>
        </div>
        <div class="col l3 m3 s12">
          <a href="./resources/gallery/car2.jpg"><img src="./resources/gallery/car2.jpg" class="img-responsive" style="width:100%;"/></a>
        </div>
    </div>

    <div class="row">
      <div class="col l6 m6 s12">
        <a href="./resources/gallery/card_inver_l.png"><img src="./resources/gallery/card_inver_l.png" class="img-responsive" style="width:100%;"/></a>
      </div>

      <div class="col l3 m3 s12">
        <a href="./resources/gallery/car2.jpg"><img src="./resources/gallery/car2.jpg" class="img-responsive" style="width:100%;"/></a>
      </div>
      <div class="col l3 m3 s12">
        <a href="./resources/gallery/car2.jpg"><img src="./resources/gallery/car2.jpg" class="img-responsive" style="width:100%;"/></a>
      </div>
      <div class="col l3 m3 s12">
        <a href="./resources/gallery/car2.jpg"><img src="./resources/gallery/car2.jpg" class="img-responsive" style="width:100%;"/></a>
      </div>
      <div class="col l3 m3 s12">
        <a href="./resources/gallery/car2.jpg"><img src="./resources/gallery/car2.jpg" class="img-responsive" style="width:100%;"/></a>
      </div>
  </div>
  </div>
    <!-- <div id="gallery">


    	<a href="./resources/car3.jpg"><img src="path/to/image3_thumbnail.jpg" /></a>
    	<a href="./resources/card_blue.png"><img src="./resources/card_blue.png" /></a>
    	<a href="./resources/card_inver.png"><img src="./resources/card_inver.png" /></a>
    	<a href="./resources/wbb_low.jpg"><img src="./resources/wbb_low.jpg" /></a>
    </div> -->

    <script src="./js/jquery.js" charset="utf-8"></script>
    <script src="./js/materialize.min.js" charset="utf-8"></script>
    <script src="./js/jquery.poptrox.min.js" charset="utf-8"></script>
    <script type="text/javascript">
      var foo = $('#gallery');
      foo.poptrox({
        usePopupNav: true
      });
    </script>
  </body>
</html>
