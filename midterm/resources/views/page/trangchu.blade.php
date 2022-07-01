@extends('master')
@section('content')
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="beta-products-list">
							<h4>hoa quả</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tim thay{{count($food)}} san pham</p>
								<div class="clearfix"></div>
							</div>
							
							<div class="row">
								@foreach($food as $new)
								<div class="col-sm-3">
									<div class="single-item">
										@if($new->oldPrice!=0)
										<div class ='ribbon-wrapper'><div class ="ribbon sale">I love you</div></div>
										@endif

										<div class="single-item-header">
											<a href="detail/{{$new->id}}"><img src="/source/image/product/{{$new->image}}" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$new->name}}</p>
											<p class="single-item-price">
											@if($new->oldPrice==0)	
												<span class="flash-del">{{$new->price}} đồng</span>
											@else
												<span class="flash-del">{{$new->price}} đồng</span>
												<span class="flash-sale">{{$new->oldPrice}} đồng</span>
											@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="detail/{{$new->id}}">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
							
							<div class="row">{{$food->links()}}</div>
				

						</div> <!-- .beta-products-list -->

			

						 <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->

@endsection