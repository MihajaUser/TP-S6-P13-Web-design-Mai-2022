<!DOCTYPE html>
<!-- 
Conquer Template
http://www.templatemo.com/preview/templatemo_426_conquer
-->

<head>
  <title>home</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700,800' rel='stylesheet' type='text/css'>
  <!-- Style Sheets -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/animate.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/templatemo_misc.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/templatemo_style.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/styles.css">
  <!-- JavaScripts -->
  <script src="<?php echo base_url() ?>/assets/js/jquery-1.11.1.min.js"></script>
  <script src="<?php echo base_url() ?>/assets/js/bootstrap-dropdown.js"></script>
  <script src="<?php echo base_url() ?>/assets/js/bootstrap-collapse.js"></script>
  <script src="<?php echo base_url() ?>/assets/js/bootstrap-tab.js"></script>
  <script src="<?php echo base_url() ?>/assets/js/jquery.singlePageNav.js"></script>
  <script src="<?php echo base_url() ?>/assets/js/jquery.flexslider.js"></script>
  <script src="<?php echo base_url() ?>/assets/js/custom.js"></script>
  <script src="<?php echo base_url() ?>/assets/js/jquery.lightbox.js"></script>
  <script src="<?php echo base_url() ?>/assets/js/templatemo_custom.js"></script>
  <script src="<?php echo base_url() ?>/assets/js/responsiveCarousel.min.js"></script>
</head>

