<?php

$request = strtoupper($_SERVER['REQUEST_URI']);
$request = str_replace('DRWELLSCONSULTING', '', $request);
$request = trim($request, '/');
switch ($request) { 
  case '' :
  case 'HOME' :
  require __DIR__ . '/home.php';
  break;
  case 'CONTACT' :
  require __DIR__ . '/contact.php';
  break;
  case 'SERVICES' :
  require __DIR__ . '/services.php';
  break;
  default:
          //http_response_code(404);
          //require __DIR__ . '/404.php';
  break;
}

?>
