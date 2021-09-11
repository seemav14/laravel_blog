@extends('admin.include.master_layout')
@section('contents')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.3/js/jquery.tablesorter.min.js"></script>

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
					</div>

		
				<div class="col-sm-12 col-md-12 well" id="">
					
				  <div classt="table-responsive" id="load_data">
					
				  </div>
				</div>
			</div>
            
        </div>
        
	</main>
   
</div>


@endsection
	