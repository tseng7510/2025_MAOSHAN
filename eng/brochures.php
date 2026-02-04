<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/brochures.css">
</head>

<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePage brochuresPage">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain" aria-label="main" itemscope>
      <div class="inBanner">
        <div class="outerBox">
          <div class="container">
            <div class="pic"><img src="../images/in/bn.jpg" alt=""></div>
            <div class="pageTitleBox">
              <h1 class="title wow fadeInUp" data-wow-delay="0s">Brochures</h1>

              <div class="breadcrumbBox wow fadeInUp" data-wow-delay="0.2s">
                <ul class="breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
                  <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                    <a href="index.php" itemprop="item">
                      <span itemprop="name">Home</span>
                    </a>
                    <meta itemprop="position" content="1">
                  </li>
                  <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                    <span itemprop="name">Media</span>
                    <meta itemprop="position" content="2">
                  </li>
                  <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                    <span itemprop="name">Brochures</span>
                    <meta itemprop="position" content="3">
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="mainBox">
        <section>
          <div class="outerBox">
            <div class="container">
              <?php include('include_media.php'); ?>
              <div class="contentBox">
                <div class="sideMenu wow fadeInUp" data-wow-delay="0.2s">
                  <div class="title">MODEL LIST</div>
                  <ul>
                    <li><a href="#block1">SPINDLE SANDER</a></li>
                    <li><a href="#block2">DRUM SANDER</a></li>
                    <li><a href="#block3">TABLE SAW</a></li>
                    <li><a href="#block4">BELT SANDER</a></li>
                    <li><a href="#block5">WIDE-BELT SANDER</a></li>
                    <li><a href="#block6">LATHE</a></li>
                    <li><a href="#block7">ROUTER</a></li>
                    <li><a href="#block8">BRUSH SANDER</a></li>
                    <li><a href="#block9">SLIDING PANEL SAW</a></li>
                  </ul>
                </div>
                <div class="listBox wow fadeInUp" data-wow-delay="0.4s">
                  <div class="item">
                    <span id="block1"></span>
                    <div class="pic"><img src="../images/in/b1.jpg" alt=""></div>
                    <div class="content">
                      <h2 class="title">SPINDLE SANDER</h2>
                      <div class="swiperBox">
                        <button class="swiperArrow swiperPrev"></button>
                        <div class="swiper">
                          <div class="swiper-wrapper">
                            <? for ($i = 1; $i <= 15; $i++) { ?>
                              <div class="swiper-slide">
                                <div class="item"><a href="#" download>
                                    <div class="picBox">
                                      <div class="top">DOWNLOAD</div>
                                      <div class="pic"><img src="../images/in/b10.png" alt=""></div>
                                    </div>
                                    <h3 class="title">OVS-RE</h3>
                                  </a></div>
                              </div>
                            <? } ?>
                          </div>
                        </div>
                        <button class="swiperArrow swiperNext"></button>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <span id="block2"></span>
                    <div class="pic"><img src="../images/in/b2.jpg" alt=""></div>
                    <div class="content">
                      <h2 class="title">DRUM SANDER</h2>
                      <div class="swiperBox">
                        <button class="swiperArrow swiperPrev"></button>
                        <div class="swiper">
                          <div class="swiper-wrapper">
                            <? for ($i = 1; $i <= 15; $i++) { ?>
                              <div class="swiper-slide">
                                <div class="item"><a href="#" download>
                                    <div class="picBox">
                                      <div class="top">DOWNLOAD</div>
                                      <div class="pic"><img src="../images/in/b10.png" alt=""></div>
                                    </div>
                                    <h3 class="title">OVS-RE</h3>
                                  </a></div>
                              </div>
                            <? } ?>
                          </div>
                        </div>
                        <button class="swiperArrow swiperNext"></button>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <span id="block3"></span>
                    <div class="pic"><img src="../images/in/b3.jpg" alt=""></div>
                    <div class="content">
                      <h2 class="title">TABLE SAW</h2>
                      <div class="swiperBox">
                        <button class="swiperArrow swiperPrev"></button>
                        <div class="swiper">
                          <div class="swiper-wrapper">
                            <? for ($i = 1; $i <= 15; $i++) { ?>
                              <div class="swiper-slide">
                                <div class="item"><a href="#" download>
                                    <div class="picBox">
                                      <div class="top">DOWNLOAD</div>
                                      <div class="pic"><img src="../images/in/b10.png" alt=""></div>
                                    </div>
                                    <h3 class="title">OVS-RE</h3>
                                  </a></div>
                              </div>
                            <? } ?>
                          </div>
                        </div>
                        <button class="swiperArrow swiperNext"></button>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <span id="block4"></span>
                    <div class="pic"><img src="../images/in/b4.jpg" alt=""></div>
                    <div class="content">
                      <h2 class="title">BELT SANDER</h2>
                      <div class="swiperBox">
                        <button class="swiperArrow swiperPrev"></button>
                        <div class="swiper">
                          <div class="swiper-wrapper">
                            <? for ($i = 1; $i <= 15; $i++) { ?>
                              <div class="swiper-slide">
                                <div class="item"><a href="#" download>
                                    <div class="picBox">
                                      <div class="top">DOWNLOAD</div>
                                      <div class="pic"><img src="../images/in/b10.png" alt=""></div>
                                    </div>
                                    <h3 class="title">OVS-RE</h3>
                                  </a></div>
                              </div>
                            <? } ?>
                          </div>
                        </div>
                        <button class="swiperArrow swiperNext"></button>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <span id="block5"></span>
                    <div class="pic"><img src="../images/in/b5.jpg" alt=""></div>
                    <div class="content">
                      <h2 class="title">WIDE-BELT SANDER</h2>
                      <div class="swiperBox">
                        <button class="swiperArrow swiperPrev"></button>
                        <div class="swiper">
                          <div class="swiper-wrapper">
                            <? for ($i = 1; $i <= 15; $i++) { ?>
                              <div class="swiper-slide">
                                <div class="item"><a href="#" download>
                                    <div class="picBox">
                                      <div class="top">DOWNLOAD</div>
                                      <div class="pic"><img src="../images/in/b10.png" alt=""></div>
                                    </div>
                                    <h3 class="title">OVS-RE</h3>
                                  </a></div>
                              </div>
                            <? } ?>
                          </div>
                        </div>
                        <button class="swiperArrow swiperNext"></button>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <span id="block6"></span>
                    <div class="pic"><img src="../images/in/b6.jpg" alt=""></div>
                    <div class="content">
                      <h2 class="title">LATHE</h2>
                      <div class="swiperBox">
                        <button class="swiperArrow swiperPrev"></button>
                        <div class="swiper">
                          <div class="swiper-wrapper">
                            <? for ($i = 1; $i <= 15; $i++) { ?>
                              <div class="swiper-slide">
                                <div class="item"><a href="#" download>
                                    <div class="picBox">
                                      <div class="top">DOWNLOAD</div>
                                      <div class="pic"><img src="../images/in/b10.png" alt=""></div>
                                    </div>
                                    <h3 class="title">OVS-RE</h3>
                                  </a></div>
                              </div>
                            <? } ?>
                          </div>
                        </div>
                        <button class="swiperArrow swiperNext"></button>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <span id="block7"></span>
                    <div class="pic"><img src="../images/in/b7.jpg" alt=""></div>
                    <div class="content">
                      <h2 class="title">ROUTER</h2>
                      <div class="swiperBox">
                        <button class="swiperArrow swiperPrev"></button>
                        <div class="swiper">
                          <div class="swiper-wrapper">
                            <? for ($i = 1; $i <= 15; $i++) { ?>
                              <div class="swiper-slide">
                                <div class="item"><a href="#" download>
                                    <div class="picBox">
                                      <div class="top">DOWNLOAD</div>
                                      <div class="pic"><img src="../images/in/b10.png" alt=""></div>
                                    </div>
                                    <h3 class="title">OVS-RE</h3>
                                  </a></div>
                              </div>
                            <? } ?>
                          </div>
                        </div>
                        <button class="swiperArrow swiperNext"></button>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <span id="block8"></span>
                    <div class="pic"><img src="../images/in/b8.jpg" alt=""></div>
                    <div class="content">
                      <h2 class="title">BRUSH SANDER</h2>
                      <div class="swiperBox">
                        <button class="swiperArrow swiperPrev"></button>
                        <div class="swiper">
                          <div class="swiper-wrapper">
                            <? for ($i = 1; $i <= 15; $i++) { ?>
                              <div class="swiper-slide">
                                <div class="item"><a href="#" download>
                                    <div class="picBox">
                                      <div class="top">DOWNLOAD</div>
                                      <div class="pic"><img src="../images/in/b10.png" alt=""></div>
                                    </div>
                                    <h3 class="title">OVS-RE</h3>
                                  </a></div>
                              </div>
                            <? } ?>
                          </div>
                        </div>
                        <button class="swiperArrow swiperNext"></button>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <span id="block9"></span>
                    <div class="pic"><img src="../images/in/b9.jpg" alt=""></div>
                    <div class="content">
                      <h2 class="title">SLIDING PANEL SAW</h2>
                      <div class="swiperBox">
                        <button class="swiperArrow swiperPrev"></button>
                        <div class="swiper">
                          <div class="swiper-wrapper">
                            <? for ($i = 1; $i <= 15; $i++) { ?>
                              <div class="swiper-slide">
                                <div class="item"><a href="#" download>
                                    <div class="picBox">
                                      <div class="top">DOWNLOAD</div>
                                      <div class="pic"><img src="../images/in/b10.png" alt=""></div>
                                    </div>
                                    <h3 class="title">OVS-RE</h3>
                                  </a></div>
                              </div>
                            <? } ?>
                          </div>
                        </div>
                        <button class="swiperArrow swiperNext"></button>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>

          </div>
        </section>


      </div>
    </main>
    <?php include('include_footer.php'); ?>
  </div>
  <?php include('include_body_bottom.php'); ?>
  <script>
    $(function() {
      $('.subMenu li').eq(1).addClass('active');
    });
    let productBox = new Swiper('.contentBox .swiper', {
      slidesPerView: 2,
      spaceBetween: 14,
      navigation: {
        nextEl: '.contentBox .swiperNext',
        prevEl: '.contentBox .swiperPrev',
      },
      breakpoints: {
        500: {
          slidesPerView: 'auto',
        },
      }
    });
  </script>
</body>

</html>