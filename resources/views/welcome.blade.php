@extends('layouts.main')

@section('content')
    <div id="preloader">
        <img class="logo" src="{{url('/images/logo1.jpg')}}" alt="" width="119" height="58">
        <div id="status">
            <span></span>
            <span></span>
        </div>
    </div>
    <!--end of preloading-->
    <!--login form popup-->
    <div class="login-wrapper" id="login-content">
        <div class="login-content">
            <a href="#" class="close">x</a>
            <h3>Login</h3>
            <form method="post" action="#">
                <div class="row">
                    <label for="username">
                        Username:
                        <input type="text" name="username" id="username" placeholder="Hugh Jackman" pattern="[a-zA-Z]" required="required" />
                    </label>
                </div>

                <div class="row">
                    <label for="password">
                        Password:
                        <input type="password" name="password" id="password" placeholder="******" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
                    </label>
                </div>
                <div class="row">
                    <div class="remember">
                        <div>
                            <input type="checkbox" name="remember" value="Remember me"><span>Remember me</span>
                        </div>
                        <a href="#">Forget password ?</a>
                    </div>
                </div>
                <div class="row">
                    <button type="submit">Login</button>
                </div>
            </form>
            <div class="row">
                <p>Or via social</p>
                <div class="social-btn-2">
                    <a class="fb" href="#"><i class="ion-social-facebook"></i>Facebook</a>
                    <a class="tw" href="#"><i class="ion-social-twitter"></i>twitter</a>
                </div>
            </div>
        </div>
    </div>
    <!--end of login form popup-->
    <!--signup form popup-->
    <div class="login-wrapper"  id="signup-content">
        <div class="login-content">
            <a href="#" class="close">x</a>
            <h3>sign up</h3>
            <form method="post" action="#">
                <div class="row">
                    <label for="username-2">
                        Username:
                        <input type="text" name="username" id="username-2" placeholder="Hugh Jackman" pattern="[a-zA-Z]" required="required" />
                    </label>
                </div>

                <div class="row">
                    <label for="email-2">
                        your email:
                        <input type="text" name="email" id="email-2" placeholder="" pattern="(?=.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
                    </label>
                </div>
                <div class="row">
                    <label for="password-2">
                        Password:
                        <input type="password" name="password" id="password-2" placeholder="" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
                    </label>
                </div>
                <div class="row">
                    <label for="repassword-2">
                        re-type Password:
                        <input type="password" name="password" id="repassword-2" placeholder="" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
                    </label>
                </div>
                <div class="row">
                    <button type="submit">sign up</button>
                </div>
            </form>
        </div>
    </div>
    <!--end of signup form popup-->

    <!-- BEGIN | Header -->
    <header class="ht-header">
        <div class="container">
            <nav class="navbar navbar-default navbar-custom">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header logo">
                    <div class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <div id="nav-icon1">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <a href="{{url('/resources/views/welcome.blade.php')}}}"><img class="logo" src="{{url('/images/logo1.jpg')}}" alt="" width="119" height="58"></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav flex-child-menu menu-left">

                        <a href="/"  class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown">
                            Home
                        </a>

                        <li class="dropdown first">
                            <a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
                                Genres
                            </a>
                            <ul class="dropdown-menu level1">
                                <li><a href="bloglist.blade.php">Фантастика</a></li>
                                <li><a href="bloggrid.blade.php">Боевик</a></li>
                                <li><a href="bloglist.blade.php">Драма</a></li>
                                <li><a href="bloggrid.blade.php">Приключения</a></li>
                            </ul>
                        </li>
                        <li class="dropdown first">
                        <a class="btn btn-default dropdown-toggle lv1" href="#" data-toggle="dropdown" data-hover="dropdown">
                            Actors
                        </a>
                            <ul class="dropdown-menu level1">
                                <li><a href="actors.blade.php">Актеры</a></li>
                            </ul>
                        </li>
                        <li class="dropdown first">
                            <a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
                                Years
                            </a>
                            <ul class="dropdown-menu level1">
                                <li><a href="bloglist.blade.php">2008</a></li>
                                <li><a href="bloggrid.blade.php">2009</a></li>
                                <li><a href="bloglist.blade.php">2010</a></li>
                                <li><a href="bloggrid.blade.php">2011</a></li>
                                <li><a href="bloglist.blade.php">2012</a></li>
                                <li><a href="bloggrid.blade.php">2013</a></li>
                                <li><a href="bloglist.blade.php">2014</a></li>
                                <li><a href="bloggrid.blade.php">2015</a></li>
                                <li><a href="bloglist.blade.php">2016</a></li>
                                <li><a href="bloggrid.blade.php">2017</a></li>
                                <li><a href="bloglist.blade.php">2018</a></li>
                                <li><a href="bloggrid.blade.php">2019</a></li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav flex-child-menu menu-right">
                        <li class="loginLink"><a href="#">LOG In</a></li>
                        <li class="btn signupLink"><a href="#">sign up</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>

            <!-- top search form -->
            <form method="post" action="{{route('search')}}">
                <div class="top-search">
                    <input type="text" placeholder="Search for a DC or Marvel movie">
                    <button><img src="{{url('../images/uploads/topsearch.png')}}"></button>
                </div>
            </form>
        </div>
    </header>
    <!-- END | Header -->

    <div class="slider movie-items">
        <div class="container">
            <div class="row">
                <div  class="slick-multiItemSlider">
                    <div class="movie-item">
                        <div class="mv-img">
                            <a href="#"><img src="{{url('/images/uploads/slider1.jpg')}}" alt="" width="285" height="437"></a>
                        </div>
                        <div class="title-in">
                            <div class="cate">
                                <span class="blue"><a href="#">Sci-fi</a></span>
                            </div>
                            <h6><a href="#">Interstellar</a></h6>
                            <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                        </div>
                    </div>
                    <div class="movie-item">
                        <div class="mv-img">
                            <a href="#"><img src="{{url('/images/uploads/slider2.jpg')}}" alt="" width="285" height="437"></a>
                        </div>
                        <div class="title-in">
                            <div class="cate">
                                <span class="yell"><a href="#">action</a></span>
                            </div>
                            <h6><a href="#">The revenant</a></h6>
                            <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                        </div>
                    </div>
                    <div class="movie-item">
                        <div class="mv-img">
                            <a href="#"><img src="{{url('/images/uploads/slider3.jpg')}}" alt="" width="285" height="437"></a>
                        </div>
                        <div class="title-in">
                            <div class="cate">
                                <span class="green"><a href="#">comedy</a></span>
                            </div>
                            <h6><a href="#">Die hard</a></h6>
                            <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                        </div>
                    </div>
                    <div class="movie-item">
                        <div class="mv-img">
                            <a href="#"><img src="{{url('/images/uploads/slider4.jpg')}}" alt="" width="285" height="437"></a>
                        </div>
                        <div class="title-in">
                            <div class="cate">
                                <span class="blue"><a href="#">Sci-fi</a></span> <span class="orange"><a href="#">advanture</a></span>
                            </div>
                            <h6><a href="#">The walk</a></h6>
                            <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                        </div>
                    </div>
                    <div class="movie-item">
                        <div class="mv-img">
                            <a href="#"><img src="{{url('/images/uploads/slider1.jpg')}}" alt="" width="285" height="437"></a>
                        </div>
                        <div class="title-in">
                            <div class="cate">
                                <span class="blue"><a href="#">Sci-fi</a></span>
                            </div>
                            <h6><a href="#">Interstellar</a></h6>
                            <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                        </div>
                    </div>
                    <div class="movie-item">
                        <div class="mv-img">
                            <a href="#"><img src="{{url('/images/uploads/slider2.jpg')}}" alt="" width="285" height="437"></a>
                        </div>
                        <div class="title-in">
                            <div class="cate">
                                <span class="yell"><a href="#">action</a></span>
                            </div>
                            <h6><a href="#">The revenant</a></h6>
                            <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                        </div>
                    </div>
                    <div class="movie-item">
                        <div class="mv-img">
                            <img src="{{url('/images/uploads/slider3.jpg')}}" alt="" width="285" height="437">
                        </div>
                        <div class="title-in">
                            <div class="cate">
                                <span class="green"><a href="#">comedy</a></span>
                            </div>
                            <h6><a href="#">Die hard</a></h6>
                            <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                        </div>
                    </div>
                    <div class="movie-item">
                        <div class="mv-img">
                            <img src="{{url('/images/uploads/slider4.jpg')}}" alt="" width="285" height="437">
                        </div>
                        <div class="title-in">
                            <div class="cate">
                                <span class="blue"><a href="#">Sci-fi</a></span> <span class="orange"><a href="#">advanture</a></span>
                            </div>
                            <h6><a href="#">The walk</a></h6>
                            <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                        </div>
                    </div>
                    <div class="movie-item">
                        <div class="mv-img">
                            <img src="{{url('/images/uploads/slider3.jpg')}}" alt="" width="285" height="437">
                        </div>
                        <div class="title-in">
                            <div class="cate">
                                <span class="green"><a href="#">comedy</a></span>
                            </div>
                            <h6><a href="#">Die hard</a></h6>
                            <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="trailers">
        <div class="container">
            <div class="row ipad-width">
                <div class="col-md-12">
                    <div class="title-hd">
                        <h2>Best trailers</h2>
                    </div>
                    <div class="videos">
                        <div class="slider-for-2 video-ft">
                            <div>
                                <iframe class="item-video" src="#" data-src="https://www.youtube.com/embed/1Q8fG0TtVAY"></iframe>
                            </div>
                            <div>
                                <iframe class="item-video" src="#" data-src="https://www.youtube.com/embed/w0qQkSuWOS8"></iframe>
                            </div>
                            <div>
                                <iframe class="item-video" src="#" data-src="https://www.youtube.com/embed/44LdLqgOpjo"></iframe>
                            </div>
                            <div>
                                <iframe class="item-video" src="#" data-src="https://www.youtube.com/embed/gbug3zTm3Ws"></iframe>
                            </div>
                            <div>
                                <iframe class="item-video" src="#" data-src="https://www.youtube.com/embed/e3Nl_TCQXuw"></iframe>
                            </div>
                            <div>
                                <iframe class="item-video" src="#" data-src="https://www.youtube.com/embed/NxhEZG0k9_w"></iframe>
                            </div>
                        </div>
                        <div class="slider-nav-2 thumb-ft">
                            <div class="item">
                                <div class="trailer-img">
                                    <img src="{{url('/images/uploads/trailer7.jpg')}}" alt="photo by Barn Images" width="4096" height="2737">
                                </div>
                                <div class="trailer-infor">
                                    <h4 class="desc">Wonder Woman</h4>
                                    <p>2:30</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="trailer-img">
                                    <img src="{{url('/images/uploads/trailer2.jpg')}}" alt="photo by Barn Images" width="350" height="200">
                                </div>
                                <div class="trailer-infor">
                                    <h4 class="desc">Oblivion: Official Teaser Trailer</h4>
                                    <p>2:37</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="trailer-img">
                                    <img src="{{url('/images/uploads/trailer6.jpg')}}" alt="photo by Joshua Earle">
                                </div>
                                <div class="trailer-infor">
                                    <h4 class="desc">Exclusive Interview:  Skull Island</h4>
                                    <p>2:44</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="trailer-img">
                                    <img src="{{url('/images/uploads/trailer3.png')}}" alt="photo by Alexander Dimitrov" width="100" height="56">
                                </div>
                                <div class="trailer-infor">
                                    <h4 class="desc">Logan: Director James Mangold Interview</h4>
                                    <p>2:43</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="trailer-img">
                                    <img src="{{url('/images/uploads/trailer4.png')}}" alt="photo by Wojciech Szaturski" width="100" height="56">
                                </div>
                                <div class="trailer-infor">
                                    <h4 class="desc">Beauty and the Beast: Official Teaser Trailer 2</h4>
                                    <p>2: 32</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="trailer-img">
                                    <img src="{{url('/images/uploads/trailer5.jpg')}}" alt="photo by Wojciech Szaturski" width="360" height="189">
                                </div>
                                <div class="trailer-infor">
                                    <h4 class="desc">Fast&Furious 8</h4>
                                    <p>3:11</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer section-->
    <footer class="ht-footer">
        <div class="container">
            <div class="col-md-2">
                <a href="/"><img class="logo" src="{{url('/images/logo1.jpg')}}" alt=""></a>
            </div>
            <div class="col-md-2">
                <p>Кабанбай батыра, 10<br>
                    Астана, Казахстан</p>
            </div>
            <div class="col-md-3">
                <h4>Resources</h4>
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Forums</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h4>Account</h4>
                <ul>
                    <li><a href="#">My Account</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- end of footer section-->

    <script src="{{ url('/js/jquery.js')}}"></script>
    <script src="{{ url('/js/plugins.js')}}"></script>
    <script src="{{ url('/js/plugins2.js')}}"></script>
    <script src="{{ url('/js/custom.js')}}"></script>

@endsection
