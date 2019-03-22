@extends('frontend.layouts.app')
@section('title',  trans('applang.announcement'))
@section('content')
<section id="about" class="wow">
  <div class="container">
    <div class="row">
        <div class="col-lg-9 ">
            <div class="section-header">
            <h2 class="Helvetica-bold">@lang('applang.announcement')</h2>
            </div>
        <span class="articles"> @include('frontend.includes.announcement')</span>
      </div>
      <div class="col-lg-3 ">
            <div class="section-header">
            <h2 class="Helvetica-bold">Tags</h2>
            </div>
            <ul class="post-tags">
                
                  @foreach($tags as $tag)
                  <li><a href="{{route('frontend.index')}}/tags/selection/{{$tag->name}}" >#{{$tag->name}}</a> </li>
                  @endforeach
                </div>
              </ul>
      </div>
    </div>

  </div>
</section><!-- #about -->
@endsection