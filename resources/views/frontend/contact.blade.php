@include('master.master')	
@foreach($page as $value)
	@if($value->section_title == 'contact_banner')
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
				<h1><strong>{{$value->data}}</strong></h1>
					@endif
					@if($value->section_title == 'bannerlink')
				<a class = "contact-incpector" href = "{{asset($value->data)}}" >CONTACT AN INSPECTOR</a>
					@endif
					@endforeach
				</div>
			</section>
			
			<section class = "inspector-section">
				<div class = "container">
					<div class = "row">
						<div class = "col-4 contact-incpector">
							<div class = "contact-head">
								@foreach($page as $value)
									@if($value->section_title == 'contact_head')
								<h2>{{$value->data}}</h2>
								    @endif
								    @if($value->section_title == 'contact_content')
								    {!! $value->data !!}
								    @endif
								    @endforeach
								
							</div>
							<div class = "contact-head">
								<h2>Email Us</h2>
								@foreach($page as $value)
									@if($value->section_title == 'contact_email')
								<p>{{$value->data}}</p>
								@endif
								@endforeach
							</div>
							<div class = "contact-head">
								@foreach($page as $value)
									@if($value->section_title == 'local_head')
								<h2>{{$value->data}}</h2>
								@endif
								@endforeach
							</div>
						</div>
						<div class = "col-8 animatedParent">
							<div class = "incpector-image animated bounceIn">
								@foreach($page as $value)
									@if($value->section_title == 'contact_img')
								<img class = "img-rounded " src = "{{asset('public/uploads')}}/{{$value->data}}" alt = "contact an incpector"/>
								@endif
								@endforeach
							</div>
						</div>
					</div>
					<div class = "local-incpector row justify-content-center">
						@if(!empty($cpages))
						@foreach($cpages as $cpage)
						@if($cpage->areaname != '')
						<div style='text-align: center;text-transform: capitalize;padding-bottom:10px;'><h3><b>{{$cpage->areaname}}</b></h3></div>
						@endif
						<div class="col-md-4">
						<div class = "incpector-name">
						    <p><b>{{$cpage->name}}</b></p>
							<p>{{$cpage->address}}</p>
							<p>{{$cpage->phone ?? ''}}</p>
						</div>
						</div>
						@endforeach
                       @endif
					</div>
				</div>	
			</section>
@include('master.footer')