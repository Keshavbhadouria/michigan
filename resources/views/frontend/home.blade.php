@include('master.master')

			
			<section class = "section1">
				<div class = "home-insceptor">
				@foreach($page as $value)
                   @if($value->section_title == 'bannerhead')
					<h1>{{$value->data}}</h1>
					@endif
                   @if($value->section_title == 'bannersub')
					<p class = "text-center">{{$value->data}}</p>
					@endif
					@if($value->section_title == 'bannerlink')
					<a href = "{{asset($value->data)}}">contact an inspector
					<i class="fal fa-angle-double-right"></i></a>
					@endif
					@endforeach
				</div>
				@foreach($page as $value)
                   @if($value->section_title == 'banner_image')
				<video autoplay muted loop id="myVideo">
					
				  <source src="{{asset('public/uploads')}}/{{$value->data}}" type="video/webm">
				  	
				</video>
				@endif
				  	@endforeach
			</section>
			<section class = "section2">
				<div class = "container">
					<div class = "row">
						<div class = "col-8">
							@foreach($page as $value)
                                @if($value->section_title == 'cheading')
							<h3 class = "section2-head">{!! $value->data !!}</h3>
							    @endif
							@endforeach
						</div>
						<div class = "col-4">
							<div class = "contact-btn">
							 @foreach($page as $value)
                                @if($value->section_title == 'clink')
							<a href="{{asset($value->data)}}" class="btn">CONTACT AN INSPECTOR</a>
							    @endif
							 @endforeach
							</div>
						</div>
					</div>
				</div>
			</section>
			
			<section class = "section3">
				<div class = "container">
					<div class = "row buyers-sellers">						
					<div class = "col-4">
						<div class =  "buyers">
							<div class = "buyers-image">
								@foreach($page as $value)
                                @if($value->section_title == 'service_image_one')
								<img src = "{{asset('public/uploads')}}/{{$value->data}}" alt = "buyers image" />
								@endif
								@endforeach
							</div>
							<div class = "buyers-content">
								@foreach($page as $value)
                                @if($value->section_title == 'serviceone')
								<h4><b>{!! $value->data !!}</b></h4>
								@endif
								@endforeach
								<div class = "inner-content">
								@foreach($page as $value)
                                @if($value->section_title == 'sonecontent')
									<p>{!! $value->data !!}</p>
								@endif
								@endforeach
								</div>
							</div>
						</div>
					</div>
					<div class = "col-4">
						<div class =  "buyers">
							<div class = "buyers-image">
								@foreach($page as $value)
                                @if($value->section_title == 'service_image_two')
								<img src = "{{asset('public/uploads')}}/{{$value->data}}" alt = "buyers image" />
								@endif
								@endforeach
							</div>
							<div class = "buyers-content">
								@foreach($page as $value)
                                @if($value->section_title == 'servicetwo')
								<h4><b>{!! $value->data !!}</b></h4>
								@endif
								@endforeach
								<div class = "inner-content">
								@foreach($page as $value)
                                @if($value->section_title == 'stwocontent')
									<p>{!! $value->data !!}</p>
								</div>
								@endif
								@endforeach
							</div>
						</div>
					</div>
					<div class = "col-4">
						<div class =  "buyers Additional-Services">
							<div class = "buyers-image">
								@foreach($page as $value)
                                @if($value->section_title == 'service_image_three')
								<img src = "{{asset('public/uploads')}}/{{$value->data}}" alt = "buyers image" />
								@endif
								@endforeach
							</div>
							<div class = "buyers-content">
								@foreach($page as $value)
                                @if($value->section_title == 'servicethree')
								<h4><b>{!! $value->data !!}</b></h4>
								@endif
								@endforeach
								<div class = "inner-content">
								@foreach($page as $value)
                                @if($value->section_title == 'sthreecontent')
									<p>{!! $value->data !!}</p>
								@endif
								@endforeach
								</div>
							</div>
						</div>
					</div>
					</div>
				</div>
			</section>
			<section class = "section4">
				<div class = "container">
					<div class = "row homeAbout">
						<div class = "col-6">
							<div class = "Home-Inspector">
								<div class = "home-heading">
								@foreach($page as $value)
                                @if($value->section_title == 'homeabout')
									<h2>{!! $value->data !!}</h2>
								@endif
								@endforeach
									<span></span>
								</div>
								<div class = "Home-Inspector-content">
								@foreach($page as $value)
                                @if($value->section_title == 'homeaboutcontent')
									{!! $value->data !!}
								@endif
								@endforeach
								</div>
							</div>
						</div>
						<div class = "col-6 animatedParent">
							<div class = "home-about img-home animated bounceInRight">
								@foreach($page as $value)
                                @if($value->section_title == 'home_about_image')
								<img src = "{{asset('public/uploads')}}/{{$value->data}}" alt = "home about " />
								@endif
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class = "section5 thisisatest">

				<div class = "container">
					<div class = "row our-guarantee">
						<div class = "col-6 animatedParent">
							<div class = "home-about image animated bounceInLeft ">
								@foreach($page as $value)
                                @if($value->section_title == 'g_section_image')
								<img src = "{{asset('public/uploads')}}/{{$value->data}}" alt = "home about " />
								@endif
								@endforeach
							</div>
						</div>
						<div class = "col-6">
							<div class = "Home-Inspector">
								<div class = "home-heading">
									@foreach($page as $value)
                                    @if($value->section_title == 'gheading')
									<h2>{!! $value->data !!}</h2>
									@endif
									@endforeach
									<span></span>
								</div>
								<div class = "Home-Inspector-content">
									@foreach($page as $value)
                                    @if($value->section_title == 'gcontent')
									{!! $value->data !!}  
									@endif
									@endforeach
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			<section class = "section6">
				<div class = "container">
					<div class = "test-heading">
						<h2>Testimonials</h2>
						<span></span>
					</div>
					<div class = "row testimoni">
						<div class = "col-6 dustin">
							<div class = "testimonial-content">
								@foreach($page as $value)
                                    @if($value->section_title == 'feedbackone')
									<p>{!! $value->data !!}</p>  
									@endif
								@endforeach
							</div>
							<div class = "testimonial-image">
								@foreach($page as $value)
                                    @if($value->section_title == 'testimonial1')
									<img src = "{{asset('public/uploads')}}/{{$value->data}}" alt = "dustin-photo" />
									@endif
								@endforeach
							</div>
							@foreach($page as $value)
                                    @if($value->section_title == 'authone')
							<p class = "test-name">{!! $value->data !!}</p>
							@endif
							@endforeach
						</div>
						<div class = "col-6  dustin">
							<div class = "testimonial-content">
								@foreach($page as $value)
                                    @if($value->section_title == 'feedbacktwo')
									<p>{!! $value->data !!}</p>  
									@endif
								@endforeach
							</div>
							<div class = "testimonial-image louie">
								@foreach($page as $value)
                                    @if($value->section_title == 'testimonial2')
									<img src = "{{asset('public/uploads')}}/{{$value->data}}" alt = "dustin-photo" />
									@endif
								@endforeach
							</div>
							@foreach($page as $value)
                                    @if($value->section_title == 'authtwo')
							<p class = "test-name">{!! $value->data !!}</p>
							@endif
							@endforeach
						</div>
					</div>
				</div>
			</section>
			<!--footer-->
@include('master.footer')
