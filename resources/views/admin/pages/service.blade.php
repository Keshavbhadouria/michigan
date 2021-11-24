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

			                	@if($value->section_title == 'service_banner')
			                	<img src="{{asset('public/uploads')}}/{{$value->data}}" height="100px" width="100px">
			                	@endif
			                	@endforeach
			                	    <div class="upload-btn-wrapper">
                                        <button class="add_img_btn">Add Image</button>
                                        <input type="file" class="form-control shadow-sm bg-body rounded" name="service_banner">
                                    </div>
									<input type="hidden" name="image[]" value="service_banner">
								</span></h4>
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
				                  @endforeach
					                  
					                <input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="bannersub">
								</div>
							</div>
							<div class = "Root section2">
								<h4 class="section-name">Buyers Inspection Section</h4>
								<div class="mb-3 pt-3">
								<h4 class = "plus-image"><span>
								@foreach($page as $value)
								@if($value->section_title == 'buyer_image')
			                	<img src="{{asset('public/uploads')}}/{{$value->data}}" height="100px" width="100px">
			                	@endif
			                	@endforeach
			                	    <div class="upload-btn-wrapper">
                                        <button class="add_img_btn">Add Image</button>
                                        <input type="file" class="form-control shadow-sm bg-body rounded" name="buyer_image">
                                    </div>
									<input type="hidden" name="image[]" value="buyer_image">
								</span></h4>
								</div>
								<div class="mb-3">
									@foreach($page as $value)
									@if($value->section_title == 'buyer')
								<input type="text" class="form-control shadow-sm  mb-3 bg-body rounded" id="buyer" aria-describedby="emailHelp" value="{{$value->data}}" placeholder = "Heading" name="buyer">
								@endif
								 <input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="buyer">
								</div>
								<div class="mb-3">
									@if($value->section_title == 'buyercontent')
								<textArea type="text" class="form-control editor shadow-sm  mb-3 bg-body rounded" id="editor7" aria-describedby="emailHelp" placeholder = "Type Your Content Here" name="buyercontent">{{$value->data}}</textArea>
								@endif
								@endforeach
								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="buyercontent">
								</div>
							</div>
							<div class = "Root section3">
								<h4 class="section-name">Sellers Inspection Section</h4>
								<div class="mb-3 pt-3">
								<h4 class = "plus-image"><span>
									@foreach($page as $value)
								@if($value->section_title == 'seller_image')
			                	<img src="{{asset('public/uploads')}}/{{$value->data}}" height="100px" width="100px">
			                	@endif
			                	@endforeach
			                	    <div class="upload-btn-wrapper">
                                        <button class="add_img_btn">Add Image</button>
                                        <input type="file" class="form-control shadow-sm bg-body rounded" name="seller_image">
                                    </div>
									<input type="hidden" name="image[]" value="seller_image">

								</span></h4>
								</div>
								<div class="mb-3">
									@foreach($page as $value)
									@if($value->section_title == 'seller')
								<input type="text" class="form-control shadow-sm  mb-3 bg-body rounded" id="sellerhead" aria-describedby="emailHelp" value="{{$value->data}}" placeholder = "Heading" name="seller">
								@endif
								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="seller">
								</div>
								<div class="mb-3">
								@if($value->section_title == 'sellercontent')
								<textArea type="text" class="form-control editor shadow-sm  mb-3 bg-body rounded" id="editor6" aria-describedby="emailHelp" placeholder = "Type Your Content Here" name="sellercontent">{{$value->data}}</textArea>
								@endif
								@endforeach
								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="sellercontent">
								</div>
							</div>
							<div class = "Root section4">
								<h4 class="section-name">Construction Inspection Section</h4>
								<div class="mb-3 pt-3">
								<h4 class = "plus-image"><span>
								@foreach($page as $value)
								@if($value->section_title == 'construction_image')
			                	<img src="{{asset('public/uploads')}}/{{$value->data}}" height="100px" width="100px">
			                	@endif
			                	@endforeach
			                	    <div class="upload-btn-wrapper">
                                        <button class="add_img_btn">Add Image</button>
                                        <input type="file" class="form-control shadow-sm bg-body rounded" name="construction_image">
                                    </div>
									<input type="hidden" name="image[]" value="construction_image">
								</span></h4>
								</div>
								<div class="mb-3">
									@foreach($page as $value)
									@if($value->section_title == 'construction')
								<input type="text" class="form-control shadow-sm  mb-3 bg-body rounded" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$value->data}}" placeholder = "Heading" name="construction">
								@endif
								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="construction">

								</div>
								<div class="mb-3">
								@if($value->section_title == 'conscontent')
								<textArea type="text" class="form-control editor shadow-sm  mb-3 bg-body rounded" id="editor4" aria-describedby="emailHelp" placeholder = "Type Your Content Here" name="conscontent">{{$value->data}}</textArea>
								@endif
								@endforeach
								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="conscontent">
								</div>
							</div>
							<div class="d-grid gap-2 d-md-flex justify-content-md-end save-cencil">
							  <button class="btn btn-primary me-md-2 extra" type="button">Cancel</button>
							  <input class="btn btn-success extra" type="submit" value="Save">
							</div>
						</form>
					</div>

@endsection