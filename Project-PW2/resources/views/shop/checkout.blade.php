@extends('template/index')

@section('content')

	<!-- Slider -->
	<section class="section-slide">
		<div class="wrap-slick1 rs2-slick1">
			<div class="slick1">
				<div class="item-slick1 bg-overlay1" style="background-image: url(/images/slide-05.jpg);" data-thumb="/images/thumb-01.jpg" data-caption="Women’s Wear">
					<div class="container h-full">
						<div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
								<span class="ltext-202 txt-center cl0 respon2">
									Women Collection 2023
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
								<h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
									New arrivals
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
								<a href="/shop/product" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
									Shop Now
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick1 bg-overlay1" style="background-image: url(/images/slide-06.jpg);" data-thumb="/images/thumb-02.jpg" data-caption="Men’s Wear">
					<div class="container h-full">
						<div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
								<span class="ltext-202 txt-center cl0 respon2">
									Men Collection 2023
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
								<h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
									NEW SEASON
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
								<a href="/shop/product" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
									Shop Now
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="wrap-slick1-dots p-lr-10"></div>
		</div>
	</section>

	<section class="sec-product bg0 p-t-50">
		<div class="container">
			<div class="p-b-10">
				<h3 class="ltext-105 cl5 txt-center respon1">
					Check Out For Your Order
				</h3>
			</div>
		</div>
	</section>

	<hr><hr>

	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-xl-12 m-lr-auto">
				<form class="bg0 p-t-85 p-b-85" action="{{ route('produk.toko') }}" method="POST">
					@csrf
					<div class="form-group row">
						<label for="kode" class="col-4 col-form-label">Kode</label> 
						<div class="col-8">
						<div class="input-group">
							<div class="input-group-prepend">
							<div class="input-group-text">
								<i class="fa fa-qrcode"></i>
							</div>
							</div> 
							<input id="kode" name="kode" type="text" class="form-control">
						</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="nama_produk" class="col-4 col-form-label">Nama Produk</label> 
						<div class="col-8">
						<div class="input-group">
							<div class="input-group-prepend">
							<div class="input-group-text">
								<i class="fa fa-product-hunt"></i>
							</div>
							</div> 
							<input id="nama_produk" name="nama_produk" type="text" class="form-control">
						</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="harga" class="col-4 col-form-label">Harga Barang</label> 
						<div class="col-8">
						<div class="input-group">
							<div class="input-group-prepend">
							<div class="input-group-text">
								<i class="fa fa-money"></i>
							</div>
							</div> 
							<input id="harga" name="harga" type="text" class="form-control">
						</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="jumlah" class="col-4 col-form-label">Jumlah Barang</label> 
						<div class="col-8">
						<div class="input-group">
							<div class="input-group-prepend">
							<div class="input-group-text">
								<i class="fa fa-shopping-bag"></i>
							</div>
							</div> 
							<input id="jumlah" name="jumlah" type="text" class="form-control">
						</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="jenis_produk_id" class="col-4 col-form-label">Id Jenis Produk</label> 
						<div class="col-8">
						<select id="jenis_produk_id" name="jenis_produk_id" class="custom-select">
							<option value="1">Baju Laki-laki</option>
							<option value="2">Baju Perempuan</option>
						</select>
						</div>
					</div> 
					<div class="form-group row">
						<ul class="flex-w flex-m m-r-20 m-tb-5 offset-5">
						<li>
							<button class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04" type="submit">
								Submit
							</button>
						</li>
						<li>
							<a class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 ml-3" style="text-decoration:none" href="/shop/pay">Pay</a>
						</li>
						</ul>
					</div>
				</form>
			</div>
		</div>
	</div>

@endsection