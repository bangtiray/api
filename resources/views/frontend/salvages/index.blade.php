@extends('frontend.layouts.app')
@section('title',  $pages->name)
@section('content')
<section id="services">
  <div class="container">
    <div class="section-header">
      
      <div class="row">
        <div class="col-md-12">
          <!-- <img src="{{route('frontend.index')}}/storage/img/blog/{!! $pages->featured_image !!}" alt="{!! $pages->name !!}" class="img-fluid img-thubmnail rounded" > -->
        </div>
        <div class="clearfix"></div>
        <div class="col col-lg Helvetica-light">
            <h2 class="text-orange Helvetica-light"> {!! $pages->name !!}</h2>
          <p>{!! $pages->content !!}</p>
       
        <p></p>
        <p>
        <div id="disqus_thread"></div>
            <script>

            /**
            *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
            *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
            /*
            var disqus_config = function () {
            this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
            this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
            };
            */
            (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://jastan.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
            })();
            </script>
            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
        </p>
        </div>
      </div>
      
    </div>
    </div>
</section>
                
@endsection