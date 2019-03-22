@extends('frontend.layouts.app')
@section('title', trans("applang.fin"))
@section('content')
<!--==========================
      Clients Section
	============================-->
<section id="services">
  <div class="container">
    <div class="section-header">
      <h2 class="text-orange Helvetica-light">@lang('applang.lastfive')</h2>
      <div class="row">
			<div class="container-fluid">
				
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner row w-100 mx-auto ">
					@foreach($annual as $annual )
						<div class="carousel-item col-md-4 {{ $loop->first ? ' active' : '' }}">
							<div class="card bg-deep-purple">
							<div class="card-body">
								<h4 class="card-title"><span class="Helvetica-light">{!! $annual->subname !!}</span></h4>
								<p class="card-text"><small class="Helvetica-light">{{ \Carbon\Carbon::parse($annual->publish_datetime)->diffForHumans() }} ({{$annual->publish_datetime}})</small></p>
								<p class="card-text">{!! $annual->name !!}</p>
								<p class="card-text"><a class="btn btn-info btn-block btn-sm" href="{{route('frontend.index')}}/storage/img/blog/{!! $annual->featured_image !!}" target='_blank'><i class="fa fa-download"></i> Download</a></p>
								
								
							</div>
							</div>
						</div>
					@endforeach	
					</div>
					<!-- <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
					</a> -->
				</div>
			</div>
</div>
</section>

<section id="services">
  <div class="container">
    <div class="section-header">
      <h2 class="text-orange Helvetica-light">@lang('applang.half')</h2>
      <div class="row">
			<div class="container-fluid">
				
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner row w-100 mx-auto">
					@foreach($half as $annual )
						<div class="carousel-item col-md-4 {{ $loop->first ? ' active' : '' }}">
							<div class="card bg-light-green">
							<div class="card-body">
								<h4 class="card-title"><span class="Helvetica-light">{!! $annual->subname !!}</span></h4>
								<p class="card-text"><small class="Helvetica-light">{{ \Carbon\Carbon::parse($annual->publish_datetime)->diffForHumans() }} ({{$annual->publish_datetime}})</small></p>
								<p class="card-text">{!! $annual->name !!}</p>
								<p class="card-text"><a class="btn btn-info btn-block btn-sm" href="{{route('frontend.index')}}/storage/img/blog/{!! $annual->featured_image !!}" target='_blank'><i class="fa fa-download"></i> Download</a></p>
								
								
							</div>
							</div>
						</div>
					@endforeach	
					</div>
					<!-- <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
					</a> -->
				</div>
			</div>
</div>
</section>
@endsection