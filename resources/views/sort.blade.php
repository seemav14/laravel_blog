@extends('layouts.app')

@section('content')


<section class="featured-blog mtb-40">
    	<div class="container">
		<div class="row" >
				<h5>Sorting</h5>
    		</div>
    		<div class="row" >
				<div id="sort"></div>
    		</div>
			
    	</div>
    </section>
<script>

	function sort_array(a,size)
	{
		let low = 0;
		let high = size - 1;
		let mid = 0;
		let temp = 0;
		while (mid <= high)
		{
			if(a[mid] == 0)
			{
				temp = a[low];
				a[low] = a[mid];
				a[mid] = temp;
				low++;
				mid++;
			}
			else if(a[mid] == 1)
			{
				mid++;
			}
			else
			{
				temp = a[mid];
				a[mid] = a[high];
				a[high] = temp;
				high--;
			}
			
		}
	}
	
	function show_array(arr,size)
	{
		let i;
		var result = "";
		for (i = 0; i < size; i++)
		{
			result +=  arr[i] + " ";
		}
		result +=  "<br>";
		document.getElementById("sort").innerHTML = result; 
	}
	
	/*Driver function to check for above functions*/
	let arr= [0, 1, 1, 0, 1, 2, 1, 2, 0, 0, 0, 1 ];
	
	let size = arr.length;
	sort_array(arr, size);
	show_array(arr, size);
	
</script>

@endsection