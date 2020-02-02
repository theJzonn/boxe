<?php

try {
$pdo = new PDO(
  'mysql:host=sql313.epizy.com;dbname=epiz_20781824_boxe;charset=UTF8',
  'epiz_20781824', // Utilisateur
  'cnqomQ7J0S', // Mot de passe
  [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Sous quel format on voudra récupérer les erreurs de PDO : format d'exception
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // Avoir toujours un tableau associatif pour les résultats de requête
  ]
);
} catch(PDOException $error) {
  // echo $error->getMessage();
  echo "La connexion à la base de données a échoué";
}

 ?>
