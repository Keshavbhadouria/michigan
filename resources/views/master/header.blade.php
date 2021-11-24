<header id="myHeader">
				<nav class="navbar sticky-top navbar-light">
				<div class = "">
				<div class = "mobile-header desktop">	
					@foreach($page as $value)
					@if($value->section_title == 'logo')
					<a class="navbar-brand" href="{{asset('/')}}"><img src = "{{asset('public/uploads')}}/{{$value->data}}" alt = "`{{ config('app.name') }}" /></a>
					<a href="javascript:void(0);" class="icon" onclick="myLinkFunction()">
							<i class="fa fa-bars"></i>
						</a>
					@endif
					@endforeach
					  <div class = "call-now mobile-call" id = "myLinks">
					  	@foreach($page as $value)
						@if($value->section_title == 'header_phone')
						<p><span>call Now >>></span><a>{{$value->data}}</a></p>
						@endif
						@endforeach
						<ul class="nav justify-content-center">
						<li class="nav-item Florida-nav">
							<a class="nav-link" href="{{asset('services')}}">Services</a>
						</li>
						<li class="nav-item Florida-nav">
							<a class="nav-link" href="{{asset('inspections')}}">inspections</a>
						</li>
						<li class="nav-item Florida-nav">
							<a class="nav-link" href="{{asset('affiliations')}}">Affiliations</a>
						</li>
						<li class="nav-item Florida-nav">
							<a class="nav-link" href="{{asset('about')}}">About us</a>
						</li>
						<li class="nav-item Florida-nav">
							<a class="nav-link" href="{{asset('contact')}}">contact an inspector</a>
						</li>
					</ul>
						</div>
					</div>	
					</div>
					</nav>	
</header>
<style>
	.navbar .Florida-nav .active {
		color:#98221a;
	}
	</style>
<script>
	function myLinkFunction() {
	  var x = document.getElementById("myLinks");
	  if (x.style.display == "block") {
		x.style.display = "none";
	  } else {
		x.style.display = "block";
	  }
	}
</script>	
