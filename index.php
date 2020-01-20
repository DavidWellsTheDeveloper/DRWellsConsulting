<!DOCTYPE html>
<html lang="en">
<?php include('head.php'); ?>
<body>

<?php
  $request = strtoupper($_SERVER['REQUEST_URI']);
  $request = str_replace('DRWELLSCONSULTING', '', $request);
  $request = trim($request, '/');
  switch ($request) { 
      case '' :
      case 'HOME' :
        $page = "home";
        break;
      case 'CONTACT' :
        $page = "contact";
        break;
      case 'SERVICES' :
        $page = "services";
        break;
      default:
              //http_response_code(404);
              //require __DIR__ . '/404.php';
      break;
  }

  include('nav.php');
  require __DIR__ . '/' . $page . '.php';
  include('footer.php');
?>

  </body>
</html>
