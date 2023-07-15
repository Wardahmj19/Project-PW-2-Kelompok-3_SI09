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
					Pay For Your Order
				</h3>
			</div>
		</div>
	</section>

	<hr><hr>

	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-xl-12 m-lr-auto">
				<form class="bg0 p-t-85 p-b-85" action="{{ route('pesanan.ubah', $pesanans) }}" method="POST">
					@csrf
					@method('PUT')
					<div class="form-group row">
						<label for="tanggal" class="col-4 col-form-label">Tanggal Pemesanan</label> 
						<div class="col-8">
						<div class="input-group">
							<div class="input-group-prepend">
							<div class="input-group-text">
								<i class="fa fa-calendar-check-o"></i>
							</div>
							</div> 
							<input id="tanggal" name="tanggal" type="text" class="form-control" value="{{ $pesanans->tanggal }}">
						</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="nama_pemesan" class="col-4 col-form-label">Nama Pemesan</label> 
						<div class="col-8">
						<div class="input-group">
							<div class="input-group-prepend">
							<div class="input-group-text">
								<i class="fa fa-address-book"></i>
							</div>
							</div> 
							<input id="nama_pemesan" name="nama_pemesan" type="text" class="form-control" value="{{ $pesanans->nama_pemesan }}">
						</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="alamat" class="col-4 col-form-label">Alamat</label> 
						<div class="col-8">
						<div class="input-group">
							<div class="input-group-prepend">
							<div class="input-group-text">
								<i class="fa fa-map-marker"></i>
							</div>
							</div> 
							<input id="alamat" name="alamat" type="text" class="form-control" value="{{ $pesanans->alamat }}">
						</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="no_hp" class="col-4 col-form-label">No HP</label> 
						<div class="col-8">
						<div class="input-group">
							<div class="input-group-prepend">
							<div class="input-group-text">
								<i class="fa fa-phone"></i>
							</div>
							</div> 
							<input id="no_hp" name="no_hp" type="text" class="form-control" value="{{ $pesanans->no_hp }}">
						</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="total" class="col-4 col-form-label">Total Harga</label> 
						<div class="col-8">
						<div class="input-group">
							<div class="input-group-prepend">
							<div class="input-group-text">
								<i class="fa fa-calculator"></i>
							</div>
							</div> 
							<input id="total" name="total" type="text" class="form-control" value="{{ $pesanans->total }}">
						</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="produk_id" class="col-4 col-form-label">Id Produk</label> 
						<div class="col-8">
						<div class="input-group">
							<div class="input-group-prepend">
							<div class="input-group-text">
								<i class="fa fa-id-badge"></i>
							</div>
							</div> 
							<input id="produk_id" name="produk_id" type="text" class="form-control" value="{{ $pesanans->produk_id }}">
						</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="pembayaran" class="col-4 col-form-label">Metode Pembayaran</label> 
						<div class="col-8">
						<select id="pembayaran" name="pembayaran" class="custom-select" value="{{ $pesanans->pembayaran }}">
							<option value="Cash">Cash</option>
							<option value="COD">COD</option>
							<option value="Transfer Bank">Transfer Bank</option>
						</select>
						</div>
					</div> 
					<div class="form-group row">
						<div class="offset-4 col-8">
							<button name="submit" type="submit" class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04">Finish</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

@endsection