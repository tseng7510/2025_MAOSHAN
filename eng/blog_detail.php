<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/news.css">
</head>

<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePage newsDetailPage">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain" aria-label="main" itemscope>

      <div class="inBanner">
        <div class="outerBox">
          <div class="container">
            <div class="pic"><img src="../images/in/bn.jpg" alt=""></div>
            <div class="pageTitleBox">
              <h1 class="title wow fadeInUp" data-wow-delay="0s">Blog</h1>

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
                    <span itemprop="name">Blog</span>
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

                <div class="topBox">
                  <div class="timeBox">
                    <time>2025-08-04</time>
                  </div>
                  <h3 class="title">All of our machines are subject to comprehensive testing and inspection</h3>
                </div>
              </div>
            </div>
            <div class="container">
              <div class="contentBox">
                <div class="editorBox wow fadeInUp" data-wow-delay="0.2s">
                  <div class="editor">Established in 1980, Mao Shan Machinery Industrial Co., Ltd. designs and manufactures various woodworking machines. Total factory area is 13,860 square feet and 60 employees. Mao Shan provides perfect OEM/ODM services. The product range includes table saw, edge sander, drum sander, wide belt sander, lathe, router table.Established in 1980, Mao Shan Machinery Industrial Co., Ltd. designs and manufactures various woodworking machines. Total factory area is 13,860 square feet
                    <br />
                    <br />
                    <img src="../images/in/n.jpg" alt="">
                    <br />
                    <br />

                    ICAST, the world’s largest sportfishing trade show, is the premier showcase for the latest innovations in fishing gear, accessories and apparel. ICAST is the cornerstone of the sportfishing industry, helping to drive recreational fishing product sales year round.ICAST, the world’s largest sportfishing trade show, is the premier showcase for the latest innovations in fishing gear, accessories and apparel. ICAST is the cornerstone of the sportfishing industry, helping to drive recreational fishing product sales year round.ICAST, the world’s largest sportfishing trade show, is the premier showcase for the latest innovations in fishing gear, accessories and apparel. ICAST is the cornerstone of the sportfishing industry, helping to drive recreational fishing product sales year round.ICAST, the world’s largest sportfishing trade show, is the premier showcase for the latest innovations in fishing gear, accessories and apparel. ICAST is the cornerstone of the sportfishing industry, helping to drive recreational fishing product sales year round.ICAST,
                  </div>
                  <div class="pageBtnBox wow fadeInUp" data-wow-delay="0.2s">
                    <a href="blog.php" class="back">Back To List</a>
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
      $('.mainMenu > ul > li').eq(0).addClass('active');
    })
  </script>
</body>

</html>