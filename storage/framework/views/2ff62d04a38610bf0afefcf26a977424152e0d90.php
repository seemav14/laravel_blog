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
		<?php if(!empty($details)): ?>
			<?php $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><img src="/uploads/<?php echo e($value->image); ?>" alt="" width="100px" height="100px" ></td>
					<td><?php echo e($value->title); ?></td>
					<td><?php echo e($value->content); ?></td>
					<td><a class="btn btn-info" href="<?php echo e(url('/edit-blog')); ?>/<?php echo e($value->id); ?>">
						<i class="fa fa-pencil" aria-hidden="true"></i></a>
					</td>
					<?php if($value->flag == "N"): ?>
						<td><button class="btn btn-danger" onclick="show_hide(1,<?php echo e($value->id); ?>)" ><i class="fa fa-trash" aria-hidden="true"></i> </button></td>
					<?php else: ?>
						<td><button class="btn btn-success" onclick="show_hide(0,<?php echo e($value->id); ?>)"><i class="fa fa-eye" aria-hidden="true"></i></button></td>
					<?php endif; ?>

				</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php endif; ?>
	</tbody>
</table>
<?php echo e($details->links()); ?>



<script>

$('.pagination li a').click(function(){
    // alert();
    
	var url = $(this).attr('href'); 
    filter_data(url);
   
    return false;
    
});

</script>

