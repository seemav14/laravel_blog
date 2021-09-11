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
                    <form action="{{url('blog-upload')}}" method="post" id="blog-form" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <fieldset>
                            <legend class="text-center">Valid information is required to add Blog. <span class="req"><small> required *</small></span></legend>
                            <div class="form-group"> 	 
                                <label for="photo"><span class="req">* </span>  Blog Image: </label>
                                    <input type="file" name="photo" id="photo" class="form-control" required >
                                           
                            </div>

                            <div class="form-group"> 	 
                                <label for="title"><span class="req">* </span> Blog title: </label>
                                <input class="form-control" type="text" name="title" id = "title" onkeyup = "Validate(this)" required /> 
                                   
                            </div>

                            <div class="form-group">
                                <label for="content"><span class="req">* </span> Description: </label> 
                                <textarea name="content" id="content" rows="10" cols="30" class="form-control" ></textarea>	
                            </div>

                            <div class="form-group">
                                <input class="btn btn-success" id="" type="submit" name="add-blog" value="Add Blog">
                            </div>
                                    
                        </fieldset>
                    </form><!-- ends register form -->

                    </div>
                </div>
            
        </div>
        
    </main>
   
</div><!-- /#wrapper -->
@endsection
	