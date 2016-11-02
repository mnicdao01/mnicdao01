@extends('main')
@section('content')

        <div class="container-fluid" id="main-page">
            <div class="row">

            </div>
            <section name="top-main">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="profile-image">
                            <img src="{{ asset($profile['image']) }}" class="img-profile"/>
                        </div>

                        <div class="title m-b-md">
                            <h4 class="profile-name"> {{ $profile['fullname'] }}</h4>
                            <p class="short-desc">
                                "Hi! This is my official website, you can freely browse my portfolios here. What I can do for you is to develop a custom site for you or your company, implement it properly in cloud, maintain it and secure it."
                            </p>
                        </div>

                        <div class="profile-sub">
                            <a href="https://laravel.com/docs">Develop</a>
                            <a href="https://laracasts.com">Implement</a>
                            <a href="https://laravel-news.com">Maintain</a>
                            <a href="https://forge.laravel.com">Secure</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>

@endsection