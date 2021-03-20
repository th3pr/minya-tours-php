<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">

	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<meta name="format-detection" content="telephone=no" />

	<link rel="shortcut icon" href="favicon.ico" />
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/jquery-ui.structure.min.css" rel="stylesheet" type="text/css" />
	<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css" />
	<link href="css/DateTimePicker.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link href="css/style.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/popup.css">

	<title>Minya Tours</title>
</head>

<body data-color="mainColor">



	<!-- Start The Scroll To Top -->
	<div id="scroll-top">
		<i class="fa fa-chevron-up fa-2x"></i>
	</div>

	<!-- End The Scroll To Top -->


	<div class="loading">
		<div class="loading-center">
			<div class="loading-center-absolute">
				<div class="object object_four"></div>
				<div class="object object_three"></div>
				<div class="object object_two"></div>
				<div class="object object_one"></div>
			</div>
		</div>
	</div>




	<header class="menu-3 type-5 bgtransparent">
		<div class="top-header-bar">
			<div class="container">
				<div class="left-col">
					<a href="#"><i class="fa fa-phone"></i>01065165640</a>
					<a href="#"><i class="fa  fa-map-marker"></i>Minya</a>
					
				</div>
				<div class="right-col">
					<div class="folow">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
					</div>
					<form action="?" class="serach-item">
						<button type="submit" class="fa fa-search"></button>
						<input type="text" placeholder="Search...">
					</form>

				</div>
			</div>
		</div>

		<div class="nav">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<a href="index.html" class="logo">
							<img src="img/minyalogo1.png" alt="lets travel">
						</a>
						<div class="nav-menu-icon">
							<a href="#"><i></i></a>
						</div>
						<nav class="menu">
							<ul>
								<li class="type-1">
									<a href="index.html">home<span class="fa fa-angle-down"></span></a>
								</li>
								<li class="type-1 "><a href="hotels.html">Hotels<span
											class="fa fa-angle-down"></span></a>

								</li>
								<li class="type-1 active"><a href="cars.html">Cars<span
											class="fa fa-angle-down"></span></a>

								</li>
								<li class="type-1"><a href="tours.html">Tours<span class="fa fa-angle-down"></span></a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-------popup start-->
	<div class="modal">
		<img src="img/imges/Car-Travel-Logo.jpg" width="114" height="70" />
		<span class="title">OTA Cars
			Welcomes you
		</span>

		<div class="button">OK</div>
	</div>
	<script>
		let modal = document.querySelector(".modal");
		let button = document.querySelector(".button");
		button.addEventListener("click", () => modal.classList.add("toggle"));
	</script>
	<!--------------popup end------------------------------------------------------------------------>

	<div class="inner-banner">
		<img class="center-image" src="img/slider-1.jpg" alt="">
		<div class="vertical-align">
			<div class="container">

				<h2 class="color-white">all Cars for you</h2>

			</div>
		</div>
	</div>





	<div class="main-wraper">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="second-title">
						<h2>Types Of Cars</h2>
						<p class="color-grey">Car</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="top-baner arrows">
					<div class="swiper-container offers-slider" data-autoplay="5000" data-loop="1" data-speed="500"
						data-slides-per-view="responsive" data-mob-slides="1" data-xs-slides="2" data-sm-slides="2"
						data-md-slides="3" data-lg-slides="3" data-add-slides="3">
						<div class="swiper-wrapper">
							<div class="swiper-slide" data-val="0">
								<div class="offers-block radius-mask">
									<div class="clip">
										<div class="bg bg-bg-chrome act" style="background-image:url(img/slider-1.jpg)">
										</div>
									</div>
									<div class="tour-layer delay-1"></div>
									<div class="vertical-top">
										<div class="rate">
											<span class="fa fa-star color-yellow"></span>
											<span class="fa fa-star color-yellow"></span>
											<span class="fa fa-star color-yellow"></span>
											<span class="fa fa-star color-yellow"></span>
											<span class="fa fa-star color-yellow"></span>
										</div>
										<h3>Nissan</h3>
									</div>
									<div class="vertical-bottom">
										<ul class="offers-info">
											<li><b>35</b>tours</li>
											<li><b>24</b>cities</li>
											<li><b>90</b>hotels</li>
										</ul>
										<p>Rose Al-Youssef Gate</p>
										<a href="car_detail.html" class="c-button bg-aqua hv-aqua-o b-40"><span>Book
												Now</span></a>
									</div>
								</div>
							</div>
							<div class="swiper-slide" data-val="1">
								<div class="offers-block radius-mask">
									<div class="clip">
										<div class="bg bg-bg-chrome act"
											style="background-image:url(img/slider_1_4.jpg)">
										</div>
									</div>
									<div class="tour-layer delay-1"></div>
									<div class="vertical-top">
										<div class="rate">
											<span class="fa fa-star color-yellow"></span>
											<span class="fa fa-star color-yellow"></span>
											<span class="fa fa-star color-yellow"></span>
											<span class="fa fa-star color-yellow"></span>
											<span class="fa fa-star color-yellow"></span>
										</div>
										<h3>Jeep</h3>
									</div>
									<div class="vertical-bottom">
										<ul class="offers-info">
											<li><b>58</b>tours</li>
											<li><b>49</b>cities</li>
											<li><b>70</b>hotels</li>
										</ul>
										<p>Tona Elgabl</p>
										<a href="car_detail.html" class="c-button bg-aqua hv-aqua-o b-40"><span>Book
												Now</span></a>
									</div>
								</div>
							</div>
							<div class="swiper-slide" data-val="2">
								<div class="offers-block radius-mask">
									<div class="clip">
										<div class="bg bg-bg-chrome act" style="background-image:url(img/slider-1.jpg)">
										</div>
									</div>
									<div class="tour-layer delay-1"></div>
									<div class="vertical-top">
										<div class="rate">
											<span class="fa fa-star color-yellow"></span>
											<span class="fa fa-star color-yellow"></span>
											<span class="fa fa-star color-yellow"></span>
											<span class="fa fa-star color-yellow"></span>
											<span class="fa fa-star color-yellow"></span>
										</div>
										<h3>HYUNDAI</h3>
									</div>
									<div class="vertical-bottom">
										<ul class="offers-info">
											<li><b>88</b>tours</li>
											<li><b>10</b>cities</li>
											<li><b>193</b>hotels</li>
										</ul>
										<p>Rose Al-Youssef Gate</p>
										<a href="car_detail.html" class="c-button bg-aqua hv-aqua-o b-40"><span>Book
												Now</span></a>
									</div>
								</div>
							</div>
							<div class="swiper-slide" data-val="3">
								<div class="offers-block radius-mask">
									<div class="clip">
										<div class="bg bg-bg-chrome act"
											style="background-image:url(img/slider_1_4.jpg)">
										</div>
									</div>
									<div class="tour-layer delay-1"></div>
									<div class="vertical-top">
										<div class="rate">
											<span class="fa fa-star color-yellow"></span>
											<span class="fa fa-star color-yellow"></span>
											<span class="fa fa-star color-yellow"></span>
											<span class="fa fa-star color-yellow"></span>
											<span class="fa fa-star color-yellow"></span>
										</div>
										<h3>TOTOTA</h3>
									</div>
									<div class="vertical-bottom">
										<ul class="offers-info">
											<li><b>88</b>tours</li>
											<li><b>10</b>cities</li>
											<li><b>193</b>hotels</li>
										</ul>
										<p>Tona Elgabl</p>
										<a href="car_detail.html" class="c-button bg-aqua hv-aqua-o b-40"><span>Book
												Now</span></a>
									</div>
								</div>
							</div>
						</div>
						<div class="pagination  poin-style-1 pagination-hidden"></div>
					</div>
					<div class="swiper-arrow-left offers-arrow"><span class="fa fa-angle-left"></span></div>
					<div class="swiper-arrow-right offers-arrow"><span class="fa fa-angle-right"></span></div>
				</div>
			</div>
		</div>
	</div>

	<div class="main-wraper padd-90">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="second-title">
						<h2>The Best Car</h2>
						<p class="color-grey">Curabitur nunc erat, consequat in erat ut, congue bibendum nulla.
							Suspendisse id tor.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
					<div class="radius-mask tour-block hover-aqua">
						<div class="clip">
							<div class="bg bg-bg-chrome act" style="background-image:url(img/71BekpCdZvL._UY560_.jpg)">
							</div>
						</div>
						<div class="tour-layer delay-1"></div>
						<div class="tour-caption">
							<div class="vertical-align">
								<h3 class="hover-it">HYUNDAI</h3>
								<div class="rate">
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star color-yellow"></span>
								</div>
								<h4>from <b>EG 860</b></h4>
							</div>
							<div class="vertical-bottom">
								<div class="fl">
									<div class="tour-info">
										<img src="img/people_icon.png" alt="">
										<span class="font-style-2 color-grey-4"><strong class="color-white">2</strong>
											adults, <strong class="color-white">1</strong> kids</span>
									</div>
									<div class="tour-info">
										<img src="img/calendar_icon.png" alt="">
										<span class="font-style-2 color-grey-4">July<strong class="color-white">
												19th</strong> to July<strong class="color-white"> 26th</strong></span>
									</div>
								</div>
								<a href="car_detail.html" class="c-button b-50 bg-aqua hv-transparent fr"><img
										src="img/flag_icon.png" alt=""><span>view more</span></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
					<div class="radius-mask tour-block">
						<div class="clip">
							<div class="bg bg-bg-chrome act" style="background-image:url(img/slider_1_4.jpg)">
							</div>
						</div>
						<div class="tour-layer delay-1"></div>
						<div class="tour-caption">
							<div class="vertical-align">
								<h3 class="hover-it">Marsidec</h3>
								<div class="rate">
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star color-yellow"></span>
								</div>
								<h4>from <b>EG 750</b></h4>
							</div>
							<div class="vertical-bottom">
								<div class="fl">
									<div class="tour-info">
										<img src="img/people_icon.png" alt="">
										<span class="font-style-2 color-grey-4"><strong class="color-white">2</strong>
											adults, <strong class="color-white">1</strong> kids</span>
									</div>
									<div class="tour-info">
										<img src="img/calendar_icon.png" alt="">
										<span class="font-style-2 color-grey-4">July<strong class="color-white">
												19th</strong> to July<strong class="color-white"> 26th</strong></span>
									</div>
								</div>
								<a href="car_detail.html" class="c-button bg-aqua hv-transparent b-50 fr"><img
										src="img/flag_icon.png" alt=""><span>view more</span></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
					<div class="radius-mask tour-block">
						<div class="clip">
							<div class="bg bg-bg-chrome act"
								style="background-image:url(img/cars/61wYYYRKLDL._UY560_.jpg)">
							</div>
						</div>
						<div class="tour-layer delay-1"></div>
						<div class="tour-caption">
							<div class="vertical-align">
								<h3 class="hover-it">Nissan</h3>
								<div class="rate">
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star"></span>
								</div>
								<h4>from <b>EG 900</b></h4>
							</div>
							<div class="vertical-bottom">
								<div class="fl">
									<div class="tour-info">
										<img src="img/people_icon.png" alt="">
										<span class="font-style-2 color-grey-4"><strong class="color-white">2</strong>
											adults, <strong class="color-white">1</strong> kids</span>
									</div>
									<div class="tour-info">
										<img src="img/calendar_icon.png" alt="">
										<span class="font-style-2 color-grey-4">July<strong class="color-white">
												19th</strong> to July<strong class="color-white"> 26th</strong></span>
									</div>
								</div>
								<a href="car_detail.html" class="c-button bg-aqua hv-transparent b-50 fr"><img
										src="img/flag_icon.png" alt=""><span>view more</span></a>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>


	<!-- TOP PREVIEW-->
	<div class="top-preview row no-margin">
		<div class="col-mob-12 col-xs-6 col-sm-6 col-md-3 no-padding">
			<div class="tp_entry style-2">
				<div class="tp_image">
					<img class="center-image" src="img/2014_Nissan_Versa_01.jpg" alt="">
				</div>
				<div class="tp_content">
					<div class="rate-wrap clearfix">
						<div class="rate">
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
						</div>
						<i>485 rewies</i>
						<div class="tp_price">EG 950</div>
					</div>
					<h4><b><a href="car_detail.html">car In Minia</a></b></h4>
					<div class="tour-info-line clearfix">
						<div class="tour-info fl">
							<img src="img/calendar_icon_grey.png" alt="">
							<span class="font-style-2 color-grey-3">July <strong>19th 2021</strong></span>
						</div>
						<div class="tour-info fl">
							<img src="img/loc_icon_small_grey.png" alt="">
							<span class="font-style-2 color-grey-3">Adnan</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-mob-12 col-xs-6 col-sm-6 col-md-3 no-padding">
			<div class="tp_entry style-2">
				<div class="tp_image">
					<img class="center-image" src="img/banner-slider-2.jpg" alt="">
				</div>
				<div class="tp_content">
					<div class="rate-wrap clearfix">
						<div class="rate">
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
						</div>
						<i>485 rewies</i>
						<div class="tp_price">EG 273</div>
					</div>
					<h4><b><a href="car_detail.html">Car In Bani Mazar</a></b></h4>
					<div class="tour-info-line clearfix">
						<div class="tour-info fl">
							<img src="img/calendar_icon_grey.png" alt="">
							<span class="font-style-2 color-grey-3">July <strong>19th 2021</strong></span>
						</div>
						<div class="tour-info fl">
							<img src="img/loc_icon_small_grey.png" alt="">
							<span class="font-style-2 color-grey-3">Bani Mazar</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-mob-12 col-xs-6 col-sm-6 col-md-3 no-padding">
			<div class="tp_entry style-2">
				<div class="tp_image">
					<img class="center-image" src="img/unnamed.png" alt="">
				</div>
				<div class="tp_content">
					<div class="rate-wrap clearfix">
						<div class="rate">
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
						</div>
						<i>485 rewies</i>
						<div class="tp_price">EG 273</div>
					</div>
					<h4><b><a href="car_detail.html">car In Malawy</a></b></h4>
					<div class="tour-info-line clearfix">
						<div class="tour-info fl">
							<img src="img/calendar_icon_grey.png" alt="">
							<span class="font-style-2 color-grey-3">July <strong>19th 2021</strong></span>
						</div>
						<div class="tour-info fl">
							<img src="img/loc_icon_small_grey.png" alt="">
							<span class="font-style-2 color-grey-3">Malawy</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-mob-12 col-xs-6 col-sm-6 col-md-3 no-padding">
			<div class="tp_entry style-2">
				<div class="tp_image">
					<img class="center-image" src="img/51rkn5UDQhL._UY462_.jpg" alt="">
				</div>
				<div class="tp_content">
					<div class="rate-wrap clearfix">
						<div class="rate">
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
						</div>
						<i>485 rewies</i>
						<div class="tp_price">EG 573</div>
					</div>
					<h4><b><a href="car_detail.html">Car In Mati</a></b></h4>
					<div class="tour-info-line clearfix">
						<div class="tour-info fl">
							<img src="img/calendar_icon_grey.png" alt="">
							<span class="font-style-2 color-grey-3">July <strong>19th 2021</strong></span>
						</div>
						<div class="tour-info fl">
							<img src="img/loc_icon_small_grey.png" alt="">
							<span class="font-style-2 color-grey-3">Mati Elbald</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-mob-12 col-xs-6 col-sm-6 col-md-3 no-padding">
			<div class="tp_entry style-2">
				<div class="tp_image">
					<img class="center-image" src="img/download.jfif" alt="">
				</div>
				<div class="tp_content">
					<div class="rate-wrap clearfix">
						<div class="rate">
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
						</div>
						<i>485 rewies</i>
						<div class="tp_price">EG 273</div>
					</div>
					<h4><b><a href="car_detail.html">car in samalout</a></b></h4>
					<div class="tour-info-line clearfix">
						<div class="tour-info fl">
							<img src="img/calendar_icon_grey.png" alt="">
							<span class="font-style-2 color-grey-3">July <strong>19th 2021</strong></span>
						</div>
						<div class="tour-info fl">
							<img src="img/loc_icon_small_grey.png" alt="">
							<span class="font-style-2 color-grey-3">samalout</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-mob-12 col-xs-6 col-sm-6 col-md-3 no-padding">
			<div class="tp_entry style-2">
				<div class="tp_image">
					<img class="center-image" src="img/71BekpCdZvL._UY560_.jpg" alt="">
				</div>
				<div class="tp_content">
					<div class="rate-wrap clearfix">
						<div class="rate">
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
						</div>
						<i>485 rewies</i>
						<div class="tp_price">EG 288</div>
					</div>
					<h4><b><a href="car_detail.html">car In Aboqorqas</a></b></h4>
					<div class="tour-info-line clearfix">
						<div class="tour-info fl">
							<img src="img/calendar_icon_grey.png" alt="">
							<span class="font-style-2 color-grey-3">July <strong>19th 2021</strong></span>
						</div>
						<div class="tour-info fl">
							<img src="img/loc_icon_small_grey.png" alt="">
							<span class="font-style-2 color-grey-3">Aboqorqas</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-mob-12 col-xs-6 col-sm-6 col-md-3 no-padding">
			<div class="tp_entry style-2">
				<div class="tp_image">
					<img class="center-image" src="img/cars/redcar.jfif" alt="">
				</div>
				<div class="tp_content">
					<div class="rate-wrap clearfix">
						<div class="rate">
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
						</div>
						<i>485 rewies</i>
						<div class="tp_price">EG 973</div>
					</div>
					<h4><b><a href="car_detail.html">CAR IN Dermawas</a></b></h4>
					<div class="tour-info-line clearfix">
						<div class="tour-info fl">
							<img src="img/calendar_icon_grey.png" alt="">
							<span class="font-style-2 color-grey-3">July <strong>19th 2021</strong></span>
						</div>
						<div class="tour-info fl">
							<img src="img/loc_icon_small_grey.png" alt="">
							<span class="font-style-2 color-grey-3">Dermawas</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-mob-12 col-xs-6 col-sm-6 col-md-3 no-padding">
			<div class="tp_entry style-2">
				<div class="tp_image">
					<img class="center-image" src="img/cars/61wYYYRKLDL._UY560_.jpg" alt="">
				</div>
				<div class="tp_content">
					<div class="rate-wrap clearfix">
						<div class="rate">
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
							<span class="fa fa-star color-yellow"></span>
						</div>
						<i>485 rewies</i>
						<div class="tp_price">EG 993</div>
					</div>
					<h4><b><a href="car_detail.html">Car In Damaris</a></b></h4>
					<div class="tour-info-line clearfix">
						<div class="tour-info fl">
							<img src="img/calendar_icon_grey.png" alt="">
							<span class="font-style-2 color-grey-3">July <strong>19th 2021</strong></span>
						</div>
						<div class="tour-info fl">
							<img src="img/loc_icon_small_grey.png" alt="">
							<span class="font-style-2 color-grey-3">Damaris</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div class="list-wrapper bg-grey-2">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-4 col-md-3">
					<div class="sidebar bg-white clearfix">
						<div class="sidebar-block">
							<h4 class="sidebar-title color-dark-2">search</h4>
							<div class="search-inputs">
								<div class="form-block clearfix">
									<div class="input-style-1 b-50 color-3">
										<img src="img/loc_icon_small_grey.png" alt="">
										<input type="text" placeholder="Where do you want to go?">
									</div>
								</div>
								<div class="form-block clearfix">
									<div class="input-style-1 b-50 color-3">
										<img src="img/calendar_icon_grey.png" alt="">
										<input type="text" placeholder="Check In" class="datepicker">
									</div>
								</div>
								<div class="form-block clearfix">
									<div class="input-style-1 b-50 color-3">
										<img src="img/calendar_icon_grey.png" alt="">
										<input type="text" placeholder="Check Out" class="datepicker">
									</div>
								</div>
							</div>
							<input type="submit" class="c-button b-40 bg-blue-2 hv-blue-2-o" value="search">
						</div>

						<div class="sidebar-block">
							<h4 class="sidebar-title color-dark-2">price range</h4>
							<div class="slider-range color-1 clearfix" data-counter="$" data-position="start"
								data-from="0" data-to="1500" data-min="0" data-max="2000">
								<div class="range"></div>
								<input type="text" class="amount-start" readonly value="$0">
								<input type="text" class="amount-end" readonly value="$1500">
							</div>
							<input type="submit" class="c-button b-40 bg-blue-2 hv-blue-2-o" value="search">
						</div>
						<div class="sidebar-block">
							<h4 class="sidebar-title color-dark-2">Car length</h4>
							<div class="slider-range color-3 clearfix" data-counter=" NIGNT" data-position="end"
								data-from="0" data-to="7" data-min="0" data-max="9">
								<div class="range"></div>
								<input type="text" class="amount-start" readonly value="0 NIGNT">
								<input type="text" class="amount-end" readonly value="7 NIGNT">
							</div>
							<input type="submit" class="c-button b-40 bg-dr-blue-2 hv-dr-blue-2-o" value="search">
						</div>
						<div class="sidebar-block">
							<h4 class="sidebar-title color-dark-2">star rating</h4>
							<div class="sidebar-rating">
								<div class="input-entry color-1">
									<input class="checkbox-form" id="star-5" type="checkbox" name="checkbox"
										value="climat control">
									<label class="clearfix" for="star-5">
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="rate">
											<span class="fa fa-star color-yellow"></span>
											<span class="fa fa-star color-yellow"></span>
											<span class="fa fa-star color-yellow"></span>
											<span class="fa fa-star color-yellow"></span>
											<span class="fa fa-star color-yellow"></span>
										</span>
									</label>
								</div>
								<div class="input-entry color-1">
									<input class="checkbox-form" id="star-4" type="checkbox" name="checkbox"
										value="climat control">
									<label class="clearfix" for="star-4">
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="rate">
											<span class="fa fa-star color-yellow"></span>
											<span class="fa fa-star color-yellow"></span>
											<span class="fa fa-star color-yellow"></span>
											<span class="fa fa-star color-yellow"></span>
										</span>
									</label>
								</div>
								<div class="input-entry color-1">
									<input class="checkbox-form" id="star-3" type="checkbox" name="checkbox"
										value="climat control">
									<label class="clearfix" for="star-3">
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="rate">
											<span class="fa fa-star color-yellow"></span>
											<span class="fa fa-star color-yellow"></span>
											<span class="fa fa-star color-yellow"></span>
										</span>
									</label>
								</div>
								<div class="input-entry color-1">
									<input class="checkbox-form" id="star-2" type="checkbox" name="checkbox"
										value="climat control">
									<label class="clearfix" for="star-2">
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="rate">
											<span class="fa fa-star color-yellow"></span>
											<span class="fa fa-star color-yellow"></span>
										</span>
									</label>
								</div>
								<div class="input-entry color-1">
									<input class="checkbox-form" id="star-1" type="checkbox" name="checkbox"
										value="climat control">
									<label class="clearfix" for="star-1">
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="rate">
											<span class="fa fa-star color-yellow"></span>
										</span>
									</label>
								</div>
							</div>
						</div>


					</div>
				</div>
				<div class="col-xs-12 col-sm-8 col-md-9">
					<div class="list-header clearfix">
						<div class="drop-wrap drop-wrap-s-4 color-4 list-sort">
							<div class="drop">
								<b>Sort by price</b>
								<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
								<span>
									<a href="#">ASC</a>
									<a href="#">DESC</a>
								</span>
							</div>
						</div>
						<div class="drop-wrap drop-wrap-s-4 color-4 list-sort">
							<div class="drop">
								<b>Sort by ranking</b>
								<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
								<span>
									<a href="#">ASC</a>
									<a href="#">DESC</a>
								</span>
							</div>
						</div>
						<div class="list-view-change">
							<div class="change-grid color-1 fr"><i class="fa fa-th"></i></div>
							<div class="change-list color-1 fr active"><i class="fa fa-bars"></i></div>
							<div class="change-to-label fr color-grey-8">View:</div>
						</div>
					</div>
					<div class="list-content clearfix">
						<div class="list-item-entry">
							<div class="hotel-item style-3 bg-white">
								<div class="table-view">
									<div class="radius-top cell-view">
										<img src="img/cars/PORSCHECAYENNE.jpg" alt="">
									</div>
									<div class="title hotel-middle clearfix cell-view">
										<div class="date list-hidden">July <strong>19th</strong> to July
											<strong>26th</strong>
										</div>
										<div class="date grid-hidden"><strong>19.07 - 26.07 / 7</strong> night</div>
										<h4><b>Marcides</b></h4>
										<div class="rate-wrap">
											<div class="rate">
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
											</div>
											<i>485 rewies</i>
										</div>
										<p class="f-14 grid-hidden">Nunc cursus libero purus ac congue arcu cur sus ut
											sed vitae pulvinar. Nunc cursus libero purus ac congue arcu.</p>
									</div>
									<div class="title hotel-right clearfix cell-view">
										<div class="hotel-person color-dark-2">from <span class="color-blue">EG
												653</span> person</div>
										<a class="c-button b-40 bg-blue hv-blue-o grid-hidden"
											href="car_detail.html">Book Now</a>
									</div>
								</div>
							</div>
						</div>
						<div class="list-item-entry">
							<div class="hotel-item style-3 bg-white">
								<div class="table-view">
									<div class="radius-top cell-view">
										<img src="img/cars/71BekpCdZvL._UY560_.jpg" alt="">
									</div>
									<div class="title hotel-middle clearfix cell-view">
										<div class="date list-hidden">July <strong>19th</strong> to July
											<strong>26th</strong>
										</div>
										<div class="date grid-hidden"><strong>19.07 - 26.07 / 7</strong> night</div>
										<h4><b>BMW</b></h4>
										<div class="rate-wrap">
											<div class="rate">
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
											</div>
											<i>485 rewies</i>
										</div>
										<p class="f-14 grid-hidden">Nunc cursus libero purus ac congue arcu cur sus ut
											sed vitae pulvinar. Nunc cursus libero purus ac congue arcu.</p>
									</div>
									<div class="title hotel-right clearfix cell-view">
										<div class="hotel-person color-dark-2">from <span class="color-blue">EG
												703</span> person</div>
										<a class="c-button b-40 bg-blue hv-blue-o grid-hidden"
											href="car_detail.html">Book Now</a>
									</div>
								</div>
							</div>
						</div>

						<div class="list-item-entry">
							<div class="hotel-item style-3 bg-white">
								<div class="table-view">
									<div class="radius-top cell-view">
										<img src="img/2014_Nissan_Versa_01.jpg" alt="">
									</div>
									<div class="title hotel-middle clearfix cell-view">
										<div class="date list-hidden">July <strong>19th</strong> to July
											<strong>26th</strong>
										</div>
										<div class="date grid-hidden"><strong>19.07 - 26.07 / 7</strong> night</div>
										<h4><b>Jeep</b></h4>
										<div class="rate-wrap">
											<div class="rate">
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
											</div>
											<i>485 rewies</i>
										</div>
										<p class="f-14 grid-hidden">Nunc cursus libero purus ac congue arcu cur sus ut
											sed vitae pulvinar. Nunc cursus libero purus ac congue arcu.</p>
									</div>
									<div class="title hotel-right clearfix cell-view">
										<div class="hotel-person color-dark-2">from <span class="color-blue">EG
												300</span> person</div>
										<a class="c-button b-40 bg-blue hv-blue-o grid-hidden"
											href="car_detail.html">Book Now</a>
									</div>
								</div>
							</div>
						</div>
						<div class="list-item-entry">
							<div class="hotel-item style-3 bg-white">
								<div class="table-view">
									<div class="radius-top cell-view">
										<img src="img/61q033vciXL._UY560_.jpg" alt="">
									</div>
									<div class="title hotel-middle clearfix cell-view">
										<div class="date list-hidden">July <strong>19th</strong> to July
											<strong>26th</strong>
										</div>
										<div class="date grid-hidden"><strong>19.07 - 26.07 / 7</strong> night</div>
										<h4><b>HYUNDAI</b></h4>
										<div class="rate-wrap">
											<div class="rate">
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
											</div>
											<i>485 rewies</i>
										</div>
										<p class="f-14 grid-hidden">Nunc cursus libero purus ac congue arcu cur sus ut
											sed vitae pulvinar. Nunc cursus libero purus ac congue arcu.</p>
									</div>
									<div class="title hotel-right clearfix cell-view">
										<div class="hotel-person color-dark-2">from <span class="color-blue">EG
												400</span> person</div>
										<a class="c-button b-40 bg-blue hv-blue-o grid-hidden"
											href="car_detail.html">Book Now</a>
									</div>
								</div>
							</div>
						</div>
						<div class="list-item-entry">
							<div class="hotel-item style-3 bg-white">
								<div class="table-view">
									<div class="radius-top cell-view">
										<img src="img/2014_Nissan_Versa_01.jpg" alt="">
									</div>
									<div class="title hotel-middle clearfix cell-view">
										<div class="date list-hidden">July <strong>19th</strong> to July
											<strong>26th</strong>
										</div>
										<div class="date grid-hidden"><strong>19.07 - 26.07 / 7</strong> night</div>
										<h4><b>Marsidec</b></h4>
										<div class="rate-wrap">
											<div class="rate">
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
											</div>
											<i>485 rewies</i>
										</div>
										<p class="f-14 grid-hidden">Nunc cursus libero purus ac congue arcu cur sus ut
											sed vitae pulvinar. Nunc cursus libero purus ac congue arcu.</p>
									</div>
									<div class="title hotel-right clearfix cell-view">
										<div class="hotel-person color-dark-2">from <span class="color-blue">EG
												273</span> person</div>
										<a class="c-button b-40 bg-blue hv-blue-o grid-hidden"
											href="car_detail.html">Book Now</a>
									</div>
								</div>
							</div>
						</div>
						<div class="list-item-entry">
							<div class="hotel-item style-3 bg-white">
								<div class="table-view">
									<div class="radius-top cell-view">
										<img src="img/cars/PORSCHECAYENNE.jpg" alt="">
									</div>
									<div class="title hotel-middle clearfix cell-view">
										<div class="date list-hidden">July <strong>19th</strong> to July
											<strong>26th</strong>
										</div>
										<div class="date grid-hidden"><strong>19.07 - 26.07 / 7</strong> night</div>
										<h4><b>HYUNDAI</b></h4>
										<div class="rate-wrap">
											<div class="rate">
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
											</div>
											<i>485 rewies</i>
										</div>
										<p class="f-14 grid-hidden">Nunc cursus libero purus ac congue arcu cur sus ut
											sed vitae pulvinar. Nunc cursus libero purus ac congue arcu.</p>
									</div>
									<div class="title hotel-right clearfix cell-view">
										<div class="hotel-person color-dark-2">from <span class="color-blue">EG
												273</span> person</div>
										<a class="c-button b-40 bg-blue hv-blue-o grid-hidden"
											href="car_detail.html">Book Now</a>
									</div>
								</div>
							</div>
						</div>

					</div>
					<div class="c_pagination clearfix padd-120">
						<a href="#" class="c-button b-40 bg-dr-blue-2 hv-dr-blue-2-o fl">prev page</a>
						<a href="#" class="c-button b-40 bg-dr-blue-2 hv-dr-blue-2-o fr">next page</a>
						<ul class="cp_content color-3">
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">...</a></li>
							<li><a href="#">10</a></li>
						</ul>
					</div>

				</div>
			</div>
		</div>
	</div>



	<footer class="bg-dark type-2">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="footer-block">
						<img src="img/minyalogo1.png" alt="" class="logo-footer">
						<div class="f_text color-grey-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
							eiusmod tempor incididunt ut labore magna aliqua. Ut aliquip ex ea commodo consequat.</div>
						<div class="footer-share">
							<a href="#"><span class="fa fa-facebook"></span></a>
							<a href="#"><span class="fa fa-twitter"></span></a>
							<a href="#"><span class="fa fa-google-plus"></span></a>
							<a href="#"><span class="fa fa-pinterest"></span></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-sm-6 no-padding">
					<div class="footer-block">
						<h6>Travel News</h6>
						<div class="f_news clearfix">
							<a class="f_news-img black-hover" href="#">
								<img class="img-responsive" src="img/5.jpg" alt="">
								<div class="tour-layer delay-1"></div>
							</a>
							<div class="f_news-content">
								<a class="f_news-tilte color-white link-red" href="#">amazing place</a>
								<span class="date-f">Feb 18, 2021</span>
								<a href="#" class="r-more">read more</a>
							</div>
						</div>
						<div class="f_news clearfix">
							<a class="f_news-img black-hover" href="#">
								<img class="img-responsive" src="img/6.jpg" alt="">
								<div class="tour-layer delay-1"></div>
							</a>
							<div class="f_news-content">
								<a class="f_news-tilte color-white link-red" href="#">amazing place</a>
								<span class="date-f">Feb 18, 2021</span>
								<a href="#" class="r-more">read more</a>
							</div>
						</div>
						<div class="f_news clearfix">
							<a class="f_news-img black-hover" href="#">
								<img class="img-responsive" src="img/5.jpg" alt="">
								<div class="tour-layer delay-1"></div>
							</a>
							<div class="f_news-content">
								<a class="f_news-tilte color-white link-red" href="#">amazing place</a>
								<span class="date-f">Feb 18, 2021</span>
								<a href="#" class="r-more">read more</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="footer-block">
						<h6>Subscribe</h6>
						<form action="#" class="footer-form">
							<div class="form-input">
								<input type="email" placeholder="Enter your email" required>
								<span class="fa fa-envelope-o"></span>
							</div>
							<input type="submit" value="submit" class="bg-aqua">
						</form>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="footer-block">
						<h6>Contact Info</h6>
						<div class="contact-info">
							<div class="contact-line color-grey-3"><i class="fa fa-map-marker"></i><span>Minya</span>
							</div>
							<div class="contact-line color-grey-3"><i class="fa fa-phone"></i><a
									href="tel:201065165640">+01065165640</a></div>
							<div class="contact-line color-grey-3"><i class="fa fa-envelope-o"></i><a
									href="mailto:">ota@mail.com</a></div>
							<div class="contact-line color-grey-3"><i class="fa fa-globe"></i><a
									href="#">minya@ota.com</a></div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-link bg-black">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="copyright">
							<span>&copy; 2021 All rights reserved By ITI</span>
						</div>
						<ul>
							<li><a class="link-aqua" href="#">Privacy Policy </a></li>
							<li><a class="link-aqua" href="#">About Us</a></li>
							<li><a class="link-aqua" href="#">Support </a></li>
							<li><a class="link-aqua" href="#">FAQ</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/idangerous.swiper.min.js"></script>
	<script src="js/jquery.viewportchecker.min.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/DateTimePicker.min.js"></script>
	<script src="js/jquery.mousewheel.min.js"></script>
	<script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;language=en"></script>
	<script src="js/map.js"></script>
	<script src="js/all.js"></script>
</body>

</html>