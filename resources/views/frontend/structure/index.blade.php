@extends('frontend.layouts.app')
@section('title',  'Management')
@section('content')

<div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            @foreach($directors as $director)
            <div class="col-md-12">
              <div class="card mb-4 ">
              <a  href="{{route('frontend.index')}}/read/info/{{ $director->slug }}"><img class="card-img-top" src="{{route('frontend.index')}}/storage/img/blog/{!! $director->featured_image !!}" alt="{!! $director->name !!}"/></a>
                <div class="card-body">
                  <p class="card-title font-xs-l text-dark Helvetica-light">{!! $director->subname !!}</p>
                  <p class="card-text">{!! $director->name !!}</p>
                  <!-- <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      
                      <a class="btn btn-block btn-outline-success  Helvetica-light" href="{{route('frontend.index')}}/read/info/{{ $director->slug }}">View</a>
                    </div>
                    
                  </div> -->
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>


<section id="team" class="wow ">
  <div class="container">
    <div class="section-header">
      <h2 class="Helvetica-bold">Direktur</h2>
    </div>
    <div class="row">
    @foreach($directors as $director)
      <div class="col-lg-3 col-md-3">
        <div class="member">
        <a class="font-xs-l text-orange Helvetica-light hover-fade" href="{{route('frontend.index')}}/read/info/{{ $director->slug }}"><div class="pic"><img  class="rounded" src="{{route('frontend.index')}}/storage/img/blog/{!! $director->featured_image !!}" alt="{!! $director->name !!}" ></a></div>
        </div>
      </div>
      @endforeach
      
    </div>

  </div>
</section><!-- #team -->


<section id="team" class="wow ">
  <div class="container">
    <div class="section-header">
      <h2 class="Helvetica-bold">Komisaris</h2>
    </div>
    <div class="row">
    @foreach($directors as $director)
      <div class="col-lg-3 col-md-6">
        <div class="member">
        <a class="font-xs-l text-orange Helvetica-light hover-fade" href="{{route('frontend.index')}}/read/info/{{ $director->slug }}"><div class="pic"><img  class="rounded" src="{{route('frontend.index')}}/storage/img/blog/{!! $director->featured_image !!}" alt="{!! $director->name !!}" ></a></div>

        </div>
      </div>
      @endforeach
      
    </div>

  </div>
</section><!-- #team -->

<section id="team" class="wow ">
  <div class="container">
    <div class="section-header">
      <h2 class="Helvetica-bold">Sekretaris</h2>
    </div>
    <div class="row">
    @foreach($directors as $director)
      <div class="col-lg-3 col-md-6">
        <div class="member">
        <a class="font-xs-l text-orange Helvetica-light hover-fade" href="{{route('frontend.index')}}/read/info/{{ $director->slug }}"><div class="pic"><img  class="rounded" src="{{route('frontend.index')}}/storage/img/blog/{!! $director->featured_image !!}" alt="{!! $director->name !!}" ></a></div>
        </div>
      </div>
      @endforeach
      
    </div>

  </div>
</section><!-- #team -->


@endsection