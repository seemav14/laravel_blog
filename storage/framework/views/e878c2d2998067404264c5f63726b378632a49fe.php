<?php $__env->startSection('contents'); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.3/js/jquery.tablesorter.min.js"></script>

<div class="page-wrapper chiller-theme toggled">
	<?php echo $__env->make('admin.include.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
					
				  <div classt="table-responsive" id="load_data">
					
				  </div>
				</div>
			</div>
            
        </div>
        
	</main>
   
</div>


<?php $__env->stopSection(); ?>
	
<?php echo $__env->make('admin.include.master_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>