



        <div class="footer">
        <hr>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                                <div class="col-xs-3"><i class="fa fa-gears fa-5x animated slideInLeft"></i><p>Development</p></div>
                                <div class="col-xs-3"><i class="fa fa-line-chart fa-5x animated slideInUp"></i><p>Implementation</p></div>
                                <div class="col-xs-3"><i class="fa fa-wrench fa-5x animated slideInUp"></i><p>Maintenance</p></div>
                                <div class="col-xs-3"><i class="fa fa-shield fa-5x animated slideInRight"></i><p>Security</p></div>
                    </div>

                </div>
            </div>

            <p class="footer-notes align-bottom">Copyright 2016</p>
        </div>
</div>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="{{ asset('js/jquery.easings.min.js') }}"></script>
        <script src="{{ asset('js/scrolloverflow.min.js') }}"></script>
        <script src="{{ asset('js/jquery.fullPage.js') }}"></script>
        <script src="https://code.createjs.com/preloadjs-0.6.2.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>

        <script>
            $(document).ready(function() {
                $('#fullpage').fullpage({
                    //Scrolling
                    loopBottom: true,
                    touchSensitivity: 15,
                    //Accessibility
                    keyboardScrolling: true,
                    continuousVertical: true,
                    anchors:['home','develop', 'admin']
                });
            });

            $(window).on('load', function() {
              $('#status').fadeOut();
              $('#preloader').delay(350).fadeOut('slow');
              $('body').delay(350).css({'overflow':'visible'});
            })
        </script>
    </body>
</html>
