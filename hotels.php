<?php
require_once("config.php");

$sql = "SELECT * FROM `hotels`";

$result = $conn->query($sql);

?>

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
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link href="css/style.min.css" rel="stylesheet" type="text/css" />
	<title>Minya Hotels</title>
	<link rel="stylesheet" href="css/popup.css">
</head>

<body data-color="mainColor">

	<!-- Start The Scroll To Top -->
	<div id="scroll-top">
		<i class="fa fa-chevron-up fa-2x"></i>
	</div>

	<div class="loading red">
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
							<img src="img/minyalogo1.png" alt="Minya Tours">
						</a>
						<div class="nav-menu-icon">
							<a href="#"><i></i></a>
						</div>
						<nav class="menu">
							<ul>
								<li class="type-1">
									<a href="index.html">home<span class="fa fa-angle-down"></span></a>
								</li>
								<li class="type-1 active"><a href="hotels.html">Hotels<span
											class="fa fa-angle-down"></span></a>

								</li>
								<li class="type-1"><a href="cars.html">Cars<span class="fa fa-angle-down"></span></a>

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
	<!------------------------------------------------------------------------------------->
	<div class="modal">
		<img src="img/imges/travelblog_drbbbl.png" width="204" height="100" />
		<span class="title">OTA Hotels
			Welcomes You.

		</span>

		<div class="button">OK</div>
	</div>
	<script>
		let modal = document.querySelector(".modal");
		let button = document.querySelector(".button");
		button.addEventListener("click", () => modal.classList.add("toggle"));
	</script>
	<div class="inner-banner style-2">
		<img class="center-image" src="img/imges/cover.jpg" alt="">
		<div class="vertical-align">
			<div class="container">
				<h2 class="color-white">see tours in Minya</h2>
			</div>
		</div>
	</div>
	<div style="margin-top: 10px;"></div>
	<!------------------------slider------------------------------------------------------------->
	<div class="main-wraper">
		<div class="tab-select">
			<div class="container">
				<div class="form-block clearfix">
					<div class="drop-wrap drop-wrap-s-3 color-3">
						<div class="drop">
							<b>01 adult</b>
							<a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
							<span>
								<a href="#"> PIONEER HOTEL</a>
								<a href="#">OMAR EL KHAYAM AL MINYA HOTEL</a>
								<a href="#"> HOLY FAMILY HOTEL</a>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="tab-tour-header row no-padd">
			<div class="tab-tour col-sm-4 col-xs-12">
				<div class="tour-block tour-block-s-3">
					<span class="border-line-top"></span>
					<span class="border-line-bottom"></span>
					<div class="tour-layer delay-1"></div>
					<img src="img/imges/1.jpg" class="res-img" alt="">
					<div class="tour-caption">
						<div class="vertical-align">
							<h3> PIONEER hotel</h3>
							<div class="rate">
								<span class="fa fa-star color-yellow"></span>
								<span class="fa fa-star color-yellow"></span>
								<span class="fa fa-star color-yellow"></span>
								<span class="fa fa-star color-yellow"></span>
								<span class="fa fa-star"></span>
							</div>
							<h4>From<b> $60</b></h4>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-tour col-sm-4 col-xs-12">
				<div class="tour-block tour-block-s-3">
					<span class="border-line-top"></span>
					<span class="border-line-bottom"></span>
					<div class="tour-layer delay-1"></div>
					<img src="img/imges/13.jpg" class="res-img" alt="">
					<div class="tour-caption">
						<div class="vertical-align">
							<h3> HOLY FAMILY hotel</h3>
							<div class="rate">
								<span class="fa fa-star color-yellow"></span>
								<span class="fa fa-star color-yellow"></span>
								<span class="fa fa-star color-yellow"></span>
								<span class="fa fa-star color-yellow"></span>
								<span class="fa fa-star color-yellow"></span>
							</div>
							<h4>From<b> $70</b></h4>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-tour col-sm-4 col-xs-12">
				<div class="tour-block tour-block-s-3">
					<span class="border-line-top"></span>
					<span class="border-line-bottom"></span>
					<div class="tour-layer delay-1"></div>
					<img src="img/imges/10.jpg" class="res-img" alt="">
					<div class="tour-caption">
						<div class="vertical-align">
							<h3>OMAR EL KHAYAM AL MINYA hotel</h3>
							<div class="rate">
								<span class="fa fa-star color-yellow"></span>
								<span class="fa fa-star color-yellow"></span>
								<span class="fa fa-star color-yellow"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<h4>From<b> $80</b></h4>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="tab-tour-content">
			<div class="hotel-wrpp active">
				<div class="clip">
					<div class="bg bg-bg-chrome act" style="background-image:url(img/imges/5.jpg)">
					</div>
				</div>
				<div class="container">
					<div class="row">

					<?php $row = $result->fetch_assoc()?>
						<div class="col-lg-6 col-lg-offset-6 col-md-6 col-md-offset-6">
							<div class="hotel-choose hotel-choose-1">
								<div class="fl w_100">
									<div class="title">
										<h4>From<b> $60</b></h4>
										<h3>PIONEER hotel</h3>
										<div class="rate-wrap">
											<div class="rate">
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
											</div>
											<i>48 rewies</i>
										</div>

										<p>Pioneer features a restaurant, outdoor swimming pool, a bar and shared lounge
											in Al Minya. Featuring family rooms, this property also provides guests with
											a terrace.</p>
										<a href="hotel_list.html" class="c-button bg-dr-blue hv-dr-blue-o b-40">book
											now</a>
									</div>
								</div>
								<div class="row-5 row">
									<div class="full-width arrows arrows-3">
										<div class="swiper-container" data-autoplay="5000" data-loop="1"
											data-speed="1000" data-center="0" data-slides-per-view="responsive"
											data-mob-slides="1" data-xs-slides="2" data-sm-slides="2" data-md-slides="3"
											data-lg-slides="3" data-add-slides="3">
											<div class="swiper-wrapper">
												<div class="swiper-slide hotel-sm-block">
													<div class="radius-mask tour-block">
														<div class="clip">
															<div class="bg bg-bg-chrome act"
																style="background-image:url(img/imges/1.jpg)">
															</div>
														</div>
													</div>
												</div>
												<div class="swiper-slide hotel-sm-block">
													<div class="radius-mask tour-block">
														<div class="clip">
															<div class="bg bg-bg-chrome act"
																style="background-image:url(img/imges/9.jpg)">
															</div>
														</div>
													</div>
												</div>
												<div class="swiper-slide hotel-sm-block">
													<div class="radius-mask tour-block">
														<div class="clip">
															<div class="bg bg-bg-chrome act"
																style="background-image:url(img/imges/3.jpg)">
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="pagination"></div>
										</div>
										<div class="swiper-arrow-left offers-arrow"><span
												class="fa fa-angle-left"></span></div>
										<div class="swiper-arrow-right offers-arrow"><span
												class="fa fa-angle-right"></span></div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- <div class="hotel-wrpp">
				<div class="clip">
					<div class="bg bg-bg-chrome act" style="background-image:url(img/imges/21.jpg)">
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-lg-offset-6 col-md-6 col-md-offset-6">
							<div class="hotel-choose hotel-choose-1">
								<div class="fl w_100">
									<div class="title">
										<h4>From<b> $60</b></h4>
										<h3>HOLY FAMILY hotel</h3>
										<div class="rate-wrap">
											<div class="rate">
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
											</div>
											<i>48 rewies</i>
										</div>

										<p>The property features a restaurant, as well as a bar. Guests can use a
											terrace. The rooms in Holy Family Hotel are equipped with a flat-screen TV.
										</p>
										<a href="hotel_list.html" class="c-button bg-dr-blue hv-dr-blue-o b-40">book
											now</a>
									</div>
								</div>
								<div class="row-5 row">
									<div class="full-width arrows arrows-3">
										<div class="swiper-container" data-autoplay="5000" data-loop="1"
											data-speed="1000" data-center="0" data-slides-per-view="responsive"
											data-mob-slides="1" data-xs-slides="2" data-sm-slides="2" data-md-slides="3"
											data-lg-slides="3" data-add-slides="3">
											<div class="swiper-wrapper">
												<div class="swiper-slide hotel-sm-block">
													<div class="radius-mask tour-block">
														<div class="clip">
															<div class="bg bg-bg-chrome act"
																style="background-image:url(img/imges/1.jpg)">
															</div>
														</div>
													</div>
												</div>
												<div class="swiper-slide hotel-sm-block">
													<div class="radius-mask tour-block">
														<div class="clip">
															<div class="bg bg-bg-chrome act"
																style="background-image:url(img/imges/25.jpg)">
															</div>
														</div>
													</div>
												</div>
												<div class="swiper-slide hotel-sm-block">
													<div class="radius-mask tour-block">
														<div class="clip">
															<div class="bg bg-bg-chrome act"
																style="background-image:url(img/imges/24.jpg)">
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="pagination"></div>
										</div>
										<div class="swiper-arrow-left offers-arrow"><span
												class="fa fa-angle-left"></span></div>
										<div class="swiper-arrow-right offers-arrow"><span
												class="fa fa-angle-right"></span></div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div> -->
			<div class="hotel-wrpp">
				<div class="clip">
					<div class="bg bg-bg-chrome act" style="background-image:url(img/imges/11.jpg)">
					</div>
				</div>
				<div class="container">
					<div class="row">
					
						<div class="col-lg-6 col-lg-offset-6 col-md-6 col-md-offset-6">
							<div class="hotel-choose hotel-choose-1">
								<div class="fl w_100">
									<div class="title">
										<h4>From<b> $40</b></h4>
										<h3>OMAR EL KHAYAM AL MINYA hotel</h3>
										<div class="rate-wrap">
											<div class="rate">
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
											</div>
											<i>4 rewies</i>
										</div>

										<p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa
											idporta nequetiam.</p>
										<a href="hotel_list.html" class="c-button bg-dr-blue hv-dr-blue-o b-40">book
											now</a>
									</div>
								</div>
								<div class="row-5 row">
									<div class="full-width arrows arrows-3">
										<div class="swiper-container" data-autoplay="5000" data-loop="1"
											data-speed="1000" data-center="0" data-slides-per-view="responsive"
											data-mob-slides="1" data-xs-slides="2" data-sm-slides="2" data-md-slides="3"
											data-lg-slides="3" data-add-slides="3">
											<div class="swiper-wrapper">
												<div class="swiper-slide hotel-sm-block">
													<div class="radius-mask tour-block">
														<div class="clip">
															<div class="bg bg-bg-chrome act"
																style="background-image:url(img/imges/259633153.jpg)">
															</div>
														</div>
													</div>
												</div>
												<div class="swiper-slide hotel-sm-block">
													<div class="radius-mask tour-block">
														<div class="clip">
															<div class="bg bg-bg-chrome act"
																style="background-image:url(img/imges/259636177.jpg)">
															</div>
														</div>
													</div>
												</div>
												<div class="swiper-slide hotel-sm-block">
													<div class="radius-mask tour-block">
														<div class="clip">
															<div class="bg bg-bg-chrome act"
																style="background-image:url(img/imges/259638942.jpg)">
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="pagination"></div>
										</div>
										<div class="swiper-arrow-left offers-arrow"><span
												class="fa fa-angle-left"></span></div>
										<div class="swiper-arrow-right offers-arrow"><span
												class="fa fa-angle-right"></span></div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!------------------------------------------------------hotls-------------------------------->
	<div class="list-wrapper bg-grey-2">
		<div class="container">
			<ul class="list-breadcrumb clearfix">

			</ul>
			<div class="row">
				<div class="col-xs-12 col-sm-4 col-md-3">
					<div class="sidebar style-2 clearfix">
						<div class="sidebar-block">
							<h4 class="sidebar-title color-dark-2">search</h4>
							<div class="search-inputs">
								<div class="form-block clearfix">
									<div class="input-style-1 b-50 color-4">
										<img src="img/loc_icon_small_grey.png" alt="">
										<input type="text" placeholder="Where do you want to go?">
									</div>
								</div>
								<div class="form-block clearfix">
									<div class="input-style-1 b-50 color-4">
										<img src="img/calendar_icon_grey.png" alt="">
										<input type="text" placeholder="Check In" class="datepicker">
									</div>
								</div>
								<div class="form-block clearfix">
									<div class="input-style-1 b-50 color-4">
										<img src="img/calendar_icon_grey.png" alt="">
										<input type="text" placeholder="Check Out" class="datepicker">
									</div>
								</div>
							</div>
							<input type="submit" class="c-button b-40 bg-dr-blue hv-dr-blue-o" value="search">
						</div>
						<!-------------------------------range------------------------------------------------------>

						<div class="sidebar-block">
							<h4 class="sidebar-title color-dark-2">price range</h4>
							<div class="slider-range color-2 clearfix" data-counter="$" data-position="start"
								data-from="0" data-to="1500" data-min="0" data-max="2000">
								<div class="range"></div>
								<input type="text" class="amount-start" readonly value="$0">
								<input type="text" class="amount-end" readonly value="$1500">
							</div>
							<input type="submit" class="c-button b-40 bg-dr-blue hv-dr-blue-o" value="search">
						</div>
						<!-------------------------rating------------------------------------------------------------>

						<div class="sidebar-block">
							<h4 class="sidebar-title color-dark-2">star rating</h4>
							<div class="sidebar-rating">
								<div class="input-entry color-3">
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
								<div class="input-entry color-3">
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
								<div class="input-entry color-3">
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
								<div class="input-entry color-3">
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
								<div class="input-entry color-3">
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
						<!---------------------------review---------------------------------------------------------->


						<!---------------------------------area---------------------------------------------------->

						<div class="sidebar-block" style="visibility:hidden;">
							<h4 class="sidebar-title color-dark-2">Area</h4>
							<div class="sidebar-rating">
								<div class="input-entry color-3">
									<input class="checkbox-form" id="area-1" type="checkbox" name="checkbox"
										value="climat control">
									<label class="clearfix" for="area-1">
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="checkbox-text">Earls Court</span>
									</label>
								</div>
								<div class="input-entry color-3">
									<input class="checkbox-form" id="area-2" type="checkbox" name="checkbox"
										value="climat control">
									<label class="clearfix" for="area-2">
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="checkbox-text">Victoria and Westminster</span>
									</label>
								</div>
								<div class="input-entry color-3">
									<input class="checkbox-form" id="area-3" type="checkbox" name="checkbox"
										value="climat control">
									<label class="clearfix" for="area-3">
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="checkbox-text">Bloomsbury - Fitzrovia</span>
									</label>
								</div>
								<div class="input-entry color-3">
									<input class="checkbox-form" id="area-4" type="checkbox" name="checkbox"
										value="climat control">
									<label class="clearfix" for="area-4">
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="checkbox-text">West End -Soho</span>
									</label>
								</div>
								<div class="input-entry color-3">
									<input class="checkbox-form" id="area-5" type="checkbox" name="checkbox"
										value="climat control">
									<label class="clearfix" for="area-5">
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="checkbox-text">Chelsea - Kensington</span>
									</label>
								</div>
								<div class="input-entry color-3">
									<input class="checkbox-form" id="area-6" type="checkbox" name="checkbox"
										value="climat control">
									<label class="clearfix" for="area-6">
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="checkbox-text">Heathrow & Nearby</span>
									</label>
								</div>
								<div class="input-entry color-3">
									<input class="checkbox-form" id="area-7" type="checkbox" name="checkbox"
										value="climat control">
									<label class="clearfix" for="area-7">
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="checkbox-text">Gatwick Airport & Nearby</span>
									</label>
								</div>
								<div class="input-entry color-3">
									<input class="checkbox-form" id="area-8" type="checkbox" name="checkbox"
										value="climat control">
									<label class="clearfix" for="area-8">
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="checkbox-text">Heathrow & Nearby</span>
									</label>
								</div>
								<div class="input-entry color-3">
									<input class="checkbox-form" id="area-9" type="checkbox" name="checkbox"
										value="climat control">
									<label class="clearfix" for="area-9">
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="checkbox-text">The City</span>
									</label>
								</div>
								<div class="input-entry color-3">
									<input class="checkbox-form" id="area-10" type="checkbox" name="checkbox"
										value="climat control">
									<label class="clearfix" for="area-10">
										<span class="sp-check"><i class="fa fa-check"></i></span>
										<span class="checkbox-text">Greenwich</span>
									</label>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-----------------------sort-------------------------------------------------->
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
						<!-----------------------sort-------------------------------------------------->
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
						<!--------------------------------list--------------------------------------------->
						<div class="list-view-change">
							<div class="change-grid color-2 fr"><i class="fa fa-th"></i></div>
							<div class="change-list color-2 fr active"><i class="fa fa-bars"></i></div>
							<div class="change-to-label fr color-grey-8">View:</div>
						</div>
					</div>
					<div class="list-content clearfix">

						<?php 
							if($result->num_rows > 0)
							while($row = $result->fetch_assoc()){
						?>
						<div class="list-item-entry">
							<div class="hotel-item style-8 bg-white">
								<div class="table-view">
									<div class="radius-top cell-view">
										<img src="img/hotels/<?php echo $row['hot_image']?>" alt="">
										<div class="price price-s-3 red tt">EGY <?php echo $row['hot_price'] ?></div>
									</div>
									<div class="title hotel-middle clearfix cell-view">
										<div class="hotel-person color-dark-2 list-hidden">from <span>EGY <?php echo $row['hot_price'] ?></span></div>
										<div class="rate-wrap">
											<div class="rate">
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
												<span class="fa fa-star color-yellow"></span>
											</div>
											<i>44 rewies</i>
										</div>
										<h4><b><?php echo $row['hot_name']?></b></h4>
										<p class="f-14">
											<?php echo $row['hot_detail']?>
										</p>
										<div class="hotel-icons-block grid-hidden">
											<img class="hotel-icon" src="img/tour_list/hotel_icon_1.png" alt="">
											<img class="hotel-icon" src="img/tour_list/hotel_icon_2.png" alt="">
											<img class="hotel-icon" src="img/tour_list/hotel_icon_3.png" alt="">
											<img class="hotel-icon" src="img/tour_list/hotel_icon_4.png" alt="">
											<img class="hotel-icon" src="img/tour_list/hotel_icon_5.png" alt="">
										</div>
										<a href="hotel_list.html"
											class="c-button bg-dr-blue hv-dr-blue-o b-40 fl list-hidden">select</a>
										<a href="hotel_list.html"
											class="c-button color-dr-blue hv-o b-40 fr list-hidden"><img src=""
												alt="">view on map</a>
									</div>
									<div class="title hotel-right bg-dr-blue clearfix cell-view">
										<div class="hotel-person color-white"> <span>EGY <?php echo $row['hot_price'] ?></span></div>
										<a class="c-button b-40 bg-white color-dark-2 hv-dark-2-o grid-hidden"
											href="hotel_list.html">BOOK</a>
									</div>
								</div>
							</div>
						</div>

						<?php 
							
							} else {
								echo '<div class="text-center bg-blue"><h2>Ther Is No Car To Show It </h3></div>';
							}
						?>

					</div>
				</div>
			</div>

			<div class="c_pagination clearfix padd-120">
				<a href="#" class="c-button b-40 bg-dr-blue hv-dr-blue-o fl">prev page</a>
				<a href="#" class="c-button b-40 bg-dr-blue hv-dr-blue-o fr">next page</a>
				<ul class="cp_content color-2">
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
	<!-----------------------footer----------------------------------->
	]<footer class="bg-dark type-2">
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
	<script src="js/jquery.mousewheel.min.js"></script>
	<script src="js/all.js"></script>
</body>

</html>