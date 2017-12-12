<?php

  include(__DIR__ . '/functions.php');
  
  print(generateHeader(true));
  print(generateMenu());
  print(generateSkeletonTop('Internships in our platform', 'Check the internships there are available in our platform'));

  $internships = getDataForDemo();

  print(generateInternshipsWidget($internships, 0));
  
  print(generateSkeletonBottom());
  print(generateFooter());

?>
