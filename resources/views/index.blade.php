@extends('layouts.app')

@section('content')

<!-- trend -->
<div class="trend-w3layouts">
	<div class="container">
		<h2>遊戲畫面 Game screen</h2>
		<ul id="flexiselDemo1">			
				<li>
					<div class="trend-grid">
						<h4>大老二</h4>
						<img src="images/s1.jpg" alt="大老二" class="img-responsive" />
					</div>
				</li>
				<li>
					<div class="trend-grid">
						<h4>神手麻將</h4>
						<img src="images/s2.jpg" alt="神手麻將" class="img-responsive" />
					</div>
				</li>
				<li>
					<div class="trend-grid">
						<h4>樂贏麻將</h4>
						<img src="images/s3.jpg" alt="樂贏麻將" class="img-responsive" />
					</div>
				</li>
				<li>
					<div class="trend-grid">
						<h4>斗地主</h4>
						<img src="images/s4.jpg" alt="斗地主" class="img-responsive" />
					</div>
				</li>
                				<li>
					<div class="trend-grid">
						<h4>德州撲克</h4>
						<img src="images/s5.jpg" alt="德州撲克" class="img-responsive" />
					</div>
				</li>
                				<li>
					<div class="trend-grid">
						<h4>內蒙棋牌</h4>
						<img src="images/s8.jpg" alt=" " class="img-responsive" />
					</div>
				</li>
			</ul>
						<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 4,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 2000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 2
										}, 
										landscape: { 
											changePoint:640,
											visibleItems:3
										},
										tablet: { 
											changePoint:768,
											visibleItems: 4
										}
									}
								});
								
							});
					</script>
					<script type="text/javascript" src="/js/jquery.flexisel.js"></script>
	</div>
</div>
<!-- //trend -->


<!-- services-->
<div class="services-agileits-w3layouts">
	<div class="container">
		<h3>關於樂贏</h3>
		<div class="col-md-3 service-grid-agileits service-grid-agileits-top">
			<span class="glyphicon glyphicon-sort-by-attributes" aria-hidden="true"></span>
			<h4>ONLINE</h4>
			<p>多人在線遊玩 拒絕延遲!</p>
		</div>
		<div class="col-md-3 service-grid-agileits">
			<span class="glyphicon glyphicon-random" aria-hidden="true"></span>
			<h4>BETTER</h4>
			<p>精美UI設計 良好遊戲體驗</p>
		</div>
		<div class="col-md-3 service-grid-agileits service-grid-agileits-bottom">
			<span class="glyphicon glyphicon-yen" aria-hidden="true"></span>
			<h4>TECHNOLOGY</h4>
			<p>H5最新技術 支持各種裝置</p>
		</div>
		<div class="col-md-3 service-grid-agileits service-grid-agileits-bottom">
			<span class="glyphicon glyphicon-object-align-right" aria-hidden="true"></span>
			<h4>FASTER</h4>
			<p>低延遲快速遊玩 24H再線客服</p>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //services-->

<div class="services-bottom-w3-agileits">
  <div class="container">
    <div class="wthree_info">
      <section class="slider">
        <div class="flexslider">
          <ul class="slides">
            <li>
              <div class="wthree_info_grid">
                <h3>正宗台灣麻將遊戲</h3>
                <p>隨機配桌，降低夥牌代理風險。</p>
              </div>
            </li>
            <li>
              <div class="wthree_info_grid">
                <h3>正宗台灣麻將遊戲</h3>
                <p>隨機配桌，降低夥牌代理風險。</p>
              </div>
            </li>
            <li>
              <div class="wthree_info_grid">
                <h3>正宗台灣麻將遊戲</h3>
                <p>隨機配桌，降低夥牌代理風險。</p>
              </div>
            </li>
          </ul>
        </div>
      </section>
          <!-- flexSlider -->
            
            <script defer src="/js/jquery.flexslider.js"></script>
            <script type="text/javascript">
            $(window).load(function(){
              $('.flexslider').flexslider({
              animation: "slide",
              start: function(slider){
                $('body').removeClass('loading');
              }
              });
            });
            </script>
          <!-- //flexSlider -->
    </div>
  </div>
</div>
@endsection