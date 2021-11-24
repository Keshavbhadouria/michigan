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
								<h4 class="section-name">Call Us Now Section</h4>
								<div class="item form-group">
									<div class="col-md-6 col-sm-6 ">
									     <input type="hidden" id="pagetitle" value="{{Request::segment(1)}}" class="form-control shadow-sm mb-3 bg-body rounded" name="ptitle" readonly>
									</div>
								</div>
								<div class="mb-3">
								@foreach($page as $value)

			                	@if($value->section_title == 'head_call')
								<input type="text" class="form-control shadow-sm  mb-3 bg-body rounded" id="callno" aria-describedby="emailHelp" value="{{$value->data}}" placeholder = "Heading & call Number" name="head_call">
								@endif
								@endforeach
								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="head_call">
								</div>
								<div class="mb-3">
								@foreach($page as $value)
								@if($value->section_title == 'side_content')
								<textArea type="text" class="form-control shadow-sm editor mb-3 bg-body rounded" id="editor29" aria-describedby="emailHelp" placeholder = "Type Your Content Here" name="side_content">{{$value->data}}</textArea>
								@endif
								@endforeach
								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="side_content">
								</div>
								<div class="mb-3 pt-3">
								<h4 class = "plus-image"><span>
								@foreach($page as $value)

			                	@if($value->section_title == 'side_image')
			                	<img src="{{asset('public/uploads')}}/{{$value->data}}" height="100px" width="100px">
			                	@endif
			                	@endforeach
			                	    <div class="upload-btn-wrapper">
                                        <button class="add_img_btn">Add Image</button>
                                        <input type="file" class="form-control shadow-sm bg-body rounded" name="side_image">
                                    </div>
									
									<input type="hidden" name="image[]" value="side_image">
								</span></h4>
								</div>
							</div>
							<div class = "Root section2">
								<h5>Contact Us</h5>
								<div class="mb-3">
								@foreach($page as $value)
								@if($value->section_title == 'side_content_head')
								<input type="text" class="form-control shadow-sm  mb-3 bg-body rounded" id="heading" aria-describedby="emailHelp" value="{{$value->data}}" placeholder = "Heading" name="side_content_head">
								@endif
								@endforeach
								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="side_content_head">
								</div>
							</div>
							<div class="d-grid gap-2 d-md-flex justify-content-md-end save-cencil">
							  <button class="btn btn-primary me-md-2 extra" type="button">Cancel</button>
							  <input class="btn btn-success extra" type="submit" value="Save">
							</div>
						</form>
					</div>
@endsection