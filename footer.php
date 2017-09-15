<!--footer-->
<footer id="fh5co-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <p class="fh5co-social-icons">
                    <a href="tel:860-373-6952"><i class="icon-phone"></i></a>
                    <a href="https://twitter.com/msrinteractive"><i class="icon-twitter"></i></a>
                    <a href="https://www.linkedin.com/in/michael-riccardi-b3b41695/"><i class="icon-linkedin"></i></a>
                    <a href="https://github.com/msrinteractive"><i class="icon-github"></i></a>
                    <a href="https://www.youtube.com/channel/UCf-kiJReUzmmXgvndcT6a5A"><i class="icon-youtube"></i></a>
                </p>
                <p class="breadcrumbs">
                    <a href="" class="projects-trigger">Projects</a>
                    &nbsp; | &nbsp;
                    <a href="" class="about-trigger">About Me</a>
                    &nbsp; | &nbsp;
                    <a href="" class="contact-trigger">Contact Me</a>
                </p>
                <p>
                    <small>&copy; MSR Interactive 2017 | Mike Riccardi | Like my code? <a href="https://github.com/msrinteractive/Boilerplate-a-mundo" target="_blank"> Get the boilerplate for this design </a></small>
                </p>
            </div>
        </div>
    </div>
</footer>


<!-- jQuery -->
<script src="./js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="./js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="./js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="./js/jquery.waypoints.min.js"></script>
<!-- Magnific Popup -->
<script src="./js/jquery.magnific-popup.min.js"></script>
<!-- Salvattore -->
<script src="./js/salvattore.min.js"></script>
<!-- Main JS -->
<script src="./js/main.js"></script>
<!--glitch-->
<script src='https://cdn.polyfill.io/v2/polyfill.min.js'></script>

<script src="./js/glitch.js"></script>
<script src="./js/script.js"></script>

<?php if (isset($result) ){ ?>
<script>
    hideAll();
    $('#contact').show('slide');
</script>
<?php } ?>
</body>
</html>