@extends('layout')
@section('content')

<pre>
    <?php
    	
        //print_r($_SESSION);
    	//print_r($data);
        $sQ ="'";
        $Q = '"';
        
    ?>
</pre>



<div class="product-list">
	<div class="container">
		<div class="row">
			<h2>FEATURED PRODUCTS</h2>
			@foreach($data['featuredProducts'] as $product)
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="product-wrapper">
					<a href="{{'/product'.'/'.$product->product_name}}"><img class="img-responsive" src="{{asset('/img/').'/'.$product->product_image}}" style="height: 260px;"></a>
					<div class="product-details">
						<a href="{{'/product'.'/'.$product->product_name}}">
							<p class="product-name">{{ $product->product_name }}</p>
						</a>
				    	<span class="price">{{'$ ' . $product->product_price }}</span>
				    	<div class="cart">
				    		<span class="cart-inner">
				    			<i class="fa fa-shopping-cart fa-2x pull-left"></i>
				    			<p class="add">Add to cart</p>
				    		</span>
				    	</div>
				    </div>
				    <hr>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>

<div class="product-list">
	<div class="container">
		<div class="row">
			<h2>NEW PRODUCTS</h2>
			@foreach($data['newProducts'] as $product)
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="product-wrapper">
					<a href="{{'/product'.'/'.$product->product_name}}"><img class="img-responsive" src="{{asset('/img/').'/'.$product->product_image}}" style="height: 260px;"></a>
					<div class="product-details">
						<a href="{{'/product'.'/'.$product->product_name}}">
							<p class="product-name">{{ $product->product_name }}</p>
						</a>
				    	<span class="price">{{'$ ' . $product->product_price }}</span>
				    	<div class="cart">
				    		<span class="cart-inner">
				    			<i class="fa fa-shopping-cart fa-2x pull-left"></i>
				    			<p class="add">Add to cart</p>
				    		</span>
				    	</div>
				    </div>
				    <hr>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>




@stop



