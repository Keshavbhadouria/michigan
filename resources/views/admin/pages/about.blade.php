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
								<h4 class="section-name">Banner Section</h4>
								<div class="item form-group">
									<div class="col-md-6 col-sm-6 ">
									     <input type="hidden" id="pagetitle" value="{{Request::segment(1)}}" class="form-control shadow-sm mb-3 bg-body rounded" name="ptitle" readonly>
									</div>
								</div>
								<div class = "mb-3 bg-image">
								<h4><span>
									@foreach($page as $value)
								@if($value->section_title == 'about_banner')
			                	<img src="{{asset('public/uploads')}}/{{$value->data}}" height="100px" width="100px">
			                	@endif
			                	@endforeach
			                	    <div class="upload-btn-wrapper">
                                        <button class="add_img_btn">Add Image</button>
                                        <input type="file" class="form-control shadow-sm bg-body rounded" name="about_banner">
                                    </div>
									
									<input type="hidden" name="image[]" value="about_banner">
								</span></h4>
								</div>
								<div class="mb-3 pt-3">
								@foreach($page as $value)
									@if($value->section_title == 'bannerhead')
								<input type="text" class="form-control shadow-sm mb-3 bg-body rounded" id="head" aria-describedby="emailHelp" value="{{$value->data}}" placeholder = "Heading" name="bannerhead">
								@endif
								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="bannerhead">
								</div>
								<div class="mb-3">
								@if($value->section_title == 'bannerlink')
								<input type="text" class="form-control shadow-sm mb-3 bg-body rounded" id="link" aria-describedby="emailHelp" value="{{$value->data}}" placeholder = "Add Link" name="bannerlink">
								@endif
								@endforeach

								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="bannerlink">
								</div>
							</div>
							<div class = "Root section2">
								<h4 class="section-name">Why Home Inspectors Section</h4>
								<div class="mb-3">
								@foreach($page as $value)
									@if($value->section_title == 'whyhead')
								<input type="text" class="form-control shadow-sm mb-3 bg-body rounded" id="why_heading" aria-describedby="emailHelp" value="{{$value->data}}" placeholder = "Heading" name="whyhead">
									@endif
								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="whyhead">
								</div>
								<div class="mb-3">
								@if($value->section_title == 'whycontent')
								<textArea type="text" class="form-control editor shadow-sm mb-3 bg-body rounded" id="editor27" aria-describedby="emailHelp" placeholder = "Type Your Content Here" name="whycontent">{{$value->data}}</textArea>
								@endif
								@endforeach

								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="whycontent">
								</div>
							</div>
							<div class = "Root section3">
								<h4 class="section-name">How We Help You Section</h4>
								<div class="mb-3">
								@foreach($page as $value)
									@if($value->section_title == 'help_heading')
								<input type="text" class="form-control shadow-sm mb-3 bg-body rounded" id="help" aria-describedby="emailHelp" value="{{$value->data}}" placeholder = "Heading" name="help_heading">
									@endif
								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="help_heading">
								</div>
								<div class="mb-3">
									@if($value->section_title == 'help_content')
								<textArea type="text" id="editor1" class="form-control editor shadow-sm mb-3 bg-body rounded" id="help_content" aria-describedby="emailHelp" placeholder = "Type Your Content Here" name="help_content">{{$value->data}}</textArea>
								@endif
								@endforeach
								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="help_content">
								</div>
							</div>
							<div class="d-grid gap-2 d-md-flex justify-content-md-end save-cencil">
							  <button class="btn btn-primary me-md-2 extra" type="button">Cancel</button>
							  <input class="btn btn-success extra" type="submit" value="Save">
							</div>
						</form>
					</div>

@endsection