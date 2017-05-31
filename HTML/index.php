<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class = "no-js">
    <!--<![endif]-->
    <head>
        <!-- Title -->
        <title> Robery Finder - Version 1.1</title>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsFelqvBHeiBZ9KEmCJ31cVXQjdo0aASk&libraries=visualization">
        </script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <style>
          /* Always set the map height explicitly to define the size of the div
           * element that contains the map. */
          #map {
/*            height: 80%;
            width: 80%;
*/            height: 500px;
              width: 600px;
              border-radius: 21px 21px 21px 21px;
              -moz-border-radius: 21px 21px 21px 21px;
              -webkit-border-radius: 21px 21px 21px 21px;
              border: 6px solid #000000;
          }
/*                table {
                    background-color: #aaa;
                    border: 1px solid black;
                    }*/
         #tweets tbody {
                    /*background-color: #ddd;*/
                    height: 500px;
                    overflow: auto;
                    width:600px;
                    display: block;
                    border-radius: 21px 21px 21px 21px;
                    -moz-border-radius: 21px 21px 21px 21px;
                    -webkit-border-radius: 21px 21px 21px 21px;
                    border: 6px solid #000000;
                }
         #tweets  td {
                    padding: 5px 5px;
                    width:100px;
                    direction: center;
                  }

       </style>
        <!-- Favicon -->
        <!-- <link href="favicon.ico" rel="shortcut icon"> -->
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Raleway:100,300,400" type="text/css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,300" type="text/css" rel="stylesheet">
    </head>
    <body>
        <div id="social" class="visible-lg">
            <ul class="social-icons pull-right hidden-xs">
                <li class="social-rss">
                    <a href="#" target="_blank" title="RSS"></a>
                </li>
                <li class="social-twitter">
                    <a href="#" target="_blank" title="Twitter"></a>
                </li>
                <li class="social-facebook">
                    <a href="#" target="_blank" title="Facebook"></a>
                </li>
                <li class="social-googleplus">
                    <a href="#" target="_blank" title="GooglePlus"></a>
                </li>
            </ul>
        </div>
        <!-- Header -->
        <div id="header" style="background-position: 50% 0%; height:100%;" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="index.php" title="">
                            <img src="assets/img/logo.png" alt="Logo" />
                        </a>
                    </div>
                    <!-- End Logo -->
                </div>
                <!-- Top Menu -->
                <div id="hornav" class="row text-light">
                    <div class="col-md-12">
                        <div class="text-center visible-lg">
                            <ul id="hornavmenu" class="nav navbar-nav">
                                <li>
                                    <a href="index.php" class="fa-home active">Home</a>
                                </li>
                                <li>
                                    <span class="fa-font ">Blog</span>
                                    <ul>
                                        <li>
                                            <a href="blog-list.html">Blog</a>
                                        </li>
                                        <li>
                                            <a href="blog-single.html">Blog Single Item</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="contact.html" class="fa-comment ">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Top Menu -->
            </div>
        </div>
        <!-- End Header -->
        <!-- === END HEADER === -->
        <!-- === BEGIN CONTENT === -->
        <div id="welcome" class="background-white">
            <div class="container">
                <div class="row margin-vert-40">
                    <!-- Main Text -->
                    <div class="col-md-12">
                        <h2 class="text-center article-title">Who are we?</h2>
                        <h3 class="text-center">We are an innovative alternative to robbery report in Barranquilla. Faster and more convenient than the traditional methods, with automatic alarms and reports to the corresponding authorities by using BigData.</h3>
                        <img class="fadeInUp animate" alt="" src="assets/img/responsive_homepage.jpg" style="display: block; margin-left: auto; margin-right: auto; margin-top: 40px;">
                    </div>
                    <!-- End Main Text -->
                </div>
            </div>
        </div>
        <!-- Icons -->
        <div id="icons" class="parallax-bg1 text-light background-primary" style="background-position: 50% 0%;" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row margin-vert-40">
                    <!-- Icons -->
                    <div class="col-md-4 text-center animate fadeInLeft">
                        <i class="fa-crosshairs fa-3x color-primary-lighter"></i>
                        <h2 class="padding-top-10">Accuracy</h2>
                        <p>Detection and alert generator for different affected zones in Barranquilla.</p>
                    </div>
                    <div class="col-md-4 text-center animate fadeIn">
                        <i class="fa-puzzle-piece fa-3x color-primary-lighter"></i>
                        <h2 class="padding-top-10">Accesible</h2>
                        <p>Compatibility with different platforms and easy connection available with the respective authorities.</p>
                    </div>
                    <div class="col-md-4 text-center animate fadeInRight">
                        <i class="fa-group fa-3x color-primary-lighter"></i>
                        <h2 class="padding-top-10">Sociable</h2>
                        <p>Invita a la participación activa por medio de las redes sociales. La seguridad es responsabilidad de todos.</p>
                    </div>
                    <!-- End Icons -->
                </div>
            </div>
        </div>
        <!-- End Icons -->
        <!-- Content -->
        <div id="content" class="background-white">
            <div class="container">
                <div class="row margin-vert-40">
                    <div class="col-md-12">
                        <h2 class="text-center article-title">Risk Zones Mapping</h2>
                        <center>
                        <p>See Risk zones in Barranquilla.</p>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        <center>
        <table id = "external">
         <tr>
             <td><div id = "map" ></div></td>
             <script>
                 var map;
                 initMap();
                 function initMap() {
                   map = new google.maps.Map(document.getElementById('map'), {
                   center: {lat: 10.984463, lng: -74.800978},
                   zoom: 10
                 });
               }
             </script>
             <td>.          .</td>
             <td>
                <?php
                    class Twitter{
                      function getTweets(){
                          ini_set('display_errors',1);
                          require_once('TwitterAPIExchange.php');

                          $settings = array('oauth_access_token' => "348069833-ZuXLAANB78ygs1VFoZpOZ08oGOZsQh9GvmV2e53b",
                                            'oauth_access_token_secret' => "mW6nE0U2gRN6XnZ8I2bU6mFaxmaHF0eOXa9wRZRe3pviG",
                                            'consumer_key' => "zkyaUhh6fmAgtDFakFLy6ZrK7",
                                            'consumer_secret' => "IeeGjaLauKK1X9rSgd2uPlfF9kdNf9Tcidr2HQHWFtvAmQL73k");

                          $url = 'https://api.twitter.com/1.1/search/tweets.json';
                          $getfield = '?geocode=10.9838039,-74.8880581,10km&count=100';
                          $requestMethod = 'GET';
                          $twitter = new TwitterAPIExchange($settings);
                          $json = $twitter->setGetfield($getfield)
                                     ->buildOauth($url, $requestMethod)
                                    ->performRequest();
                          return $json;
                      }
                      function getInfoTwitter($contenedorJson){
                        $count = 0;
                          $rawdata = "";
                          $json = "";
                          for($i=0;$i<count($contenedorJson);$i++){
                            
                            //$json = $contenedorJson[$i];
                            $json = json_decode($contenedorJson);
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
                              //$rawdata[$count][0] = $fecha;
                              //$rawdata[$count]["Fecha"] = $fecha;
                              $rawdata[$count][0] = $imagen;
                              $rawdata[$count]["Imagen"] = $imagen;
                              //$rawdata[$count][2] = $url_imagen;
                              //$rawdata[$count]["Imagen_url"] = $url_imagen; 
                              $rawdata[$count][1]="@".$screen_name;
                              $rawdata[$count]["Nombre"]="@".$screen_name;
                              $rawdata[$count][2]=$tweet;
                              $rawdata[$count]["Tweet"]=$tweet;
                              $rawdata[$count][3]=$latitud;
                              $rawdata[$count]["Latitud"]=$latitud;
                              $rawdata[$count][4]=$longitud;
                              $rawdata[$count]["Longitud"]=$longitud;
                              $count++;
                            }
                          }
                          return $rawdata;  
                      }
                        function displayTable($rawdata){
                          //DIBUJAR TABLA
                          echo '<table id = "tweets">';
                          $columnas = count($rawdata[0])/2;
                          //echo $columnas;
                          $filas = count($rawdata);
                          //echo "<br>".$filas."<br>";
                          // //Añadimos los titulos
                         
                          // echo '<thead>';
                          // for($i=1;$i<count($rawdata[0]);$i=$i+2){
                          //      next($rawdata[0]);
                          //      echo "<td><b>".key($rawdata[0])."</b></td>";
                          //      next($rawdata[0]);
                          // }
                          // echo '</thead>';
                           echo '<tbody>';
                          for($i=0;$i<$filas;$i++){
                               echo "<tr>";
                               for($j=0;$j<$columnas;$j++){
                                   if($j>2){

                                   }
                                   else{
                                       if($j == 1){
                                        echo "<td><b>".$rawdata[$i][$j]."</b></td>";
                                       }
                                       else{
                                        echo "<td>".$rawdata[$i][$j]."</td>";
                                       }
                                    }
                               }
                               echo "</tr>";
                          }
                          echo '</tbody>';
                          echo '</table>';
                      }
                    }
                    $twitterObject = new Twitter();
                    $jsonraw = $twitterObject->getTweets();
                    $rawdata = $twitterObject->getInfoTwitter($jsonraw);
                    $twitterObject->displayTable($rawdata);
                    ?>
             </td>
         </tr>
        </table>
        <div class = "row margin-vert-40"> </div>
        </center>
        

       <!-- End Content -->

        </div>
        <!-- End Portfolio -->
        <!-- Hiring -->
        <div id="hiring" class="parallax-bg3 text-light" style="background-position: 50% 0%;" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 margin-vert-40">
                        <h2 class="animate fadeIn" style="text-align: center;">TIC Innovation and Society's Development</h2>
                        <hr>
                        <p class="animate fadeIn" style="text-align: center;">
                            <button href = "52.89.5.61/TIC" class="btn btn-lg btn-primary" type="button">Apps</button>
                        </p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- End Hiring -->
        <!-- === END CONTENT === -->
        <!-- === BEGIN FOOTER === -->
        <div id="base" class="background-dark text-light">
            <div class="container padding-vert-30">
                <div class="row">
                    <!-- Disclaimer -->
                    <div class="col-md-6 margin-bottom-30">
                        <h3 class="margin-bottom-10">Attention</h3>
                        <p>This web application is a demo only for academic purposes. No copyright infringement intended.</p>
                    </div>
                    <!-- End Disclaimer -->
                    <!-- Image Credits -->
