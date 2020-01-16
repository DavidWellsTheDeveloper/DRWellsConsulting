<?php

  $request = $_SERVER['REQUEST_URI'];
echo $request;
  switch ($request) {
        case '/DRWellsConsulting/' :
          require __DIR__ . '/home.php';
          break;
        case '' :
          require __DIR__ . '/home.php';
          break;
        case '/DRWellsConsulting/contact' :
          require __DIR__ . '/contact.php';
          break;
        case '/DRWellsConsulting/services' :
          require __DIR__ . '/services.php';
          break;
        default:
          //http_response_code(404);
          //require __DIR__ . '/404.php';
          break;
}

?>
