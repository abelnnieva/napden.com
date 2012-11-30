<?php
/**
* The contact template.
*
* @package    napden.com
* @license    https://github.com/napden/napden.com/blob/master/LICENSE.md
* @author     Elias Esteban Nieva <stnieva@gmail.com>
*/
?>

        <!-- Contact -->
        <section class="contact">
            <div class="container">
                <div class="row-fluid">
                    <div class="span13">

                        <div class="page-header">
                            <h1 class="section-title">Contact us <small>We love to listen</small></h1>
                        </div>
                        <div class="row-fluid">

                            <div class="span4">
                                <p>If you have a project you want to discuss please get in touch, we will respond to your enquiry promptly.</p>
                                <p>Call us on <a href="tel:+34667707341"><strong>+34 667 707341</strong></a>
                                <p>Email us at <a href="mailto:info@napden.com"><strong>info@napden.com</strong></a></p>
                            </div>

                            <div class="span3">
                                <p>Come see us at</p>
                                <address>
                                    <strong>Napden</strong><br>
                                    Av. Ingenieros 6<br>
                                    La Laguna, Tenerife 38320
                                </address>
                            </div>

                            <form id="contact-form" class="span6 hidden-phone">
                                <fieldset>
                                    <input class="input-block-level" type="email" placeholder="Your email..." name="from-email" autocomplete="off" required="required">
                                    <textarea class="input-block-level" rows="3" placeholder="Your message..." name="message" rows="4" cols="50" autocomplete="off" required="required"></textarea>

                                    <button onclick="onAntiBot()" role="button" class="btn btn-block btn-inverse">Send</button>

                                    <!-- Modal -->
                                    <div id="anti-bot" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h3 id="myModalLabel">Anti-Bot</h3>
                                        </div>

                                        <!-- reCAPTCHA -->
                                        <div class="modal-body">
                                            <div id="recaptcha_image"></div>
                                            <input type="text" id="recaptcha_response_field" placeholder="Enter the captcha code..." autocomplete="off" required="required" />
                                        </div>

                                        <div class="modal-footer">
                                            <a class="btn btn-link" href="javascript:Recaptcha.reload()">Get another captcha</a>
                                            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                                            <button type="submit" class="btn btn-primary">Send</button>
                                        </div>

                                    </div>
                                </fieldset>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>