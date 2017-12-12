<?php

  include(__DIR__ . '/functions.php');

  $internships = getDataForDemo();
  
  print(generateHeader(true));
  print(generateMenu('widget'));
  print(generateSkeletonTop('Internships in our platform', 'Check the internships there are available in our platform'));

  print(generateInternshipsWidget($internships, 1));
  
  print(generateSkeletonBottom());
  print(generateFooter());

?>
