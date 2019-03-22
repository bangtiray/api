<div  id="loadAnnouncement">
        @foreach($blogs as $blog)
        
        <div class="col-md-12">
								<div class="post post-row">
									<a class="post-img" href="{{route('frontend.index')}}/read/info/{{ $blog->slug }}"><img class="rounded img-fluid" src="{{route('frontend.index')}}/storage/img/blog/{!! $blog->featured_image !!}" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
										<span class="post-date Helvetica-light text-orange">  {{ \Carbon\Carbon::parse($blog->publish_datetime)->diffForHumans() }}  <i class="fas fa-eye"></i> {!!$blog->count!!} </span><br>
                    					<a class="post-category cat-3 Helvetica-bold" href="{{route('frontend.index')}}/show/news/all/name/{{ $blog->subname }}">{!!$blog->subname!!}</a>
										</div>
										<h3 class="post-title Helvetica-light text-dar"><a href="/read/info/{{ $blog->slug }}">{{$blog->name}}</a></h3>
										<!-- <p> {!!strlen($blog->content) > 200 ? substr($blog->content,0,200) : $blog->content!!}...</p> -->
									</div>
								</div>
              </div>
              
          <!-- <li><i class="ion-android-checkmark-circle"></i> <a class="font-xs-l text-orange Helvetica-light" href="/read/info/{{ $blog->slug }}">{{$blog->name}}  &nbsp ({{ \Carbon\Carbon::parse($blog->publish_datetime)->diffForHumans() }} )</a> -->
      
        @endforeach
         
		<div class="col-md-12">
		{{ $blogs->links() }}
		</div>
        
</div>