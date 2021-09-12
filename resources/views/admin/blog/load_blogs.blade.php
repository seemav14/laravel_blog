<table id="example" class="table display tablesorter" >
	<thead>
		<tr>
			<th>Image</th>
			<th>Titles</th>
			<th>Contents</th>
			<th>Edit</th>
			<th colspan="2">Delete</th>
		</tr>
	</thead>
	<tbody>
		@if(!empty($details))
			@foreach($details as $value)
				<tr>
					<td><img src="/uploads/{{$value->image}}" alt="" width="100px" height="100px" ></td>
					<td>{{$value->title}}</td>
					<td>{{$value->content}}</td>
					<td><a class="btn btn-info" href="{{url('/edit-blog')}}/{{$value->id}}">
						<i class="fa fa-pencil" aria-hidden="true"></i></a>
					</td>
					@if($value->flag == "N")
						<td><button class="btn btn-danger" onclick="show_hide(1,{{$value->id}})" ><i class="fa fa-trash" aria-hidden="true"></i> </button></td>
					@else
						<td><button class="btn btn-success" onclick="show_hide(0,{{$value->id}})"><i class="fa fa-eye" aria-hidden="true"></i></button></td>
					@endif

				</tr>
			@endforeach
		@endif
	</tbody>
</table>
{{ $details->links() }}


<script>

$('.pagination li a').click(function(){
    // alert();
    
	var url = $(this).attr('href'); 
    filter_data(url);
   
    return false;
    
});

</script>

