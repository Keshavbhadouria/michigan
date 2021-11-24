			<footer>
				<div class = "container-fluid">
					<div class = "footer-content">
						@foreach($page as $value)
								@if($value->section_title == 'footer_copyright')
								{!! $value->data !!}
								@endif
						@endforeach
					</div>
					<div class = "footer-nav">
						@foreach($page as $value)
								@if($value->section_title == 'sitemap_url')
						<a href = "{{asset($value->data)}}" >Sitemap</a>
						@endif
						@endforeach
					</div>
				</div>
			</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{asset('public/admin_theme/js/css3-animate-it.js')}}"></script>
<script>
	$(document).ready(function(){
		$(window).scroll(function () {
			if ($(this).scrollTop() > 50) {
				$('#back-to-top').fadeIn();
			} else {
					$('#back-to-top').fadeOut();
					}
			});
						// scroll body to 0px on click
			$('#back-to-top').click(function () {
				$('body,html').animate({
					scrollTop: 0
				}, 400);
				return false;
			});
	});
</script>
			
<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>



<script>
$(document).ready(function(){
	$.doTimeout(2500, function(){
		$('.repeat.go').removeClass('go');

		return true;
	});
	$.doTimeout(2520, function(){
		$('.repeat').addClass('go');
		return true;
	});
	
});

</script>

<script>
$(document).ready(function(){
	var pgurl =window.location.href;
	jQuery('#myHeader ul li a').each(function(){
		if(jQuery(this).attr('href') == pgurl)
		{
			jQuery(this).addClass('active');
		}
        });
});

</script>


	</body>
</html>