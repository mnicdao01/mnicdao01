@extends('main')
@section('content')

<div id="fullpage">
<div class="section" id="section0">

        <div class="container-fluid" id="main-page">


                        <div class="row">
                            <div class="col-xs-12">
                                <div class="profile-image hidden-md-up hidden-lg-up">
                                    <img src="{{ $response['data'][0]['caption']['from']['profile_picture'] }}" class="img-profile"/>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <h4 class="profile-name animated fadeInDown"> {{ $profile['fullname'] }}</h4>
                                <h3 class="sub-title animated fadeInUp">Web Developer | Server Administrator</h3>
                            </div>
                            <div class="col-md-6 offset-md-3 short-desc ">
                                "Hi I am <b>Mark Nicdao</b>, I am a <b>Web Developer</b> and a <b>Server Administrator</b> as well.
                                I am 29 years old and I really love exploring new technologies, <b>developing, implementing, maintaining and securing</b>
                                websites, web applications and web servers."
                            </div>
{{--                            {{ dd($response) }}--}}
                            <div class="col-md-12 hidden-xs-down">
                            <h5 class="insta-title">My Latest Instagram Photos</h5>
                            @foreach($response['data'] as $res)
                                 @if($loop->iteration <= 3)
                                        <a href="{{ $res['link'] }}"><img class="img-responsive insta-post-latest" src="{{ $res['images']['low_resolution']['url'] }}" alt=""></a>

                                 @endif
                            @endforeach

                            </div>



                        </div>



        </div>



</div>

<div class="section" id="section1">
    <div class="container">
        <br>
        <h1 class="title-dev">I as a Developer</h1>
        <hr>

        <div class="slide fp-auto-height" id="dev-slide-1">
            <div class="container">
             <h3>Web Development Technologies and Frameworks</h3>
             <p class="text-center">Developing a full blown professional website or a web application is not that easy and it should consider the following criteria. From functionality, speed, user requirements and user experience. Currently this site was developed using PHP with the latest framework Laravel 5.3 and using the latest CSS3 Framework Bootstrap 4. Listed below are the technology I am using in creating such beautiful web applications.</p>
                <div class="row">
                    <div class="col-xs-3 col-md-3">
                        <center>
                        <img src="{{ asset('img/logos/html5.png') }}" class="img-fluid img-dev"/>
                        <p>HTML5</p>
                        </center>
                    </div>
                    <div class="col-xs-3 col-md-3">
                        <center>
                        <img src="{{ asset('img/logos/css3.png') }}" class="img-fluid img-dev"/>
                        <p>CSS3</p>
                        </center>
                    </div>
                    <div class="col-xs-3 col-md-3">
                        <center>
                        <img src="{{ asset('img/logos/php.png') }}" class="img-fluid img-dev"/>
                        <p>PHP</p>
                        </center>
                    </div>
                    <div class="col-xs-3 col-md-3">
                        <center>
                        <img src="{{ asset('img/logos/javascript.png') }}" class="img-fluid img-dev"/>
                        <p>JAVASCRIPT</p>
                        </center>
                    </div>
                    <div class="col-xs-3 col-md-3">
                        <center>
                        <img src="{{ asset('img/logos/laravel.png') }}" class="img-fluid img-dev"/>
                        <p>LARAVEL</p>
                        </center>
                    </div>
                    <div class="col-xs-3 col-md-3">
                        <center>
                        <img src="{{ asset('img/logos/laravel.png') }}" class="img-fluid img-dev"/>
                        <p>CODEIGNITER</p>
                        </center>
                    </div>
                    <div class="col-xs-3 col-md-3">
                        <center>
                        <img src="{{ asset('img/logos/html5.png') }}" class="img-fluid img-dev"/>
                        <p>JQUERY</p>
                        </center>
                    </div>
                    <div class="col-xs-3 col-md-3">
                        <center>
                        <img src="{{ asset('img/logos/html5.png') }}" class="img-fluid img-dev"/>
                        <p>BOOTSTRAP 3 & 4</p>
                        </center>
                    </div>
                </div>
                {{--Others:--}}
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


<div class="section" id="section3">
    <div class="container">
            <br>
            <h1 class="title-dev">Contact Me</h1>
            <hr>
            <p class="text-center">I will be glad to know about your feedbacks. Please feel free to give me a message or email me at <a href="mailto:dev@marknicdao.info">dev@marknicdao.info</a></p>

            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-6">
                            <form method="POST" action="{{ route('contacts.store') }}">
                                {{ csrf_field() }}
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" name="name">
                                <label for="email">Email:</label>
                                <input type="text" class="form-control" id="email" name="email">
                                <label for="subject">Subject:</label>
                                <input type="text" class="form-control" id="subject" name="subject">
                                <label for="message">Message:</label>
                                <textarea id="message" name="message" class="form-control"></textarea>

                                <input type="submit" class="btn btn-success btn-top-margin" value="Send Message">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
</div>
</div>
@endsection