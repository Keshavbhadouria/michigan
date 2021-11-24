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
								<div class = "bg-image">
								<h4><span>
							    @foreach($page as $value)

			                	@if($value->section_title == 'inspection_banner')
			                	<img src="{{asset('public/uploads')}}/{{$value->data}}" height="100px" width="100px">
			                	@endif
			                	@endforeach
			                	    <div class="upload-btn-wrapper">
                                        <button class="add_img_btn">Add Image</button>
                                        <input type="file" class="form-control shadow-sm bg-body rounded" name="inspection_banner">
                                    </div>
									
									<input type="hidden" name="image[]" value="inspection_banner">

								</span></h4>
								
								</div>
								<div class="mb-3 pt-3">
								@foreach($page as $value)
								@if($value->section_title == 'ins_head')
								<input type="text" class="form-control shadow-sm mb-3 bg-body rounded" id="ins_head" aria-describedby="emailHelp" value="{{$value->data}}" placeholder = "Heading" name="ins_head">
								@endif
								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="ins_head">
								</div>
								<div class="mb-3">
								@if($value->section_title == 'ins_link')
								<input type="text" class="form-control shadow-sm mb-3 bg-body rounded" id="ins_link" aria-describedby="emailHelp" value="{{$value->data}}" placeholder = "Add Link" name="ins_link">
								@endif
								@endforeach
								 <input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="ins_link">
								</div>
							</div>
							<div class = "Root section2">
								<h4 class="section-name">Inspection Overview Section</h4>
								<div class="mb-3 pt-3">
								<h3 class = "plus-image"><span>
								@foreach($page as $value)
								@if($value->section_title == 'inspection_oimage')
			                	<img src="{{asset('public/uploads')}}/{{$value->data}}" height="100px" width="100px">
			                	@endif
			                	@endforeach
			                	    <div class="upload-btn-wrapper">
                                        <button class="add_img_btn">Add Image</button>
                                        <input type="file" class="form-control shadow-sm bg-body rounded" name="inspection_oimage">
                                    </div>
									
									<input type="hidden" name="image[]" value="inspection_oimage">
								</span></h3>
								</div>
								<div class="mb-3">
								@foreach($page as $value)
								@if($value->section_title == 'inso_heading')
								<input type="text" class="form-control shadow-sm mb-3 bg-body rounded" id="inso_heading" aria-describedby="emailHelp" value="{{$value->data}}" placeholder = "Heading" name="inso_heading">
								@endif
								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="inso_heading">
								</div>
								<div class="mb-3">
								@if($value->section_title == 'inso_content')
								<textArea type="text" class="form-control editor shadow-sm mb-3 bg-body rounded" id="editor21" aria-describedby="emailHelp" placeholder = "Type Your Content Here" name="inso_content">{{$value->data}}</textArea>
								@endif
								@endforeach
								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="inso_content">
								</div>
							</div>
							<div class = "Root section3">
								<h4 class="section-name">Electronic Reports Section</h4>
								<div class="mb-3 pt-3">
								<h3 class = "plus-image"><span>
								@foreach($page as $value)
								@if($value->section_title == 'elec_image')
			                	<img src="{{asset('public/uploads')}}/{{$value->data}}" height="100px" width="100px">
			                	@endif
			                	@endforeach
			                	    <div class="upload-btn-wrapper">
                                        <button class="add_img_btn">Add Image</button>
                                        <input type="file" class="form-control shadow-sm bg-body rounded" name="elec_image">
                                    </div>
									
									<input type="hidden" name="image[]" value="elec_image">
								</span></h3>
								</div>
								<div class="mb-3">
								@foreach($page as $value)
								@if($value->section_title == 'elec_heading')
								<input type="text" class="form-control shadow-sm mb-3 bg-body rounded" id="" aria-describedby="emailHelp" value="{{$value->data}}" placeholder = "Heading" name="elec_heading">
								@endif
								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="elec_heading">
								</div>
								<div class="mb-3">
								@if($value->section_title == 'elec_content')
								<textArea type="text" class="form-control editor shadow-sm mb-3 bg-body rounded" id="editor22" aria-describedby="emailHelp" placeholder = "Type Your Content Here" name="elec_content">{{$value->data}}</textArea>
								@endif
								@endforeach
								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="elec_content">
								</div>
							</div>
							<div class="d-grid gap-2 d-md-flex justify-content-md-end save-cencil">
							  <button class="btn btn-primary me-md-2 extra" type="button">Cancel</button>
							  <input class="btn btn-success extra" type="submit" value="Save">
							</div>
						</form>
					</div>
@endsection