<?php

include __DIR__ . '/capqiAPI/vendor/autoload.php';

use \Capqi\CapqiApi;
use \Capqi\Auth\CapqiAuth;



function doLogin($email, $pass){

  $apiAuth = new CapqiAuth();
  $auth = $apiAuth->newAuth(array('email'=> $email,'password'=> $pass), 'BasicAuth');
  if ($auth->isValidAuth()){
    return $auth;
  } else {
    return null;
  }
}


function getEmployerData($auth, $id){

  if($auth->isValidAuth()){

    $api       = new CapqiApi();
    $employers = $api->newCollection('employers', $auth);

    if ($id != ''){
      $employer  = $employers->get($id);
      if ($employer['type'] == 'response'){
        $url = $employers->createProfileLink($id);
        return array_merge($employer['data'][0],['web'=>$url]);
      } else {
        return [];
      }
    } else {
      return [];
    } 
  }
}

