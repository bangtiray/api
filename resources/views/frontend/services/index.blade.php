@extends('frontend.layouts.app')
@section('title',  'Service')
@section('content')
<section id="intro">

<div class="intro-content">
</div>

<div id="intro-carousel" class="owl-carousel" >
  <div class="item" style="background-image: url('../img/services.png');"></div>
  <div class="item" style="background-image: url('../img/services.png');"></div>

</div>

</section><!-- #intro -->

<!--==========================
  Services Section
============================-->
<section id="services">
  <div class="container">
    <div class="section-header">
      <h2 class="Helvetica-bold"> @lang('applang.products')</h2>
    </div>

    <div class="row">

      <div class="col-lg-4">
        <div class="box wow fadeInLeft">
          <div class="icon"><img src="../img/kendaraan.png" class="img-fluid" style="width:73.14px; height:64;"></div>
          <h5 class="title"><a href="">Asuransi Kebakaran</a></h5>
          <p></p>
          <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident etiro rabeta lingo.</p>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="box wow fadeInRight">
          <div class="icon"><img src="../img/psaki.png" class="img-fluid" style="width:73.14px; height:64;"></div>
          <h4 class="title"><a href="">Dolor Sitema</a></h4>
          <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata nodera clas.</p>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="box wow fadeInLeft" data-wow-delay="0.2s">
          <div class="icon"><img src="../img/engginer.png" class="img-fluid" style="width:73.14px; height:64;"></div>
          <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
          <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur trinige zareta lobur trade.</p>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="box wow fadeInRight" data-wow-delay="0.2s">
          <div class="icon"><i class="fa fa-map"></i></div>
          <h4 class="title"><a href="">Magni Dolores</a></h4>
          <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum rideta zanox satirente madera</p>
        </div>
      </div>

    </div>

  </div>
  
</section><!-- #services -->

@endsection