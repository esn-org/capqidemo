<?php


function getDataForDemo(){

  return [
    1 => [
      'title'     => 'Internship Title 1',
      'logo'      => 'itcom.png',
      'company'   => 'Akademie für Ehrenamtlichkeit Deutschland',
      'location'  => 'Germany',
      'country'   => 'DE',
      'widget_id' => 'akademie_fur_ehrenamtlichkeit_deutschland_de',
    ],
    2 => [
      'title'     => 'Internship Title 2',
      'logo'      => 'itcom.png',
      'company'   => 'Cyprus Youth Council',
      'location'  => 'Cyprus',
      'country'   => 'CY',
      'widget_id' => 'cyprus_youth_council_cy',
    ],
    3 => [
      'title'     => 'Internship Title 3',
      'logo'      => 'itcom.png',
      'company'   => 'European Health Management Association',
      'location'  => 'Belgium',
      'country'   => 'BE',
      'widget_id' => 'european_health_management_association_be',
    ],
    4 => [
      'title'     => 'Internship Title 4',
      'logo'      => 'itcom.png',
      'company'   => 'InternsGoPro',
      'location'  => 'Belgium',
      'country'   => 'BE',
      'widget_id' => 'internsgopro_be',
    ],
  ];
}

function generateBar($data){


  $value = ($data * 100 / 5);

  $html = '<div class=\'progress\'><div class=\'progress-bar\' role=\'progressbar\' style=\'width: '.$value.'%\' aria-valuenow=\''.$value.'\' aria-valuemin=\'0\' aria-valuemax=\'100\'>'.($data != 0 ? $data : '').'</div></div>';

  return $html;
}

function generateTooltip($employer){

  $html  = '<div class=\'rec\'>Recommended: <span class=\'recommended\'>'.$employer['recommended_employer_percentage'].'</span> %</div>';
  $html .= '<hr class=\'footer_hr\'>';
  $html .= '<div class=\'rem\'>Remuneration<br>'.generateBar($employer['avg_compensation_benefits']).'</div>';
  $html .= '<div class=\'rem\'>Supervision & Management <br>'.generateBar($employer['avg_supervision_guidance']).'</div>';
  $html .= '<div class=\'rem\'>Offer and Contract <br>'.generateBar($employer['avg_offer_and_contract']).'</div>';
  $html .= '<div class=\'rem\'>Work Environment & culture <br>'.generateBar($employer['avg_work_environment']).'</div>';
  $html .= '<div class=\'rem\'>Learning Content <br>'.generateBar($employer['avg_learning_experience']).'</div>';
  $html .= '<div class=\'rem\'>Career Development <br>'.generateBar($employer['avg_career_development']).'</div>';
  $html .= '<hr class=\'footer_hr\'>';
  $html .= '<a href=\''.$employer['profile_url'].'\' type=\'button\' class=\'btn btn-link button_stats\' target=\'_blank\'>Check the complete statistics</a>';

  return $html;
}



function generateSkeletonTop($title, $subtitle){

  $html = '
    <!-- Page Content -->
    <div role="main" class="container">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">

            <h1 class="mt-3">'.$title.'</h1>
            <div class="lead">'.$subtitle.'</div>
  ';
  return $html;
}


function generateSkeletonBottom(){

  $html = '
          </div>
        </div>
      </div>
    </div>
  ';
  return $html;
}


