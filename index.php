<!DOCTYPE html>
<html lang="en">
<?php include('head.php'); ?>
<body>

<?php
  $request = strtoupper($_SERVER['REQUEST_URI']);
  $request = str_replace('DRWELLSCONSULTING', '', $request);
  $request = trim($request, '/');
  $nomatch = false;
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
        $nomatch = true;
              //http_response_code(404);
              //require __DIR__ . '/404.php';
      break;
  }

  include('nav.php');
  if ($nomatch) {
    echo "<h3>Crap, '" . $request . "' does not exist!</h3>";
  } else {
    require __DIR__ . '/' . $page . '.php';    
  }
  include('footer.php');
?>

  </body>
</html>
