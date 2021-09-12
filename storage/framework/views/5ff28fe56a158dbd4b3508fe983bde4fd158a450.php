<table id="example" class="table display tablesorter" >
	<thead>
		<tr>
			<th>Image</th>
			<th>First Name</th>
			<th>Middle Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>Mobile</th>
			<th>Landline</th>
			<th>Notes</th>
			<th>Created Date</th>
			<th>View</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>
		<?php if(!empty($details)): ?>
			<?php $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><img src="/uploads/<?php echo e($value->img); ?>" alt="" width="100px" height="100px" ></td>
					<td><?php echo e($value->first_name); ?></td>
					<td><?php echo e($value->middle_name); ?></td>
					<td><?php echo e($value->last_name); ?></td>
					<td><?php echo e($value->email); ?></td>
					<td><?php echo e($value->mobile); ?></td>
					<td><?php echo e($value->landline); ?></td>
					<td><?php echo e($value->notes); ?></td>
					<td><?php echo e($value->created_at); ?></td>
					<td><a class="btn btn-success" href="<?php echo e(url('/contact-details')); ?>/<?php echo e($value->id); ?>"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
					<td><a class="btn btn-info" href="<?php echo e(url('/edit-contact')); ?>/<?php echo e($value->id); ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
					<td><a class="btn btn-danger" href="<?php echo e(url('/delete-contact')); ?>/<?php echo e($value->id); ?>"><i class="fa fa-trash" aria-hidden="true"></i> </a></td>
				</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php endif; ?>
	</tbody>
</table>
<?php echo e($details->links()); ?>



<script>

$('.pagination li a').click(function(){
    // alert();
    var by = $("#filter_by").val();
    var value = $("#filter_value").val();  
	var url = $(this).attr('href'); 
    filter_data(url,by,value);
   
    return false;
    
});

</script>

<script>
	$(function() {		
		$(".tablesorter").tablesorter({
			sortList: [[0,0]], headers: { 
				0:{sorter: false},2:{sorter: false},3:{sorter: false}, 4:{sorter: false},5:{sorter: false},6:{sorter: false},7:{sorter: false},9:{sorter: false},10:{sorter: false}
				}
		});
	});	
	</script>