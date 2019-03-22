@extends('frontend.layouts.app')
@section('title',  'Karir')
@section('content')
<!-- <div class="entity-jumbotron mod-entity-show" style="background: url(https://www.dicoding.com/images/original/academy/menjadi_android_developer_expert_image_051017204947.JPG) no-repeat no-repeat center; background-size: cover;"> <div class="entity-jumbotron-title"> <h1>Menjadi Android Developer Expert</h1> <h3>Oleh: Google ATP</h3> </div> </div> -->
<!-- <div class="jumbotron jumbotron-fluid" height="505" style="background: url(../img/carrier.png) no-repeat no-repeat center;">
  <div class="container">
    <h1 class="display-4 text-grey"></h1>
    <p class="lead">Temukan karir anda di sini<br>dan jadilah bagian dari kami</p>
  </div>
</div> -->
<!-- <section>
<header id="intro2">
  <div class="intro2 " style="background: url(../img/carrier.png) center center no-repeat;">
    <div class="overlay">
     
    </div>
  </div>
</header>
</section> -->
<section id="intro">

<div class="intro-content">
</div>

<div id="intro-carousel" class="owl-carousel" >
  <div class="item" style="background-image: url('../img/carrier.png');"></div>
  <div class="item" style="background-image: url('../img/carrier.png');"></div>
  <div class="item" style="background-image: url('../img/carrier.png');"></div>
  <div class="item" style="background-image: url('../img/carrier.png');"></div>
  <div class="item" style="background-image: url('../img/carrier.png');"></div>
  <div class="item" style="background-image: url('../img/carrier.png');"></div>
  <div class="item" style="background-image: url('../img/carrier.png');"></div>

</div>

</section><!-- #intro -->

<main id="main">
<section class="wow fadeInUp">
    <div class="container">
      <div class="section-header">
        <h2 class="Helvetica-bold">@lang('applang.job')</h2>
      </div>
      @foreach($carrier as $news)  
            <!-- post -->
            <div class="col-md-4">
              <div class="post">
                <a class="post-img" href="{{route('frontend.index')}}/read/info/{{ $news->slug }}"><img class="img-fluid rounded " src="{{route('frontend.index')}}/storage/img/blog/{!! $news->featured_image !!}" alt=""></a>
                <div class="post-body">
                  <div class="post-meta">
                    <span class="post-date Helvetica-light text-orange">  {{ \Carbon\Carbon::parse($news->publish_datetime)->diffForHumans() }}  <i class="fas fa-eye"></i> {!!$news->count!!} </span><br>
                    <a class="post-category cat-3 Helvetica-bold" href="{{route('frontend.index')}}/show/news/all/name/{{ $news->subname }}">{!!$news->subname!!}</a>
                  </div>
                  <h3 class="post-title"><a class="Helvetica-light text-dark" href="{{route('frontend.index')}}/read/info/{{ $news->slug }}">{!!$news->name!!}</a></h3>
                </div>
              </div>
            </div>
            <!-- /post -->
            @endforeach
      </div>
     
    </div>
</section>
</main>
@endsection