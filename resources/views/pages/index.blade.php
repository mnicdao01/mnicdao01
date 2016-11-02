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
                                    <h4 class="profile-name animated fadeInDown"> {{ $profile['fullname'] }}</h4>
                                    <h3 class="sub-title animated fadeInUp">Web Developer | Server Administrator</h3>
                                    <p class="short-desc animated fadeInUp">
                                        "Hi I am <b>Mark Nicdao</b>, I am a <b>System or Web Developer</b> and a <b>Server Administrator</b> as well.
                                        I am 29 years old and I really love exploring new technologies, <b>developing, implementing, maintaining and securing</b>
                                        websites and web applications."
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
        <p class="text-center">Developing a full blown professional website or a web application is not that easy and it should consider the following criteria. From functionality, speed, user requirements and user experience. Currently this site was developed using PHP with the latest framework Laravel 5.3 and using the latest CSS3 Framework Bootstrap 4. Listed below are the technology I am using in creating such beautiful web applications.</p>
        <div class="slide fp-auto-height" id="dev-slide-1">
            <div class="container">
             <h3>Web Development Technologies and Frameworks</h3>
             <br>
                <div class="row">
                    <div class="col-xs-3 col-md-3"><img src="{{ asset('img/logos/html5.png') }}" class="img-fluid img-dev"/><p>HTML5</p></div>
                    <div class="col-xs-3 col-md-3"><img src="{{ asset('img/logos/css3.png') }}" class="img-fluid img-dev"/><p>CSS3</p></div>
                    <div class="col-xs-3 col-md-3"><img src="{{ asset('img/logos/php.png') }}" class="img-fluid img-dev"/><p>PHP</p></div>
                    <div class="col-xs-3 col-md-3"><img src="{{ asset('img/logos/javascript.png') }}" class="img-fluid img-dev"/><p>JAVASCRIPT</p></div>
                    <div class="col-xs-3 col-md-3"><img src="{{ asset('img/logos/laravel.png') }}" class="img-fluid img-dev"/><p>LARAVEL</p></div>
                    <div class="col-xs-3 col-md-3"><img src="{{ asset('img/logos/laravel.png') }}" class="img-fluid img-dev"/><p>CODEIGNITER</p></div>
                    <div class="col-xs-3 col-md-3"><img src="{{ asset('img/logos/html5.png') }}" class="img-fluid img-dev"/><p>JQUERY</p></div>
                    <div class="col-xs-3 col-md-3"><img src="{{ asset('img/logos/html5.png') }}" class="img-fluid img-dev"/><p>BOOTSTRAP 3 & 4</p></div>
                </div>
                Others:
                <div class="row hidden-xs-down" id="dev-footnote">

                    <div class="col-xs-2">
                    <b>Languages:</b>
                        <ul>
                            <li>Java</li>
                            <li>Objective C - xCode</li>
                            <li>Visual Basic</li>
                        </ul>
                    </div>
                    <div class="col-xs-2">
                    <b>Frameworks:</b>
                        <ul>
                            <li>Grails on Groovy</li>
                            <li>Swift</li>
                            <li>Ruby on Rails</li>
                        </ul>
                    </div>
                    <div class="col-xs-2">
                    <b>Tools for UX|UI:</b>
                        <ul>
                            <li>UXPin</li>
                            <li>BrowserStack</li>
                            <li>Balsamiq Mockups</li>
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
                    <b>Used to:</b>
                          <ul>
                              <li>Rest-API</li>
                              <li>MVC Architecture</li>
                              <li>Social Media APIs</li>
                          </ul>
                    </div>
                </div>



            </div>
        </div>
        <div class="slide fp-auto-height">
            <div class="container">
                <h3>Mobile App Development</h3>
                <br>
                   <div class="row">
                       <div class="col-xs-4"><img src="{{ asset('img/logos/ios.png') }}" class="img-responsive img-dev"/>
                       <p>IOS</p>
                       <b>Skills:</b>
                          <ul>
                              <li>Basic Native IOS Application</li>
                              <li>MySQL Lite Integration</li>
                              <li>PHP-MySQL API Call Integration</li>
                              <li>Publishing to App Store</li>
                          </ul>
                       </div>
                       <div class="col-xs-4"><img src="{{ asset('img/logos/android.png') }}" class="img-responsive img-dev"/>
                       <p>ANDROID</p>
                       <b>Skills:</b>
                         <ul>
                             <li>Basic Native Android Application</li>
                             <li>MySQL Lite Integration</li>
                             <li>PHP-MySQL API Call Integration</li>
                             <li>Publishing to Play Store</li>
                         </ul>
                       </div>
                       <div class="col-xs-4"><img src="{{ asset('img/logos/cordova.png') }}" class="img-responsive img-dev"/>
                       <p>HYBRID MOBILE APP</p>
                       <b>Skills:</b>
                        <ul>
                            <li>Basic Hybrid Android/IOS Application</li>
                            <li>MySQL Lite Integration</li>
                            <li>PHP-MySQL API Call Integration</li>
                            <li>Publishing to Play Store or App Store</li>
                            <li>Website Integration from Wordpress site</li>
                        </ul>
                       </div>

                   </div>

               </div>
        </div>
        </div>

</div>

<div class="section" id="section2">
    <div class="container">
            <br>
            <h1 class="title-dev">I as a System Administrator</h1>
            <hr>
            <p class="text-center">Developing a full blown professional website or a web application is not that easy and it should consider the following criteria. From functionality, speed, user requirements and user experience. Currently this site was developed using PHP with the latest framework Laravel 5.3 and using the latest CSS3 Framework Bootstrap 4. Listed below are the technology I am using in creating such beautiful web applications.</p>

            </div>
</div>
</div>
@endsection