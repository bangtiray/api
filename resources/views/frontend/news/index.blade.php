@extends('frontend.layouts.app')

@section('content')
<section class="wow">
    <div class="container">
      <div class="section-header">
        
      </div>
      @foreach($news as $berita)  
            <!-- post -->
            <div class="col-md-4">
              <div class="post">
                <a class="post-img" href="{{route('frontend.index')}}/read/info/{{ $berita->slug }}"><img class="img-fluid rounded" src="{{route('frontend.index')}}/storage/img/blog/{!! $berita->featured_image !!}" alt=""></a>
                <div class="post-body">
                  <div class="post-meta">
                  <span class="post-date Helvetica-light text-orange">  {{ \Carbon\Carbon::parse($berita->publish_datetime)->diffForHumans() }}  <i class="fas fa-eye"></i> {!!$berita->count!!} </span><br>
                    <a class="post-category cat-3 Helvetica-bold" href="{{route('frontend.index')}}/show/news/all/name/{{ $berita->subname }}">{!!$berita->subname!!}</a>
                  </div>
                  <h3 class="post-title"><a class="Helvetica-light text-dark" href="{{route('frontend.index')}}/read/info/{{ $berita->slug }}">{!!$berita->name!!}</a></h3>
                </div>
              </div>
            </div>
            <!-- /post -->
            @endforeach
           
      </div>
     
    </div>
</section>
                
@endsection