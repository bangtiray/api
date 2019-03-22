@extends('frontend.layouts.app')
@section('title', trans('applang.standar'))
@section('content')
<section id="services" class="wow">
    <div class="container">
      <div class="section-header">
        <h2 class="Helvetica-bold">@lang('applang.standar')</h2>
      </div>
      @foreach($data as $news)  
            <!-- post -->
            <div class="col-md-4">
              <div class="post">
                <a class="post-img" href="{{route('frontend.index')}}/read/info/{{ $news->slug }}"><img class="img-fluid rounded " src="{{route('frontend.index')}}/storage/img/blog/{!! $news->featured_image !!}" alt=""></a>
                <div class="post-body">
                  <div class="post-meta">
                    <!-- <span class="post-date Helvetica-light text-orange">  {{ \Carbon\Carbon::parse($news->publish_datetime)->diffForHumans() }}  <i class="fas fa-eye"></i> {!!$news->count!!} </span><br> -->
                    <h3 class="post-title"><a class="Helvetica-light" href="{{route('frontend.index')}}/read/info/{{ $news->slug }}">{!!$news->name!!}</a></h3>
                    <a class="post-category cat-3 Helvetica-bold" href="{{route('frontend.index')}}/show/news/all/name/{{ $news->subname }}">{!!$news->subname!!}</a>
                  </div>
                  
                </div>
              </div>
            </div>
            <!-- /post -->
            @endforeach
      </div>
     
    
</section>

@endsection