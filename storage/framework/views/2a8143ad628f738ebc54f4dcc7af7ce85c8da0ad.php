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
                    <form action="<?php echo e(url('blog-upload')); ?>" method="post" id="blog-form" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

                        <fieldset>
                            <legend class="text-center">Valid information is required to add Blog. <span class="req"><small> required *</small></span></legend>
                            <div class="form-group"> 	 
                                <label for="photo"><span class="req">* </span>  Blog Image: </label>
                                    <input type="file" name="photo" id="photo" class="form-control" required >
                                           
                            </div>

                            <div class="form-group"> 	 
                                <label for="title"><span class="req">* </span> Blog title: </label>
                                <input class="form-control" type="text" name="title" id = "title" onkeyup = "Validate(this)" required /> 
                                   
                            </div>

                            <div class="form-group">
                                <label for="content"><span class="req">* </span> Description: </label> 
                                <textarea name="content" id="content" rows="10" cols="30" class="form-control" ></textarea>	
                            </div>

                            <div class="form-group">
                                <input class="btn btn-success" id="" type="submit" name="add-blog" value="Add Blog">
                            </div>
                                    
                        </fieldset>
                    </form><!-- ends register form -->

                    </div>
                </div>
            
        </div>
        
    </main>
   
</div><!-- /#wrapper -->
<?php $__env->stopSection(); ?>
	
<?php echo $__env->make('admin.include.master_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>