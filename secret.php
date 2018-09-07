<?php

if ($_POST['pass'] != "" AND $_POST['pass'] == "kangourou") {
  echo 'Voici les codes d\'accès au serveur central de la NASA: </br> xxxxxxxxxx </br> yyyyyyyyyy </br> zzzzzzzzzzz';
}else {
  echo 'Mot de passe incorrect';
  header('Location: http://localhost/php/boulot_semaine_12/password_page/formulaire.php');
}

?>
