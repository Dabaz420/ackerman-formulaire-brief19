<?php

  $userNom = $_POST["user-nom"] ?? false;
  $userPrenom = $_POST["user-prenom"] ?? false;
  $userAdresse = $_POST["user-adresse"] ?? false;
  $userLogin = $_POST["user-login"] ?? false;
  $userPsw = $_POST["user-password"] ?? false;
  $userCP = $_POST["user-cp"] ?? false;
  $userVille = $_POST["user-ville"] ?? false;
  $userPays = $_POST["user-pays"] ?? false; 
  $userTel = $_POST["user-tel"] ?? false;
  
  $destinataire = $userLogin;
  $envoyeur	="ne_pas_repondre@AlainAckerman.com";
  $sujet = "Votre identifiant de connexion au site d’Alain Ackerman";
  $message = "Bonjour " . $userPrenom . " " . $userNom . "\r\n" .

             "Nous vous remercions d'avoir créé votre compte client et vous souhaitons la bienvenue sur le site d'Alain Ackerman. \r\n" .

             "Vos données de connexion vous permettent d'accéder à l'intégralité du site. Vous pouvez à tout moment gérer les données de votre compte (https://alainackerman.com/account)." .

             "Meilleures salutations.\r\n" .
             "L’équipe du site Alain Ackerman \r\n";

  $headers = 'From: '.$envoyeur . "\r\n" .
     		 'Reply-To: '.$envoyeur. "\r\n" .
     		 'X-Mailer: PHP/' . phpversion();
  $envoye = mail($destinataire, $sujet, $message, $headers);
  if ($envoye){
  echo "<br />Email envoyé.";
  }
  else{
  echo "<br />Email refusé.";
  }
  
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>account-create--process.php</title>
  <style>code{background:#FF0}</style>
</head>
<body>
  <main>
    <p>Bien le bonjour, je suis le fichier <code>account-create--process.php</code> et voici les valeurs que je viens tout juste de recevoir par la méthode <code>POST</code>:</p>
    <ul>
      <li>Nom : <?php echo $userNom; ?></li>
      <li>Prénom : <?php echo $userPrenom; ?></li>
      <li>Adresse : <?php echo $userAdresse; ?></li>
      <li>Code postal : <?php echo $userCP; ?></li>
      <li>Ville : <?php echo $userVille; ?></li>
      <li>Pays : <?php echo $userPays; ?></li>
      <li>Téléphone : <?php echo $userTel; ?></li>
      <li>Adresse électronique : <?php echo $userLogin; ?></li>
      <li>Mot de passe : <?php echo $userPsw; ?></li>
    </ul>
  </main>
</body>
</html>
