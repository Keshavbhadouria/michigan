 @include('master.master')
 @foreach($page as $value)
 @if($value->section_title == 'inspection_banner')
     <style>
		.service1 {
		background-image: url('{{asset('public/uploads')}}/{{$value->data}}');
	     }
	</style>
@endif
@endforeach

			<section class = "service1">
				<div class = "services-head">
				@foreach($page as $value)
				@if($value->section_title == 'ins_head')
				<h1><strong>{{$value->data}}</strong></h1>
				@endif
				@if($value->section_title == 'ins_link')
				<a class = "contact-incpector" href = "{{asset($value->data)}}" >CONTACT AN INSPECTOR</a>
				@endif
				@endforeach
				</div>
			</section>
			<section class = "inspections-section">
				<div class = "container">
					<div class = "row">
						<div class = "col-8 overview">
							<div class = "inspection-overview">
								       @foreach($page as $value)
								        @if($value->section_title == 'inso_heading')
										<h2>{{$value->data}}</h2>
										@endif
										@endforeach
										<p>
										@foreach($page as $value)
								        @if($value->section_title == 'inspection_oimage')
										<img  class = "inspection-image" src = "{{asset('public/uploads')}}/{{$value->data}}" alt = "buyers-inspections" />
										@endif
										@endforeach
										@foreach($page as $value)
										@if($value->section_title == 'inso_content')
										{!! $value->data !!}
										@endif
										@endforeach
									</p>
								</div>
								<div class = "reports">
									@foreach($page as $value)
										@if($value->section_title == 'elec_heading')
										<h2>{{$value->data}}</h2>
										@endif
										@endforeach
									<p>
										@foreach($page as $value)
										@if($value->section_title == 'elec_image')
										<img  class = "reports-image" src = "{{asset('public/uploads')}}/{{$value->data}}" alt = "inspection_report" />
										@endif
										@endforeach
										@foreach($page as $value)
										@if($value->section_title == 'elec_content')
										{!! $value->data !!}
										@endif
										@endforeach
								</p>
								</div>
							</div>
						<div class = "col-4 call-us">
							@include('master.sidebar')
					</div>
				</div>
			</section>
@include('master.footer')