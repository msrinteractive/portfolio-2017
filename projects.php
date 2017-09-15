<?php if (isset($result)) { ?>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <?php echo $result; ?>
            </div>
        </div>
    </div>
<?php } // END IF result isset ?>

<?php
if ($errName || $errEmail || $errMessage || $errHuman) { ?>
    <style>
        #projects, #about {
            display: none;
        }

        #contact {
            display: block;
        }
    </style>
<?php } ?>
<div id="projects">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class=" fh5co-row-padded">
                    <h3 class="text-center">Developer Portfolio</h3>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-xs-12 col-md-6 site">
                <div class="thumbnail">
                    <a href="http://msrinteractive.com/crashclinicnix" target="_blank">
                        <img src="./images/nix.jpg" alt="" class="img-responsive">
                    </a>
                    <div class="caption">
                        <h3 class="text-center">
                            Crash Clinic Linux
                        </h3>
                        <p class="text-center">
                            Linux Distribution for pentesting, hardware troubleshooting, and development
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 site">
                <div class="thumbnail">
                    <a href="http://msrinteractive.com/robo" target="_blank">
                        <img src="./images/robo.jpg" alt="" class="img-responsive">
                    </a>
                    <div class="caption">
                        <h3 class="text-center">
                            RoboRadio for Android
                        </h3>
                        <p class="text-center">
                            Music Streaming app written in JavaScript, jQuery
                        </p>
                    </div>
                </div>
            </div>
        </div><!-- row -->

        <div class="row">
            <div class="col-xs-12 col-md-6 site">
                <div class="thumbnail">
                    <a href="https://vimeo.com/233995705" target="_blank">
                        <img src="./images/ecommerce.jpg" alt="E commerce platform Demo">
                    </a>
                    <div class="caption">
                        <h3 class="text-center">Ecommerce Platform w/CMS </h3>
                        <p class="text-center">
                            Codeigniter MVC, mySQL, jQuery, Ajax, Kendo UI MVVM
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-md-6 site">
                <div class="thumbnail">
                    <a href="http://msrinteractive.com/moms" target="_blank">
                        <img class="img-responsive" src="images/moms.jpg"/>
                    </a>
                    <div class="caption">
                        <h3 class="text-center">Mom's on the Edge Photography</h3>
                        <p class="text-center">
                            CSS animation, Bootstrap 3, Landing Page
                        </p>
                    </div>
                </div>
            </div>
        </div> <!--row -->

        <div class="row">
            <div class="col-xs-12 col-md-6 site">
                <div class="thumbnail">
                    <a href="http://www.giordanorestoration.com" target="_blank">
                        <img class="img-responsive" src="images/giordano.png"/>
                    </a>
                    <div class="caption">
                        <h3 class="text-center">Giordano Restoration</h3>
                        <p class="text-center">CSS animation, Bootstrap 3, Landing page</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 site">
                <div class="thumbnail">
                    <a href="http://leonsofwestbrook.com" target="_blank">
                        <img class="img-responsive" src="images/leons.jpg"/>
                    </a>
                    <div class="caption">
                        <h3 class="text-center">
                            Leon's Pizza - Westbrook CT
                        </h3>
                        <p class="text-center">
                            Bootstrap 3, CSS, Wordpress, Restaurant Menu Site
                        </p>
                    </div>
                </div>
            </div>
        </div> <!--row -->
        <div class="row">
            <div class="col-xs-12 col-md-6 site">
                <div class="thumbnail">
                    <a href="http://projectguy.net" target="_blank">
                        <img class="img-responsive" src="images/projectguy.png"/>
                    </a>
                    <div class="caption">
                        <h3 class="text-center">
                            The Project Guy LLC
                        </h3>
                        <p class="text-center">
                            Bootstrap 3, CSS animations, Landing Page
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 site">
                <div class="thumbnail">
                    <a href="http://msrinteractive.com/peter" target="_blank">
                        <img class="img-responsive" src="images/peter.png"/>
                    </a>
                    <div class="caption">
                        <h3 class="text-center">
                            Peter Christie - IT Consultat
                        </h3>
                        <p class="text-center">
                            Bootstrap 3, CSS animations, Landing Page
                        </p>
                    </div>
                </div>
            </div>
        </div> <!--row -->
        <div class="row red-line">
            <div class="col-xs-12 col-md-6 site">
                <div class="thumbnail">
                    <a href="http://msrinteractive.com/vin" target="_blank">
                        <img class="img-responsive" src="images/vin.jpg"/>
                    </a>
                    <div class="caption">
                        <h3 class="text-center">Vin Stella AIA </h3>
                        <p class="text-center">
                            CSS animation, Bootstrap 3, Landing Page
                        </p>
                    </div>
                </div>

            </div>
            <div class="col-xs-12 col-md-6 site">
                <div class="thumbnail">
                    <a href="http://msrinteractive.com/password-generator" target="_blank">
                        <img class="img-responsive" src="images/pw-gen.jpg"/>
                    </a>
                    <div class="caption">
                        <h3 class="text-center">
                            3 Magic Words - Password Generator
                        </h3>
                        <p class="text-center">
                            JavaScript
                        </p>
                    </div>
                </div>
            </div>
        </div> <!-- row -->

        <div class="row">
            <div class="text-center">
                <h1 class="text-center">
                    <img src="./images/mike.png" alt="Michael Riccardi" class="projects-mike-image">
                </h1>
                <h3> Mike Riccardi </h3>
                <h1 class="text-center">
                    <b> Software Developer </b>
                </h1>
                <a href="#about" class="about-trigger">
                    <button class="btn cta animated infinite pulse">Learn More</button>
                </a>
                <p>Let's build something, together! </p>
            </div>
        </div>
    </div> <!-- container -->
</div>