@extends('frontend.layouts.app')
@section('title',  $pages->name)
@section('content')
<section id="services">
  <div class="container">
    <div class="section-header">
      <h2 class="Helvetica-light">
         
                @if( Config::get('app.locale') =='id' )
                  {!! $pages->name !!}
                  @elseif(Config::get('app.locale')=='en')
                  {!! $pages->name_en !!}
                  @endif
        </h2>
      <div class="row">
      
        <div class="col-md-12">
          <img src="{{route('frontend.index')}}/storage/img/blog/{!! $pages->featured_image !!}" alt="{!! $pages->name !!}" class="img-fluid" >
          <p></p>
          
          <div class="pull-left">
            <img src="{{ asset('img/icon-post.png' ) }}" alt=""> post by
          </div>
        </div>
          <div class="col-md-8">
              <div class="clearfix"></div>
              <div class="col col-lg Helvetica-light">
                <br/>
                <div class="sharethis-inline-share-buttons"></div>
                <br/>
                  @if( Config::get('app.locale') =='id' )
                    <p>{!! $pages->content !!}</p>
                  @elseif(Config::get('app.locale')=='en')
                    <p>{!! $pages->content_en !!}</p>
                  @endif
                <p></p>
             </div>
             @if($pages->category_id===17 || $pages->category_id===18)
                @include('frontend.includes.formrequest')
             @endif
        </div>
          <!-- aside -->
					<div class="col-md-4">
						<!-- ad -->
						<div class="aside-widget text-center">
							<a href="#" style="display: inline-block;margin: auto;">
								<img class="img-responsive" src="{{ asset('img/ad-1.jpg' ) }}" alt="">
							</a>
						</div>
						<!-- /ad -->

						<!-- post widget -->
						<div class="aside-widget">
							<div class="section-title">
								<h2><span class="Helvetica-bold"> Other</span></h2>
							</div>
              @foreach($acak as $blog )
              <div class="post post-row">
									<a class="post-img hover-zoomin" href="{{route('frontend.index')}}/read/info/{{ $blog->slug }}"><img class="rounded img-fluid" src="{{route('frontend.index')}}/storage/img/blog/{!! $blog->featured_image !!}" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
                    <span class="post-date Helvetica-light text-orange">  {{ \Carbon\Carbon::parse($blog->publish_datetime)->diffForHumans() }}  <i class="fas fa-eye"></i> {!!$blog->count!!} </span><br>
                    <span class="post-date Helvetica-light text-orange">By: {{$blog->last_name}} </span>
                    <h4 class="post-date  text-small text-dark Helvetica-light " ><a href="{{route('frontend.index')}}/read/info/{{ $blog->slug }}">{{$blog->name}}</a></h4>
										</div>
										<!-- <p> {!!strlen($blog->content) > 200 ? substr($blog->content,0,200) : $blog->content!!}...</p> -->
                  </div>
                  
                  <hr>
								</div>
              @endforeach
						</div>
            <!-- /post widget -->
            
            <div>
							<div class="section-title">
                <h2><span class="Helvetica-bold"> Tags</span></h2>
                <div class="post post-row">
                <ul class="post-tags">
                
                  @foreach($tags as $tag)
                  <li><a href="{{route('frontend.index')}}/tags/selection/{{$tag->name}}" >#{{$tag->name}}</a> </li>
                  @endforeach
                </div>
              </ul>
              </div>
            </div>
					</div>
					<!-- /aside -->
    </div>
    </div>
</section>
                
@endsection