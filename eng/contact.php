<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/contact.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePage contactPage">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain" aria-label="main" itemscope>

      <div class="inBanner">
        <div class="outerBox">
          <div class="container">
            <div class="pic"><img src="../images/in/bc.jpg" alt=""></div>
            <div class="pageTitleBox">
              <h1 class="title wow fadeInUp" data-wow-delay="0s">Contact</h1>

              <div class="breadcrumbBox wow fadeInUp" data-wow-delay="0.2s">
                <ul class="breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
                  <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                    <a href="index.php" itemprop="item">
                      <span itemprop="name">Home</span>
                    </a>
                    <meta itemprop="position" content="1">
                  </li>
                  <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                    <span itemprop="name">Contact</span>
                    <meta itemprop="position" content="2">
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
                <div class="inquiryBox">
                  <div class="listBox wow fadeInUp" data-wow-delay="0.2s">
                    <div class="item">
                      <div class="titleF">Request a Quote</div>
                      <a href="products_detail.php">
                        <div class="picBox">
                          <div class="pic"><img src="../images/in/i.jpg" alt=""></div>
                        </div>
                        <div class="title">Table Saw <span>MS-10RB</span></div>
                      </a>
                      <button class="del"></button>
                    </div>
                  </div>
                </div>
                <a href="products.php" class="btnMore wow fadeInUp" data-wow-delay="0.2s">MORE PRODUCTS</a>
                <div class="titleBox wow fadeInUp" data-wow-delay="0.4s">
                  <div class="title">Contact Us</div>
                  <div class="description">We appreciate your visit of our website. If you have any inquiry needs about our products, technology, or services, please contact us via the channel below.</div>
                </div>
              </div>
            </div>
          </div>

          <div class="outerBox">
            <div class="container">
              <div class="contentBox">

                <div class="bottomBox">

                  <form class="formBox">
                    <ul>
                      <li class="inputItem wow fadeInUp required">
                        <label for="company">Company name</label>
                        <input type="text" class="inputControl" id="company">
                      </li>
                      <li class="inputItem wow fadeInUp required">
                        <label for="name">Name</label>
                        <input type="text" class="inputControl" id="name">
                      </li>
                      <li class="inputItem wow fadeInUp">
                        <label for="tel">TEL</label>
                        <input type="text" class="inputControl" id="tel">
                      </li>
                      <li class="inputItem wow fadeInUp required">
                        <label for="email">E-Mail</label>
                        <input type="text" class="inputControl" id="email">
                      </li>
                      <li class="inputItem wow fadeInUp required">
                        <label for="address">Country</label>
                        <input type="text" class="inputControl" id="address">
                      </li>
                      <li class="inputItem wow fadeInUp">
                        <label for="address">Address</label>
                        <input type="text" class="inputControl" id="address">
                      </li>
                      <li class="textareaItem full wow fadeInUp required">
                        <label for="message">Message</label>
                        <textarea class="textareaControl" name="message" id="message" cols="30" rows="5"></textarea>
                      </li>
                      <li class="inputItem wow fadeInUp required">
                        <label for="code">Code</label>
                        <input type="password" class="inputControl" id="code">
                        <span class="checkImg"><img src="../images/check_img.jpg"></span>
                        <button class="reBtn"></button>
                      </li>
                    </ul>
                    <div class="pageBtnBox wow fadeInUp">
                      <button class="send" type="button" onclick="javascript:location.href='contact_ok.php'">Send Message</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div class="infoBox">
            <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7281.68697811926!2d120.718928!3d24.142134!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346922afc3272f31%3A0x7a391ba443d0c479!2z6LK_5bGx5qmf5Zmo5bel5qWt6IKh5Lu95pyJ6ZmQ5YWs5Y-4!5e0!3m2!1sen!2stw!4v1765518040477!5m2!1sen!2stw" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
            <div class="box">
              <div class="boxTitle">Sales and Product Inquiries</div>
              <div class="notice">Tell us how we’re doing. Select the appropriate feedback option (we read everything):</div>
              <div class="info">
                <ul>
                  <li class="address">
                    <div class="title">Company Address</div>
                    <div class="con">45,YICHANG E.RD.,TAIPING DIST.,TAICHUNG CITY 41163,TAIWAN (R.O.C.)</div>
                  </li>
                  <li class="mail">
                    <div class="title">E-mail</div>
                    <div class="con"><a href="mailto:service@maoshan.com">service@maoshan.com</a></div>
                  </li>
                  <li class="tel">
                    <div class="title">Phone Numbers</div>
                    <div class="con"><span>Infoline:</span> <a href="tel:+886422706777">+886-4-2270 6777</a><br />
                      <span>FAX:</span> +886-4-2275 3182
                    </div>

                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
      </div>
    </main>

    <?php include('include_footer.php'); ?>
  </div>
  <?php include('include_body_bottom.php'); ?>
</body>

</html>