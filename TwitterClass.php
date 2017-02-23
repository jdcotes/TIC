<?php 
	class Twitter{
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
		}

		function getInfoTwitter($contenedorJson){

			$count = 0;
			$rawdata = "";
			$json = "";
			for($i=0;$i<count($contenedorJson);$i++){
				
				$json = $contenedorJson[$i];
				$json = json_decode($json);
				$num_items = count($json->statuses);

				for ($j=0; $j<$num_items; $j++){
					$user = $json->statuses[$j];
					$id_tweet = $user->id_str;
					$fecha = $user->created_at;
					$url_imagen = $user->user->profile_image_url;
					$screen_name = $user->user->screen_name;
					$imagen = "<a href='https://twitter.com/".$screen_name."' target=_blank><img src=".$url_imagen."></img></a>";
					$tweet = $user->text;

					if(!empty($user->geo->coordinates[0])){
						$latitud = $user->geo->coordinates[0];
						$longitud = $user->geo->coordinates[1];
					}
					else{
						$latitud = 0;
						$longitud = 0;
					}
					$rawdata[$count][0] = $fecha;
					$rawdata[$count]["FECHA"] = $fecha;
					$rawdata[$count][1] = $imagen;
					$rawdata[$count]["imagen"] = $imagen;
					$rawdata[$count][3] = $url_imagen;
					$rawdata[$count]["imagen_url"] = $url_imagen; 
					$rawdata[$count][4]="@".$screen_name;
		            $rawdata[$count]["nombre"]="@".$screen_name;
		            $rawdata[$count][5]=$tweet;
		            $rawdata[$count]["tweet"]=$tweet;
		            $rawdata[$count][6]=$latitud;
		            $rawdata[$count]["latitud"]=$latitud;
		            $rawdata[$count][7]=$longitud;
		            $rawdata[$count]["longitud"]=$longitud;
		            $count++;
				}
			}
			return $rawdata;	
		}

		function getCoordinates($city){
			$coor = "";
			$html = file_get_contents("http://api.openweathermap.org/data/2.5/find?q=$city&APPID=672c28ac63de884629097722767679e3");
			$json = json_decode($html);
			$lat = $json->list[0]->coord->lat;
			$lon = $json->list[0]->coord->lon;

			$coor["latitud"] = $lat;
			$coor["longitud"] = $lon;

			return $coor;
		}
	}
?>