<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/products.css">
</head>

<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePage products2Page">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>



    <main class="siteMain" aria-label="main" itemscope>

      <div class="inBanner">
        <div class="outerBox">
          <div class="container">
            <div class="pic"><img src="../images/in/bp.jpg" alt=""></div>
            <div class="pageTitleBox">
              <h1 class="title wow fadeInUp" data-wow-delay="0s">Products</h1>

              <div class="breadcrumbBox wow fadeInUp" data-wow-delay="0.2s">
                <ul class="breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
                  <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                    <a href="index.php" itemprop="item">
                      <span itemprop="name">Home</span>
                    </a>
                    <meta itemprop="position" content="1">
                  </li>
                  <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                    <a href="products.php" itemprop="item">
                      <span itemprop="name">Products</span>
                    </a>
                    <meta itemprop="position" content="2">
                  </li>
                  <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                    <span itemprop="name">Drum Sander</span>
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
                  <div class="title">Drum Sander</div>
                  <div class="description">Technology designed for all the ways your employees want to work. New technology can transform your business. The most powerful products for business are the ones people already love to use. Technology designed for all the ways your employees want to work. New technology can transform your business. The most powerful products for business are the ones people already love to use. Technology designed for all the ways your employees want to work. New technology can transform your business. The most powerful products for business are the ones people already love to use.</div>
                  <button type="button" class="btnMore">READ MORE</button>
                </div>
                <div class="listBox wow fadeInUp" data-wow-delay="0.2s">
                  <? for ($i = 0; $i < 4; $i++) { ?>
                    <div class="item">
                      <a href="products_detail.php">
                        <div class="pic"><img src="../images/in/p.png" alt=""></div>
                        <div class="info">
                          <h2 class="title">DS-1632A</h2>
                        </div>
                      </a>
                    </div>
                  <? } ?>
                  <? for ($i = 0; $i < 4; $i++) { ?>
                    <div class="item discontinued">
                      <a href="products_detail.php">
                        <div class="pic"><img src="../images/in/p.png" alt=""></div>
                        <div class="info">
                          <h2 class="title">DS-1632A</h2>
                        </div>
                      </a>
                    </div>
                  <? } ?>
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
      $('.mainMenu > ul > li').eq(2).addClass('active');
      $('.btnMore').on('click', function() {
        $('.topBox .description').toggleClass('active');
      })
    })
  </script>
</body>

</html>