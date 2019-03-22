@php
    use Illuminate\Support\Facades\Route;
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--                                                                                                                                                                                                   
 If you're looking, we're hiring :) Please Send Your CV to US
                      `:;:`                                                                            #                                                               
                     ,;;;;;;                                                                           #                                                               
                    .;;;;;;;:                                                                                                                                          
                    ;;;;;;;;;                             #;+#   #:#  ##   # `# ## ;+;#  :# ##'  #:+,  #                                                               
                    ;;;;;;;;;`                           +#  #: #   ; ##   # `#;`,`#  ## :#. `# ,;  ;  #                                                               
                    ;;;;;;;;;`                               #; ##    ##   # `#    .  +# :#   # .#:    #                                                               
                    ;;;;;;;;;                             ;# #;  ###  ##   # `#    .# +# :#   #  '##;  #                                                               
                    :;;;;;;;;                            ++  #;    ## ##   # `#   .#  +# :#   #    +#` #                                                               
                     ;;;;;;;                             #'  #; +   # '#  '# `#   +#  +# :#   # `   #` #          `                                                    
                      `;;;,                              ,++:#; .#,#`  ### # `#    ##++# :#   #  #:+#  #        ;;.                                                    
                                                                                                               ;;'.                                                    
                                                                                                              ';;;.                                                    
                   ,;'';;;;;''.                                                                              ';';;.                                                    
                ;';;;;';;;;;;;;;;:                                                                          .;;;;;.                                                    
      ;       '';;;;;;;;;;;;;;;;;;;;                        ;':         .;;;'';;`             `:;'';,`      ';;;;;,              `;;;;;;;`              ;;'';;;';      
     `      :;';;;;;;;;;;;;;;;;;;;;;;:                    `;;;:      .'';;;;;';;';.         ''';;;;;;;;':   ';;;;';'''''      `';;;;;;;;;;;:          ';;;;;;;;;';'    
     ;     ;;;;;;;;;;;;;;;;;;;;;;;;;;;'                   ';;;:    `';;;;;;;;;;;;;;;      ,;;;;;;;;;;;;;.   ;;;;;;;;;;;;     ';;;;;;;;;;;;;;;       `;;;;;;;;;;;;;;;:  
    ,,    ';;;;;;;;;;;;;;;;;;;;;;;;;;;''`                ';;;;:    .';;;;;;;;;;;;;;;:    ,;;;;;;;;;;;;';`   ;;;;;;;;;;;;     ;;;;;;;;;;;;;;'''      ';;;;;;;;;;;;;;;;. 
    ;    ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;'';                ;;;;;:    .'';;;;;;;;;;;;;;'    ';;;;;;;;;;;;;;    ;;;;;;;;;;;'     ;;;;;;;;;;;;;;'''`    '';;;;;;;;;;;;;;''; 
  ;`;   `;;;;;;;;;;;;';';;;;';;;;;;;;;;;;'              ;;;;;;:    .;';;':.,';';;;;;;:  ,;;;;;';     .';    ;;;;;;;;;;;'     ;'';;:.,;;;;;;;;;'   :;;;;;;;;';;;;;;;;;;,
  `';   ';;;;;;'';;`       `:;;;;;;;;;;;';;             ;';;;;:    .';.       ';;;;;;;  ';';;;'             ;;;;;;,          ;;:       ;;;;;;;;   ;;;;;;'''. .;;;;;;;;;
 :`';   ;;;;;;':               `';;;;;;;;;;:            ;;;;;;:    .,          ;;;;';;  ';;;;;;             ;;;;'',          ;          ';;;;;;   ;;;;;;;;     ;;;;;;;;
 ;`;:   '';;;.   `'':...,;'';     ';'';;;;;;            ;;;;;;:                ';;;;;;  ;;';;;;',           ;;;;;;,                     :';;;;;   ;;;;;;;       ;;;;;;;
 ;.':   ;;;;  `;             ,';   .;';;;;;;;           ;;;;;;:        `;'';';'';;;;;;  `;;;;;;;';;;`       ;;;;;;,              :';;''':;;;;;;   ;;;;;;'       ;;;;;;;
