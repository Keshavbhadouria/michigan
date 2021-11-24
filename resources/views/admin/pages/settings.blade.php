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
								<h4 class="section-name">Header Logo</h4>
								<div class="item form-group">
									<div class="col-md-6 col-sm-6 ">
									     <input type="hidden" id="pagetitle" value="{{Request::segment(1)}}" class="form-control shadow-sm mb-3 bg-body rounded" name="ptitle" readonly>
									</div>
								</div>
								<div class = "mb-3 bg-image">
								<h4><span>
			                	@foreach($page as $value)
								@if($value->section_title == 'logo')
								<img src="{{asset('public/uploads')}}/{{$value->data}}" height="50px" width="200px">
								@endif
								@endforeach
								    <div class="upload-btn-wrapper">
                                        <button class="add_img_btn">Add Image</button>
                                        <input type="file" class="form-control shadow-sm bg-body rounded" name="logo">
                                    </div>
									
									<input type="hidden" name="image[]" value="logo">
								</span></h4>
								</div>
								<h4 class="section-name">Header Phone Number</h4>
								<div class="mb-3">
								@foreach($page as $value)
								@if($value->section_title == 'header_phone')
				                <input type="text" class="form-control shadow-sm mb-3 bg-body rounded" id="banner_heading" aria-describedby="emailHelp" value="{{$value->data}}" placeholder = "Header Phone" name="header_phone">
				                @endif
				                @endforeach
				                <input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="header_phone">
                
								</div>
								<h4 class="section-name">Footer Copyright</h4>
								<div class="mb-3">
								@foreach($page as $value)
								@if($value->section_title == 'footer_copyright')
					                <textarea id="editor9" class="form-control editor shadow-sm mb-3 bg-body rounded" aria-describedby="emailHelp" name="footer_copyright">{!! $value->data !!}</textarea> 
					            @endif
					            @endforeach
					                  
					                <input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="footer_copyright">
								</div>
								 <h4 class="section-name">Admin Email</h4>
                                	<div class="mb-3">
                                		@foreach($page as $value)
                                			@if($value->section_title == 'admin_email')
                                				<input type="text" class="form-control shadow-sm mb-3 bg-body rounded" id="admin_email" aria-describedby="emailHelp" value="{{$value->data}}" placeholder = "Admin Email" name="admin_email">
                                			@endif
                                		@endforeach
                                					                  
                                				<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="admin_email">
                                	</div>
								<h4 class="section-name">Sitemap Link</h4>
								<div class="mb-3">
								@foreach($page as $value)
								@if($value->section_title == 'sitemap_url')
					                <input type="text" class="form-control shadow-sm mb-3 bg-body rounded" id="banner_subheading" aria-describedby="emailHelp" value="{{$value->data}}" placeholder = "Sitemap Url Slug" name="sitemap_url">
					            @endif
					            @endforeach
					                  
					                <input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="sitemap_url">
								</div>
							</div>
							
							
							
							<div class="d-grid gap-2 d-md-flex justify-content-md-end save-cencil">
							<a href="{{asset('/changepassword')}}" class="btn btn-warning extra">Change Password</a>
							  <button class="btn btn-primary me-md-2 extra" type="button">Cancel</button>
							  <input class="btn btn-success extra" type="submit" value="Save">
							</div>
						</form>
					</div>

@endsection