@extends('products.master')

@section('content')
	<div class="products">
		<div class="container">
			<div class="row">
				@foreach ($products as $product)
					<div class="col-md-4">
						<div class="product">
							<img src="{{asset('storage/img/product.png')}}" alt="">
							@if ( language() == 'ar' )
								<h1>{{$product->title_ar}}</h1>
							@else
							<h1>{{$product->title_en}}</h1>

							@endif
							<?php $price_value = 'price_'. Session::get('country')->country_shortcode;?>
							<?php $stock_value = 'stock_'. Session::get('country')->country_shortcode;?>
							<p>@lang('site.price') : {{$product->$price_value}}</p>
							<p>@lang('site.stock') : {{$product->$stock_value}} </p>
							<button class="btn btn-success" <?php if($product->stock_ae==0) echo 'disabled';?> >@lang('site.add_to_cart')</button>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
@endsection

