<?php

  // require_once 'data.php';
  require_once("dbconfig.php");

  $id = $_GET['id'];
  $fighter = $fighters[$id];

  $query = $pdo->prepare('
		SELECT *
		FROM boxer
    WHERE id = ?
	');

	$query->execute(array($id));
	$fighter = $query->fetch();

  $template = 'fighter';
  include 'view/layout.phtml';

 ?>