function generateInternshipsWidget($internships, $type = 0){

  $html = '<div id="internships-block">';

  foreach ($internships as $key => $internship){

    $html .= '
      <div class="internship">
        <div class="card w-100">
          <div class="card-body">
            <div class="header-internship row">
              <div class="col-md-1">
                <div class="text-center img-header">
                <img class="rounded" src="./img/'.$internship['logo'].'" alt="ITCom logo"/>
                </div>
              </div>
              <div class="col-md-6 text-header">
                <h4 class="card-title">'.$internship['title'].'</h4>
                <h6 class="card-subtitle mb-2 text-muted">'.$internship['company'].'</h6>
                <div class="location"><span class="flag-icon flag-icon-'.strtolower($internship['country']).'"></span>&nbsp;'.$internship['location'].'</div>
              </div>
              <div class="col-md-5">
    ';
    switch ($type){
      case 1:
        if ($internship['widget_id'] != ''){
          $html .= '
            <div class="widget-container" style="width: 400px !important;display: flex;">
              <script type="text/javascript" id="igp-widget_'.$internship['widget_id'].'" data-employer-id="'.$internship['widget_id'].'" data-version="v1" data-script-selector="igp-widget"></script>
            </div>
            <br>
            <div class="clearfix"></div>
          ';
        }
        break;
      case 2:
        if (!empty($internship['api'])){
          $html .= '
            <div class="api_container">
              <div class="alert alert-secondary" role="alert">
                <div class="row">
                  <div class="col-auto mr-auto">
                    <div class="rating">
                      <div class="rating_l">'.$internship['api']['average_ratings'].'</div><div class="rating_s"> / 5</div>
                    </div>
                    
                  </div>
                  <div class="col-auto">  
                    <img class="employer_label" src="'.$internship['api']['employer_label_url'].'" alt="'.$internship['api']['employer_label'].'" title="'.$internship['api']['employer_label'].'"/>           
                    <span class="badge badge-primary pop" data-toggle="tooltip" data-container="body" data-placement="bottom" data-html="true" data-content="'.generateTooltip($internship['api']).'" data-original-title="" title="">View Statistics</span>
                    <a href="#" class="badge badge-warning">Send Review</a>
                  </div>
                </div>
              </div>
            </div>
          ';
        }
      break;
      case 0:
      default:
        //Empty case
        break;

    }

    $html .= '
              </div>
            </div>
            <div class="row">
              <div class="col-md-8">
                <p class="card-text">This asdadas is the summary of the description of the internship. Details, conditions, ..</p>
                <a href="#'.$key.'" class="btn btn-primary">See the internship</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    ';

  }       

              
  $html .= '</div> <!-- Internship Block -->';
            
  return $html;

}


function generateMenu($active = 'original'){

  $html = '
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">CAPQI Demo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item '.($active==='original' ? 'active' : '').'">
              <a class="nav-link" href="index.php">Original<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item '.($active==='widget' ? 'active' : '').'">
              <a class="nav-link" href="int_widget.php">Widget</a>
            </li>
            <li class="nav-item '.($active==='api' ? 'active' : '').'">
              <a class="nav-link" href="int_api.php">API</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link '.($active==='howto' ? 'active' : '').' dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                HowTo
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="howto_widget.php">Use Widget</a>
                <a class="dropdown-item" href="howto_api.php">Use API</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  ';

  return $html;
}

function generateFooter(){

  $html = '
        <footer class="footer">
          <div class="container">
            <span class="text-muted"><img src="./img/eu_logo.jpg" height="40" alt="ITCom logo"/> - <img src="./img/capqi_logo.jpg" height="40" alt="ITCom logo"/> - <img src="./img/esn.png" height="40" alt="ESN International Logo"/> - <a href="http://esn.org" title="ESN International" target="_blank">ESN International AISBL</a> - Gorka Guerrero Ruiz</span>
          </div>
        </footer>

        <!-- Bootstrap core JavaScript -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <script src="https://use.fontawesome.com/9690e058cb.js"></script>
        <script src="./js/custom.js">

      </script>
      </body>
    </html>
  ';
  return $html;

}

function generateHeader($isWidget = false){

  require(__DIR__ . '/config.php');
  
  $html = '
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="CAPQI DEMO">
      <meta name="author" content="ESN - Gorka Guerrero Ruiz">

      <title>CAPQI DEMO</title>
      <!-- Bootstrap core CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
      <link rel="stylesheet" href="./flag-icon/css/flag-icon.css">
      <link rel="stylesheet" href="./css/style.css">
  ';

  if ($isWidget){
    $html .= '
      <script type="text/javascript" id="igp-widget-script" data-version="v1" data-lang="en" data-partner-id="'.$tw_id.'">
        var theUrlData = {};
        (function() {
          function async_load(){
            var s = document.createElement(\'script\');
            s.type = \'text/javascript\';
            s.async = true;
            theUrlData = {url: "https://www.transparencyatwork.org"};
            var widgetUrl = theUrlData.url + "/assets/widget.min.js";
            s.src = widgetUrl + ( widgetUrl.indexOf("?") >= 0 ? "&" : "?") + \'ref=\' + encodeURIComponent(window.location.href);
            var embedder = document.getElementById(\'igp-widget-script\');
            embedder.parentNode.insertBefore(s, embedder);
          }
          if (window.attachEvent)
            window.attachEvent(\'onload\', async_load);
          else
            window.addEventListener(\'load\', async_load, false);
        })();
      </script>
    ';
  }

  $html .= '
      </head>
    <body>
  ';
  return $html;
   
}