<body>
  <!-- header start -->

  <div id="templatemo_home_page">
    <div class="templatemo_topbar">
      <div class="container">
        <div class="row">
          <div class="templatemo_titlewrapper"><img src="<?php echo base_url() ?>/assets/images/templatemo_logobg.png" alt="logo background">
            <div class="templatemo_title"><span>Réchauffement Climatique</span></div>
          </div>
          <div class="clear"></div>
          <div class="templatemo_titlewrappersmall">Conquer</div>
          <nav class="navbar navbar-default templatemo_menu" role="navigation">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div id="top-menu">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li><a class="menu" href="#templatemo_home_page">Home</a></li>
                    <li><a class="menu" href="#templatemo_service_page">actualité</a></li>
                    <li><a class="menu" href="#templatemo_contact_page">Contacts</a></li>
                    <li><a class="menu" href="#templatemo_work_page">Se connecter</a></li>
                  </ul>
                </div>
              </div>
              <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
          </nav>
          <div class="clear"></div>
        </div>
      </div>
    </div>
    <div class="templatemo_headerimage">
      <div class="flexslider">
        <ul class="slides">
          <li><img src="<?php echo base_url() ?>/assets/images/slider/1.jpg" alt="Slide 1"></li>
          <li><img src="<?php echo base_url() ?>/assets/images/slider/2.jpg" alt="Slide 2"></li>
          <li><img src="<?php echo base_url() ?>/assets/images/slider/3.jpg" alt="Slide 3"></li>
        </ul>
      </div>
    </div>
    <div class="slider-caption">
      <div class="templatemo_homewrapper">
        <div class="templatemo_hometitle">Réchauffement de la Terre</div>
        <div class="templatemo_hometext">Nous devons nous unir sur pour contrer le réchauffement climatique pour un avenir meilleur pur nos enfants dans le futur.</div>

      </div>
    </div>
  </div>
  <!-- header end -->
  <div class="clear"></div>
  <!-- service start -->
  <div class="templatemo_servicewrapper" id="templatemo_service_page">
    <div class="container">
      <div class="row">
        <h1>actualité</h1>
        <?php
        foreach ($informations as $information) {
        ?>
          <div class="col-md-11 col-sm-11" style="margin-bottom: 100px ;">
            <div class="templatemo_servicebox margin_bottom_1col margin_bottom_2col"><img src="<?php echo base_url() ?>/assets/photo/<?php echo $information['photo'] ?>.jpg" width="400" height="300" alt="logo background">
              <div class="templatemo_service_title"><?php echo $information['titre'] ?></div>
              <p><?php echo $information['description'] ?></p>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
  </div>
  <!-- service end -->
  <div class="clear"></div>

  <div class="clear"></div>
  <!-- team start -->
  <div class="templatemo_contactwrapper" id="templatemo_work_page">
    <div class="container">
      <div class="row" style="background-color:coral">
        <h1>login</h1>
      </div>
    </div>

    <div class="container templatemo_contactmargin">
      <div class="row">
        <form action="<?php echo site_url("/login") ?>" method="post">
          <div class="col-md-7"  >
            <div class="col-md-7">
              <h2 style="text-align:center;color:red;">ADMIN LOGIN </h2>
            </div>
            <div class="col-md-7">
              <input type="text" name="email" value="randrianarisoalalatianaantonio@gmail.com" id="email" class="email" placeholder="email">
            </div>
            <div class="col-md-7">
              <input type="password" name="mdp" value="mdp" id="name" class="name" placeholder="mot de passe">
            </div>
            <?php if (isset($errorLogin)) {
            ?>
              <div class="col-md-7">
                <h2 style="color:red;"> mot de passe incorrect</h2>
              </div>
            <?php  }
            ?>
            <div class="col-md-7">
              <input type="submit" name="send" value="se connecter" id="submit" class="button templatemo_sendbtn">
            </div>
          </div>
        </form>
        <div class="col-md-5 offset-1">
        <img src="<?php echo base_url() ?>/assets/photo/planete.jpg" width="400" height="300" alt="logo background">
        </div>
      </div>
    </div>
  </div>

  <!-- contact start -->
  <div class="templatemo_contactwrapper" id="templatemo_contact_page">
    <div class="container">
      <div class="row" style="background-color:coral">
        <h1>Contact</h1>
      </div>
    </div>

    <div class="container templatemo_contactmargin">
      <div class="row">
      <div class="col-md-3">

        </div>
        <div class="col-md-5 offset-1">
          <div class="templatemo_address_title">Mailing Address:</div>
          No 123, Duis in enim road, Sed sit amet arcu ut quam porttitor.
          <div class="clear"></div>
          <div class="templatemo_address_left">Call us:</div>
          <div class="templatemo_address_right">+001 333 000 1010<br>
            +002 666 000 2020</div>
          <div class="clear"></div>
          <div class="templatemo_address_left">Hot line:</div>
          <div class="templatemo_address_right">+009 000 999 0000</div>
          <div class="clear"></div>
          <div class="templatemo_address_left">Email us:</div>
          <div class="templatemo_address_right">admin@company.com<br>
            info@company.com</div>
        </div>
      </div>
    </div>
  </div>

  <!-- contact end -->
  <!-- footer start -->
  <div class="templatemo_footerwrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-12">Copyright &copy; 2084 <a href="#">Company Name</a>
          <!-- | Design: <a href="http://www.templatemo.com">templatemo</a> -->
        </div>
      </div>
    </div>
  </div>
  <!-- footer end -->
  <script>
    <!-- scroll to specific id when click on menu 
    -->
    //
    Cache
    selectors
    var
    lastId,
    topMenu
    =
    $("#top-menu"),
    topMenuHeight
    =
    topMenu.outerHeight()
    +
    15,
    //
    All
    list
    items
    menuItems
    =
    topMenu.find("a"),
    //
    Anchors
    corresponding
    to
    menu
    items
    scrollItems
    =
    menuItems.map(function()
    {
    var
    item
    =
    $($(this).attr("href"));
    if
    (item.length)
    {
    return
    item;
    }
    });
    //
    Bind
    click
    handler
    to
    menu
    items
    //
    so
    we
    can
    get
    a
    fancy
    scroll
    animation
    menuItems.click(function(e)
    {
    var
    href
    =
    $(this).attr("href"),
    offsetTop
    =
    href
    ===
    "#"
    ?
    0
    :
    $(href).offset().top
    -
    topMenuHeight
    +
    1;
    $('html,
    body
    ').stop().animate({
    scrollTop:
    offsetTop
    },
    300);
    e.preventDefault();
    });
    //
    Bind
    to
    scroll
    $(window).scroll(function()
    {
    //
    Get
    container
    scroll
    position
    var
    fromTop
    =
    $(this).scrollTop()
    +
    topMenuHeight;
    //
    Get
    id
    of
    current
    scroll
    item
    var
    cur
    =
    scrollItems.map(function()
    {
    if
    ($(this).offset().top
  < fromTop) return this; }); // Get the id of the current element cur=cur[cur.length - 1]; var id=cur && cur.length ? cur[0].id : "" ; if (lastId !==id) { lastId=id; // Set/remove active class menuItems .parent().removeClass("active") .end().filter("[href=#" + id + "]" ).parent().addClass("active"); } }); </script>
</body>

</html>