.;,;:   ;'` .                   ':   ;;;;;;;;           ;;;;;;:      :';';;;';;;;;;;;;   ;;''';;;;;;;;,     ;;;;;;,           .;;;;;;;;;;;;;;;;   ;;;;;;;       ';;;;;;
:;:;;                            .'   ;;;;;;;`          ;;;;;;:     ';;;;;;;;;;;;;;;;;    ;;;;;;;;;;;;;'    ;;;;;;,          ;';;;;';;';;;';;;;   ;;;;;;:       ';;;;;;
;;:;;                              '  .;;;;;';          ;;;;;;:    ;;;;;;;;'';';;;;;;;     ;;;;;;;;;;;;;'   ;;;;;;,         '';;;;;;;';'';;;;;;   ;;;;;;;       ';;;;;;
;;,';                               '  ;;;;;;'          ;;;;;;:   ;;;;;';`      ;;;;;;       ,'';;;;;;;;;`  ;;;;;;,        ;;;;;;'.      ;';;;;   ;;;;;;;       ';;;;;;
;;`';`                               ' ,';;;;;          ;;;;;;:  .;;;;;'       .;;;;;;          `'';;;;;;;  ;;;;;;,        ;;;;;;        ;;;;;;   ;;;;;;;       ';;;;;;
,; ';;                               :`,';;;;;          ;;;;;;:  ';;;;;.       ;;;;;;;            .;;;;;;'  ;;;;;;:       :';;;;;       :;;;;;;   ;;;;;;;       ';;;;;;
`;`;;;                                '.:;;;;;          ;;;;;;:  ;;;;;;`      `;;;;;;;             ;;;;;;'  ;;;;;;'    `  ';;;;;:       ;;;;;;;   ;;;;;;;       ';;;;;;
 ;;,;;;                               ;,,;;;;'          ;;;;;;:  ';;;;''     `;;;;;;;;   '`       `;;;;;;'  ';;;;;';'';;  ';;;;;;      ;;;;;;;;   ;;;;;;;       ';;;;;;
 ;; ;;;`                              `:,;;';.          ;;;;;;:  ';;;;;;',.:'';;;;;;;;   ;';':.`.;;;;;;;'.  ;';;;;;;;;;;  ;;;;;;;;:.,';;;;';;;;   ;;;;;;;       ';;;;;;
 `;:,;;;`                             ,',';;;           ;;;;;;:  ;;;;;;;;;;;;;;';;;;;;   ;;;;;;;;;';;;;;;   :;;;;;;;;;;;  .;';;;;;;';;;;;;';;;;   ;;;;;;;       ';;;;;;
  ;' ;;';`                           .:',;;;;           ;;;;;;:   ;;;;;;;;;;';;`;;;;;;  `;;;;';;';;;;;;;`    ';;;;;;;;;;   '';;;;;;;;;;':'';;;;   ;;;;;;;       ';;;;;;
  `;; ;;;;:                         ::,;:;';           `;;;;;;:   .;;;;;;;;;';` ;;;;;;  ,;'';;;;;;'';;'      .'';;;;;;;'    ;;;;;;;;;;;: ';;;;'   ;;;;;;;       ;;;;;;;
   ;;:`;;;;;`                     ,:::::';;,      '.   ;;;;;;;,     '';;';;';   ';;;;'   ';;;;;;;;;;',        .;;;;;;;;`     ';;;;;;;'   ;;';;'   ;;;;;;;       ';;;;;;
    ;;.`;;;;;;,                `::::::',;;:       ';;;';;;;;;;`       .::,`                   `..`              `:'':          `,:,`                                   
     ';.`;;;;;;;;;.`       .:::::::::,'';.        ;;;;;;;;;;;'                                                                                                         
      ;;: ;;;;;;;;;;;;;;;;;;;:::::::,';'          ;;;;;;;;;;;'                                                                                                         
       ;;; `;;;;;;;;;;;;;;;;::::::::''`           '';;;;;;;';                                                                                                          
        ;;;, .;;;;;;;;;;;;;;:::::::'`             '';;;;;;;;,                                                                                                          
         `;;;, `;;;;;;;;;;;:::::;' ``              `;;;;;;'`                                                                                                           
           .;;''```:';;;;:;;'''`,;`                                                                                                                                    
              ;;';;;;,....,;;';`                                                                                                                                       
                 .;;;;;;;;,`                                                                                                   
                                                                                                                                                                   
