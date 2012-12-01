<?php
/**
* sendmail.php
*
* @package    napden
* @license    https://github.com/napden/napden.com/blob/master/LICENSE.md
* @author     Esteban Elias Nieva <stnieva@gmail.com>
*/

require_once('recaptchalib.php');

/**
* Envía el contenido del formulario.
*
* @return array boolean true si la direccion es correcta
* @param string $email direccion de correo
*/
function sendmail() {
    $status = array("status" => false);

    $privatekey = "6LcHWdkSAAAAAAgDf2ORqCypSE4ZZkd5rrz1giCf";

    $reCaptcha = recaptcha_check_answer($privatekey, $_SERVER["REMOTE_ADDR"], $_POST["recaptcha_challenge_field"], $_POST["recaptcha_response_field"]);

    $email = "info@napden.com";

    $asunto = "Napden.com — Formulario";

    if($reCaptcha->is_valid) {
        $message = wordwrap($_POST["message"], 70);

        mail($email, $asunto, $message, "From: " . $_POST["email"]);

        $status = array("status" => true);
    }

    return $status;
}

$status = sendmail();

echo json_encode($status);
?>

