/*!
 * main.js
 *
 * @author Abel Nieva Saavedra <abnieva@gmail.com> Elias Esteban Nieva <stnieva@gmail.com>
 * @license https://github.com/napden/napden.com/blob/master/LICENSE.md
 */


/**
 * Comprueba el campo de un formulario.
 *
 * @param field El campo del formulario.
 * @returns {boolean} Resultado de la comprobación.
 */
function checkField(field) {
    return field.validity.valid;
}

/**
 * Activa el Anti-Bot del formulario
 */
function onAntiBot() {
    var fields = document.getElementById('contact-form');
    if(checkField(fields.getElementsByTagName('input')[0]) && checkField(fields.getElementsByTagName('textarea')[0]))
        $('#anti-bot').modal("show");
}

/**
 * Muestra un mensaje de exito o error relativo al evento submit.
 *
 * @param {boolean} success Valor booleano relativo al evento submit.
 */
function successForm(success) {
    $('.alert').remove();
    if(success) {
        $('#anti-bot .modal-body').append('<div class="alert alert-success"><strong>Well done!</strong> Your email was successfully sent.</div>');
    }
    else {
        $('#anti-bot .modal-body').append("<div class='alert alert-error'><strong>Oh snap!</strong> You didn't enter the CAPTCHA properly. Please try again!</div>");
    }
}

$(document).on("ready", function() {

    /**
     * Activa el tooltip de Bootstrap.
     */
    $("[rel=tooltip]").tooltip();

    /**
    * Envía los valores del formulario a sendmail.php.
    */
    $('#contact-form').submit(function(event) {
        post = {
            'email': $('input:first-child').val(),
            'message': $('textarea').val(),
            'recaptcha_challenge_field': $('#recaptcha_challenge_field').val(),
            'recaptcha_response_field': $('#recaptcha_response_field').val()
        };

        $.ajax({
            type: 'POST',
            url: 'http://localhost/napden.com/sendmail.php',
            dataType: 'json',
            data: post,
            success: function(data) {
                successForm(data["status"]);
            }
        });

        event.preventDefault();
    });

    /**
    * Personalización del Recaptcha.
    */
    var RecaptchaOptions = {
        theme : 'custom'
    };

    /**
    * Creación del Recaptcha.
    */
    Recaptcha.create('6LcHWdkSAAAAALxFwxZ68lvM6sanUIZeYFeybgnH', 'recaptcha_image', RecaptchaOptions);
});
