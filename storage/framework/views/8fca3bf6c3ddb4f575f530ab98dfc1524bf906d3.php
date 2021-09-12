<?php $__env->startSection('content'); ?>


<section class="featured-blog mtb-40">
    	<div class="container">
		<div class="row" >
				<h5>Pair</h5>
    		</div>
    		<div class="row" >
				<div id="pair"></div>
    		</div>
			
    	</div>
    </section>
<script>

function count_pairs(arr, l, r, n)
{
	arr.sort((a, b) => a - b);
	let ans = 0;
	for (let i = 0; i < n; i++)
	{
		let itr1 = upper_bound(arr, 0, arr.length - 1, Math.floor(l / arr[i]));
		let itr2 = lower_bound(arr, 0, arr.length - 1, Math.floor(l / arr[i]));
		ans += itr1 - itr2;
	}
	// document.write(ans + "<br>");
	document.getElementById("pair").innerHTML = ans; 
}



function lower_bound(arr, low, high, X) {
	if (low > high) {
		return low;
	}

	let mid = Math.floor(low + (high - low) / 2);

	if (arr[mid] >= X) {
		return lower_bound(arr, low, mid - 1, X);
	}
	return lower_bound(arr, mid + 1, high, X);
}


function upper_bound(arr, low, high, X) {

	if (low > high)
		return low;

	let mid = Math.floor(low + (high - low) / 2);
	if (arr[mid] <= X) {
		return upper_bound(arr, mid + 1, high, X);
	}

	return upper_bound(arr, low, mid - 1, X);
}

let arr = [4, 1, 2, 5];
let l = 4, r = 9;

let n = arr.length

count_pairs(arr, l, r, n);
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>