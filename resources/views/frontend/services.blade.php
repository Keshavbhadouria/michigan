 @include('master.master')
 @foreach($page as $value)
 @if($value->section_title == 'service_banner')
     <style>
		.service1 {
		background-image: url('{{asset('public/uploads')}}/{{$value->data}}');
		}
		img.buye-sell.affi-title {
			max-width: 260px;
			}
		.service2-para a {
			color: #79772a;
			text-decoration: none;
			}	
	</style>
			@endif
			@endforeach
			<section class = "service1">
				<div class = "services-head">
				@foreach($page as $value)
				@if($value->section_title == 'bannerhead')
				<h1><strong>{!! $value->data !!}</strong></h1>
				@endif
				
				@if($value->section_title == 'bannersub')
				<a class = "contact-incpector" href = "{{asset($value->data)}}" >CONTACT AN INSPECTOR</a>
				@endif
				@endforeach
				</div>
			</section>
			<section class = "service-section2">
				<div class = "container">
					<div class = "row">
						<div class = "col-8 affi-row">
							<div class = "service2-para">
								@foreach($page as $value)
								@if($value->section_title == 'buyer')
								<h2>{{$value->data}}</h2>
								@endif
								@endforeach
								<div class = "image-caption">
									@foreach($page as $value)
									@if($value->section_title == 'buyer_image')
									<img class = "buye-sell affi-title" src = "{{asset('public/uploads')}}/{{$value->data}}" alt = "buyers-inspections" />
										@endif
										@endforeach
									@foreach($page as $value)
									@if($value->section_title == 'buyer')
									<span class = "wp-caption">{{$value->data}}</span>
									@endif
									@endforeach
								</div>
								@foreach($page as $value)
									@if($value->section_title == 'buyercontent')
									<p class = "buyer-inspection">{!! $value->data !!}</p>
									@endif
								@endforeach
							</div>
							<div class = "service2-para mt-5">
								@foreach($page as $value)
								@if($value->section_title == 'seller')
								<h2>{{$value->data}}</h2>
								@endif
								@endforeach
								<div class = "image-caption">
									@foreach($page as $value)
									@if($value->section_title == 'seller_image')
									<img class = "buye-sell affi-title" src = "{{asset('public/uploads')}}/{{$value->data}}" alt = "Sellers Inspection" />
									@endif
									@endforeach
									@foreach($page as $value)
									@if($value->section_title == 'seller')
									<span class = "wp-caption">{{$value->data}}</span>
									@endif
								@endforeach
								</div>	
								@foreach($page as $value)
									@if($value->section_title == 'sellercontent')
									<p class = "buyer-inspection">{!! $value->data !!}</p>
									@endif
								@endforeach
							</div>
							<div class = "service2-para mt-5">
								@foreach($page as $value)
								@if($value->section_title == 'construction')
								<h2 class = "construction">{{$value->data}}</h2>
								@endif
								@endforeach
								<div class = "image-caption constructionsss">
									@foreach($page as $value)
									@if($value->section_title == 'construction_image')
									<img class = "buye-sell affi-title" src = "{{asset('public/uploads')}}/{{$value->data}}" alt = "Sellers Inspection" />
									@endif
									@endforeach
									@foreach($page as $value)
									@if($value->section_title == 'construction')
									<span class = "wp-caption">{{$value->data}}</span>
									@endif
								@endforeach
								</div>	
								@foreach($page as $value)
									@if($value->section_title == 'conscontent')
									<p class = "buyer-inspection">{!! $value->data !!}</p>
									@endif
								@endforeach
							</div>
						</div>
						<div class = "col-4 call-us">
							@include('master.sidebar')
						</div>
					</div>
				</div>
			</section>
@include('master.footer')
