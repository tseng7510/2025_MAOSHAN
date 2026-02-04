<!doctype html>
<html lang="zh-Hant">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/index.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>

      <div class="mainBox">
        <div class="banner">
          <div class="container">
            <div class="swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="pic">
                    <img src="../images/index/banner.jpg" alt="">
                  </div>
                  <div class="info">
                    <div class="title">Perfect OEM/ODM Service</div>
                    <div class="description">Mao Shan provides perfect OEM/ODM services. The product range includes table saw, sliding panel saw, scroll saw, edge sander, drum sander, wide belt sander, lathe, router table.</div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="pic">
                    <img src="../images/index/banner.jpg" alt="">
                  </div>
                  <div class="info">
                    <div class="title">Perfect OEM/ODM Service</div>
                    <div class="description">Mao Shan provides perfect OEM/ODM services. The product range includes table saw, sliding panel saw, scroll saw, edge sander, drum sander, wide belt sander, lathe, router table.</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="pagination"></div>
          </div>
        </div>

        <section class="aboutBox">
          <div class="outerBox">
            <div class="container">
              <div class="contentBox">

                <div class="leftColumn">

                  <div class="headlineArea">
                    <h1 class="headline wow fadeInUp" data-wow-delay="0.2s">DESIGNS AND MANUFACTURES VARIOUS WOODWORKING MACHINES</h1>
                    <div class="subHeadline wow fadeInUp" data-wow-delay="0.4s">Innovative, modern design, the best components and provides perfect OEM/ODM services.</div>
                  </div>

                  <div class="certificationBlock">
                    <div class="certificationText wow fadeInUp" data-wow-delay="0.6s">ISO-9001: 2000 certified manufacturer conform to CSA AND CE standards</div>
                    <div class="historyTag"><span>Established in 1980</span></div>
                  </div>
                </div>

                <div class="rightColumn wow fadeInUp" data-wow-delay="0.6s">
                  <div class="pic"><img src="../images/index/a.jpg" alt=""></div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="productBox">
          <div class="titleBox">
            <h2 class="headline wow fadeInUp" data-wow-delay="0.2s">PRODUCTS</h2>
            <div class="subHeadline wow fadeInUp" data-wow-delay="0.4s">Technology designed for all the ways your employees want to work.</div>
          </div>
          <div class="contentBox wow fadeInUp" data-wow-delay="0.6s">
            <div class="swiper">
              <div class="swiper-wrapper">
                <? for ($i = 0; $i < 2; $i++) { ?>
                  <div class="swiper-slide">
                    <a href="products.php">
                      <div class="pic"><img src="../images/index/p1.jpg" alt=""></div>
                      <div class="info">
                        <h3 class="title">Router</h3>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="products.php">
                      <div class="pic"><img src="../images/index/p2.jpg" alt=""></div>
                      <div class="info">
                        <h3 class="title">Table Saw</h3>
                        <div class="description">
                          <p>Technology designed for all the ways your employees want to work. New technology can transform your business. The most powerful products for business are the ones people already love to use.</p>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="products.php">
                      <div class="pic"><img src="../images/index/p3.jpg" alt=""></div>
                      <div class="info">
                        <h3 class="title">Sliding Panel Saw</h3>
                        <div class="description">
                          <p>Technology designed for all the ways your employees want to work. New technology can transform your business. The most powerful products for business are the ones people already love to use.</p>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="products.php">
                      <div class="pic"><img src="../images/index/p4.jpg" alt=""></div>
                      <div class="info">
                        <h3 class="title">Drum Sander</h3>
                        <div class="description">
                          <p>Technology designed for all the ways your employees want to work. New technology can transform your business. The most powerful products for business are the ones people already love to use.</p>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="products.php">
                      <div class="pic"><img src="../images/index/p5.jpg" alt=""></div>
                      <div class="info">
                        <h3 class="title">Belt Sander</h3>
                        <div class="description">
                          <p>Technology designed for all the ways your employees want to work. New technology can transform your business. The most powerful products for business are the ones people already love to use.</p>
                        </div>
                      </div>
                    </a>
                  </div>
                <? } ?>
              </div>
            </div>
            <div class="controlBox">
              <button class="swiperArrow swiperPrev"></button>
              <button class="swiperArrow swiperNext"></button>
            </div>
          </div>
        </section>

        <section class="newsBox">
          <h2 class="headline wow fadeInUp" data-wow-delay="0.2s">WHAT’S NEW</h2>

          <div class="contentBox">
            <div class="pic wow fadeInUp" data-wow-delay="0.4s"><img src="../images/index/n.jpg" alt=""></div>
            <div class="listBox wow fadeInUp" data-wow-delay="0.6s">
              <ul>
                <? for ($i = 1; $i <= 3; $i++) { ?>
                  <li>
                    <a href="news_detail.php">
                      <h3 class="title">All of our machines are subject to comprehensive testing and inspection</h3>
                      <div class="description">conform to CSA and CE standards. Mao Shan machines are superior in design and reliability of operation.</div>
                    </a>
                  </li>
                <? } ?>
              </ul>
              <a href="about.php" class="indexMore">VIEW MORE</a>
            </div>
          </div>
        </section>

      </div>
    </main>

    <?php include('include_footer.php'); ?>

  </div>
  <?php include('include_body_bottom.php'); ?>

  <script type="text/javascript">
    let banner = new Swiper('.banner .swiper', {
      slidesPerView: 1,
      loop: true,
      autoplay: {
        delay: 10000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.banner .pagination',
        clickable: true,
      },
    });
    let productBox = new Swiper('.productBox .swiper', {
      slidesPerView: 2,
      spaceBetween: 10,
      loop: true,
      navigation: {
        nextEl: '.productBox .swiperNext',
        prevEl: '.productBox .swiperPrev',
      },
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      breakpoints: {
        1200: {
          slidesPerView: 5,
        },
        768: {
          slidesPerView: 4,
        },
        640: {
          slidesPerView: 3,
        },
      }
    });
  </script>
</body>

</html>