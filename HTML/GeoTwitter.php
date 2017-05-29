<<?php

  function getJsonGeoTweets($lat,$lon,$radio,$num_tweets){
    ini_set('display_errors',1);
    require_once('TwitterAPIExchange.php');
    // Set acces tokens for Twitter API
    $settings = array(
          'oauth_access_token' => "348069833-ZuXLAANB78ygs1VFoZpOZ08oGOZsQh9GvmV2e53b",
          'oauth_access_token_secret' => "mW6nE0U2gRN6XnZ8I2bU6mFaxmaHF0eOXa9wRZRe3pviG",
          'consumer_key' => "zkyaUhh6fmAgtDFakFLy6ZrK7",
          'consumer_secret' => "IeeGjaLauKK1X9rSgd2uPlfF9kdNf9Tcidr2HQHWFtvAmQL73k"
        );

    // Number of iterations
    $pages = (int)$num_tweets/100;
    $lastIdTweet = "";
    $contenedorJSON = "";
    $count = 0;
    $count2 = 0;
    $cuentasTwitter = "";
    do {
      $url = 'https://api.twitter.com/1.1/search/tweets.json';
      if ($lastIdTweet == ""){
        $getfield = '?geocode='.$lat.','.$lon.','.$radio.'&count=100';
      }
      else {
        $getfield = '?geocode='.$lat.','.$lon.','.$radio.'&max_id='.($lastIdTweet)."&count=100";
      }
      $requestMethod = 'GET';
      $twitter = new TwitterAPIExchange($settings);
      $json = $twitter->setGetfield($getfield)
                ->buildOauth($url, $requestMethod)
                ->performRequest();
            $contenedorJSON[$count] = $json;

            $count++;
            $pages--;

    }
    while ($pages>0);
    return $contenedorJSON;
 ?>
