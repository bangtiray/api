<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="available-tab" data-toggle="tab" href="#available" role="tab" aria-controls="available" aria-selected="true"><span class="Helvetica-light">@lang('applang.salvagea')</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="unavailable-tab" data-toggle="tab" href="#unavailable" role="tab" aria-controls="unavailable" aria-selected="false"><span class="Helvetica-light">@lang('applang.salvages')</span></a>
  </li>
 
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="available" role="tabpanel" aria-labelledby="available-tab">
  <br>
  @foreach($available as $avail)
    <div class="row col-md-12">
        <div class="col-md-4" >
            <img src="{{route('frontend.index')}}/storage/img/blog/{!! $avail->featured_image !!}"  class="img-thubmnails rounded img-fluid">
        </div>
        <div class="col-md-8">
          <p><a class="font-xs-l text-orange Helvetica-light" href="{{route('frontend.index')}}/read/salvage/info/detail/{{ $avail->slug }}">{!! $avail->name !!}
          ({{ \Carbon\Carbon::parse($avail->publish_datetime)->diffForHumans() }} )</a></p>
        </div>
    </div>
  @endforeach
  </div>
  <div class="tab-pane fade" id="unavailable" role="tabpanel" aria-labelledby="unavailable-tab">
  <br>
  @foreach($unavailable as $unavail)
    <div class="row col-md-12">
        <div class="col-md-4" >
            <img src="{{route('frontend.index')}}/storage/img/blog/{!! $unavail->featured_image !!}"  class="img-thubmnails rounded img-fluid">
        </div>
        <div class="col-md-8">
          <p><a class="font-xs-l text-orange Helvetica-light" href="{{route('frontend.index')}}/read/salvage/info/detail/{{ $unavail->slug }}">{!! $unavail->name !!}
          ({{ \Carbon\Carbon::parse($unavail->publish_datetime)->diffForHumans() }} )</a></p>
        </div>
    </div>
  @endforeach
  </div>
</div>

