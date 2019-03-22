@extends('frontend.layouts.app')

@section('content')
<section class="section" id="service">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-12">
								<div class="section-header">
									<h2 class="text-orange Helvetica-light">@lang('applang.searchres')</h2>
								</div>
								@if($search->count() === 0)
								<div class="alert alert-warning alert-dismissible fade show" role="alert">
									<strong>Oops!</strong> @lang('applang.alert') .
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								@endif
							</div>
							<!-- post -->
							<div class="col-md-8">
								@foreach($search as $data)  
									<div class="post post-row">
										
										<a class="post-img" href="{{route('frontend.index')}}/read/info/{{ $data->slug }}"><img class="img-fluid rounded" src="{{route('frontend.index')}}/storage/img/blog/{!! $data->featured_image !!}" alt=""></a>
										<div class="post-body">
											<div class="post-meta">
												<span class="post-date Helvetica-light text-orange">  {{ \Carbon\Carbon::parse($data->publish_datetime)->diffForHumans() }}  <i class="fas fa-eye"></i> {!!$data->count!!} </span><br>
												<a class="post-category cat-2 Helvetica-bold" href="{{route('frontend.index')}}/show/news/all/name/{{ $data->subname }}"> {!!$data->subname!!}</a>
											</div>
											<h3 class="post-title Helvetica-light"><a href="{{route('frontend.index')}}/read/info/{{ $data->slug }}">{!!$data->name!!}</a></h3>
											<p><span class="Helvetica-light">{!!strlen($data->content) > 200 ? substr($data->content,0,200) : $data->content!!}...</span></p>
											<a href="{{route('frontend.index')}}/read/info/{{ $data->slug }}" class="btn btn-outline-info ">@lang('applang.readmore')</a>
										</div>
									</div>
									@endforeach
							
							</div>
							<!-- /post -->
																							
						</div>
					</div>

			
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
</section>
		<!-- /section -->
@endsection