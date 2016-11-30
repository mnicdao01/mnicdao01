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
                                "Hi I am Mark Nicdao, I am a Web Developer and a Server Administrator as well.
                                I am 29 years old and I really love exploring new technologies, developing, implementing, maintaining and securing
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
             <p class="text-center">Developing a full blown professional website or a web application is not that easy.
             It should consider the following criteria. From functionality, speed, user requirements and user experience.
             Currently this site was developed using PHP with the latest framework Laravel 5.3 and using the latest
             CSS3 Framework Bootstrap 4. Listed below are the technology I am using in creating such beautiful web applications.</p>
             <div class="row">
                         <div class="col-xs-12 col-sm-6 col-md-3">
                             <div class="wrapper-radial">

                                <div class="radial-progress" data-progress="100" data-value="HTML">
                                    <div class="circle">
                                        <div class="mask full">
                                            <div class="fill"></div>
                                        </div>
                                        <div class="mask half">
                                            <div class="fill"></div>
                                            <div class="fill fix"></div>
                                        </div>
                                        <div class="shadow"></div>
                                    </div>
                                    <div class="inset">

                                        <div class="percentage">
                                            <div class="inset-logo">
                                                <img src="img/logos/html5.png"/>
                                            </div>

                                            <p>HTML5</p>
                                        </div>
                                    </div>
                                </div>
                             </div>
                         </div>
                         <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="wrapper-radial">
                                 <div class="radial-progress" data-progress="100" data-value="HTML">
                                        <div class="circle">
                                            <div class="mask full">
                                                <div class="fill"></div>
                                            </div>
                                            <div class="mask half">
                                                <div class="fill"></div>
                                                <div class="fill fix"></div>
                                            </div>
                                            <div class="shadow"></div>
                                        </div>
                                        <div class="inset">

                                            <div class="percentage"><div class="inset-logo"><img src="img/logos/css3.png"/></div></div>
                                        </div>
                                    </div>
                                 </div>
                         </div>
                         <div class="col-xs-12 col-sm-6 col-md-3">
                         <div class="wrapper-radial">
                              <div class="radial-progress" data-progress="100" data-value="HTML">
                                     <div class="circle">
                                         <div class="mask full">
                                             <div class="fill"></div>
                                         </div>
                                         <div class="mask half">
                                             <div class="fill"></div>
                                             <div class="fill fix"></div>
                                         </div>
                                         <div class="shadow"></div>
                                     </div>
                                     <div class="inset">

                                         <div class="percentage"><div class="inset-logo"><img src="img/logos/php.png"/></div></div>
                                     </div>
                                 </div>
                              </div>

                         </div>
                         <div class="col-xs-12 col-sm-6 col-md-3">
                             <div class="wrapper-radial">
                                  <div class="radial-progress" data-progress="85" data-value="HTML">
                                         <div class="circle">
                                             <div class="mask full">
                                                 <div class="fill"></div>
                                             </div>
                                             <div class="mask half">
                                                 <div class="fill"></div>
                                                 <div class="fill fix"></div>
                                             </div>
                                             <div class="shadow"></div>
                                         </div>
                                         <div class="inset">

                                             <div class="percentage"><div class="inset-logo"><img src="img/logos/javascript.png"/></div></div>
                                         </div>
                                     </div>
                                  </div>

                         </div>
                         <div class="col-xs-12 col-sm-6 col-md-3">
                              <div class="wrapper-radial">
                               <div class="radial-progress" data-progress="90" data-value="HTML">
                                      <div class="circle">
                                          <div class="mask full">
                                              <div class="fill"></div>
                                          </div>
                                          <div class="mask half">
                                              <div class="fill"></div>
                                              <div class="fill fix"></div>
                                          </div>
                                          <div class="shadow"></div>
                                      </div>
                                      <div class="inset">

                                          <div class="percentage"><div class="inset-logo"><img src="img/logos/laravel.png"/></div></div>
                                      </div>
                                  </div>
                               </div>

                         </div>
                         <div class="col-xs-12 col-sm-6 col-md-3">
                             <div class="wrapper-radial">
                                <div class="radial-progress" data-progress="90" data-value="HTML">
                                       <div class="circle">
                                           <div class="mask full">
                                               <div class="fill"></div>
                                           </div>
                                           <div class="mask half">
                                               <div class="fill"></div>
                                               <div class="fill fix"></div>
                                           </div>
                                           <div class="shadow"></div>
                                       </div>
                                       <div class="inset">

                                           <div class="percentage"><div class="inset-logo"><img src="img/logos/laravel.png"/></div></div>
                                       </div>
                                   </div>
                            </div>

                         </div>
                         <div class="col-xs-12 col-sm-6 col-md-3">
                             <div class="wrapper-radial">
                                 <div class="radial-progress" data-progress="90" data-value="HTML">
                                        <div class="circle">
                                            <div class="mask full">
                                                <div class="fill"></div>
                                            </div>
                                            <div class="mask half">
                                                <div class="fill"></div>
                                                <div class="fill fix"></div>
                                            </div>
                                            <div class="shadow"></div>
                                        </div>
                                        <div class="inset">

                                            <div class="percentage"><div class="inset-logo"><img src="img/logos/laravel.png"/></div></div>
                                        </div>
                                    </div>
                             </div>
                         </div>
                         <div class="col-xs-12 col-sm-6 col-md-3">
                             <div class="wrapper-radial">
                                 <div class="radial-progress" data-progress="90" data-value="HTML">
                                        <div class="circle">
                                            <div class="mask full">
                                                <div class="fill"></div>
                                            </div>
                                            <div class="mask half">
                                                <div class="fill"></div>
                                                <div class="fill fix"></div>
                                            </div>
                                            <div class="shadow"></div>
                                        </div>
                                        <div class="inset">

                                            <div class="percentage"><div class="inset-logo"><img src="img/logos/laravel.png"/></div></div>
                                        </div>
                                    </div>
                             </div>
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

        </div>

</div>

<div class="section" id="section2">
    <div class="container">
            <br>
            <h1 class="title-dev">I as a Linux Web Administrator</h1>
            <hr>
            <p class="text-center">Ensuring websites 100% SLA is one of the primary priority of being a Linux Web Administrator, using
            configurations that will suit your application, technologies to avoid downtime and attacks like massive DDOS, port-knocking, brute force attacks
            and new technologies in cyber crime. 

            </p>

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