<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/news.css">
</head>

<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePage videoPage">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain" aria-label="main" itemscope>
      <div class="inBanner">
        <div class="outerBox">
          <div class="container">
            <div class="pic"><img src="../images/in/bn.jpg" alt=""></div>
            <div class="pageTitleBox">
              <h1 class="title wow fadeInUp" data-wow-delay="0s">Videos</h1>

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
                    <span itemprop="name">Videos</span>
                    <meta itemprop="position" content="3">
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="mainBox">
        <div class="container">
          <?php include('include_media.php'); ?>
        </div>
        <section>
          <div class="outerBox">
            <div class="container">
              <div class="contentBox">
                <div class="info wow fadeInUp" data-wow-delay="0.2s">
                  <div class="swiper">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="title">VIDEO NAME</div>
                        <div class="description">Innovative, modern design, the best components and provides perfect OEM/ODM services.</div>
                      </div>
                      <div class="swiper-slide">
                        <div class="title">VIDEO NAME</div>
                        <div class="description">Innovative, modern design, the best components and provides perfect OEM/ODM services.</div>
                      </div>
                    </div>
                  </div>
                  <div class="pagination"></div>
                </div>
                <div class="video wow fadeInUp" data-wow-delay="0.4s">
                  <div class="swiper">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="videoContainer"><iframe width="560" height="315" src="https://www.youtube.com/embed/jfKfPfyJRdk?si=BgQKWfuiJzyyughQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="videoContainer"><iframe width="560" height="315" src="https://www.youtube.com/embed/jfKfPfyJRdk?si=BgQKWfuiJzyyughQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
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
      $('.subMenu li').eq(2).addClass('active');
    });
    let Swiper1 = new Swiper('section .info .swiper', {
      pagination: {
        el: 'section .info .pagination',
        clickable: true,
      },
    })
    let Swiper2 = new Swiper('section .video .swiper')
    Swiper1.controller.control = Swiper2;
    Swiper2.controller.control = Swiper1;
  </script>
</body>

</html>