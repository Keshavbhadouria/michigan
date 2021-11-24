@include('master.master')
@foreach($page as $value)
	@if($value->section_title == 'about_banner')
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
					@if($value->section_title == 'bannerhead')
				<h1><strong>ABOUT US</strong></h1>
				@endif
				@if($value->section_title == 'bannerlink')
				<a class = "contact-incpector" href = "{{asset($value->data)}}" >CONTACT AN INSPECTOR</a>
				@endif
				@endforeach
				</div>
			</section>
			
			<section class = "about-section">
				<div class = "container">
					<div class = "row">
						<div class = "col-8 about-us">
							@foreach($page as $value)
							@if($value->section_title == 'whyhead')
							<h3>{{$value->data}}</h3>
							@endif
							@endforeach
							<p>
								@foreach($page as $value)
								@if($value->section_title == 'whycontent')
								{!! $value->data !!}
								@endif
								@endforeach
							</p>
							@foreach($page as $value)
								@if($value->section_title == 'help_heading')
								<h3>{{$value->data}}</h3>
								@endif
								@endforeach
							
							<p>
								@foreach($page as $value)
								@if($value->section_title == 'help_content')
								{!! $value->data !!}
								@endif
								@endforeach
							</p>
						</div>
						<div class = "col-4 call-us">
							@include('master.sidebar')
						</div>
					</div>
				</div>
			</section>
@include('master.footer')