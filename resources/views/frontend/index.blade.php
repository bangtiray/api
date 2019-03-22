@extends('frontend.layouts.app')

@section('content')
    <!--==========================
    Intro Section
  ============================-->
<section id="intro">

<div class="intro-content">
  <!-- <h2 class="font-Helvetica">Making <span>your ideas</span><br>happen!</h2>
  <div>
    <a href="#about" class="btn-get-started scrollto">Get Started</a>
    <a href="#portfolio" class="btn-projects scrollto">Our Projects</a>
  </div> -->
</div>

<div id="intro-carousel" class="owl-carousel">
  <div class="item responsive" style="background-image: url('img/intro-carousel/Banner-Slide-1.jpg');"></div>
  <div class="item responsive" style="background-image: url('img/intro-carousel/Banner-Slide-2.jpg');"></div>
  <div class="item responsive" style="background-image: url('img/intro-carousel/Banner-Slide-3.jpg');"></div>
  <div class="item responsive" style="background-image: url('img/intro-carousel/Slide-As-Kebakaran.png');"></div>
</div>

</section><!-- #intro -->

<main id="main">
<!-- produk -->
<section id="services">
  <div class="container">
    <div class="section-header">
      <h2 class="Helvetica"> @lang('applang.products')</h2>
    </div>

    <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start bg-gradient-blue ">
              <h3 class="mb-0">
                <a class="text-light" href="{{route('frontend.index')}}/page/products/standard">@lang('applang.standar')</a>
              </h3>
              
              <p class="card-text mb-auto">Produk standar asuransi jasatania</p>
              <a class="btn-continues text-dark" href="{{route('frontend.index')}}/page/products/standard" role="button">@lang('applang.more')</a>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]"  style="width: 250px; height: 250px;" src="{{ asset('img/cover-kebakaran.png' ) }}" data-holder-rendered="true">
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start  bg-gradient-orange">
              <h3 class="mb-0">
                <a class="text-light" href="{{route('frontend.index')}}/page/products/development">@lang('applang.kembang')</a>
              </h3>
              
              <p class="card-text mb-auto">Pengembangan produk demi majunya jalan</p>
              <!-- <a href="#" class="btn btn-lg">Continue reading</a> -->
              <a class="btn-continues text-dark" href="{{route('frontend.index')}}/page/products/development" role="button">@lang('applang.more')</a>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 250px; height: 250px;" src="{{ asset('img/cover-ternak.png' ) }}" data-holder-rendered="true" ">
          </div>
        </div>
      </div>
  </div>
  
</section><!-- #services -->
<!-- end produk -->

<section class="wow fadeInUp custom-grey">
    <div class="container">
      <div class="section-header">
        <h2 class="Helvetica">@lang('applang.news')</h2>
        
      </div>
      <div class="row">
      @foreach($news as $news)  
            <!-- post -->
            <div class="col-md-4">
             
              <div class="post">
                <a class="post-img" href="{{route('frontend.index')}}/read/info/{{ $news->slug }}"><img class="img-fluid rounded " src="{{route('frontend.index')}}/storage/img/blog/{!! $news->featured_image !!}" alt=""></a>
                <div class="post-body">
                  <div class="post-meta">
                    <span class="post-date Helvetica-light">  <i class="fas fa-eye"></i> {!!$news->count!!}  | {{ \Carbon\Carbon::parse($news->publish_datetime)->diffForHumans() }}  </span><br>
                    <!-- <a class="post-category cat-3 Helvetica" href="{{route('frontend.index')}}/show/news/all/name/{{ $news->subname }}">{!!$news->subname!!}</a> -->
                  </div>
                  <h3 class="post-title"><a class="Helvetica-bold" href="{{route('frontend.index')}}/read/info/{{ $news->slug }}">{!!$news->name!!}</a></h3>
                  {!!strlen($news->content) > 200 ? substr($news->content,0,200) : $news->content!!}...
                </div>
              </div>
            </div>
            <!-- /post -->
            @endforeach
            </div>
          <div class="col-md-12">
              <a href="{{route('frontend.index')}}/show/news/all/" class="btn-sm btn-blue pull-left">@lang('applang.newsother')</a>
            </div>
            <!-- <div class="col-md-3">
            <ul class="post-tags" >
                  <li><a href="#">Kategori ini adalah</a> </li>
                  <li><a href="#">test</a> </li>
                  <li><a href="#">test</a> </li>
                  <li><a href="#">test</a> </li>
                  <li><a href="#">test</a> </li>
                  <li><a href="#">test</a> </li>
                  
              </ul>
            </div> -->
      </div>
    </div>
</section>
<section id="contact" class="wow fadeInUp">
  <div class="container">
    <div class="section-header">
      <h2 class="Helvetica">@lang('applang.contact')</h2>
    </div>

    <div class="row contact-info">

      <div class="col-md-4">
        <div class="contact-address">
          <i class="ion-ios-location-outline"></i>
          <h3 class="Helvetica-light" >@lang('applang.address')</h3>
          <address>Gedung Agro Plaza Lantai 9. Jl. HR Rasuna Said Kav. X2 No. 1, Jakarta 12950.</address>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-phone">
          <i class="ion-ios-telephone-outline"></i>
          <h3 class="Helvetica-light">@lang('applang.phone')</h3>
          <p><a href="tel:+62215262529">(021) 526 2529</a></p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-email">
          <i class="ion-ios-email-outline"></i>
          <h3 class="Helvetica-light">Email</h3>
          <p><a href="mailto:headoffice@jastan.co.id">headoffice@jastan.co.id</a></p>
        </div>
      </div>

    </div>
  </div>

  <div class="container mb-4">
    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.5656422152747!2d106.83329802919783!3d-6.229073499718172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2916cad54fd5bbd8!2sPT+Asuransi+Jasa+Tania%2C+Tbk+Kantor+Pusat!5e0!3m2!1sid!2sid!4v1543575317553" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe> -->
      <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1T2KQxmHrliQb-lWmXb7JXgzTYVmbNC2Q" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>

</section><!-- #contact -->

</main>

@endsection