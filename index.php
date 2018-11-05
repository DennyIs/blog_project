<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Bloge</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Owl Carousel Assets -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"  type="text/css" />

        <!--Google Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800|Raleway:400,500,700|Roboto:300,400,500,700,900|Ubuntu:300,300i,400,400i,500,500i,700" rel="stylesheet">
        <!-- Main CSS -->
        <link rel="stylesheet" href="css/style.css" />
       


    </head>

    <body>
      <!--======= header =======-->
      <header>
        <div class="container-full">
            <div class="row">
                <div class="col-lg-2 col-md-12 col-sm-12">
                    <a id="main-category-toggler" class="hidden-md hidden-lg"  href="#">
                        <i class="fa fa-navicon"></i>
                    </a>
                    <a id="main-category-toggler-close" class="hidden-md hidden-lg hidden-md" href="#">
                        <i class="fa fa-close"></i>
                    </a>
                    <div id="logo">
                         <a href="index.php">Students
                            <span>Blog</span>
                        </a>
                    </div>
                </div><!-- // col-md-2 -->
                <div class="col-lg-3 col-md-3 col-sm-5 hidden-xs hidden-sm">
                    <ul class="top-menu">
                        <li><a href="index.php">Главная</a></li>
                        <li><a href="login.php">Вход</a></li>
                        <li><a href="register.php">Регистрация</a></li>
                    </ul>
                </div><!-- // col-md-4 -->
                <div class="col-lg-3 col-md-3 col-sm-6 hidden-xs hidden-sm hidden1">
                    <div class="search-form">
                        <form id="search" action="#" method="post">
                            <input type="text" placeholder="Search here video posts..."/>
                            <input type="submit" value="Keywords" />
                        </form>
                    </div>
                </div><!-- // col-md-3 -->
                <div class="col-lg-2 col-md-2 col-sm-4 hidden-xs hidden-sm">
                    <ul class="notifications">
                        <li class="dropdown">
                        <a href="#"  data-toggle="dropdown"><i class="fa fa-users"></i>
                            <span class="badge badge-color1 header-badge">1</span>
                        </a>
                              <ul class="dropdown-menu dropdown-menu-friend-requests ">
                                <li>
                                    <div class="friend-requests-info">
                                        <div class="thumb"><a href="#"><img src="demo_img/z1.jpg" alt=""></a></div>
                                        <a href="#" class="name">Ahmed Saleh </a>
                                        <span>Ahmed Saleh : Follow you now</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="friend-requests-info">
                                        <div class="thumb"><a href="#"><img src="demo_img/z2.jpg" alt=""></a></div>
                                        <a href="#" class="name">Ahmed Saleh </a>
                                        <span>Ahmed Saleh : Follow you now</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="friend-requests-info">
                                        <div class="thumb"><a href="#"><img src="demo_img/z3.jpg" alt=""></a></div>
                                        <a href="#" class="name">Ahmed Saleh </a>
                                        <span>Ahmed Saleh : Follow you now</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="friend-requests-info">
                                        <div class="thumb"><a href="#"><img src="demo_img/z4.jpg" alt=""></a></div>
                                        <a href="#" class="name">Ahmed Saleh </a>
                                        <span>Ahmed Saleh : Follow you now</span>
                                    </div>
                                </li>
                              </ul>
                        </li>
                        <li class="dropdown">
                        <a href="#" data-toggle="dropdown"><i class="fa fa-info-circle"></i>
                            <span class="badge badge-color2 header-badge">4</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-help-cnter">
                            <li>
                                <h2 class="title">Поддержка</h2>
                                <div class="search-form">
                                    <form id="search-2" action="#" method="post">
                                        <input type="text" placeholder="Search here ..."/>
                                        <input type="submit" value="Keywords" />
                                    </form>
                                </div>
                            </li>
                            <li>
                                <h2 class="title">Помощь</h2>
                                <ul class="help-cat-link">
                                    <li><a href="#">Видео</a></li>
                                    <li><a href="#">Авторские права</a></li>
                                    <li><a href="#">Комментарии</a></li>
                                    <li><a href="#">Send Feedback</a></li>
                                    <li><a href="#">Правила</a></li>
                                </ul>
                            </li>
                        </ul>
                        </li>
                        <li class="dropdown">
                        <a href="#" data-toggle="dropdown"><i class="fa fa-bell-o"></i>
                            <span class="badge badge-color3 header-badge">9</span>
                        </a>
                        <ul class="dropdown-menu dropdown-notifications-items ">
                            <li>
                                <div class="notification-info">
                                    <a href="#"><i class="fa fa-video-camera color-1"></i>
                                    <strong>Rabie Elkheir</strong> Добавил <span>Видео</span>
                                    <h5 class="time">3 часа назад</h5>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="notification-info">
                                    <a href="#"><i class="fa fa-thumbs-up color-2"></i>
                                    <strong>Rabie Elkheir</strong> Like <span>Пост</span>
                                    <h5 class="time">2 часа назад</h5>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="notification-info">
                                    <a href="#"><i class="fa fa-comment color-3"></i>
                                    <strong>Rabie Elkheir</strong> Добавил <span>Комент</span>
                                    <h5 class="time">4 часа назад</h5>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="notification-info">
                                    <a href="#"><i class="fa fa-video-camera color-1"></i>
                                    <strong>Rabie Elkheir</strong> Добавил <span>Видео</span>
                                    <h5 class="time">4 часа назад</h5>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="all_notifications">Все уведомления</a>
                            </li>
                        </ul>

                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 hidden-xs hidden-sm">
                      <div class="dropdown">
                        <a data-toggle="dropdown" href="#" class="user-area">
                            <div class="thumb"><img src="demo_img/user-1.png" alt=""></div>
                            <h2>Rabie Elkheir</h2>
                            <h3>25 subscribers</h3>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu account-menu">
                           <li><a href="#">Изменить профиль</a></li>
                           <li><a href="#">---------</a></li>
                           <li><a href="#">---------</a></li>
                           <li><a href="#">Выход</a></li>
                        </ul>
                    </div>
                </div>
            </div><!-- // row -->
        </div><!-- // container-full -->
      </header><!-- // header -->

      <div id="main-category">
        <div class="container-full">
            <div class="row">
                <div class="col-md-12">
                    <ul class="main-category-menu">
                      <li class="color-1"><a href="#"><i class="fa fa-music"></i>Музыка</a></li>
                      <li class="color-2"><a href="#"><i class="fa fa-rss"></i>Блог</a></li>
                      <li class="color-3"><a href="#"><i class="fa fa-glide-g"></i>Гайды</a></li>
                      <li class="color-4"><a href="#"><i class="fa fa-globe"></i>Новости</a></li>
                      <li class="color-1"><a href="#"><i class="fa fa-play-circle-o"></i>Видео</a></li>
                      <li class="color-2"><a href="#"><i class="fa fa-users"></i>Поиск людей</a></li>
                    </ul>
                </div><!-- // col-md-12 -->
              </div><!-- // row -->
          </div><!-- // container-full -->
    </div><!-- // main-category -->

    <div class="site-output">
        <div class="col-md-2 no-padding-left hidden-sm hidden-xs">
            <div class="left-sidebar">
                <div id="sidebar-stick" >
                <ul class="menu-sidebar">
                    <li><a href="imdex.html"><i class="fa fa-home"></i>Главная</a></li>
                    <li><a href="#"><i class="fa fa-bolt"></i>Тренды</a></li>
                    <li><a href="#"><i class="fa fa-clock-o"></i>История</a></li>
                    <li><a href="#"><i class="fa fa-file-text"></i>Блог</a></li>
                    <li><a href="#"><i class="fa fa-upload"></i>Загрузить файл</a></li>
                </ul>
                <ul class="menu-sidebar">
                    <li><a href="#"><i class="fa fa-edit"></i>Изм. профиль</a></li>
                    <li><a href="#"><i class="fa fa-sign-out"></i>Выход</a></li>
                </ul>
                <ul class="menu-sidebar">
                    <li><a href="#"><i class="fa fa-question-circle"></i>Помощь</a></li>
                    <li><a href="#"><i class="fa fa-send-o"></i>Поддержка</a></li>
                </ul>
                </div><!-- // sidebar-stick -->
                <div class="clear"></div>
            </div><!-- // left-sidebar -->
        </div><!-- // col-md-2 -->
        <!-- Content-blcok -->
        <div id="all-output" class="col-md-10">
            <h1 class="new-guide-title"><i class="fa fa-bolt"></i><a href="">Гайды</a> </h1>
            <div class="row">
                <!-- Content - Guide -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="video-item">
                        <div class="thumb">
                            <div class="hover-efect"></div>
                            <a href="#"><img src="demo_img/v1.png" alt=""></a>
                        </div>
                        <div class="video-info">
                            <a href="#" class="title">Lorem Ipsum is simply dummy text of the printing and </a>
                            <a class="channel-name" href="#">Rabie Elkheir<span>
                            <i class="fa fa-check-circle"></i></span></a>
                            <span class="views"><i class="fa fa-eye"></i>2.8M views </span>
                            <span class="date"><i class="fa fa-clock-o"></i>5 months ago </span>
                        </div>
                    </div>
                </div>
                <!-- // Content - Guide -->
                <!-- Content - Guide -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="video-item">
                        <div class="thumb">
                            <div class="hover-efect"></div>
                            <a href="#"><img src="demo_img/v1.png" alt=""></a>
                        </div>
                        <div class="video-info">
                            <a href="#" class="title">Lorem Ipsum is simply dummy text of the printing and </a>
                            <a class="channel-name" href="#">Rabie Elkheir<span>
                            <i class="fa fa-check-circle"></i></span></a>
                            <span class="views"><i class="fa fa-eye"></i>2.8M views </span>
                            <span class="date"><i class="fa fa-clock-o"></i>5 months ago </span>
                        </div>
                    </div>
                </div>
                <!-- // Content - Guide -->
                 <!-- Content - Guide -->
                 <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="video-item">
                        <div class="thumb">
                            <div class="hover-efect"></div>
                            <a href="#"><img src="demo_img/v1.png" alt=""></a>
                        </div>
                        <div class="video-info">
                            <a href="#" class="title">Lorem Ipsum is simply dummy text of the printing and </a>
                            <a class="channel-name" href="#">Rabie Elkheir<span>
                            <i class="fa fa-check-circle"></i></span></a>
                            <span class="views"><i class="fa fa-eye"></i>2.8M views </span>
                            <span class="date"><i class="fa fa-clock-o"></i>5 months ago </span>
                        </div>
                    </div>
                </div>
                <!-- // Content - Guide -->
                 <!-- Content - Guide -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="video-item">
                        <div class="thumb">
                            <div class="hover-efect"></div>
                            <a href="#"><img src="demo_img/v1.png" alt=""></a>
                        </div>
                        <div class="video-info">
                            <a href="#" class="title">Lorem Ipsum is simply dummy text of the printing and </a>
                            <a class="channel-name" href="#">Rabie Elkheir<span>
                            <i class="fa fa-check-circle"></i></span></a>
                            <span class="views"><i class="fa fa-eye"></i>2.8M views </span>
                            <span class="date"><i class="fa fa-clock-o"></i>5 months ago </span>
                        </div>
                    </div>
                </div>
                <!-- // content - Guide -->
            </div>
            <!-- content - Block- News-->
            <h1 class="new-news-title"><i class="fa fa-globe"></i><a href="">Новости</a> </h1>
            <div class="row">
                <!-- content - News-->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="video-item">
                        <div class="thumb">
                            <div class="hover-efect"></div>
                            <a href="#"><img src="demo_img/v9.png" alt=""></a>
                        </div>
                        <div class="video-info">
                            <a href="#" class="title">Lorem Ipsum is simply dummy text of the printing and </a>
                            <a class="channel-name" href="#">Rabie Elkheir<span>
                            <i class="fa fa-check-circle"></i></span></a>
                            <span class="views"><i class="fa fa-eye"></i>2.8M views </span>
                            <span class="date"><i class="fa fa-clock-o"></i>5 months ago </span>
                        </div>
                    </div>
                </div>
                <!-- // content - News -->

                <!-- content - News-->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="video-item">
                        <div class="thumb">
                            <div class="hover-efect"></div>
                            <a href="#"><img src="demo_img/v10.png" alt=""></a>
                        </div>
                        <div class="video-info">
                            <a href="#" class="title">Lorem Ipsum is simply dummy text of the printing and </a>
                            <a class="channel-name" href="#">Rabie Elkheir<span>
                            <i class="fa fa-check-circle"></i></span></a>
                            <span class="views"><i class="fa fa-eye"></i>2.8M views </span>
                            <span class="date"><i class="fa fa-clock-o"></i>5 months ago </span>
                        </div>
                    </div>
                </div>
                <!-- // content - News -->

                <!-- content - News-->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="video-item">
                        <div class="thumb">
                            <div class="hover-efect"></div>
                            <a href="#"><img src="demo_img/v11.png" alt=""></a>
                        </div>
                        <div class="video-info">
                            <a href="#" class="title">Lorem Ipsum is simply dummy text of the printing and </a>
                            <a class="channel-name" href="#">Rabie Elkheir<span>
                            <i class="fa fa-check-circle"></i></span></a>
                            <span class="views"><i class="fa fa-eye"></i>2.8M views </span>
                            <span class="date"><i class="fa fa-clock-o"></i>5 months ago </span>
                        </div>
                    </div>
                </div>
                <!-- // content - News -->

                <!-- content - News-->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="video-item">
                        <div class="thumb">
                            <div class="hover-efect"></div>
                            <a href="#"><img src="demo_img/v12.png" alt=""></a>
                        </div>
                        <div class="video-info">
                            <a href="#" class="title">Lorem Ipsum is simply dummy text of the printing and </a>
                            <a class="channel-name" href="#">Rabie Elkheir<span>
                            <i class="fa fa-check-circle"></i></span></a>
                            <span class="views"><i class="fa fa-eye"></i>2.8M views </span>
                            <span class="date"><i class="fa fa-clock-o"></i>5 months ago </span>
                        </div>
                    </div>
                </div>
                <!-- // content - News -->

            </div><!-- // row-News -->
            <!-- content - Block- Video-->
            <h1 class="new-video-title"><i class="fa fa-video-camera"></i><a href="">Видео</a> </h1>
            <div class="row">
                <!-- content - video-->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="video-item">
                        <div class="thumb">
                            <div class="hover-efect"></div>
                            <a href="#"><img src="demo_img/v9.png" alt=""></a>
                        </div>
                        <div class="video-info">
                            <a href="#" class="title">Lorem Ipsum is simply dummy text of the printing and </a>
                            <a class="channel-name" href="#">Rabie Elkheir<span>
                            <i class="fa fa-check-circle"></i></span></a>
                            <span class="views"><i class="fa fa-eye"></i>2.8M views </span>
                            <span class="date"><i class="fa fa-clock-o"></i>5 months ago </span>
                        </div>
                    </div>
                </div>
                <!-- // content - video -->

                <!-- content - video-->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="video-item">
                        <div class="thumb">
                            <div class="hover-efect"></div>
                            <a href="#"><img src="demo_img/v10.png" alt=""></a>
                        </div>
                        <div class="video-info">
                            <a href="#" class="title">Lorem Ipsum is simply dummy text of the printing and </a>
                            <a class="channel-name" href="#">Rabie Elkheir<span>
                            <i class="fa fa-check-circle"></i></span></a>
                            <span class="views"><i class="fa fa-eye"></i>2.8M views </span>
                            <span class="date"><i class="fa fa-clock-o"></i>5 months ago </span>
                        </div>
                    </div>
                </div>
                <!-- // content - video -->

                <!-- content - video-->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="video-item">
                        <div class="thumb">
                            <div class="hover-efect"></div>
                            <a href="#"><img src="demo_img/v11.png" alt=""></a>
                        </div>
                        <div class="video-info">
                            <a href="#" class="title">Lorem Ipsum is simply dummy text of the printing and </a>
                            <a class="channel-name" href="#">Rabie Elkheir<span>
                            <i class="fa fa-check-circle"></i></span></a>
                            <span class="views"><i class="fa fa-eye"></i>2.8M views </span>
                            <span class="date"><i class="fa fa-clock-o"></i>5 months ago </span>
                        </div>
                    </div>
                </div>
                <!-- // content - video -->

                <!-- content - video-->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="video-item">
                        <div class="thumb">
                            <div class="hover-efect"></div>
                            <a href="#"><img src="demo_img/v12.png" alt=""></a>
                        </div>
                        <div class="video-info">
                            <a href="#" class="title">Lorem Ipsum is simply dummy text of the printing and </a>
                            <a class="channel-name" href="#">Rabie Elkheir<span>
                            <i class="fa fa-check-circle"></i></span></a>
                            <span class="views"><i class="fa fa-eye"></i>2.8M views </span>
                            <span class="date"><i class="fa fa-clock-o"></i>5 months ago </span>
                        </div>
                    </div>
                </div>
                <!-- // content - video -->

            </div><!-- // row-Video -->
            <div id="loading-more">
                <a href=""><i class="fa fa-refresh faa-spin animated"></i> <span>Loading more</span></a>
            </div>
        </div>
    </div>
        

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>



    </body>
</html>
