@extends('layout')
@section('content')



<div id="category-page-green" class="container-fluid">
	
</div>

<div class="product-list">
	<div class="container">
		<div class="row">
			@foreach($categData as $key => $value)
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="product-wrapper">
					<a href="{{'/product'.'/'.$value->product_name}}"><img class="img-responsive" src="{{asset('/img/').'/'.$value->product_image}}" style="height: 260px;"></a>
					<div class="product-details">
						<a href="{{'/product'.'/'.$value->product_name}}">
							<p class="product-name">{{ $value->product_name }}</p>
						</a>
				    	<span class="price">{{'$ ' . $value->product_price }}</span>
				    	<div class="cart">
				    		<span class="cart-inner">
				    			<i class="fa fa-shopping-cart fa-2x pull-left"></i>
				    			<p class="add">Add to cart</p>
				    		</span>
				    	</div>
				    </div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>


@stop