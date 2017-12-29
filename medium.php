<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> medium test</title>
    <style media="screen">
      body{
        color: pink;
      }
    </style>
  </head>
  <body>
    <?php
      $BASE_URI = "https://api.medium.com/v1/";
      $USER_ID = "1d8eaab5ba7390ad65483d1d7862a3edd9ec6ac670e3a5f13c4041696db5c14f6";
      $TOKEN = "255fd6ec57fbf129703408b4bfdbd5acf6039c3786d6909d27b83e289d9e0a645";
      // $cu = curl_init();
      // curl_setopt($cu,CURLOPT_URL,$BASE_URI);
      // curl_setopt($cu,CURLOPT_HTTPHEADER,array("Authorization: Bearer 255fd6ec57fbf129703408b4bfdbd5acf6039c3786d6909d27b83e289d9e0a645","Content-Type: application/json","Accept: application/json" ));
      // curl_setopt( $cu, CURLOPT_RETURNTRANSFER, 1 );
      // $response = curl_exec( $cu );
      // print_r($response);
      // curl_close($cu);

      function obtainPosts()
      {
        global $BASE_URI, $USER_ID, $TOKEN;
        $extendedUrl = "https://medium.com/feed/@WestBlockBlues";
        $cu = curl_init();
        curl_setopt($cu, CURLOPT_URL,$extendedUrl);
        // curl_setopt($cu, CURLOPT_HTTPHEADER, array("Content-Type: application/json","Accept: xml"));
        $response = curl_exec($cu);
        // print_r($response);
        curl_close($cu);
      }

      // public function returnDivFromJson($json)
      // {
      //   # code...
      // }
      obtainPosts();

    ?>

  </body>
</html>
