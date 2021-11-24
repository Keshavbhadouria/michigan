@extends('admin.layout')

@section('content')
<div class = "service container">
		   @if($errors->any())
                    <div class="alert alert-danger">
                      @foreach($errors->all() as $error)
                      <li>{{$error}}</li>
                      @endforeach
                    
                    </div>
        @endif 
	<form id="demo-form2" action="{{asset('page-create')}}" method="post" enctype="multipart/form-data">
			@csrf
            
              <div class = "Root section1">
                <h4 class="section-name">Banner Section  </h4>
                <div class="item form-group">
					<div class="col-md-6 col-sm-6 ">
					     <input type="hidden" id="pagetitle" value="{{Request::segment(1)}}" class="form-control shadow-sm mb-3 bg-body rounded" name="ptitle" readonly>
					</div>
				</div>
                <div class="mb-3 pt-3">
                @foreach($page as $value)
                   @if($value->section_title == 'bannerhead')
                <input type="text" class="form-control shadow-sm mb-3 bg-body rounded" id="banner_heading" aria-describedby="emailHelp" value="{{$value->data}}" placeholder = "Heading" name="bannerhead">
                   @endif
                <input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="bannerhead">
                </div>
                <div class="mb-3">
                   @if($value->section_title == 'bannersub')	
                <input type="text" class="form-control shadow-sm mb-3 bg-body rounded" id="banner_subheading" aria-describedby="emailHelp" value="{{$value->data}}" placeholder = "Add Title" name="bannersub">
                   @endif
                <input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="bannersub">
                </div>
                <div class="mb-3">
                   @if($value->section_title == 'bannerlink')
                <input type="text" class="form-control shadow-sm mb-3 bg-body rounded" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$value->data}}" placeholder = "Add Link" name="bannerlink">
                   @endif
                @endforeach
                <input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="bannerlink">
                </div>
                <div class = "mb-3 bg-image">
                <h4> 
                	<span>
                	@foreach($page as $value)

                	@if($value->section_title == 'banner_image')
                  <video width="100" height="100" controls>
                    <source src="{{asset('public/uploads')}}/{{$value->data}}" type="video/webm">
                  </video>
                    <div class="upload-btn-wrapper">
                      <button class="add_img_btn">Add Image/Video</button>
                      <input type="file" value="{{$value->data}}" class="form-control shadow-sm bg-body rounded" name="banner_image">
                    </div>
                	@endif
                	@endforeach
                	<input type="hidden" name="image[]" value="banner_image">
                </span></h4>
                </div>
              </div>
              <div class = "Root section2">
                <h4 class="section-name">Contact us Section</h4>
                @foreach($page as $value)
                   @if($value->section_title == 'cheading')
                <input type="text" class="form-control mt-3 mb-3 shadow-sm mb-3 bg-body rounded" id="exampleInputEmail1" value="{{$value->data}}" aria-describedby="section2 heading" placeholder = "Heading" name="cheading">
                  @endif

                <input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="cheading">
                 @if($value->section_title == 'clink')
                <input type="text" class="mb-3 form-control shadow-sm mb-3 bg-body rounded" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$value->data}}" placeholder = "Add Link" name="clink">
                 @endif
                <input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="clink">
                
                @endforeach
              </div>
              <div class = " Root section3">
                <h4 class="section-name">Service's Section</h4>
                <div class = "img-content">
                  <div class="mb-3 pt-3">
                  <h4 class = "plus-image">  <span>
                  	@foreach($page as $value)

                	@if($value->section_title == 'service_image_one')
                	<img src="{{asset('public/uploads')}}/{{$value->data}}" height="100px" width="100px">
                	@endif
                	@endforeach
                    <div class="upload-btn-wrapper">
                      <button class="add_img_btn">Add Image</button>
                      <input type="file" class="form-control shadow-sm bg-body rounded" name="service_image_one">
                    </div>
                  	<input type="hidden" name="image[]" value="service_image_one">
                  </span></h4>
                  </div>
                  <div class="mb-3">
                  @foreach($page as $value)
                   @if($value->section_title == 'serviceone')
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder = "Heading" value="{{$value->data}}" name="serviceone">
                   @endif
                  <input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="serviceone">
                  </div>
                  <div class="mb-3">

                  @if($value->section_title == 'sonecontent')
                  <textArea type="text" class="form-control" id="contentone" aria-describedby="emailHelp" placeholder = "Type Your Content Here" name="sonecontent">{{$value->data}}</textArea>
                  @endif
                  @endforeach
                  <input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="sonecontent">
                  
                  </div>
                </div>
                <div class = "img-content">
                  <div class="mb-3 pt-3">
                  <h4 class = "plus-image"><span>
                  	@foreach($page as $value)

                	@if($value->section_title == 'service_image_two')
                	<img src="{{asset('public/uploads')}}/{{$value->data}}" height="100px" width="100px">
                	@endif
                	@endforeach
                	<div class="upload-btn-wrapper">
                      <button class="add_img_btn">Add Image</button>
                      <input type="file" class="form-control shadow-sm bg-body rounded" name="service_image_two">
                    </div>
                  	<input type="hidden" name="image[]" value="service_image_two">
                  </span></h4>
                  </div>
                  <div class="mb-3">
                 @foreach($page as $value)
                  @if($value->section_title == 'servicetwo')
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder = "Heading" value="{{$value->data}}" name="servicetwo">
                  @endif
                  <input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="servicetwo">
                  </div>
                  <div class="mb-3">
                  @if($value->section_title == 'stwocontent')
                  <textArea type="text" class="form-control" id="stwo_heading" aria-describedby="emailHelp" placeholder = "Type Your Content Here" name="stwocontent">{{$value->data}}</textArea>
                  @endif
                  @endforeach
                  <input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="stwocontent">
                  </div>
                </div>
                <div class = "img-content">
                  <div class="mb-3 pt-3">
                  <h4 class = "plus-image"><span>
                  	@foreach($page as $value)

                	@if($value->section_title == 'service_image_three')
                	<img src="{{asset('public/uploads')}}/{{$value->data}}" height="100px" width="100px">
                	@endif
                	@endforeach
                	<div class="upload-btn-wrapper">
                      <button class="add_img_btn">Add Image</button>
                      <input type="file" class="form-control shadow-sm bg-body rounded" name="service_image_three">
                    </div>
                  	<input type="hidden" name="image[]" value="service_image_three">
                  </span></h4>
                  </div>
                  <div class="mb-3">
                 @foreach($page as $value)
                  @if($value->section_title == 'servicethree')
                  <input type="text" class="form-control" id="sthree_heading" aria-describedby="emailHelp"placeholder = "Heading" value="{{$value->data}}" name="servicethree">
                  @endif
                  <input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="servicethree">
                  </div>
                  <div class="mb-3">
                  @if($value->section_title == 'sthreecontent')
                  <textArea type="text" class="form-control" id="sthree" aria-describedby="emailHelp" placeholder = "Type Your Content Here" name="sthreecontent">{{$value->data}}</textArea>
                  @endif
                 @endforeach
                  <input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="sthreecontent">
                  
                  </div>
                </div>
            </div>
            <div class = "Root section4">
              <h4 class="section-name">About Section</h4>
              <div class="mb-3 pt-3">
              <h4 class = "plus-image"><span>
              	@foreach($page as $value)

                	@if($value->section_title == 'home_about_image')
                	<img src="{{asset('public/uploads')}}/{{$value->data}}" height="100px" width="100px">
                	@endif
                @endforeach
                <div class="upload-btn-wrapper">
                    <button class="add_img_btn">Add Image</button>
                    <input type="file" class="form-control shadow-sm bg-body rounded" name="home_about_image">
                </div>
              	<input id="fbanner" name="image[]" class="form-control" type="hidden" value="home_about_image">
                  
              </span></h4>
              
              </div>
              <div class="mb-3">
              	@foreach($page as $value)
                  @if($value->section_title == 'homeabout')
              <input type="text" class="form-control shadow-sm mb-3 bg-body rounded" id="about_home" aria-describedby="emailHelp" value="{{$value->data}}" placeholder = "Heading" name="homeabout">
                  @endif
              <input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="homeabout">
                  
              </div>
              <div class="mb-3">
              	@if($value->section_title == 'homeaboutcontent')
              <textArea type="text" class="form-control editor shadow-sm mb-3 bg-body rounded" id="editor20" aria-describedby="emailHelp" placeholder = "Type Your Content Here" name="homeaboutcontent">{{$value->data}}</textArea>
                @endif
              @endforeach
              <input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="homeaboutcontent">
               
              </div>
            </div>
            <div class = "Root section5">
              <h4 class="section-name">Guarantee Section</h4>
              <div class="mb-3 pt-3">
              <h4 class = "plus-image"><span>
              	@foreach($page as $value)

                	@if($value->section_title == 'g_section_image')
                	<img src="{{asset('public/uploads')}}/{{$value->data}}" height="100px" width="100px">
                	@endif
                @endforeach
                <div class="upload-btn-wrapper">
                    <button class="add_img_btn">Add Image</button>
                    <input type="file" class="form-control shadow-sm bg-body rounded" name="g_section_image">
                </div>
              	<input id="fbanner" name="image[]" class="form-control" type="hidden" value="g_section_image">
                 

              </span></h4>
              </div>
              <div class="mb-3">
              	@foreach($page as $value)
                  @if($value->section_title == 'gheading')
              <input type="text" class="form-control shadow-sm mb-3 bg-body rounded" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$value->data}}" placeholder = "Heading" name="gheading">
                  @endif
              <input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="gheading">
               

              </div>
              <div class="mb-3">
              	@if($value->section_title == 'gcontent')
              <textArea type="text" id="editor1" class="form-control editor shadow-sm mb-3 bg-body rounded" aria-describedby="emailHelp" placeholder = "Type Your Content Here" name="gcontent">{{$value->data}}</textArea>
                @endif
                @endforeach

               <input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="gcontent">
               
              </div>
            </div>
            <div class = "Root section6">
              <h4>Testimonials section</h4>
              <div class = "testimonial">
              	@foreach($page as $value)
                  @if($value->section_title == 'feedbackone')
              <textArea type="text" class="form-control shadow-sm mb-3 bg-body rounded" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder = "Type your Feedback" name="feedbackone">{{$value->data}}</textArea>
              @endif

              <input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="feedbackone">

              @if($value->section_title == 'authone')
              <input type="text" class="form-control shadow-sm mb-3 bg-body rounded" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$value->data}}" placeholder = "Author's Name" name="authone">
              @endif
              @endforeach

              <input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="authone">

              @foreach($page as $value)

                	@if($value->section_title == 'testimonial1')
                	<img src="{{asset('public/uploads')}}/{{$value->data}}" height="100px" width="100px">
                	@endif
                @endforeach
                <div class="upload-btn-wrapper">
                    <button class="add_img_btn">Add Image</button>
                    <input type="file" class="form-control shadow-sm mb-3 bg-body rounded" id="testimonial1" aria-describedby="emailHelp" name="testimonial1">
                </div>
              <input id="fbanner" name="image[]" class="form-control" type="hidden" value="testimonial1">
              </div>
              <div class = "testimonial">
              @foreach($page as $value)
                  @if($value->section_title == 'feedbacktwo')
              <textArea type="text" class="form-control shadow-sm mb-3 bg-body rounded" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder = "Type your Feedback" name="feedbacktwo">{{$value->data}}</textArea>
                  @endif
              <input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="feedbacktwo">
                  @if($value->section_title == 'authtwo')
              <input type="text" class="form-control shadow-sm mb-3 bg-body rounded" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$value->data}}" placeholder = "Author's Name" name="authtwo">
                  @endif
               @endforeach
              <input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="authtwo">

              @foreach($page as $value)

                	@if($value->section_title == 'testimonial2')
                	<img src="{{asset('public/uploads')}}/{{$value->data}}" height="100px" width="100px">
                	@endif
                @endforeach
                <div class="upload-btn-wrapper">
                    <button class="add_img_btn">Add Image</button>
                    <input type="file" class="form-control shadow-sm mb-3 bg-body rounded" id="testimonial2" aria-describedby="emailHelp" name="testimonial2">
                </div>
              <input id="fbanner" name="image[]" class="form-control" type="hidden" value="testimonial2">
              </div>
            </div>
              <div class="d-grid gap-2 d-md-flex justify-content-md-end save-cencil">
               <!--  <button class="btn btn-primary me-md-2 extra" type="button">Cancel</button> -->
                <input class="btn btn-success extra" type="submit" value="Save">
              </div>
          </form>
          </div>

@endsection