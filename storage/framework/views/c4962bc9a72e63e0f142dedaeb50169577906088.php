<?php $__env->startSection('contents'); ?>
<div class="page-wrapper chiller-theme toggled">
	<?php echo $__env->make('include.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <main class="page-content">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row" id="main" >
				<div class="col-md-12">
						<?php $__currentLoopData = ['danger','warning','success','info']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<?php if(Session::has($key)): ?>
							<div class="alert alert-<?php echo e($key); ?>">
								<div style="text-align:center;"><?php echo e(Session::get($key)); ?></div>
							</div>
						<?php endif; ?>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>

				<div class="col-sm-12 col-md-12 well" id="">
				 <div class="form-group"> 	 
                    <select id="filter_by" class="form-controls">
						<option value="">-Filter by -</option>
						<option value="name">Name</option>
						<option value="phone">Phone or Landline</option>
					</select>    

					<input type="text" id="filter_value" class="form-controls" >

					<a class="btn btn-success" name="filter" id="filter_data" >Filter</a>
                 </div>
				 
				</div>	
				<div class="col-sm-12 col-md-12 well" id="">
					
				  	<div classt="table-responsive" id="">
					  <table id="datatable" class="table display" style="width:100%">
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
							
						</tbody>
					</table>
					</div>
				</div>
			</div>
            
        </div>
        
	</main>
   
</div>



	
<script type="text/javascript">

$(document).ready(function(){


  // DataTable

  $('#datatable').DataTable({

	 processing: true,

	 serverSide: true,

	 ajax: "<?php echo e(route('users.getusers')); ?>",

	 columns: [

		{ data: 'id' },

		{ data: 'name' },

		{ data: 'email' },

	 ]

  });

});

</script>

	<?php $__env->stopSection(); ?>
<?php echo $__env->make('include.master_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>