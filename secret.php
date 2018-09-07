<?php

if ($_POST['pass'] != "" AND $_POST['pass'] == "kangourou") {
  echo 'Vous avez accès à nos codes secrets';
}else {
  echo 'Mot de passe incorrect';
  header('Location: http://localhost/php/boulot_semaine_12/password_page/formulaire.php');
}

?>
