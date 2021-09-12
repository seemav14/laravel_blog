@extends('admin.include.master_layout')
@section('contents')
<div class="page-wrapper chiller-theme toggled">
	@include('admin.include.sidebar')
    <main class="page-content">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row" id="main" >
			<div class="col-md-12">
						@foreach(['danger','warning','success','info'] as $key)
						@if(Session::has($key))
							<div class="alert alert-{{$key}}">
								<div style="text-align:center;">{{ Session::get($key) }}</div>
							</div>
						@endif
						@endforeach

						<!-- for validation ---->
						@if ($errors->any())
						    <div class="alert alert-danger">
						        <ul>
						            @foreach ($errors->all() as $error)
						                <li>{{ $error }}</li>
						            @endforeach
						        </ul>
						    </div>
						@endif
					</div>
                <div class="col-sm-12 col-md-12 well" id="content">
				<form action="{{url('/update-blog')}}" method="post" id="contact-form" enctype="multipart/form-data">
				{{ csrf_field() }}
                <input type="hidden" name="id" id="id" class="form-control" value="{{$details[0]->id}}"  >
                <input type="hidden" name="photo" id="photo" class="form-control" value="{{$details[0]->image}}"  >
                    <fieldset>
                        <legend class="text-center">Valid information is required to add Contact. <span class="req"><small> required *</small></span></legend>
                        <div class="form-group"> 	 
                            <label for="firstname">Blog Image: </label>
                                <img src="/uploads/{{$details[0]->image}}" alt="" width="100px" heigth="100px"><br>
                            <label for="firstname">Change Image: </label>   
                            <input type="file" name="new_photo" id="new_photo" class="form-control"  >

                        </div>

                        <div class="form-group"> 	 
                            <label for="title"><span class="req">* </span>Blog title: </label>
                                <input class="form-control" type="text" name="title" id = "title" onkeyup = "Validate(this)" required value="{{$details[0]->title}}" /> 
                                    <div id="errFirst"></div>    
                        </div>

                        <div class="form-group">
                            <label for="username"> Description: </label> 
                            <textarea name="content" id="content" rows="10" cols="30" class="form-control" >{{$details[0]->content}}</textarea>	
                        </div>


                        <div class="form-group">
                        <input class="btn btn-success" id="register_contact" type="submit" name="contact-register" value="Update">
                            
                        </div>
                                
                    </fieldset>
				</form><!-- ends register form -->

                </div>
            </div>
            
        </div>
        
    </main>
    <!-- /#page-wrapper -->
</div><!-- /#wrapper -->
@endsection
	