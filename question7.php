<?php
function checkEmail($email)
{
    $email_valid = "/([a-zA-Z0-9!#$%&’?^_`~-])+@([a-zA-Z0-9-])+(.com)+/";
    $email = "abc@gmail.com";
    return (preg_match($email_valid, $email));
}
echo checkEmail("hoai@gmail");
?>
