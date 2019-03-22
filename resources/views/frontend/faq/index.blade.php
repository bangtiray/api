@extends('frontend.layouts.app')

@section('content')
    <!-- Accordion -->
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<div class="container-fluid bg-gray" id="accordion-style-1">
	<div class="container">
		<section>
			<div class="row">
				<div class="col-12">
					<h1 class="text-green mb-4 text-center Helvetica-bold">Frequently Asked Questions</h1>
				</div>
				<div class="col-10 mx-auto">
					<div class="accordion" id="accordionExample">
                        @foreach($faq as $data)
						<div class="card">
							<div class="card-header" id="heading{{$data->id}}">
								<h5 class="mb-0">
							<button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse{{$data->id}}" aria-expanded="true" aria-controls="collapse{{$data->id}}">
							  <i class="fa fa-plus main"></i><i class="fa fa-angle-double-right mr-3"></i>{{$data->question}}.
							</button>
						  </h5>
							</div>

							@if($data->id == 1)
							<div id="collapse{{$data->id}}" class="collapse show fade" aria-labelledby="heading{{$data->id}}" data-parent="#accordionExample">
							@else
							<div id="collapse{{$data->id}}" class="collapse fade" aria-labelledby="heading{{$data->id}}" data-parent="#accordionExample">
							@endif
								<div class="card-body">
                                {!!$data->answer!!}
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>	
			</div>
		</section>
	</div>
</div>
@endsection