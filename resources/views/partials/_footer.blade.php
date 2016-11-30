



        {{--<div class="footer">--}}
        {{--<hr>--}}
            {{--<div class="container">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-xs-12">--}}
                                {{--<div class="col-xs-3"><i class="fa fa-gears fa-5x animated slideInLeft"></i><p>Development</p></div>--}}
                                {{--<div class="col-xs-3"><i class="fa fa-line-chart fa-5x animated slideInUp"></i><p>Implementation</p></div>--}}
                                {{--<div class="col-xs-3"><i class="fa fa-wrench fa-5x animated slideInUp"></i><p>Maintenance</p></div>--}}
                                {{--<div class="col-xs-3"><i class="fa fa-shield fa-5x animated slideInRight"></i><p>Security</p></div>--}}
                    {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}

            {{--<p class="footer-notes align-bottom">Copyright 2016</p>--}}
        {{--</div>--}}
</div>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

        {{--<script src="{{ asset('js/moment.js') }}"></script>--}}
        <script src="{{ asset('js/jquery.easings.min.js') }}"></script>
        <script src="{{ asset('js/scrolloverflow.min.js') }}"></script>
        <script src="{{ asset('js/jquery.fullpage.js') }}"></script>
        {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.min.js"></script>--}}
        {{--<script src="https://code.createjs.com/preloadjs-0.6.2.min.js"></script>--}}
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>

        <script>
            var transform_styles = ['-webkit-transform', '-ms-transform', 'transform'];


            $(window).on('load', function() {
              $('#status').fadeOut();
              $('#preloader').delay(350).fadeOut('slow');
              $('body').delay(350).css({'overflow':'visible'});
            });

            var CHART = $('#lineChart');
            console.log(CHART);
            var data = {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [
                    {
                        label: "My First dataset",
                        fill: false,
                        lineTension: 0.1,
                        backgroundColor: "rgba(75,192,192,0.4)",
                        borderColor: "rgba(75,192,192,1)",
                        borderCapStyle: 'butt',
                        borderDash: [],
                        borderDashOffset: 0.0,
                        borderJoinStyle: 'miter',
                        pointBorderColor: "rgba(75,192,192,1)",
                        pointBackgroundColor: "#fff",
                        pointBorderWidth: 1,
                        pointHoverRadius: 5,
                        pointHoverBackgroundColor: "rgba(75,192,192,1)",
                        pointHoverBorderColor: "rgba(220,220,220,1)",
                        pointHoverBorderWidth: 2,
                        pointRadius: 1,
                        pointHitRadius: 10,
                        data: [65, 59, 80, 81, 56, 55, 40],
                        spanGaps: false,
                    }
                ]

            };
            let lineChart = new Chart(CHART, {
                type: 'line',
                data: data
            });




        </script>
    </body>
</html>
