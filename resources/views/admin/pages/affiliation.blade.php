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

			                	@if($value->section_title == 'affi_banner')
			                	<img src="{{asset('public/uploads')}}/{{$value->data}}" height="100px" width="100px">
			                	@endif
			                	@endforeach
			                	    <div class="upload-btn-wrapper">
                                        <button class="add_img_btn">Add Image</button>
                                        <input type="file" class="form-control shadow-sm bg-body rounded" name="affi_banner">
                                    </div>
									
									<input type="hidden" name="image[]" value="affi_banner">
								</span></h4>
								</div>
								<div class="mb-3 pt-3">
							    @foreach($page as $value)

			                	@if($value->section_title == 'affi_heading')
								<input type="text" class="form-control shadow-sm mb-3 bg-body rounded" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$value->data}}" placeholder = "Heading" name="affi_heading">
								@endif
								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="affi_heading">
								</div>
								<div class="mb-3">
								@if($value->section_title == 'affi_link')	
								<input type="text" class="form-control shadow-sm mb-3 bg-body rounded" id="affi_link" aria-describedby="emailHelp"  value="{{$value->data}}" placeholder = "Add Link" name="affi_link">
								@endif
								@endforeach
								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="affi_link">
								</div>
							</div>
							<div class = "Root section2">							
								<div class = "head-content">
								<h4 class="section-name">Paragraph Section</h4>
								<div class="mb-3">
								 @foreach($page as $value)

			                	@if($value->section_title == 'affi_paragraph')
								<textArea type="text" class="form-control editor shadow-sm mb-3 bg-body rounded" id="esitor22" aria-describedby="emailHelp" placeholder = "Type Your Content Here" name="affi_paragraph">{{$value->data}}</textArea>
								@endif
								@endforeach
								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="affi_paragraph">
								</div>
								</div>
							</div>
							<div class = "Root section2">
								<h4 class="section-name">ASHI Section</h4>
								<div class="mb-3 pt-3">
								<h3 class = "plus-image"><span>
								@foreach($page as $value)

			                	@if($value->section_title == 'ashi_image')
			                	<img src="{{asset('public/uploads')}}/{{$value->data}}" height="100px" width="100px">
			                	@endif
			                	@endforeach
			                	    <div class="upload-btn-wrapper">
                                        <button class="add_img_btn">Add Image</button>
                                        <input type="file" class="form-control shadow-sm bg-body rounded" name="ashi_image">
                                    </div>
									
									<input type="hidden" name="image[]" value="ashi_image">
								</span></h3>
								</div>
								<div class="mb-3">
								@foreach($page as $value)
								@if($value->section_title == 'affi_ashi')
								<input type="text" class="form-control shadow-sm mb-3 bg-body rounded" id="ashi" aria-describedby="emailHelp" value="{{$value->data}}" placeholder = "Heading" name="affi_ashi">
								@endif
								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="affi_ashi">
								</div>
								<div class="mb-3">
								@if($value->section_title == 'affi_ASHI_content')
								<textArea type="text" class="form-control editor shadow-sm mb-3 bg-body rounded" id="editor24" aria-describedby="emailHelp" placeholder = "Type Your Content Here" name="affi_ASHI_content">{{$value->data}}</textArea>
								@endif
								@endforeach
								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="affi_ASHI_content">
								</div>
							</div>
							<div class = "Root section3">
							<h4 class="section-name">NAHI Section</h4>
								<div class="mb-3 pt-3">
								<h3 class = "plus-image"><span>
								@foreach($page as $value)

			                	@if($value->section_title == 'nahi_image')
			                	<img src="{{asset('public/uploads')}}/{{$value->data}}" height="100px" width="100px">
			                	@endif
			                	@endforeach
			                	<div class="upload-btn-wrapper">
                                        <button class="add_img_btn">Add Image</button>
                                        <input type="file" class="form-control shadow-sm bg-body rounded" name="nahi_image">
                                    </div>
									
									<input type="hidden" name="image[]" value="nahi_image">
								</span></h3>
								</div>
								<div class="mb-3">
								@foreach($page as $value)
								@if($value->section_title == 'affi_nahi')
								<input type="text" class="form-control shadow-sm mb-3 bg-body rounded" id="ashi" aria-describedby="emailHelp" value="{{$value->data}}" placeholder = "Heading" name="affi_nahi">
								@endif
								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="affi_nahi">
								</div>
								<div class="mb-3">
								@if($value->section_title == 'affi_nahi_content')
								<textArea type="text" class="form-control editor shadow-sm mb-3 bg-body rounded" id="editor25" aria-describedby="emailHelp" placeholder = "Type Your Content Here" name="affi_nahi_content">{{$value->data}}</textArea>
								@endif
								@endforeach
								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="affi_nahi_content">
								</div>
							</div>
							<div class = "Root section4">
								<h4 class="section-name">InterNACHI Section
								    <!--<span class="add_options">-->
            <!--                            <button class="add_options_btn"><i class="fas fa-plus pe-2"></i>Add Section</button>-->
            <!--                            <button class="add_options_btn"><i class="fas fa-trash-alt pe-2"></i>Remove Section</button>-->
            <!--                        </span>-->
								</h4>
								<div class="mb-3 pt-3">
								<h3 class = "plus-image"><span>
								@foreach($page as $value)

			                	@if($value->section_title == 'inter_image')
			                	<img src="{{asset('public/uploads')}}/{{$value->data}}" height="100px" width="100px">
			                	@endif
			                	@endforeach
			                	    <div class="upload-btn-wrapper">
                                        <button class="add_img_btn">Add Image</button>
                                        <input type="file" class="form-control shadow-sm bg-body rounded" name="inter_image">
                                    </div>
									
									<input type="hidden" name="image[]" value="inter_image">
								</span></h3>
								</div>
								<div class="mb-3">
								@foreach($page as $value)

			                	@if($value->section_title == 'affi_inter')	
								<input type="text" class="form-control shadow-sm mb-3 bg-body rounded" id="ashi" aria-describedby="emailHelp" value="{{$value->data}}" placeholder = "Heading" name="affi_inter">
								@endif
								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="affi_inter">
								</div>
								<div class="mb-3">
								@if($value->section_title == 'affi_inter_content')	
								<textArea type="text" class="form-control editor shadow-sm mb-3 bg-body rounded" id="editor26" aria-describedby="emailHelp" placeholder = "Type Your Content Here" name="affi_inter_content">{{$value->data}}</textArea>
								@endif
								@endforeach
								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="affi_inter_content">
								</div>
							</div>
							<div class="d-grid gap-2 d-md-flex justify-content-md-end save-cencil">
							  <button class="btn btn-primary me-md-2 extra" type="button">Cancel</button>
							  <input class="btn btn-success extra" type="submit" value="Save">
							</div>
						</form>
					</div>

@endsection