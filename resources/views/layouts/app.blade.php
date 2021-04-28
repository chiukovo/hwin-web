<!DOCTYPE html>
<html>
<head>
<title>樂贏HW</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css -->
<link href="/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="/css/flexslider.css" type="text/css" media="screen" property="" />
<link href="/css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--// css -->
<!-- font -->
<link href='//fonts.googleapis.com/css?family=Josefin+Sans:400,100,100italic,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.js"></script>

</head>
<body> 
<!-- Header -->
<div class="header">
  <!-- Navbar -->
  <nav class="navbar navbar-default" style="background: #65656561;">
    <div class="container">

      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a  href="/"><h1>樂贏HW <img src="/images/c1.png" alt="樂贏HW" /></h1></a>
      </div>

      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="hover-effect"><a href="/">首頁</a></li>
          <li class="hover-effect"><a href="#">關於樂贏</a></li>
          <li class="hover-effect"><a href="#">申請代理</a></li>
          <li class="hover-effect"><a href="#">安佐下載</a></li>
          <li class="hover-effect"><a href="#">蘋果下載</a></li>
          <li class="hover-effect"><a href="#">開發合作</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- //Navbar -->

  <!-- Slider -->
  <div class="slider">
    <ul class="rslides" id="slider">
      <li>
        <img src="/images/banner2.jpg" alt="樂贏HW" />
      </li>
      <li>
        <img src="/images/banner1.jpg" alt="樂贏HW" />
      </li>
    </ul>
  </div>
  <!-- //Slider -->

</div>
<!-- Banner-Slider-JavaScript -->
<script src="/js/responsiveslides.min.js"></script>
<script>
  $(function () {
    $("#slider").responsiveSlides({
      auto: true,
      nav: true,
      speed: 800,
      namespace: "callbacks",
      pager: true,
    });
  });
</script>
<!-- //Banner-Slider-JavaScript -->
<!-- //Header -->
@yield('content')

<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="footer-right-w3">
			<h4>聯絡我們/合作提案</h4>
			<p>樂贏HW 合作提案說明，
如果你有好的方法，好的提案，好的市場，
歡迎系統遊戲合作開發，平台合作。</p>
		</div>
		<div class="clearfix"></div>
		<div class="copyright">
			<p>&copy; 2021 樂贏HW. All Rights Reserved </p>
		</div>
	</div>
</div>

<!-- //footer -->
</body>
</html>