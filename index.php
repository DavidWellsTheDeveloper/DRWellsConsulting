<?php

$request = strtoupper(trim($_SERVER['REQUEST_URI'], '/'));
echo $request;
switch ($request) {
  case '' :
  case 'DRWELLSCONSULTING' :
  require __DIR__ . '/home.php';
  break;
  case 'CONTACT' :
  case 'DRWELLSCONSULTING/CONTACT' :
  require __DIR__ . '/contact.php';
  break;
  case 'SERVICES' :
  case 'DRWELLSCONSULTING/SERVICES' :
  require __DIR__ . '/services.php';
  break;
  default:
          //http_response_code(404);
          //require __DIR__ . '/404.php';
  break;
}

?>
