<?php

  include(__DIR__ . '/functions.php');
  include(__DIR__ . '/api.php');

  require(__DIR__ . '/config.php');
  
  $auth = doLogin($tw_mail, $tw_pass);

  $internships = getDataForDemo();
  $dataWithApi = [];

  foreach ($internships as $key => $internship) {

    $tmp = $internship;
    $tmp['api'] = getEmployerData($auth, $internship['widget_id']);

    $dataWithApi[$key] = $tmp;
  }

  print(generateHeader(false));
  print(generateMenu('api'));
  print(generateSkeletonTop('Internships in our platform', 'Check the internships there are available in our platform'));

  print(generateInternshipsWidget($dataWithApi, 2));
  
  print(generateSkeletonBottom());
  print(generateFooter());

?>
