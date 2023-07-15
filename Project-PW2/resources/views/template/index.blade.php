<!DOCTYPE html>
<html lang="en">
<head>
	<title>Alstra Store</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="/images/icons/fav.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/MagnificPopup/magnific-popup.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/css/util.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
<!--===============================================================================================-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<!-- <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

	@vite(['resources/sass/app.scss', 'resources/js/app.js']) -->
</head>
<body class="animsition">
	
		<!-- Header -->
		<header class="header-v4">
		<!-- Header desktop -->
		<div class="container-menu-desktop">

		<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
						Free shipping for standard order over Rp 1.000.000
					</div>

					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m trans-04 p-lr-25" style="text-decoration:none">
							Help & FAQs
						</a>

						<a href="#" class="flex-c-m trans-04 p-lr-25" style="text-decoration:none">
							My Account
						</a>

						<a href="#" class="flex-c-m trans-04 p-lr-25" style="text-decoration:none">
							IDN
						</a>
					</div>
				</div>
			</div>
			
			<div class="wrap-menu-desktop how-shadow1">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="/shop/home" class="logo">
						<img src="/images/icons/logo.png" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li class="active-menu">
								<a href="/shop/home" style="text-decoration:none">Home</a>
							</li>

							<li>
								<a href="/shop/product" style="text-decoration:none">Shop</a>
							</li>

							<li>
								<a href="/shop/blog" style="text-decoration:none">Blog</a>
							</li>

							<li>
								<a href="/shop/about" style="text-decoration:none">About</a>
							</li>

							<li>
								<a href="/shop/contact" style="text-decoration:none">Contact</a>
							</li>

							<li>
								<a href="/shop/checkout" style="text-decoration:none">CheckOut</a>
							</li>
						</ul>
					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
							<i class="zmdi zmdi-search"></i>
						</div>

						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="3">
							<i class="zmdi zmdi-shopping-cart"></i>
						</div>

						<div>
							@if (Route::has('login'))
							<div class="">
							@auth
							<div class="dropdown show">
								<a class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10 ml-4 mt-2 dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									{{ Auth::user()->name }}
								</a>
								@if (Auth::user()->role != 'pelanggan')
									<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
										<a class="dropdown-item" href="#">User {{ Auth::user()->role }}</a>
										<a class="dropdown-item" href="/shop/produk">Page Admin</a>
										<a class="dropdown-item" href="{{ route('logout') }}"
											onclick="event.preventDefault();
													document.getElementById('logout-form').submit();">
											Log Out
										</a>
										<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
											@csrf
										</form>
									</div>
								@else
									<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
										<a class="dropdown-item" href="#">User {{ Auth::user()->role }}</a>
										<a class="dropdown-item" href="{{ route('logout') }}"
											onclick="event.preventDefault();
													document.getElementById('logout-form').submit();">
											Log Out
										</a>
										<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
											@csrf
										</form>
									</div>
								@endif
							</div>
							@else
								<a href="{{ route('login') }}" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10 ml-4 mt-2">Log in</a>
							@endauth
							</div>
							@endif
						</div>

					</div>
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="/shop/home"><img src="/images/icons/logo.png" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
					<i class="zmdi zmdi-search"></i>
				</div>

				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="3">
					<i class="zmdi zmdi-shopping-cart"></i>
				</div>

				<div>
					@if (Route::has('login'))
					<div class="">
					@auth
					<div class="dropdown show">
						<a class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10 ml-4 mt-2 dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							{{ Auth::user()->name }}
						</a>
						@if (Auth::user()->role != 'pelanggan')
							<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								<a class="dropdown-item" href="#">User {{ Auth::user()->role }}</a>
								<a class="dropdown-item" href="/shop/produk">Page Admin</a>
								<a class="dropdown-item" href="{{ route('logout') }}"
									onclick="event.preventDefault();
											document.getElementById('logout-form').submit();">
									Log Out
								</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
									@csrf
								</form>
							</div>
						@else
							<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								<a class="dropdown-item" href="#">User {{ Auth::user()->role }}</a>
								<a class="dropdown-item" href="{{ route('logout') }}"
									onclick="event.preventDefault();
											document.getElementById('logout-form').submit();">
									Log Out
								</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
									@csrf
								</form>
							</div>
						@endif
					</div>
					@else
						<a href="{{ route('login') }}" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10 ml-4 mt-2">Log in</a>
					@endauth
					</div>
					@endif
				</div>
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="topbar-mobile">
				<li>
					<div class="left-top-bar">
						Free shipping for standard order over Rp 1.000.000
					</div>
				</li>

				<li>
					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m p-lr-10 trans-04">
							Help & FAQs
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							My Account
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							IDN
						</a>
					</div>
				</li>
			</ul>	

			<ul class="main-menu-m">
				<li>
					<a href="/shop/home">Home</a>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li>
					<a href="/shop/product">Shop</a>
				</li>

				<li>
					<a href="/shop/blog">Blog</a>
				</li>

				<li>
					<a href="/shop/about">About</a>
				</li>

				<li>
					<a href="/shop/contact">Contact</a>
				</li>

				<li>
					<a href="/shop/checkout">CheckOut</a>
				</li>
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="/images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>

	<!-- Cart -->
	<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>

		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Your Cart
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>
			
			<div class="header-cart-content flex-w js-pscroll">
				<ul class="header-cart-wrapitem w-full">
					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="/images/product-07.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								Shirt in Stretch Cotton
							</a>

							<span class="header-cart-item-info">
								1 x Rp 100.000
							</span>
						</div>
					</li>

					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="/images/product-detail-01.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								Lightweight Jacket
							</a>

							<span class="header-cart-item-info">
								1 x Rp 150.000
							</span>
						</div>
					</li>

					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="/images/product-04.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								Classic Trench Coat
							</a>

							<span class="header-cart-item-info">
								1 x Rp 500.000
							</span>
						</div>
					</li>
				</ul>
				
				<div class="w-full">
					<div class="header-cart-total w-full p-tb-40">
						Total: Rp 750.000
					</div>

					<div class="header-cart-buttons flex-w w-full">
						<a href="/shop/cart" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							View Cart
						</a>

						<a href="/shop/checkout" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Check Out
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div>
        @yield('content')
    </div>

	<!-- Footer -->
	<footer class="bg3 p-t-75 p-b-32">
		<div class="container">
				
			<div class="p-t-40">
				<div class="stext-107 cl6 txt-center">
					<span class="">
						Dapat Melakukan Pembayaran Melalui:
					</span>
				</div>

				<div class="flex-c-m flex-w p-b-18">
					<a href="#" class="m-all-1">
						<img src="/images/icons/icon-pay-01.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="/images/icons/icon-pay-02.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="/images/icons/icon-pay-03.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="/images/icons/icon-pay-04.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="/images/icons/icon-pay-05.png" alt="ICON-PAY">
					</a>
				</div>

				<p class="stext-107 cl6 txt-center">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">Alstra Store</a> &amp; distributed by <a href="#" target="_blank">Alstra Store</a>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>
			</div>
		</div>
	</footer>

	<div>
        @yield('content2')
    </div>

	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

<!--===============================================================================================-->	
	<script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/bootstrap/js/popper.js"></script>
	<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="/vendor/daterangepicker/moment.min.js"></script>
	<script src="/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/slick/slick.min.js"></script>
	<script src="/js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/parallax100/parallax100.js"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="/vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/sweetalert/sweetalert.min.js"></script>
	<script>
		$('.js-addwish-b2').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	</script>
<!--===============================================================================================-->
	<script src="/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="/js/main.js"></script>



<!--===============================================================================================-->
	<script src="/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="/js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="/js/main.js"></script>


<!--===============================================================================================-->
	<script src="/vendor/daterangepicker/moment.min.js"></script>
	<script src="/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/slick/slick.min.js"></script>
	<script src="/js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/parallax100/parallax100.js"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="/vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/sweetalert/sweetalert.min.js"></script>
	<script>
		$('.js-addwish-b2, .js-addwish-detail').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	
	</script>
<!--===============================================================================================-->
	<script src="/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>

</body>
</html>