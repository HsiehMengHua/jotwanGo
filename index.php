<?php include("connectDB.php"); ?>

<!DOCTYPE html>
<html lang="zh">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/index.css">
</head>

<body>
  <header>
    <a href="index.php"><img id="logo" src="img/logo.png" alt=""></a>
    <div class="search-bar"><span class="glyphicon glyphicon-search"></span><input type="text"></div>
    <ul class="clear pull-right service">
      <li class="dropdown">
        <p><span class="glyphicon glyphicon-shopping-cart"></span>分類瀏覽<span class="glyphicon glyphicon-menu-down"></span></p>
        <ul class="menu">
          <li>全部類別</li>
          <li>熱銷美食</li>
          <li>服飾鞋包</li>
          <li>美妝保養</li>
          <li>生活雜貨</li>
          <li>休閒娛樂</li>
        </ul>
      </li>
      <li id="launch"><a href="launch.php"><span class="glyphicon glyphicon-plus"></span>我要開團</a></li>
    </ul>
  </header>
  <section>
    <div id="jumbotron">
     <div id="slider">
        <ul class="slides">
          <li class="slide active"><a href=""><img src="img/jumbotron_image01.jpg" alt=""></a></li>
          <li class="slide"><a href=""><img src="img/jumbotron_image02.jpg" alt=""></a></li>
          <li class="slide"><a href=""><img src="img/jumbotron_image03.jpg" alt=""></a></li>
        </ul>
        <ul class="dots">
          <li class="dot active">&#x25cf;</li>
          <li class="dot">&#x25cf;</li>
          <li class="dot">&#x25cf;</li>
        </ul>
      </div>
      <div class="search-area">
        <form class="search-bar" action="">
          <input class="search-input" type="search" placeholder="韓國零食, 麻花捲, 抹茶牛奶醬..."><!--
          --><select class="search_category">
               <option value="">全部類別</option>
               <option value="">熱銷美食</option>
               <option value="">服飾鞋包</option>
               <option value="">美妝保養</option>
               <option value="">生活雜貨</option>
               <option value="">休閒娛樂</option>
             </select><!--
          --><button class="search-btn" type="submit"></button>
        </form>
        <div class="link-btn clear">
          <div class="btn-wrapper"><button class="see-nearby">看我附近的揪團 &#8594;</button></div>
          <div class="btn-wrapper"><button class="view-all">看所有團購 &#8594;</button></div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div id="view-nearby" class="clear">
      <div id="map"></div>
      <div id="list">
        <ul>
          <a href=""><li></li></a>
          <a href=""><li></li></a>
          <a href=""><li></li></a>
          <a href=""><li></li></a>
          <a href=""><li></li></a>
        </ul>
      </div>
    </div>
  </section>
  <section>
    <div id="view-items">
      <div class="container">
        <div id="sort-tag">
          <button class="active">即將截止</button><!--
          --><button>熱門團購</button><!--
          --><button>最新開團</button>
        </div>
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false" data-wrap="false">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner container" role="listbox">
            <div class="item active">
              <ul class="wrap clear">
                <li class="item-wrapper">
                  <div class="item">
                    <div class="item-thumb"><img src="img/pd1.jpg" alt="富品家肉粽  蘋果日報評比口 碑推薦 老字號最飄香！"></div>
                    <div class="content">
                      <div class="title"><p>富品家肉粽　蘋果日報評比口碑推薦　老字號最飄香！</p></div>
                      <div class="initiator clear">
                        <p class="user-id"><span class="glyphicon glyphicon-user"></span>userid</p>
                        <p class="location">台南</p>
                      </div>
                      <div class="progress">
                        <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                          <span class="sr-only">100% Complete</span>
                        </div>
                      </div>
                      <div class="clear">
                        <p class="price">$ 190</p>
                        <p class="deadline"><span class="glyphicon glyphicon-time"></span>剩不到1天！</p>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item-wrapper">
                  <div class="item">
                    <div class="item-thumb"><img src="img/pd2.jpg" alt="不加厚重裹粉 鮮嫩可口 徵60份免運"></div>
                    <div class="content">
                      <div class="title"><p>不加厚重裹粉　鮮嫩可口　徵60份免運</p></div>
                      <div class="initiator clear">
                        <p class="user-id"><span class="glyphicon glyphicon-user"></span>userid</p>
                        <p class="location">台中</p>
                      </div>
                      <div class="progress">
                        <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                      <div class="clear">
                        <p class="price">$ 40</p>
                        <p class="deadline"><span class="glyphicon glyphicon-time"></span>剩2天截止</p>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item-wrapper">
                  <div class="item">
                    <div class="item-thumb"><img src="img/pd3.jpg" alt="輕巧包裝方便攜帶，隨時可品嘗各種檸檬風味！"></div>
                    <div class="content">
                      <div class="title"><p>輕巧包裝方便攜帶，隨時可品嘗各種檸檬風味！</p></div>
                      <div class="initiator clear">
                        <p class="user-id"><span class="glyphicon glyphicon-user"></span>userid</p>
                        <p class="location">桃園</p>
                      </div>
                      <div class="progress">
                        <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                      <div class="clear">
                        <p class="price">$ 10</p>
                        <p class="deadline"><span class="glyphicon glyphicon-time"></span>剩3天截止</p>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item-wrapper">
                  <div class="item">
                    <div class="item-thumb"><img src="img/pd4.jpg" alt="★上班這黨事激推~下班追劇　搭配這一味　一口接一口停不下來"></div>
                    <div class="content">
                      <div class="title"><p>★上班這黨事激推~下班追劇搭配這一味　一口接一口停</p></div>
                      <div class="initiator clear">
                        <p class="user-id"><span class="glyphicon glyphicon-user"></span>userid</p>
                        <p class="location">彰化</p>
                      </div>
                      <div class="progress">
                        <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                      <div class="clear">
                        <p class="price">$ 50起</p>
                        <p class="deadline"><span class="glyphicon glyphicon-time"></span>剩3天截止</p>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>

            <div class="item">
              <ul class="wrap clear">
                <li class="item-wrapper">
                  <div class="item">
                    <div class="item-thumb"><img src="img/pd1.jpg" alt="富品家肉粽  蘋果日報評比口 碑推薦 老字號最飄香！"></div>
                    <div class="content">
                      <div class="title"><p>富品家肉粽　蘋果日報評比口碑推薦　老字號最飄香！</p></div>
                      <div class="initiator clear">
                        <p class="user-id"><span class="glyphicon glyphicon-user"></span>userid</p>
                        <p class="location">台南</p>
                      </div>
                      <div class="progress">
                        <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                          <span class="sr-only">100% Complete</span>
                        </div>
                      </div>
                      <div class="clear">
                        <p class="price">$ 190</p>
                        <p class="deadline"><span class="glyphicon glyphicon-time"></span>剩不到1天！</p>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item-wrapper">
                  <div class="item">
                    <div class="item-thumb"><img src="img/pd2.jpg" alt="不加厚重裹粉 鮮嫩可口 徵60份免運"></div>
                    <div class="content">
                      <div class="title"><p>不加厚重裹粉　鮮嫩可口　徵60份免運</p></div>
                      <div class="initiator clear">
                        <p class="user-id"><span class="glyphicon glyphicon-user"></span>userid</p>
                        <p class="location">台中</p>
                      </div>
                      <div class="progress">
                        <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                      <div class="clear">
                        <p class="price">$ 40</p>
                        <p class="deadline"><span class="glyphicon glyphicon-time"></span>剩2天截止</p>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item-wrapper">
                  <div class="item">
                    <div class="item-thumb"><img src="img/pd3.jpg" alt="輕巧包裝方便攜帶，隨時可品嘗各種檸檬風味！"></div>
                    <div class="content">
                      <div class="title"><p>輕巧包裝方便攜帶，隨時可品嘗各種檸檬風味！</p></div>
                      <div class="initiator clear">
                        <p class="user-id"><span class="glyphicon glyphicon-user"></span>userid</p>
                        <p class="location">桃園</p>
                      </div>
                      <div class="progress">
                        <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                      <div class="clear">
                        <p class="price">$ 10</p>
                        <p class="deadline"><span class="glyphicon glyphicon-time"></span>剩3天截止</p>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item-wrapper">
                  <div class="item">
                    <div class="item-thumb"><img src="img/pd4.jpg" alt="★上班這黨事激推~下班追劇　搭配這一味　一口接一口停不下來"></div>
                    <div class="content">
                      <div class="title"><p>★上班這黨事激推~下班追劇搭配這一味　一口接一口停</p></div>
                      <div class="initiator clear">
                        <p class="user-id"><span class="glyphicon glyphicon-user"></span>userid</p>
                        <p class="location">彰化</p>
                      </div>
                      <div class="progress">
                        <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                      <div class="clear">
                        <p class="price">$ 50起</p>
                        <p class="deadline"><span class="glyphicon glyphicon-time"></span>剩3天截止</p>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>

            <div class="item">
              <ul class="wrap clear">
                <li class="item-wrapper">
                  <div class="item">
                    <div class="item-thumb"><img src="img/pd1.jpg" alt="富品家肉粽  蘋果日報評比口 碑推薦 老字號最飄香！"></div>
                    <div class="content">
                      <div class="title"><p>富品家肉粽　蘋果日報評比口碑推薦　老字號最飄香！</p></div>
                      <div class="initiator clear">
                        <p class="user-id"><span class="glyphicon glyphicon-user"></span>userid</p>
                        <p class="location">台南</p>
                      </div>
                      <div class="progress">
                        <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                          <span class="sr-only">100% Complete</span>
                        </div>
                      </div>
                      <div class="clear">
                        <p class="price">$ 190</p>
                        <p class="deadline"><span class="glyphicon glyphicon-time"></span>剩不到1天！</p>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item-wrapper">
                  <div class="item">
                    <div class="item-thumb"><img src="img/pd2.jpg" alt="不加厚重裹粉 鮮嫩可口 徵60份免運"></div>
                    <div class="content">
                      <div class="title"><p>不加厚重裹粉　鮮嫩可口　徵60份免運</p></div>
                      <div class="initiator clear">
                        <p class="user-id"><span class="glyphicon glyphicon-user"></span>userid</p>
                        <p class="location">台中</p>
                      </div>
                      <div class="progress">
                        <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                      <div class="clear">
                        <p class="price">$ 40</p>
                        <p class="deadline"><span class="glyphicon glyphicon-time"></span>剩2天截止</p>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item-wrapper">
                  <div class="item">
                    <div class="item-thumb"><img src="img/pd3.jpg" alt="輕巧包裝方便攜帶，隨時可品嘗各種檸檬風味！"></div>
                    <div class="content">
                      <div class="title"><p>輕巧包裝方便攜帶，隨時可品嘗各種檸檬風味！</p></div>
                      <div class="initiator clear">
                        <p class="user-id"><span class="glyphicon glyphicon-user"></span>userid</p>
                        <p class="location">桃園</p>
                      </div>
                      <div class="progress">
                        <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                      <div class="clear">
                        <p class="price">$ 10</p>
                        <p class="deadline"><span class="glyphicon glyphicon-time"></span>剩3天截止</p>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item-wrapper">
                  <div class="item">
                    <div class="item-thumb"><img src="img/pd4.jpg" alt="★上班這黨事激推~下班追劇　搭配這一味　一口接一口停不下來"></div>
                    <div class="content">
                      <div class="title"><p>★上班這黨事激推~下班追劇搭配這一味　一口接一口停</p></div>
                      <div class="initiator clear">
                        <p class="user-id"><span class="glyphicon glyphicon-user"></span>userid</p>
                        <p class="location">彰化</p>
                      </div>
                      <div class="progress">
                        <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                      <div class="clear">
                        <p class="price">$ 50起</p>
                        <p class="deadline"><span class="glyphicon glyphicon-time"></span>剩3天截止</p>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>

            <div class="item">
              <ul class="wrap clear">
                <li class="item-wrapper">
                  <div class="item">
                    <div class="item-thumb"><img src="img/pd1.jpg" alt="富品家肉粽  蘋果日報評比口 碑推薦 老字號最飄香！"></div>
                    <div class="content">
                      <div class="title"><p>富品家肉粽　蘋果日報評比口碑推薦　老字號最飄香！</p></div>
                      <div class="initiator clear">
                        <p class="user-id"><span class="glyphicon glyphicon-user"></span>userid</p>
                        <p class="location">台南</p>
                      </div>
                      <div class="progress">
                        <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                          <span class="sr-only">100% Complete</span>
                        </div>
                      </div>
                      <div class="clear">
                        <p class="price">$ 190</p>
                        <p class="deadline"><span class="glyphicon glyphicon-time"></span>剩不到1天！</p>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item-wrapper">
                  <div class="item">
                    <div class="item-thumb"><img src="img/pd2.jpg" alt="不加厚重裹粉 鮮嫩可口 徵60份免運"></div>
                    <div class="content">
                      <div class="title"><p>不加厚重裹粉　鮮嫩可口　徵60份免運</p></div>
                      <div class="initiator clear">
                        <p class="user-id"><span class="glyphicon glyphicon-user"></span>userid</p>
                        <p class="location">台中</p>
                      </div>
                      <div class="progress">
                        <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                      <div class="clear">
                        <p class="price">$ 40</p>
                        <p class="deadline"><span class="glyphicon glyphicon-time"></span>剩2天截止</p>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item-wrapper">
                  <div class="item">
                    <div class="item-thumb"><img src="img/pd3.jpg" alt="輕巧包裝方便攜帶，隨時可品嘗各種檸檬風味！"></div>
                    <div class="content">
                      <div class="title"><p>輕巧包裝方便攜帶，隨時可品嘗各種檸檬風味！</p></div>
                      <div class="initiator clear">
                        <p class="user-id"><span class="glyphicon glyphicon-user"></span>userid</p>
                        <p class="location">桃園</p>
                      </div>
                      <div class="progress">
                        <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                      <div class="clear">
                        <p class="price">$ 10</p>
                        <p class="deadline"><span class="glyphicon glyphicon-time"></span>剩3天截止</p>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item-wrapper">
                  <div class="item">
                    <div class="item-thumb"><img src="img/pd4.jpg" alt="★上班這黨事激推~下班追劇　搭配這一味　一口接一口停不下來"></div>
                    <div class="content">
                      <div class="title"><p>★上班這黨事激推~下班追劇搭配這一味　一口接一口停</p></div>
                      <div class="initiator clear">
                        <p class="user-id"><span class="glyphicon glyphicon-user"></span>userid</p>
                        <p class="location">彰化</p>
                      </div>
                      <div class="progress">
                        <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                      <div class="clear">
                        <p class="price">$ 50起</p>
                        <p class="deadline"><span class="glyphicon glyphicon-time"></span>剩3天截止</p>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div><!-- #myCarousel -->
      </div><!-- .container -->
    </div><!-- #view-items -->
  </section>
  
  
  <footer></footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvEv5ChK_DJBW9ZYBxLwuo5I88dGNQ18Y&signed_in=true&callback=initMap"></script>
  <script src="js/googlemap.js"></script>
  <script src="js/slideshow.js"></script>
  <script src="js/dropdown_menu.js"></script>
  <script>
    // Set the size of #jumbotron
    $("#jumbotron").css("height",($("#jumbotron").width()/2).toString());
    $("#jumbotron #slider .slides li").css("height",$("#jumbotron").height().toString());
  </script>
</body>
</html>