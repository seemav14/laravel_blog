@extends('layouts.app')

@section('content')

<section class="heading">
    <div class="container">
        <div class="row">
            <h3 class="text-center">Latest blogs</h3>
        </div>
    </div>
</section>

<section class="featured-blog mtb-40">
    	<div class="container">
    		<div class="row" >
				@if(!empty($posts))
					@foreach($posts as $value)
						<div class="col-md-4">
							<div class="blog-box">
								<img src="/uploads/{{$value->image}}" alt="blog-img" />
								<h3>{{$value->title}}</h3>
								<p class="truncate">{{$value->content}}</p>
								<a href="" class="btn btn-danger">{{date_format(date_create($value->posted_at),'d-M-Y')}} </a>
							</div>
						</div>
					@endforeach
					
				@endif
				
    		</div>
			@if(!empty($posts))
			<div class="clearfix float-right">
				{{ $posts->links() }}
			</div>
			@endif
			
    	</div>
    </section>

@endsection