@extends('layout')
@section('content')


<div id="product-page-green" class="container-fluid">
	
</div>

<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="product-main-img">
				<img src="{{asset('/img/').'/'.$data['0']->product_image}}" style="width: 100%; height: 418px;">
			</div>
		</div>
		<div class="col-md-6">
			<div class="product-right">
				<h1>{{$data['0']->product_name}}</h1>
				<h5>{{'$ ' . $data['0']->product_price}}</h5>
				<hr>
				<p>{{$data['0']->product_desc}}</p>
				<hr>
				<button type="button" class="btn-lg btn-success">Add to cart!</button>
			</div>
		</div>
	</div>
</div>




@stop