<?php
/**
* The footer template.
*
* @package    napden.com
* @license    https://github.com/napden/napden.com/blob/master/LICENSE.md
* @author     Abel Nieva Saavedra <abnieva@gmail.com>
*/
?>

        <!-- Footer -->
        <footer class="main-footer">
            <div class="container">
                <div class="row">

                    <!-- Copyright -->
                    <section class="span5 copyright">
                        <h1>Made by NAPDEN</h1>
                        <p>Made with love by <a href="http://napden.com">NAPDEN</a>, a mobile and web development agency located in Tenerife, Spain.</p>
                    </section>

                    <!-- social buttons -->
                    <section class="span4 offset4 social-buttons">
                        <h1>Networks</h1>
                        <ul class="nav nav-pills">
                            <li>
                                <!-- the +1 button -->
                                <div class="g-plusone" data-size="medium" data-href="http://napden.com"></div>
                            </li>
                            <li>
                                <!-- the twitter button -->
                                <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://napden.com" data-text="Napden — Mobile and #WebDevelopment agency" data-via="napden">Tweet</a>
                            </li>
                            <li>
                                <!-- the facebook button -->
                                <div class="fb-like" data-href="http://www.facebook.com/pages/Napden/234193166711790" data-send="false" data-layout="button_count" data-width="80" data-show-faces="false"></div>
                            </li>
                        </ul>
                    </section>

                </div>
            </div>
        </footer>

        <!-- jQuery JS file -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.3.min.js"><\/script>')</script>

        <!-- JS files -->
        <!-- <script src="js/plugins.js"></script> -->
        <script src="js/main.min.js"></script>
        <script src="//www.google.com/recaptcha/api/js/recaptcha_ajax.js"></script>

        <!-- Bootstrap JS Files -->
        <script src="js/vendor/bootstrap.min.js"></script>

        <!-- social buttons -->
        <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
        <script>
            // twitter
            !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");

            // facebook
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>

    </body>
</html>
