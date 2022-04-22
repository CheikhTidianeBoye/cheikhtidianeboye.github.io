<?php
if (isset($_POST["ENVOYER"])) {
  $Email = $_POST["email"];
  $message = $_POST["message"];
  if (empty($Email) || empty($message)) {
     echo  ("Tous les champs doivent etre completé!");
  }
  else {
      echo "courrier envoyé!";
  }
}
?>

