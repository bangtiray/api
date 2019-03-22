@extends('frontend.layouts.app')
@section('title',  'Gallery')
@section('content')
    <section id="portfolio" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
        <h2 class="Helvetica-bold"> @lang('applang.gallery')</h2>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row no-gutters">
        @foreach($data as $ap)
          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="{{route('frontend.index')}}/storage/img/blog/{!! $ap->featured_image !!}" class="portfolio-popup" >
                <img src="{{route('frontend.index')}}/storage/img/blog/{!! $ap->featured_image !!}" alt="" width="329.75px" height="247.3px">
                  
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">{!! $ap->name !!}</h2></div>
                </div>
              </a>
            </div>
          </div>

        @endforeach

        </div>

      </div>
    </section>
@endsection