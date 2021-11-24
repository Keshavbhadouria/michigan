<div class = "call-today">
								@foreach($page as $value)
								@if($value->section_title == 'head_call')
								<p class = "callHead"><strong>{{$value->data}}</strong></p>
								@endif
								@if($value->section_title == 'side_content')
								<p class = "callHead-content">{!! $value->data !!}</p>
								@endif
								@endforeach
								<div class = "call-image">
								@foreach($page as $value)
								@if($value->section_title == 'side_image')
								<img src = "{{asset('public/uploads')}}/{{$value->data}}" alt = "home-inspectors" />
								@endif
								@endforeach
								</div>
								<div class = "contact-us">
								<h6>CONTACT US</h6>
								<p></p>
								</div>
								<div class = "side-form mt-5">
								@if(Session::has('success'))
                                <div class="alert alert-success">
                                {{ Session::get('success') }}
                                @php
                                Session::forget('success');
                               @endphp

                                </div>

                        @endif

								<form class = "form-control" method="POST" action="{{ asset('/contact-form') }}">
								    @csrf
									<h4 class = "text-center">Request a Quote</h4>
									<div class="mb-3">
									  <input type="text" class="form-control mb-3" name ="name" placeholder="Name">
									                                          @if ($errors->has('name'))

                                            <span class="text-danger">{{ $errors->first('name') }}</span>

                                        @endif
									  <input type="email" class="form-control mb-3" name ="email" placeholder="Email">
									                                          @if ($errors->has('email'))

                                            <span class="text-danger">{{ $errors->first('email') }}</span>

                                        @endif

									  <input type="text" class="form-control mb-3" name ="phone" placeholder="Contact Number">
									                                          @if ($errors->has('phone'))

                                            <span class="text-danger">{{ $errors->first('phone') }}</span>

                                        @endif

									  <input type="text" class="form-control mb-3" name ="subject" placeholder="Subject">
									                                          @if ($errors->has('subject'))

                                            <span class="text-danger">{{ $errors->first('subject') }}</span>

                                        @endif

									  <textarea class="form-control mb-3" name ="usermessage" placeholder="Message"></textarea>
									                                          @if ($errors->has('usermessage'))

                                            <span class="text-danger">The message field is required.</span>

                                        @endif

									</div>
									<button class = "btn btn-success sending btn-submit"ty>Send</button>
								</form>
							</div>
</div>