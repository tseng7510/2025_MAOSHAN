<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/news.css">
</head>

<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePage newsPage">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain" aria-label="main" itemscope>
      <div class="inBanner">
        <div class="outerBox">
          <div class="container">
            <div class="pic"><img src="../images/in/bn.jpg" alt=""></div>
            <div class="pageTitleBox">
              <h1 class="title wow fadeInUp" data-wow-delay="0s">News</h1>

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
                    <span itemprop="name">News</span>
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
              <div class="contentBox">
                <?php include('include_media.php'); ?>
              </div>

              <div class="listBox wow fadeInUp" data-wow-delay="0.2s">
                <? for ($i = 1; $i <= 6; $i++) { ?>
                  <div class="item"><a href="news_detail.php">
                      <time>2025-08-04</time>
                      <h2 class="title">All of our machines are subject to comprehensive testing and inspection</h3>
                        <div class="description">conform to CSA and CE standards. Mao Shan machines are superior in design and reliability of operation.</div>
                    </a></div>
                <? } ?>
              </div>


              <div class="pageBox wow fadeInUp" data-wow-delay="0.2s">
                <ul class="pagination">
                  <li class="controls"><a class="prev" href="#" title="Previous"></a></li>
                  <li>1 / 10</li>
                  <li class="controls"><a class="next" href="#" title="Next"></a></li>
                </ul>
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
      $('.subMenu li').eq(0).addClass('active');
    });
  </script>
</body>

</html>