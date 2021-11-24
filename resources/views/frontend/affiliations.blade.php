@include('master.master')
 @foreach($page as $value)
	@if($value->section_title == 'affi_banner')
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
					@if($value->section_title == 'affi_heading')
				<h1><strong>{{$value->data}}</strong></h1>
					@endif
					@if($value->section_title == 'affi_link')
				<a class = "contact-incpector" href = "{{asset($value->data)}}" >CONTACT AN INSPECTOR</a>
					@endif
					@endforeach
				</div>
			</section>
			<section class = "affiliations-section">
				<div class = "container">
					<div class = "row">
						<div class = "col-8 affi-row">
							@foreach($page as $value)
							@if($value->section_title == 'affi_paragraph')
							<p class = "affi-title">
								{!! $value->data !!}
							</p>
							@endif
							@endforeach
							<div class = "affiliations-head">
									<h3>
										@foreach($page as $value)
							              @if($value->section_title == 'ashi_image')
										<img class = "ashi-img" src = "{{asset('public/uploads')}}/{{$value->data}}" alt = "ASHI-LOGO" />
										@endif
										@if($value->section_title == 'affi_ashi')
										{{$value->data}}
										@endif
										@endforeach
									</h3>
								<p class = "ashi">
									@foreach($page as $value)
								     @if($value->section_title == 'affi_ASHI_content')
										{!! $value->data !!}
									 @endif
									@endforeach
								</p>
								<h3 class = "image-heading">
									@foreach($page as $value)
							              @if($value->section_title == 'nahi_image')
										<img class = "ashi-img" src = "{{asset('public/uploads')}}/{{$value->data}}" alt = "ASHI-LOGO" />
										@endif
										@if($value->section_title == 'affi_nahi')
										{{$value->data}}
										@endif
										@endforeach
								</h3>
								<p>@foreach($page as $value)
								     @if($value->section_title == 'affi_nahi_content')
										{!! $value->data !!}
									 @endif
									@endforeach</p>
								<h3 class = "image-heading">
									@foreach($page as $value)
							              @if($value->section_title == 'inter_image')
										<img class = "ashi-img" src = "{{asset('public/uploads')}}/{{$value->data}}" alt = "ASHI-LOGO" />
										@endif
										@if($value->section_title == 'affi_inter')
										{{$value->data}}
										@endif
										@endforeach</h3>
								<p>
									@foreach($page as $value)
								     @if($value->section_title == 'affi_inter_content')
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
				</div>
			</section>
@include('master.footer')	