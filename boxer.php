<?php

  // require_once 'data.php';

  require_once("dbconfig.php");

  $query = $pdo->prepare('
		SELECT *
		FROM boxer
	');

	$query->execute();
	$boxerList = $query->fetchAll();

  $template = 'boxer';

  include 'view/layout.phtml';

 ?>
