<!DOCTYPE html>
<html lang="en">
<?php include('head.php'); ?>
<body>
<?php include('nav.php'); ?>
<?php
$pageName =  $_GET['pageName'];
include($pageName);
?>
<?php include('footer.php'); ?>
</body>
</html>
