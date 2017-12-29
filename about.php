<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>About Us</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/materialize.min.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/about.css">
  </head>
  <body>
    <?php include 'header.php'; ?>

    <div class="wbb-about-1">
      <div class="container">
        <div class="row">
          <div class="col l6 m12 s12" style="">

            <h2>West Block Blues</h2>
            <p>
            Named after the colors of our club and the West Block A stand where you can find us
            all, the roots of our story is embedded in a small group of likeminded fans who came
            together to create something distinct, something powerful. As the number of our chants
            increased, so did our membership, and gradually, we became one of the most reputed
            fan-bases in the nation with a following that has been ever-growing.
            </p>

            <p>
            The love for our team has seen us be acknowledged by not only the club and players as
            the 12<sup>th</sup> man, but even got a tip of the hat from National Team coach, Stephen
            Constantine in his book, <b style="font-weight:900;">Delhi to the Den</b>.
            </p>

            <p>
            And this role as the 12<sup>th</sup> man is taken extraordinarily seriously by each and every one of
            us, as we know that it is our duty to the team to be the loudest, most vociferous fans in
            all the land; to create an atmosphere so intimidating that the opponents never feel safe
            regardless of score or time; to express ourselves and our fervor for this beautiful club
            with gigantic banners that assure the players that no matter the scenario, they are never
            alone.
            </p>

          </div>
          <div class="col l6 push-l1 m12 s12">
            <img src="./resources/about_us.jpeg" alt="" class="img-responsive wbb-about-image" style="">
          </div>
        </div>

      </div>
    </div>

    <div class="wbb-about-2">
      <div class="container">
        <div class="row">
          <div class="col l8 offset-l4 m12 s12" style="margin-top: 20%;">
            <p>
              However, it isn’t enough for us to simply do this at home and we are known to travel all
              across the country and even the globe, letting the team know that wherever they go,
              we’ll be close behind, trying to overwhelm and overcome the stadium as they do the
              same on the pitch.
              <br><br>
              For the National Team, we are incredibly delighted to be part of The Blue Pilgrims
              Initiative which serves as a point of congregation of fans of the National Team at any
              age level. So regardless of any domestic rivalries that we have, you will always find a
              home with us to support our Country at any age level and any competition.
              Beyond this, we are constantly searching for new and innovative ways to support the
              club and the National Team, and have also been involved in various non-profit activities
              away from football as well.
              <br><br>
              <h4>Proudly,<br> We are The West Block Blues.</h4>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="wbb-about-3" id="wbb-register">
      <div class="container">
        <div class="row">

          <form class="col s12 l6 m12">
            <div class="wbb-register-text">
                <h2 style="">REGISTER <br> WITH US!</h2>
            </div>
            <div class="row">
              <div class="input-field col l12 m12 s12">
                <input id="name" type="text" class="validate">
                <label for="name">Name</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col l12 m12 s12">
                <input id="email" type="email" class="validate">
                <label for="email" data-error="wrong" data-success="right">Email</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col l12 m12 s12">
                <input id="city" type="text" class="validate">
                <label for="city">State</label>
              </div>
            </div>

            <button class="wbb-button btn waves-effect waves-light" type="submit" name="action" style="font-weight:600;">Submit
            </button>
          </form>
          <div class="col l6 s12 m12 valign-wrapper">

          </div>
        </div>
      </div>
    </div>
    <script src="./js/jquery.js" charset="utf-8"></script>
    <script src="./js/materialize.min.js" charset="utf-8"></script>
    <script type="text/javascript">
          $(document).ready(function(){
        $('.materialboxed').materialbox();
        $(".button-collapse").sideNav();
      });
    </script>
  </body>
</html>
