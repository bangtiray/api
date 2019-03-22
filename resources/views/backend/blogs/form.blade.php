<div class="box-body">
    <div class="form-group">
        {{ Form::label('name', trans('validation.attributes.backend.blogs.title'), ['class' => 'col-lg-2 control-label required']) }}

        <div class="col-lg-10">
            {{ Form::text('name', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.blogs.title'), 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form control-->

    <div class="form-group">
        {{ Form::label('name_en', trans('validation.attributes.backend.blogs.title_en'), ['class' => 'col-lg-2 control-label required']) }}

        <div class="col-lg-10">
            {{ Form::text('name_en', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.blogs.title_en'), 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form control-->

    <div class="form-group">
        {{ Form::label('subname', trans('validation.attributes.backend.blogs.subtitle'), ['class' => 'col-lg-2 control-label required']) }}

        <div class="col-lg-10">
            {{ Form::text('subname', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.blogs.subtitle'), 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form control-->
    <div class="form-group">
        {{ Form::label('categories', trans('validation.attributes.backend.blogs.category'), ['class' => 'col-lg-2 control-label required']) }}

        <div class="col-lg-10">
        @if(!empty($selectedCategories))
            {{ Form::select('categories[]', $blogCategories, $selectedCategories, ['class' => 'form-control tags box-size', 'required' => 'required']) }}
        @else
            {{ Form::select('categories[]', $blogCategories, null, ['class' => 'form-control tags box-size', 'required' => 'required']) }}
        @endif
        </div><!--col-lg-10-->
    </div><!--form control-->

    <div class="form-group">
        {{ Form::label('publish_datetime', trans('validation.attributes.backend.blogs.publish'), ['class' => 'col-lg-2 control-label required']) }}

        <div class="col-lg-10">
            @if(!empty($blog->publish_datetime))
                {{ Form::text('publish_datetime', \Carbon\Carbon::parse($blog->publish_datetime)->format('m/d/Y h:i a'), ['class' => 'form-control datetimepicker1 box-size', 'placeholder' => trans('validation.attributes.backend.blogs.publish'), 'required' => 'required', 'id' => 'datetimepicker1']) }}
            @else
                {{ Form::text('publish_datetime', null, ['class' => 'form-control datetimepicker1 box-size', 'placeholder' => trans('validation.attributes.backend.blogs.publish'), 'required' => 'required', 'id' => 'datetimepicker1']) }}
            @endif
        </div><!--col-lg-10-->
    </div><!--form control-->

    <div class="form-group">
        {{ Form::label('featured_image', trans('validation.attributes.backend.blogs.image'), ['class' => 'col-lg-2 control-label required']) }}
        @if(!empty($blog->featured_image))
            @if($blog->ext=='pdf')
            <div class="col-lg-1">  
               <a href="{{ Storage::disk('public')->url('img/blog/' . $blog->featured_image) }}" target="_blank"> <i class="fa fa-file-pdf-o fa-4x"></i></a>
            </div>
            @elseif($blog->ext=='doc' || $blog->ext=='doc')
            <div class="col-lg-1">  
               <a href="{{ Storage::disk('public')->url('img/blog/' . $blog->featured_image) }}" target="_blank"> <i class="fa fa-file-word-o fa-4x"></i></a>
            </div>
            @elseif($blog->ext=='xls' || $blog->ext=='xlsx')
            <div class="col-lg-1">  
               <a href="{{ Storage::disk('public')->url('img/blog/' . $blog->featured_image) }}" target="_blank"> <i class="fa fa-file-excel-o fa-4x"></i></a>
            </div>
            @elseif($blog->ext=='zip' || $blog->ext=='rar')
            <div class="col-lg-1">  
               <a href="{{ Storage::disk('public')->url('img/blog/' . $blog->featured_image) }}" target="_blank"> <i class="fa fa-file-archive-o fa-4x"></i></a>
            </div>
            @elseif($blog->ext=='ppt' || $blog->ext=='pptx')
            <div class="col-lg-1">  
               <a href="{{ Storage::disk('public')->url('img/blog/' . $blog->featured_image) }}" target="_blank"> <i class="fa fa-file-powerpoint-o fa-4x"></i></a>
            </div>
            @else
            <div class="col-lg-1">
                <img src="{{ Storage::disk('public')->url('img/blog/' . $blog->featured_image) }}" height="80" width="80">
            </div>
            @endif
            <div class="col-lg-5">
                <div class="custom-file-input">
                    <input type="file" name="featured_image" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" />
                    <label for="file-1"><i class="fa fa-upload"></i><span>Choose a file</span></label>
                </div>
            </div>
        @else
        
            <div class="col-lg-5">
                <div class="custom-file-input">
                        <input type="file" name="featured_image" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" />
                        <label for="file-1"><i class="fa fa-upload"></i><span>Choose a file</span></label>
                </div>
            </div>
        @endif
    </div><!--form control-->

    <div class="form-group">
        {{ Form::label('content', trans('validation.attributes.backend.blogs.content'), ['class' => 'col-lg-2 control-label required']) }}

        <div class="col-lg-10 mce-box">
            {{ Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.blogs.content')]) }}
        </div><!--col-lg-10-->
    </div><!--form control-->
    <div class="form-group">
        {{ Form::label('content_en', trans('validation.attributes.backend.blogs.content_en'), ['class' => 'col-lg-2 control-label required']) }}

        <div class="col-lg-10 mce-box">
            {{ Form::textarea('content_en', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.blogs.content_en')]) }}
        </div><!--col-lg-10-->
    </div><!--form control-->
    <div class="form-group">
        {{ Form::label('tags', trans('validation.attributes.backend.blogs.tags'), ['class' => 'col-lg-2 control-label required']) }}

        <div class="col-lg-10">
        @if(!empty($selectedtags))
           {{ Form::select('tags[]', $blogTags, $selectedtags, ['class' => 'form-control tags box-size', 'required' => 'required', 'multiple' => 'multiple']) }}
        @else
            {{ Form::select('tags[]', $blogTags, null, ['class' => 'form-control tags box-size', 'required' => 'required', 'multiple' => 'multiple']) }}
        @endif
        </div><!--col-lg-3-->
    </div><!--form control-->

    <div class="form-group">
        {{ Form::label('meta_title', trans('validation.attributes.backend.blogs.meta-title'), ['class' => 'col-lg-2 control-label']) }}

        <div class="col-lg-10">
            {{ Form::text('meta_title', null, ['class' => 'form-control box-size ', 'placeholder' => trans('validation.attributes.backend.blogs.meta-title')]) }}
        </div><!--col-lg-10-->
    </div><!--form control-->

    <div class="form-group">
        {{ Form::label('slug', trans('validation.attributes.backend.blogs.slug'), ['class' => 'col-lg-2 control-label']) }}

        <div class="col-lg-10">
            {{ Form::text('slug', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.blogs.slug'), 'disabled' => 'disabled']) }}
        </div><!--col-lg-10-->
    </div><!--form control-->

    <div class="form-group">
        {{ Form::label('cannonical_link', trans('validation.attributes.backend.blogs.cannonical_link'), ['class' => 'col-lg-2 control-label']) }}

        <div class="col-lg-10">
            {{ Form::text('cannonical_link', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.blogs.cannonical_link')]) }}
        </div><!--col-lg-10-->
    </div><!--form control-->


    <div class="form-group">
        {{ Form::label('meta_keywords', trans('validation.attributes.backend.blogs.meta_keyword'), ['class' => 'col-lg-2 control-label']) }}

        <div class="col-lg-10">
            {{ Form::text('meta_keywords', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.blogs.meta_keyword')]) }}
        </div><!--col-lg-10-->
    </div><!--form control-->

    <div class="form-group">
        {{ Form::label('meta_description', trans('validation.attributes.backend.blogs.meta_description'), ['class' => 'col-lg-2 control-label']) }}

        <div class="col-lg-10 mce-box">
            {{ Form::textarea('meta_description', null,['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.blogs.meta_description')]) }}
        </div><!--col-lg-3-->
    </div><!--form control-->

    <div class="form-group">
        {{ Form::label('status', trans('validation.attributes.backend.blogs.status'), ['class' => 'col-lg-2 control-label required']) }}

        <div class="col-lg-10">
           {{ Form::select('status', $status, null, ['class' => 'form-control select2 status box-size', 'placeholder' => trans('validation.attributes.backend.blogs.status'), 'required' => 'required']) }}
        </div><!--col-lg-3-->
    </div><!--form control-->
</div>

@section("after-scripts")
    <script type="text/javascript">

        Backend.Blog.selectors.GenerateSlugUrl = "{{route('admin.generate.slug')}}";
        Backend.Blog.selectors.SlugUrl = "{{url('/')}}";
        Backend.Blog.init();
        
    </script>
@endsection