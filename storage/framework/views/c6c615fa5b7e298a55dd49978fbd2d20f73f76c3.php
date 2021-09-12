<?php $__env->startSection('contents'); ?>
<div class="page-wrapper chiller-theme toggled">
	<?php echo $__env->make('include.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <main class="page-content">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row" id="main" >
			
                <div class="col-sm-12 col-md-12 well" id="content">
				<table class="table table-bordered">
                    <tr>
                        <td>Photo</td>
                        <td><img src="/uploads/<?php echo e($details[0]->img); ?>" alt="" width="200px" height="200px" ></td>
                    </tr>
                    <tr>
                        <td>First Name</td>
                        <td><?php echo e($details[0]->first_name); ?>

                    </tr>
                    <tr>
                        <td>Middle Name</td>
                        <td><?php echo e($details[0]->middle_name); ?>

                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td><?php echo e($details[0]->last_name); ?>

                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?php echo e($details[0]->email); ?>

                    </tr>
                    <tr>
                        <td>Mobile</td>
                        <td><?php echo e($details[0]->mobile); ?>

                    </tr>
                    <tr>
                        <td>Landline</td>
                        <td><?php echo e($details[0]->landline); ?>

                    </tr>
                    <tr>
                        <td>Notes</td>
                        <td><?php echo e($details[0]->notes); ?>

                    </tr>
                </table>

                </div>
            </div>
            
        </div>
        
    </main>
    <!-- /#page-wrapper -->
</div><!-- /#wrapper -->
<?php $__env->stopSection(); ?>
	
<?php echo $__env->make('include.master_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>