@extends('app')

@section('content')
       <!-- <div class="trendingProjects section">
                <div class="titleHeader">Trending Projects</div>
                <div class="trendingContent">
                        <div class="trendingItem"><div class="icon"></div>
                                <div class="info">This is a trending project!
                                        Do some stuff with your friends to probably win something.
                                        Maybe just pride.  <a href="">Look, here is a link.</a></div>
                        </div>
                        <div class="trendingItem"><div class="icon"></div>
                                <div class="info">This is a trending project!
                                        Do some stuff with your friends to probably win something.
                                        Maybe just pride.  <a href="">Look, here is a link.</a></div>
                        </div>
                        <div class="trendingItem"><div class="icon"></div>
                                <div class="info">This is a trending project!
                                        Do some stuff with your friends to probably win something.
                                        Maybe just pride.  <a href="">Look, here is a link.</a></div>
                        </div>
                        <div class="trendingItem"><div class="icon"></div>
                                <div class="info">This is a trending project!
                                        Do some stuff with your friends to probably win something.
                                        Maybe just pride.  <a href="">Look, here is a link.</a></div>
                        </div>
                        <div class="trendingItem"><div class="icon"></div>
                                <div class="info">This is a trending project!
                                        Do some stuff with your friends to probably win something.
                                        Maybe just pride.  <a href="">Look, here is a link.</a></div>
                        </div>
                        <div class="trendingItem"><div class="icon"></div>
                                <div class="info">This is a trending project!
                                        Do some stuff with your friends to probably win something.
                                        Maybe just pride.  <a href="">Look, here is a link.</a></div>
                        </div>
                        <div class="fadeout"></div>
                </div>
        </div>-->
<video autoplay loop poster="polina.jpg" id="bgvid">
        <source src="polina.webm" type="video/webm">
        <source src="images/crowd.mp4" type="video/mp4">
</video>
        <div class="login section">
                <div class="logo">Soundeavor</div>
                <div class="loginOptions">
                        <div class="loginGoogle"><img src="/images/sign-in-button-google.png"/></div>
                        <div class="loginFacebook"><a href="/profile"><img src="/images/sign-in-button-facebook.png"/></a></div>
                        <div class="loginSoundcloud"><img src="/images/sign-in-button-soundcloud.png"/></div>
                        <!-- resources/views/auth/register.blade.php -->

                        <form method="POST" action="/auth/register">
                            {!! csrf_field() !!}

                            <div>
                                Name
                                <input type="text" name="name" value="{{ old('name') }}">
                            </div>

                            <div>
                                Email
                                <input type="email" name="email" value="{{ old('email') }}">
                            </div>

                            <div>
                                Password
                                <input type="password" name="password">
                            </div>

                            <div>
                                Confirm Password
                                <input type="password" name="password_confirmation">
                            </div>

                            <div>
                                <button type="submit">Register</button>
                            </div>
                        </form>
                </div>
        </div>
        <!-- <div class="trendingChallenges section">
                <div class="titleHeader">Trending Challenges</div>
                <div class="trendingContent">
                        <div class="trendingItem"><div class="icon"></div>
                                <div class="info">This is a trending challenge!
                                Do some stuff with your friends to probably win something.
                                Maybe just pride.  <a href="">Look, here is a link.</a></div>
                        </div>
                        <div class="trendingItem"><div class="icon"></div>
                                <div class="info">This is a trending challenge!
                                        Do some stuff with your friends to probably win something.
                                        Maybe just pride.  <a href="">Look, here is a link.</a></div>

                        </div>
                        <div class="trendingItem"><div class="icon"></div>
                                <div class="info">This is a trending challenge!
                                        Do some stuff with your friends to probably win something.
                                        Maybe just pride.  <a href="">Look, here is a link.</a></div>

                        </div>
                        <div class="trendingItem"><div class="icon"></div>
                                <div class="info">This is a trending challenge!
                                        Do some stuff with your friends to probably win something.
                                        Maybe just pride.  <a href="">Look, here is a link.</a></div>

                        </div>
                        <div class="trendingItem"><div class="icon"></div>
                                <div class="info">This is a trending challenge!
                                        Do some stuff with your friends to probably win something.
                                        Maybe just pride.  <a href="">Look, here is a link.</a></div>
                        </div>
                        <div class="trendingItem"><div class="icon"></div>
                                <div class="info">This is a trending challenge!
                                        Do some stuff with your friends to probably win something.
                                        Maybe just pride.  <a href="">Look, here is a link.</a></div>
                        </div>
                        <div class="fadeout"></div>
                </div>
        </div> -->
<div class="bottomContainer">
        <div class="infoSection">5534 Artists</div>
        <div class="infoSection">20345 Songs</div>
        <div class="infoSection">800 Contests</div>
</div>

@stop
