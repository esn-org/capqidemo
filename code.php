<?php


function filter($text){

  //return preg_replace('/\s+/', ' ',str_replace("\n", '<br>', trim(htmlspecialchars($text))));
  return str_replace("\n", '<br>', trim(htmlspecialchars($text)));
}


function codeWidget2(){

$html = "
<script type=\"text/javascript\" id=\"igp-widget-script\" 
        data-version=\"v1\" data-lang=\"en\" data-partner-id=\"YOUR_ID\">
  
  var theUrlData = {};
  (function() {
    function async_load(){
      var s = document.createElement('script');
      s.type = 'text/javascript';
      s.async = true;
      theUrlData = {url: \"http://transparencyatwork.org\"};
      var widgetUrl = theUrlData.url + \"/assets/widget.min.js\";
      s.src = widgetUrl 
            + ( widgetUrl.indexOf(\"?\") >= 0 ? \"&\" : \"?\") + 'ref=' + encodeURIComponent(window.location.href);
      var embedder = document.getElementById('igp-widget-script');
      embedder.parentNode.insertBefore(s, embedder);
    }
    if (window.attachEvent)
      window.attachEvent('onload', async_load);
    else
      window.addEventListener('load', async_load, false);
  })();
</script>
";

  return filter($html);
}


function codeWidget3(){

$html = "
<div class=\"widget-container\" >
  <script type=\"text/javascript\" 
          id=\"igp-widget_ID-COMPANY\" 
          data-employer-id=\"ID-COMPANY\" 
          data-version=\"v1\" 
          type=\"text/javascript\" 
          data-script-selector=\"igp-widget\">
  </script>
</div>
";

  return filter($html);
}



function codeApi1(){

$html = "
include __DIR__ . '/PATH_TO_FOLDER/vendor/autoload.php';

use \Capqi\CapqiApi;
use \Capqi\Auth\CapqiAuth;
";

  return filter($html);
}

function codeApi2(){

$html = '
$apiAuth = new CapqiAuth();
$auth    = $apiAuth->newAuth(array(\'email\'=>\'MAIL\', \'password\'=>\'PASS\'), \'BasicAuth\');
';

  return filter($html);
}

function codeApi3(){

$html = '
$auth->isValidAuth();
';

  return filter($html);
}


function codeApi4(){

$html = '
$api       = new CapqiApi();
$employers = $api->newCollection(\'employers\', $auth);
';

  return filter($html);
}

function codeApi5(){

$html = '
$employers->getList();
';

  return filter($html);
}


function codeApi6(){

$html = '
$employers->get(\'internsgopro_be\');
';

  return filter($html);
}


function codeApi7(){

$html = '
Array ( 
  [type]  => response 
  [total] => 1 
  [data]  => Array ( 
    [0] => Array ( 
      [tw_id]                           => internsgopro_be 
      [employer_name]                   => InternsGoPro 
      [country_code]                    => BE 
      [country_name]                    => Belgium 
      [average_ratings]                 => 4.2 
      [avg_learning_experience]         => 4 
      [avg_supervision_guidance]        => 4 
      [avg_work_environment]            => 4 
      [avg_career_development]          => 4 
      [avg_offer_and_contract]          => 5 
      [avg_compensation_benefits]       => 4 
      [number_of_employee_range]        => n-a 
      [recommended_employer_percentage] => 100% 
      [average_payment_amount]          => 0 
    ) 
  ) 
)
';

  return filter($html);
}