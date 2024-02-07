<!--/footer-bottom-->
<div class="footerv3-w3ls">
    <!-- footerv3-top -->
    <div class="footerv3-top">
        <div class="container">
            <div class="col-md-3 col-sm-6 footv3-left">
                <h3>About Us</h3>
                <h4>
                    <a href="home">chronicle</a>
                </h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard.</p>
            </div>
            <div class="col-md-3 col-sm-6 footv3-left">
                <h3>Get In Touch</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>

                <div class="fv3-contact">
                    <span class="glyphicon fa fa-location-dot" aria-hidden="true"></span>
                    <p>90 Street, City, State 34789.</p>
                </div>
                <div class="fv3-contact">
                    <span class="glyphicon fa fa-phone" aria-hidden="true"></span>
                    <p>+456 123 7890</p>
                    <div class="fv3-contact">
                    </div>
                    <span class="glyphicon fa fa-envelope" aria-hidden="true"></span>
                    <p>
                        <a href="mailto:example@email.com">info@example.com</a>
                    </p>
                </div>
                <div class="clearfix"></div>

            </div>
            <div class="col-md-3 col-sm-6 footv3-left">
                <h3>Latest releases</h3>
                <ul>
                    <li>
                        <a href="#">
                            <img src="<?php echo $this->assets_url; ?>/Assets/images/lt1.jpg" alt="" class="img-responsive">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?php echo $this->assets_url; ?>/Assets/images/lt4.jpg" alt="" class="img-responsive">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?php echo $this->assets_url; ?>/Assets/images/lt3.jpg" alt="" class="img-responsive">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?php echo $this->assets_url; ?>/Assets/images/lt6.jpg" alt="" class="img-responsive">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?php echo $this->assets_url; ?>/Assets/images/lt5.jpg" alt="" class="img-responsive">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?php echo $this->assets_url; ?>/Assets/images/lt2.jpg" alt="" class="img-responsive">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?php echo $this->assets_url; ?>/Assets/images/lt3.jpg" alt="" class="img-responsive">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?php echo $this->assets_url; ?>/Assets/images/lt6.jpg" alt="" class="img-responsive">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?php echo $this->assets_url; ?>/Assets/images/lt6.jpg" alt="" class="img-responsive">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 footv3-left">
                <h3>Featured Content</h3>
                <div class="fv3-contact">
                    <p>Book Checkout</p>
                </div>
                <div class="fv3-contact">
                    <p>Books & E-Books</p>
                </div>
                <div class="fv3-contact">
                    <p>Archieves</p>
                </div>
                <div class="fv3-contact">
                    <p>E-Reference</p>
                </div>
                <div class="fv3-contact">
                    <p>Journals</p>
                </div>
                <div class="fv3-contact">
                    <p>Press Releases</p>
                </div>
            </div>
            <div class="clearfix"></div>
            <!-- footer social -->
            <div class="footer-social text-center">
                <h4>stay connected</h4>
                <ul>
                    <li>
                        <a href="#">
                            <span class="fa-brands fa-facebook icon_facebook"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa-brands fa-twitter icon_twitter"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa-brands fa-instagram icon_instagram"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa-brands fa-youtube icon_youtube"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- //footer social -->
        </div>
    </div>
    <!-- /footerv3-top -->
</div>
<div class="cpy-right">
    <p> Developer by Dipak Vaja | Design by W3layouts. </p>
</div>
</div>
<!-- //home -->
<!-- js -->
<script type="text/javascript" src="<?php echo $this->assets_url; ?>/Assets/js/jquery-2.2.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"
    integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- //js -->

<!--search jQuery-->
<script src="<?php echo $this->assets_url; ?>/Assets/js/main.js"></script>
<!--search jQuery-->

<script src="<?php echo $this->assets_url; ?>/Assets/js/jquery.desoslide.min.js"></script>
<script src="<?php echo $this->assets_url; ?>/Assets/js/demo.js"></script>

<!-- dropdown nav -->
<script>
    $(document).ready(function () {
        $(".dropdown").hover(
            function () {
                $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                $(this).toggleClass('open');
            },
            function () {
                $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
</script>
<!-- //dropdown nav -->

<!-- Scrolling Nav JavaScript -->
<script src="<?php echo $this->assets_url; ?>/Assets/js/scrolling-nav.js"></script>
<!-- //fixed-scroll-nav-js -->

<!-- start-smooth-scrolling -->
<script src="<?php echo $this->assets_url; ?>/Assets/js/move-top.js"></script>
<script src="<?php echo $this->assets_url; ?>/Assets/js/easing.js"></script>
<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();

            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
<script>
    $(document).ready(function () {
        /*
        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear' 
        };
        */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });
    });
</script>
<script src="<?php echo $this->assets_url; ?>/Assets/js/SmoothScroll.min.js"></script>
<!-- //smooth-scrolling-of-move-up -->
<!-- about bottom grid Numscroller -->
<script src="<?php echo $this->assets_url; ?>/Assets/js/numscroller-1.0.js"></script>
<!-- //about bottom grid Numscroller -->
<!-- Bootstrap core JavaScript
 ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo $this->assets_url; ?>/Assets/js/bootstrap.js"></script>
</body>

</html>