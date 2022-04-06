<?php
$user_name = $_POST["user_name"];
$user_mail = $_POST["user_mail"];
$user_message = $_POST["user_message"]; 
echo "Hello " . $user_name .  ", <br /> 
You are registered: ";
?>

<?php
$user_name = $_POST["user_name"];
if($user_name=="")
   {
   echo "Le nom n est pas defini";
   }
elseif ($user_mail=="") {
    echo "L'email' n est pas defini";
}
else {
    echo "c correct";
}
?>