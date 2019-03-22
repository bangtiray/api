@extends('frontend.layouts.app')
@section('title',  $page->title)
@section('content')
<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="section-header">
                <h2 class="Helvetica-light"> {!! $page->title !!}</h2>
                
                    <div class="col col-lg Helvetica-light">
                        @if( Config::get('app.locale') =='id' )
                        <p> {!! $page->description !!}</p>
                        @elseif(Config::get('app.locale')=='en')
                        <p> {!! $page->description_en !!}</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="section-header" id="menu-pinggir">
                    <h5 class="Helvetica-light"> </h5>
                    <div class="col col-lg Helvetica-light">
                    <ul class="list-group">
                        <li class="list-group-item {{ (\Request::route()->getName() == 'this.route') ? 'active' : '' }}"><a  href="{{route('frontend.index')}}/pages/riwayat-singkat-perseroan">@lang('applang.profile')</a></li>
                        <li class="list-group-item {{ (\Request::route()->getName() == 'this.route') ? 'active' : '' }}"><a  href="{{route('frontend.index')}}/pages/visi-dan-misi-perusahaan">@lang('applang.visimisi')</a></li>
                        <li class="list-group-item {{ (\Request::route()->getName() == 'this.route') ? 'active' : '' }}"><a  href="{{route('frontend.index')}}/pages/nilai-inti-perusahaan">@lang('applang.inti')</a></li>
                        <li class="list-group-item {{ (\Request::route()->getName() == 'this.route') ? 'active' : '' }}"><a  href="{{route('frontend.index')}}/pages/struktur-organisasi-pt-asuransi-jasa-tania-tbk">@lang('applang.strukturbagan')</a></li>
                        <li class="list-group-item {{ (\Request::route()->getName() == 'this.route') ? 'active' : '' }}"><a  href="{{route('frontend.index')}}/pages/mars-asuransi-jasatania">@lang('applang.mars')</a></li>
                        <li class="list-group-item {{ (\Request::route()->getName() == 'this.route') ? 'active' : '' }}"><a  href="{{route('frontend.index')}}/pages/corporate-identity">@lang('applang.identity')</a></li>
                    
                    </ul>
</div>
                </div>
        </div>
    </div>
    
</section>                    
@endsection