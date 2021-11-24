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
								<div class = "mb-3 bg-image">
								<h4 class="section-name">Banner Section</h4>
								<div class="item form-group">
									<div class="col-md-6 col-sm-6 ">
									     <input type="hidden" id="pagetitle" value="{{Request::segment(1)}}" class="form-control shadow-sm mb-3 bg-body rounded" name="ptitle" readonly>
									</div>
								</div>
								<h4><span>
									@foreach($page as $value)
									@if($value->section_title == 'contact_banner')
				                	<img src="{{asset('public/uploads')}}/{{$value->data}}" height="100px" width="100px">
				                	@endif
				                	@endforeach
				                	<div class="upload-btn-wrapper">
                                        <button class="add_img_btn">Add Image</button>
                                        <input type="file" class="form-control shadow-sm bg-body rounded" name="contact_banner">
                                    </div>
									
									<input type="hidden" name="image[]" value="contact_banner">
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
								<input type="text" class="form-control shadow-sm mb-3 bg-body rounded" id="bannerlink" aria-describedby="emailHelp" value="{{$value->data}}" placeholder = "Add Link" name="bannerlink">
								@endif
								@endforeach

								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="bannerlink">
								</div>
							</div>
							<div class = "Root section2">
								<h4 class="section-name">Contact Us Section</h4>
								<h5></h5>
								<div class="mb-3">

									<h4><span>
									@foreach($page as $value)
									@if($value->section_title == 'contact_img')
				                	<img src="{{asset('public/uploads')}}/{{$value->data}}" height="100px" width="100px">
				                	@endif
				                	@endforeach
				                	<div class="upload-btn-wrapper">
                                        <button class="add_img_btn">Add Image</button>
                                        <input type="file" class="form-control shadow-sm bg-body rounded" name="contact_img">
                                    </div>
									
									<input type="hidden" name="image[]" value="contact_img">
								</span></h4>


									@foreach($page as $value)
									@if($value->section_title == 'contact_head')
								<input type="text" class="form-control shadow-sm mb-3 bg-body rounded" id="contact_head" aria-describedby="emailHelp" value="{{$value->data}}" placeholder = "Heading" name="contact_head">
									@endif

								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="contact_head">
								</div>
								<div class="mb-3">
									@if($value->section_title == 'contact_content')
								<textArea type="text" id="editor2" class="form-control editor shadow-sm mb-3 bg-body rounded" aria-describedby="emailHelp" placeholder = "Type Your Address Here" name="contact_content">{{$value->data}}</textArea>
								  @endif
								  

								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="contact_content">

								</div>
								<div class="mb-3">
								@if($value->section_title == 'contact_email')
								<input type="text" class="form-control shadow-sm mb-3 bg-body rounded" id="contact_email" aria-describedby="emailHelp" value="{{$value->data}}" placeholder = "Email-Address" name="contact_email">
								@endif
								  @endforeach
								<input id="fbanner" name="text_name[]" class="form-control" type="hidden" value="contact_email">
								</div>
							</div>
							
							<div class="d-grid gap-2 d-md-flex justify-content-md-end save-cencil">
							  <button class="btn btn-primary me-md-2 extra" type="button">Cancel</button>
							  <input class="btn btn-success extra" type="submit" value="Save">
							</div>
						</form>
						<div id = "clone-service">
							<div class = "Root section3 addMore" id = "Clone">
								<h4 class="section-name">Contact A Local Inspector Section</h4>
							</div>
						
							</div>
							 <div class="table-responsive">
                <form method="post" id="dynamic_form">
                 <span id="result"></span>
                 <table class="table table-bordered table-striped" id="user_table">
               <thead>
                <tr>
                    <th width="25%">Area Name</th>
                    <th width="25%">Name</th>
                    <th width="25%">Address</th>
                    <th width="25%">Phone</th>
                    <th width="20%">Action</th>
                </tr>
               </thead>
               <tbody>
                   @if(!empty($contact))
                   @for($i=0;$i < count($contact);$i++)
                   <tr>
                       <td><input type="text" name="areaname[]" class="form-control areaname" value="{{ $contact[$i]->areaname }}" /></td>
                     
                        <td><input type="text" name="name[]" class="form-control name" value="{{ $contact[$i]->name }}"></td>
                       <td><input type="text" name="address[]" class="form-control address" value="{{ $contact[$i]->address }}"></td>
                       <td><input type="text" name="phone[]" class="form-control phone" value="{{ $contact[$i]->phone }}"></td>
                      
                       @if($i == 0)
                       <td><button type="button" name="add" id="add" class="btn btn-success w-100" style="height:36px;">Add</button></td></tr>
                       @else
                       <td><button type="button" name="remove" class="btn btn-danger remove">Remove</button></td></tr>
                       @endif
                   </tr>
                   @endfor
                   @else
                   <tr>
                        <td><input type="text" name="areaname[]" class="form-control test2" /><td>
                       <td><input type="text" name="name[]" class="form-control test"></td>
                       <td><input type="text" name="address[]" class="form-control"></td>
                       <td><input type="text" name="phone[]" class="form-control" /></td>
                       <td><button type="button" name="add" id="add" class="btn btn-success">Add</button></td>
                       </tr>
                  
                   @endif
               </tbody>
               <tfoot>
                   
                <tr>
                <td colspan="4" align="right">&nbsp;</td>
                                <td>
                  @csrf
                  <input type="submit" name="save" id="save" class="btn btn-primary w-100" value="Save" />
                 </td>
                </tr>
               </tfoot>
           </table>
                </form>
   </div>

<script>
$(document).ready(function(){

 function dynamic_field()
 {
     $('tbody').append('<tr><td><input type="text" name="areaname[]" class="form-control test2" /></td><td><input type="text" name="name[]" class="form-control test2" /></td><td><input type="text" name="address[]" class="form-control" /></td><td><input type="text" name="phone[]" class="form-control" /></td><td><button type="button" name="remove" id="" class="btn btn-danger remove">Remove</button></td></tr>');
 }
 $('#add').click(function(){
  dynamic_field();
 });
 $(document).on('click', '.remove', function(){
  $(this).closest('tr').remove();
 });
 $('#dynamic_form').on('submit', function(event){
        event.preventDefault();
        $.ajax({
            url:"{{url('dynamic-field/insert')}}",
            method:'post',
            data:$(this).serialize(),
            dataType:'json',
            beforeSend:function(){
                $('#save').prop('disabled',true);
            },
            success:function(data)
            {
                if(data.error)
                {
                    var error_html = '';
                    for(var count = 0; count < data.error.length; count++)
                    {
                        error_html += '<p>'+data.error[count]+'</p>';
                    }
                    $('#result').html('<div class="alert alert-danger">'+error_html+'</div>');
                }
                else
                {
                    $('#result').html('<div class="alert alert-success">'+data.success+'</div>');
                }
                $('#save').prop('disabled', false);
            }
        })
 });

});
    // $(function () {
    //     $('.test').hide();

    //     //show it when the checkbox is clicked
    //     $('input[name="checkbox"]').on('click', function () {
    //         if ($(this).prop('checked')) {
    //             $('.test').fadeIn();
    //         } else {
    //             $('.test').hide();
    //         }
    //     });
    // });
    //     $(function () {
    //     $('.test2').hide();

    //     //show it when the checkbox is clicked
    //     $('input[name="checkboxx"]').on('click', function () {
    //         if ($(this).prop('checked')) {
    //             $('.test').fadeIn();
    //         } else {
    //             $('.test').hide();
    //         }
    //     });
    // });
</script>
					</div>

@endsection