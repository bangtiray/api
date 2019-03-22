<header id="header">
    <div class="container">

      <div id="logo">
        <!-- <h1><a href="/" class="scrollto">Jast<span>an</span></a></h1> -->
        <a href="{{ route('frontend.index') }}" class="logo"><img class="navbar-brand" src="{{route('frontend.index')}}/storage/img/logo/{{settings()->logo}}" ></a>
      </div>
      
      <nav id="nav-menu-container" class="Helvetica-light">
        <ul class="nav-menu">          
          <li class="menu-has-children"><a href="javascript:void(0)">@lang('applang.about')</a>
            <ul>
              <li><a class="{{ (\Request::route()->getName() == 'this.route') ? 'active' : '' }}" href="{{route('frontend.index')}}/pages/riwayat-singkat-perseroan">@lang('applang.profile')</a></li>
              <li><a class="{{ (\Request::route()->getName() == 'this.route') ? 'active' : '' }}" href="{{route('frontend.index')}}/pages/visi-dan-misi-perusahaan">@lang('applang.visimisi')</a></li>
              <li><a class="{{ (\Request::route()->getName() == 'this.route') ? 'active' : '' }}" href="{{route('frontend.index')}}/pages/nilai-inti-perusahaan">@lang('applang.inti')</a></li>
              <li><a class="{{ (\Request::route()->getName() == 'this.route') ? 'active' : '' }}" href="{{route('frontend.index')}}/pages/struktur-organisasi">@lang('applang.strukturbagan')</a></li>
              <li><a class="{{ (\Request::route()->getName() == 'this.route') ? 'active' : '' }}" href="{{route('frontend.index')}}/page/management">@lang('applang.structure')</a></li>
              <li><a class="{{ (\Request::route()->getName() == 'this.route') ? 'active' : '' }}" href="{{route('frontend.index')}}/page/appraisement">@lang('applang.appraisement')</a></li>
              <li><a class="{{ (\Request::route()->getName() == 'this.route') ? 'active' : '' }}" href="{{route('frontend.index')}}/pages/mars-asuransi-jasatania">@lang('applang.mars')</a></li>
              <li><a class="{{ (\Request::route()->getName() == 'this.route') ? 'active' : '' }}" href="{{route('frontend.index')}}/pages/corporate-identity">@lang('applang.identity')</a></li>
              
              
             
            </ul> 
          </li>
          <li class="menu-has-children"><a href="javascript:void(0)">@lang('applang.produk')</a>
            <ul>
            <li><a class="{{ (\Request::route()->getName() == 'this.route') ? 'active' : '' }}" href="{{route('frontend.index')}}/page/products/standard">@lang('applang.standar')</a></li>
              <li><a class="{{ (\Request::route()->getName() == 'this.route') ? 'active' : '' }}" href="{{route('frontend.index')}}/page/products/development">@lang('applang.kembang')</a></li>
           </ul>
          </li>

          <li class="menu-has-children"><a href="javascript:void(0)">@lang('applang.media')</a>
            <ul>
            
             <li><a class="{{ (\Request::route()->getName() == 'this.route') ? 'active' : '' }}" href="{{route('frontend.index')}}/show/news/all/">@lang('applang.news')</a></li>
             <li><a class="{{ (\Request::route()->getName() == 'this.route') ? 'active' : '' }}" href="{{route('frontend.index')}}/page/announcement">@lang('applang.announcement')</a></li>
             <li><a class="{{ (\Request::route()->getName() == 'this.route') ? 'active' : '' }}" href="{{route('frontend.index')}}/page/gallery">@lang('applang.gallery')</a></li>
            </ul> 
          </li>
          <li class="menu-has-children"><a href="javascript:void(0)">@lang('applang.services')</a>
            <ul>
             <li><a class="{{ (\Request::route()->getName() == 'this.route') ? 'active' : '' }}" href="javascript:void(0)">@lang('applang.jaringan')</a></li>
             <li><a class="{{ (\Request::route()->getName() == 'this.route') ? 'active' : '' }}" href="{{route('frontend.index')}}/pages/claim-procedure">@lang('applang.klaim')</a></li>
             <li><a class="{{ (\Request::route()->getName() == 'this.route') ? 'active' : '' }}" href="javascript:void(0)">@lang('applang.sppa')</a></li>
             <li><a class="{{ (\Request::route()->getName() == 'this.route') ? 'active' : '' }}" href="javascript:void(0)">@lang('applang.brosur')</a></li>
            </ul> 
          </li>
          <li class="menu-has-children"><a href="javascript:void(0)">Investor</a>
            <ul>
              <li><a class="{{ (\Request::route()->getName() == 'this.route') ? 'active' : '' }}" href="{{route('frontend.index')}}/page/annual-report">@lang('applang.fin')</a></li>
              <li><a class="{{ (\Request::route()->getName() == 'this.route') ? 'active' : '' }}" href="javascript:void(0)">@lang('applang.annual')</a></li>
              <li><a class="{{ (\Request::route()->getName() == 'this.route') ? 'active' : '' }}" href="javascript:void(0)">@lang('applang.holder')</a></li>
            </ul> 
          </li>
        
          
          <!-- <li><a class="{{ (\Request::route()->getName() == 'this.route') ? 'active' : '' }}" href="#contact">@lang('applang.contactmenu')</a></li> -->
          
          <li class="menu-has-children"><a href="javascript:void(0)">@lang('applang.info')</a>
            <ul>
            <li><a class="{{ (\Request::route()->getName() == 'this.route') ? 'active' : '' }}" href="{{route('frontend.index')}}/page/carrier">@lang('applang.carrier')</a></li>
            <li><a class="{{ (\Request::route()->getName() == 'this.route') ? 'active' : '' }}" href="{{route('frontend.index')}}/page/carrier">@lang('applang.agen')</a></li>
              <li><a class="{{ (\Request::route()->getName() == 'this.route') ? 'active' : '' }}" href="{{route('frontend.index')}}/page/gallery">@lang('applang.salvage')</a></li>
            </ul>
          </li>

          <!-- <li><a class="{{ (\Request::route()->getName() == 'this.route') ? 'active' : '' }}" href="{{route('frontend.index')}}/show/faq-asuransi-jastan">FAQ</a></li> -->
          
          
          @if( Config::get('app.locale') =='en' )
          
          <!-- <li class="header-notification lng-dropdown">
              <a href="#" id="dropdown-active-item">
                  <i class="flag-icon flag-icon-gb m-r-5"></i> EN
              </a>
              <ul class="show-notification">
                <li>
                <a href="#" data-lng="id" onclick="changeLanguange('id')"><i class="flag-icon flag-icon-id m-r-5"></i> INA</a>
                </li>
              </ul>
          </li> -->
          <li> <a href="javascript:void(0)" data-lng="id" onclick="changeLanguange('id')"><i class="flag-icon flag-icon-id m-r-5"></i> INA</a></li>
          
          @elseif(Config::get('app.locale')=='id')
          <!-- <li class="header-notification lng-dropdown">
              <a href="#" id="dropdown-active-item">
                  <i class="flag-icon flag-icon-id m-r-5"></i> INA
              </a>
              <ul class="show-notification">
                <li>
                <a href="#" data-lng="en" onclick="changeLanguange('en')"><i class="flag-icon flag-icon-gb m-r-5"></i> EN</a>
                </li>
              </ul>
          </li> -->
          <li> <a href="javascript:void(0)" data-lng="en" onclick="changeLanguange('en')"><i class="flag-icon flag-icon-gb m-r-5"></i> EN</a></li>
          @endif
          <li class="s-icon">
              <a href="javascript:void(0)" id="addClass"><i class="fas fa-search"></i></a>
          </li>
        </ul>
      </nav><!-- #nav-menu-container -->

      <div id="qnimate" class="off">
            <div id="search" class="open">
            <button data-widget="remove" id="removeClass" class="close" type="button">×</button>
         
              <form action="{{route('frontend.index')}}/search" method="get" autocomplete="off">
                    <input type="text" placeholder="@lang('applang.typehere')"  value="" name="key" id="key">
                    <button class="btn btn-lg btn-site" type="submit"><span class="glyphicon glyphicon-search"></span> Search</button>
            </form>
            
            </div>
      </div>
        
    </div>
  </header><!-- #header -->