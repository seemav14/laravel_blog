<?php $__env->startSection('contents'); ?>
<div class="page-wrapper chiller-theme toggled">
	<?php echo $__env->make('admin.include.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <main class="page-content">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row" id="main" >
                
            </div>
        </div>
        
    </main>
   
</div><!-- /#wrapper -->
<?php $__env->stopSection(); ?>
	
<?php echo $__env->make('admin.include.master_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>