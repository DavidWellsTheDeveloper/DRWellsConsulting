<?php

  $request = $_SERVER['REQUEST_URI'];

  switch ($request) {
        case '/' :

          require __DIR__ . '/mainPage.php';
          break;
        case '' :
          require __DIR__ . '/mainPage.php';
          break;
        case '/contact' :
          require __DIR__ . '/contact.php';
          break;
        case '/contact' :
          require __DIR__ . '/contact.php';
          break;
        default:
          http_response_code(404);
          require __DIR__ . '/404.php';
          break;
}

?>
