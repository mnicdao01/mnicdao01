@extends('main')
@section('content')
<div id="fullpage">
<div class="section" id="section0">

        <div class="container-fluid" id="main-page">


                        <div class="row">
                            <div class="col-xs-12">
                                {{--<div class="profile-image">--}}
                                    {{--<img src="{{ asset($profile['image']) }}" class="img-profile"/>--}}
                                {{--</div>--}}

                                <div class="title">
                                    <h4 class="profile-name"> {{ $profile['fullname'] }}</h4>
                                    <h3 class="sub-title">System and Web Developer | Server Administrator</h3>
                                    <p class="short-desc">
                                        "Hi I am <b>Mark Nicdao</b>, I am a <b>System or Web Developer</b> and a <b>Server Administrator</b> as well.
                                        I am 29 years old and I really love exploring new technologies, <b>developing, implementing, maintaining and securing</b>
                                        whether it is a web or a system application."
                                    </p>
                                </div>


                                </div>
                        </div>



        </div>



</div>

<div class="section" id="section1">
    <div class="container">
        <br>
        <h1 class="title-dev">I as a Developer</h1>
        <hr>
        <p>Developing a full blown professional website or a web application is not just by design it should consider the following criteria. From functionality, speed, and user experience. Currently this site was developed using PHP with the latest framework Laravel 5.3 and using the latest CSS3 Framework Bootstrap 4. Listed below are the technology I am using in creating such beautiful web applications.</p>
        <div class="slide fp-auto-height" id="dev-slide-1">
            <div class="container">
             <h3>Web Development Technologies and Frameworks</h3>
             <br>
                <div class="row">
                    <div class="col-xs-3"><img src="{{ asset('img/logos/html5.png') }}" class="img-responsive img-dev"/><p>HTML5</p></div>
                    <div class="col-xs-3"><img src="{{ asset('img/logos/css3.png') }}" class="img-responsive img-dev"/><p>CSS3</p></div>
                    <div class="col-xs-3"><img src="{{ asset('img/logos/php.png') }}" class="img-responsive img-dev"/><p>PHP</p></div>
                    <div class="col-xs-3"><img src="{{ asset('img/logos/javascript.png') }}" class="img-responsive img-dev"/><p>JAVASCRIPT</p></div>
                </div>
                <div class="row">
                    <div class="col-xs-3"><img src="{{ asset('img/logos/laravel.png') }}" class="img-responsive img-dev"/><p>LARAVEL</p></div>
                    <div class="col-xs-3"><img src="{{ asset('img/logos/laravel.png') }}" class="img-responsive img-dev"/><p>CODEIGNITER</p></div>
                    <div class="col-xs-3"><img src="{{ asset('img/logos/html5.png') }}" class="img-responsive img-dev"/><p>JQUERY</p></div>
                    <div class="col-xs-3"><img src="{{ asset('img/logos/html5.png') }}" class="img-responsive img-dev"/><p>BOOTSTRAP 3 & 4</p></div>
                </div>
                Others:
                <div class="row" id="dev-footnote">

                    <div class="col-xs-2">
                    <b>Languages:</b>
                        <ul>
                            <li>Java</li>
                            <li>Objective C - xCode</li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="col-xs-2">
                    <b>Frameworks:</b>
                        <ul>
                            <li>Grails on Groovy</li>
                            <li>Swift</li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="col-xs-2">
                    <b>Tools for UX|UI:</b>
                        <ul>
                            <li>jQuery Mobile</li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="col-xs-2">
                    <b>Version Control Systems:</b>
                         <ul>
                             <li>Mercurial</li>
                             <li>Github</li>

                         </ul>
                    </div>
                    <div class="col-xs-2">
                    <b>Hybrid Mobile App:</b>
                         <ul>
                             <li>Cordova</li>
                             <li>Ionic</li>
                         </ul>
                    </div>
                    <div class="col-xs-2">
                    <b>Others:</b>
                          <ul>
                              <li>REST</li>
                              <li>REST-API</li>
                              <li>Model-View-Controller</li>
                          </ul>
                    </div>
                </div>



            </div>
        </div>
        <div class="slide">HTML5</div>
        <div class="slide">HTML5</div>
        <div class="slide">HTML5</div>


        </div>
    </div>
</div>

<div class="section">
    Implementation
</div>


<div class="section">
    Maintenance
</div>

<div class="section">
    Secure
</div>

<script>
    $('#others').dataTable();
</script>

@endsection