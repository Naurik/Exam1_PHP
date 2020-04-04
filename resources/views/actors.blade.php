<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 no-js" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en" class="no-js">

<!-- celebritygrid0111:24-->
<head>
    <!-- Basic need -->
    <title>Open Pediatrics</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="profile" href="#">

    <!--Google Font-->
    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' />
    <!-- Mobile specific meta -->
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone-no">

    <!-- CSS files -->
    <link rel="stylesheet" href="css/plugins.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<ul>
    @foreach($actor as $actor)
        <li>
            {{$actor->id}} {{$actor->FIO}}
        </li>
    @endforeach
</ul>
<div class="page-single">
    <div class="container">
        <div class="row ipad-width2">
            <div class="col-md-9 col-sm-12 col-xs-12">
                <div class="topbar-filter">
                    <p>Found <span>1,608 celebrities</span> in total</p>
                    <label>Sort by:</label>
                    <select>
                        <option value="popularity">Popularity Descending</option>
                        <option value="popularity">Popularity Ascending</option>
                        <option value="rating">Rating Descending</option>
                        <option value="rating">Rating Ascending</option>
                        <option value="date">Release date Descending</option>
                        <option value="date">Release date Ascending</option>
                    </select>
                    <a href="celebritylist.html" class="list"><i class="ion-ios-list-outline "></i></a>
                    <a  href="celebritygrid01.html" class="grid"><i class="ion-grid active"></i></a>
                </div>
                <div class="celebrity-items">
                    <div class="ceb-item">
                        <a href="celebritysingle.html"><img src="resources/images/uploads/dm1.jpg" alt=""></a>
                        <div class="ceb-infor">
                            <h2><a href="celebritylist.html">Tom Hardy</a></h2>
                            <span>actor, usa</span>
                        </div>
                    </div>
                    <div class="ceb-item">
                        <a href="celebritylist.html"><img src="images/uploads/ceb2.jpg" alt=""></a>
                        <div class="ceb-infor">
                            <h2><a href="celebritylist.html">Leonardo DiCaprio</a></h2>
                            <span>actor, mexico</span>
                        </div>
                    </div>
                    <div class="ceb-item">
                        <a href="celebritysingle.html"><img src="images/uploads/ceb3.jpg" alt=""></a>
                        <div class="ceb-infor">
                            <h2><a href="celebritylist.html">Emma Stone</a></h2>
                            <span>Actress, usa</span>
                        </div>
                    </div>
                    <div class="ceb-item">
                        <a href="celebritysingle.html"> <img src="images/uploads/ceb4.jpg" alt=""></a>

                        <div class="ceb-infor">
                            <h2><a href="celebritylist.html">Olga Kurylenko</a></h2>
                            <span>Actress, sweden</span>
                        </div>
                    </div>
                    <div class="ceb-item">
                        <a href="celebritysingle.html"><img src="images/uploads/ceb5.jpg" alt=""></a>
                        <div class="ceb-infor">
                            <h2><a href="celebritylist.html">Micheal Bay</a></h2>
                            <span>Director, france</span>
                        </div>
                    </div>
                    <div class="ceb-item">
                        <a href="celebritysingle.html"><img src="images/uploads/ceb6.jpg" alt=""></a>
                        <div class="ceb-infor">
                            <h2><a href="celebritylist.html">Martin Scorsese</a></h2>
                            <span>Director, italy</span>
                        </div>
                    </div>
                    <div class="ceb-item">
                        <a href="celebritysingle.html"><img src="images/uploads/ceb7.jpg" alt=""></a>
                        <div class="ceb-infor">
                            <h2><a href="celebritylist.html">TJohnson Staham</a></h2>
                            <span>actor, uk</span>
                        </div>
                    </div>
                    <div class="ceb-item">
                        <a href="celebritysingle.html"><img src="images/uploads/ceb8.jpg" alt=""></a>
                        <div class="ceb-infor">
                            <h2><a href="celebritylist.html">Haley Bennett</a></h2>
                            <span>actress, france</span>
                        </div>
                    </div>
                    <div class="ceb-item">
                        <a href="celebritysingle.html"><img src="images/uploads/ceb9.jpg" alt=""></a>
                        <div class="ceb-infor">
                            <h2><a href="celebritylist.html">Teresa Palmer</a></h2>
                            <span>actress, uk</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>
<script src="js/plugins2.js"></script>
<script src="js/custom.js"></script>
</body>

<!-- celebritygrid0111:44-->
</html>