<!--                     <div class="col-sm-6 col-md-3 margin-bottom-30">
                        <h3 class="margin-bottom-10">Image Credits</h3>
                        <ul class="menu">
                            <li>
                                <a href="http://www.coffeeandplaid.com/" target="_blank">Coffee & Plaid</a>
                            </li>
                            <li>
                                <a href="https://dribbble.com/OMFGdesign" target="_blank">Olly Freeman</a>
                            </li>
                            <li>
                                <a href="https://dribbble.com/artnok" target="_blank">Niko Picard</a>
                            </li>
                            <li>
                                <a href="https://dribbble.com/forsuregraphic" target="_blank">Forsuregraphic</a>
                            </li>
                            <li>
                                <a href="https://www.unsplash.com" target="_blank">Unsplash</a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div> -->
                    <!-- End Image Credits -->
                    <!-- Friends -->
                    <div class="col-sm-6 col-md-3 margin-bottom-30">
                        <h3 class="margin-bottom-10">Developers</h3>
                        <ul class="menu">
                            <p> Juan Cotes - Cristian Cepeda - Catherine Diaz - Patricia Bedoya - Ana Fernandez</p>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <!-- End Friends -->
                </div>
            </div>
        </div>
        <!-- Footer -->
        <div id="footer" class="background-dark text-light">
            <div class="container no-padding">
                <div class="row">
                    <!-- Footer Menu -->
                    <div id="footermenu" class="col-md-8">
                        <ul class="list-unstyled list-inline">
                            <li>
                                <a href="https://twitter.com/" target="_blank" >Twitter</a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" target="_blank">Instagram</a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/" target="_blank">Facebook</a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Footer Menu -->
                    <!-- Copyright -->
                    <div id="copyright" class="col-md-4">
                        <p class="pull-right">(c) 2017 Uninorte</p>
                    </div>
                    <!-- End Copyright -->
                </div>
            </div>
            <!-- End Footer -->
            <!-- JS -->
            <script type="text/javascript" src="assets/js/jquery.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/bootstrap.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/scripts.js"></script>
            <!-- Isotope - Portfolio Sorting -->
            <script type="text/javascript" src="assets/js/jquery.isotope.js" type="text/javascript"></script>
            <!-- Mobile Menu - Slicknav -->
            <script type="text/javascript" src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
            <!-- Animate on Scroll-->
            <script type="text/javascript" src="assets/js/jquery.visible.js" charset="utf-8"></script>
            <!-- Stellar Parallax -->
            <script type="text/javascript" src="assets/js/jquery.stellar.js" charset="utf-8"></script>
            <!-- Sticky Div -->
            <script type="text/javascript" src="assets/js/jquery.sticky.js" charset="utf-8"></script>
            <!-- Slimbox2-->
            <script type="text/javascript" src="assets/js/slimbox2.js" charset="utf-8"></script>
            <!-- Modernizr -->
            <script src="assets/js/modernizr.custom.js" type="text/javascript"></script>

            <!-- End JS -->
    </body>
</html>
<!-- === END FOOTER ===