-->                                                                                                                                                                                                        
                                                                                                                                                         
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', app_name())</title>

        <!-- Meta -->
        <meta name="keywords" content="{{settings()->seo_keyword}}">
        <meta name="description" content="{{settings()->seo_description}}">
        <meta name="author" content="{{settings()->copyright_text}}">
        @include('frontend.includes.icon')

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
       
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
            
        @yield('meta')

        <!-- Styles -->
        @yield('before-styles')

        <!-- Check if the language is set to RTL, so apply the RTL layouts -->
        <!-- Otherwise apply the normal LTR layouts -->
        @langRTL
            {{ Html::style(getRtlCss(mix('css/frontend.css'))) }}
        @else
            {{ Html::style(mix('css/frontend.css')) }}
        @endif
        
        {!! Html::style('lib/bootstrap/css/bootstrap.min.css') !!}

         <!-- Libraries CSS Files -->
         {!! Html::style('lib/font-awesome/css/font-awesome.min.css') !!}
         {!! Html::style('lib/animate/animate.min.css') !!}
         {!! Html::style('lib/ionicons/css/ionicons.min.css') !!}
         {!! Html::style('lib/owlcarousel/assets/owl.carousel.min.css') !!}
         {!! Html::style('lib/magnific-popup/magnific-popup.css') !!}
         {!! Html::style('lib/ionicons/css/ionicons.min.css') !!}
         {!! Html::style('css/style.css') !!}
         <!-- {!! Html::style('css/jtcolor.css') !!}-->
         {!! Html::style('css/flag-icon/flag-icon.min.css') !!}
         <!-- {!! Html::style('css/custom-timeline.css') !!} -->
        
        @yield('after-styles')

        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
        <?php
            if(!empty($google_analytics)){
                echo $google_analytics;
            }
        ?>
        <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-131585401-1"></script>
            <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-131585401-1');
            </script>


    </head>
    <body id="app" >
        
        <section id="topbar" class="d-none d-lg-block">
            <div class="container clearfix">
            <div class="contact-info float-left">
                <i class="fa fa-envelope-o text-orange"></i> <a href="mailto:headoffice@jastan.co.id" class="Helvetica-light">headoffice@jastan.co.id</a>
                <i class="fa fa-phone"></i> <a href="#" class="Helvetica-light">(021) 526 2529</a> 
            </div>
            <div class="social-links float-right">
                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="https://www.facebook.com/asuransi.jastan.7" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                <a href="#" class="google-plus"><i class="fab fa-google-plus"></i></a>
               
            </div>
            </div>
        </section>
            @include('includes.partials.logged-in-as')
            @include('frontend.includes.navmenu')
            @include('includes.partials.messages')
            @yield('content')
           
            
            @include('frontend.includes.footer')

            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        <!-- Scripts -->
        @yield('before-scripts')
        {!! Html::script(mix('js/frontend.js')) !!}
        @yield('after-scripts')
        {{ Html::script('js/jquerysession.js') }}
        {{ Html::script('js/frontend/frontend.js') }}
       
        <!-- JavaScript Libraries -->
        {!! Html::script('lib/jquery/jquery.min.js') !!}
        {!! Html::script('lib/jquery/jquery-migrate.min.js') !!}
        {!! Html::script('lib/bootstrap/js/bootstrap.bundle.min.js') !!}
        {!! Html::script('lib/easing/easing.min.js') !!}
        {!! Html::script('lib/superfish/hoverIntent.js') !!}
        {!! Html::script('lib/superfish/superfish.min.js') !!}
        {!! Html::script('lib/wow/wow.min.js') !!}
        {!! Html::script('lib/owlcarousel/owl.carousel.min.js') !!}
        {!! Html::script('lib/magnific-popup/magnific-popup.min.js') !!}
        {!! Html::script('lib/sticky/sticky.js') !!}
        {!! Html::script('contactform/contactform.js') !!}
        {!! Html::script('js/main.js') !!}
        {!! Html::script('js/1i8next.min.js') !!}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.25/vue.min.js"></script>
        <script src="https://www.gstatic.com/firebasejs/5.7.3/firebase.js"></script>
        {!! Html::script('js/base.js') !!}
        {!! Html::script('js/select2/select2.js') !!}
                
        <script type="text/javascript">
            if("{{Route::currentRouteName()}}" !== "frontend.user.account")
            {
                $.session.clear();
            }
            
        </script>
        <script type="text/javascript">
            $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $(function() {
            $('body').on('click', '.pagination a', function(e) {
                e.preventDefault();

                $('#loadAnnouncement a').css('color', '#dfecf6');
                var url = $(this).attr('href');  
                getArticles(url);
                window.history.pushState("", "", url);
            });

            function getArticles(url) {
                $.ajax({
                    url : url  
                }).done(function (data) {
                    $('.articles').html(data);  
                }).fail(function () {
                    alert('Articles could not be loaded.');
                });
            }
        });

        function kabupaten(){
          
        }
        function changeLanguange(lang){
            var locale =lang;
    
            var _token = $("input[name=csrf-token]").val();

            $.ajax({
                url:"/language",
                type:"post",
                data: {locale : locale, _token: _token},
                dataType:"json",
                success:function(data){

                }, 
                error: function(data){

                }, 
                beforeSend:function(data){

                },
                complete: function(data){
                  window.location.reload(false);
                   // loadPage();
                }
            })
        }
        $(function(){
            $("#addClass").click(function () {
                    $('#qnimate').addClass('popup-box-on');
                        });
                    
                        $("#removeClass").click(function () {
                    $('#qnimate').removeClass('popup-box-on');
                        });
            })

           
        </script>
        <script>
    
		$('#blogCarousel').carousel({
				interval: 5000
		});


        $(document).ready(function() {
                $('#kirimPengajuan').click(function(){
                    var data={
                        url_site : $('#url_site').val(),
                        user_name : $('#user_name').val(),
                        user_email : $('#user_email').val(),
                        user_address : $('#user_address').val(),
                        provinsi : $('#provinsi option:selected').text(),
                        kabupaten : $('#kabupaten option:selected').text(),
                        kecamatan : $('#kecamatan option:selected').text(),
                        kelurahan : $('#kelurahan option:selected').text(),
                        phone : $('#phone').val(),
                        image_path: $('#image_path').val(),
                        _token : $("input[name=csrf-token]").val()
                    }
                    $.ajax({
                        url:"/posting",
                        method:"POST",
                        data:data,
                            success:function(data){
                                jQuery.each(data.errors, function(key, value){
                                    jQuery('.alert-danger').show();
                                    jQuery('.alert-danger').append('<p>'+value+'</p>');
                                });
                            }
                    });
                })
                $('#provinsi').change(function(){
                    if($(this).val() !=''){

                        var value= $(this).val();
                        var dependent = $(this).data('dependent');
                        var _token = $("input[name=csrf-token]").val();
                        $.ajax({
                            url:"/selectkabupaten",
                            method:"POST",
                            data:{value : value, _token:_token, dependent : dependent},
                            success:function(result){
                                $('#'+dependent).html(result);
                                $('#kecamatan').html('');
                                $('#kelurahan').html('');
                                
                            }
                        })
                    }
                });

                $('#kabupaten').change(function(){
                    if($(this).val() !=''){

                        var value= $(this).val();
                        var dependent = $(this).data('dependent');
                        var _token = $("input[name=csrf-token]").val();
                        $.ajax({
                            url:"/selectkecamatan",
                            method:"POST",
                            data:{value : value, _token:_token, dependent : dependent},
                            success:function(result){
                                $('#'+dependent).html(result);
                                $('#kelurahan').html('');
                            }
                        })
                    }
                });
                $('#kecamatan').change(function(){
                    if($(this).val() !=''){

                        var value= $(this).val();
                        var dependent = $(this).data('dependent');
                        var _token = $("input[name=csrf-token]").val();
                        $.ajax({
                            url:"/selectkelurahan",
                            method:"POST",
                            data:{value : value, _token:_token, dependent : dependent},
                            success:function(result){
                                $('#'+dependent).html(result);
                            }
                        })
                    }
                });
                $("#myCarousel").on("slide.bs.carousel", function(e) {
                    var $e = $(e.relatedTarget);
                    var idx = $e.index();
                    var itemsPerSlide = 3;
                    var totalItems = $(".carousel-item").length;

                    if (idx >= totalItems - (itemsPerSlide - 1)) {
                    var it = itemsPerSlide - (totalItems - idx);
                    for (var i = 0; i < it; i++) {
                        // append slides to end
                        if (e.direction == "left") {
                        $(".carousel-item")
                            .eq(i)
                            .appendTo(".carousel-inner");
                        } else {
                        $(".carousel-item")
                            .eq(0)
                            .appendTo($(this).find(".carousel-inner"));
                        }
                    }
                    }
                });

               
                $('.pilih2').select2();
            });
           
            
        </script>
        <script id="dsq-count-scr" src="//jastan.disqus.com/count.js" async></script>
        @include('includes.partials.ga')

    </body>
</html>