<?php $__env->startSection('contents'); ?>
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

						<!-- for validation ---->
						<?php if($errors->any()): ?>
						    <div class="alert alert-danger">
						        <ul>
						            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						                <li><?php echo e($error); ?></li>
						            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						        </ul>
						    </div>
						<?php endif; ?>
					</div>
                <div class="col-sm-12 col-md-12 well" id="content">
				<form action="<?php echo e(url('/update-blog')); ?>" method="post" id="contact-form" enctype="multipart/form-data">
				<?php echo e(csrf_field()); ?>

                <input type="hidden" name="id" id="id" class="form-control" value="<?php echo e($details[0]->id); ?>"  >
                <input type="hidden" name="photo" id="photo" class="form-control" value="<?php echo e($details[0]->image); ?>"  >
                    <fieldset>
                        <legend class="text-center">Valid information is required to add Contact. <span class="req"><small> required *</small></span></legend>
                        <div class="form-group"> 	 
                            <label for="firstname">Blog Image: </label>
                                <img src="/uploads/<?php echo e($details[0]->image); ?>" alt="" width="100px" heigth="100px"><br>
                            <label for="firstname">Change Image: </label>   
                            <input type="file" name="new_photo" id="new_photo" class="form-control"  >

                        </div>

                        <div class="form-group"> 	 
                            <label for="title"><span class="req">* </span>Blog title: </label>
                                <input class="form-control" type="text" name="title" id = "title" onkeyup = "Validate(this)" required value="<?php echo e($details[0]->title); ?>" /> 
                                    <div id="errFirst"></div>    
                        </div>

                        <div class="form-group">
                            <label for="username"> Description: </label> 
                            <textarea name="content" id="content" rows="10" cols="30" class="form-control" ><?php echo e($details[0]->content); ?></textarea>	
                        </div>


                        <div class="form-group">
                        <input class="btn btn-success" id="register_contact" type="submit" name="contact-register" value="Update">
                            
                        </div>
                                
                    </fieldset>
				</form><!-- ends register form -->

                </div>
            </div>
            
        </div>
        
    </main>
    <!-- /#page-wrapper -->
</div><!-- /#wrapper -->
<?php $__env->stopSection(); ?>
	
<?php echo $__env->make('admin.include.master_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>