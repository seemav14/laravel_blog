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
                    <form action="<?php echo e(url('/upload-contact')); ?>" method="post" id="contact-form" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

                        <fieldset>
                            <legend class="text-center">Valid information is required to add Contact. <span class="req"><small> required *</small></span></legend>
                            <div class="form-group"> 	 
                                <label for="firstname">Photo: </label>
                                    <input type="file" name="photo" id="photo" class="form-control"  >
                                        <div id="errPhoto"></div>    
                            </div>

                            <div class="form-group"> 	 
                                <label for="firstname"><span class="req">* </span> First name: </label>
                                    <input class="form-control" type="text" name="firstname" id = "firstname" onkeyup = "Validate(this)" required /> 
                                        <div id="errFirst"></div>    
                            </div>

                            <div class="form-group">
                                <label for="middlename">Middle name: </label> 
                                    <input class="form-control" type="text" name="middlename" id = "middlename" onkeyup = "Validate(this)" />  
                                        <div id="errMiddle"></div>
                            </div>

                            <div class="form-group">
                                <label for="lastname"><span class="req">* </span> Last name: </label> 
                                    <input class="form-control" type="text" name="lastname" id = "lastname" onkeyup = "Validate(this)" required />  
                                        <div id="errLast"></div>
                            </div>

                            <div class="form-group">
                                <label for="email"> Email Address: </label> 
                                    <input class="form-control" type="text" name="email" id = "email"  onchange="email_validate(this.value);" />   
                                        <div class="status" id="status"></div>
                            </div>

                            <div class="form-group">
                                <label for="mobile">Mobile Number: </label>
                                    <input type="text" name="mobile" id="mobile" class="form-control phone" maxlength="28" onkeyup="validatephone(this);" /> 
                            </div>

                            <div class="form-group">
                                <label for="telephone"> Landline Number: </label>
                                    <input  type="text" name="telephone" id="telephone" class="form-control phone" maxlength="28" onkeyup="validatephone(this);" /> 
                            </div>

                            <div class="form-group">
                                <label for="username"> Notes: </label> 
                                <textarea name="notes" id="notes" cols="30" class="form-control" ></textarea>	
                            </div>


                            <div class="form-group">
                                <input class="btn btn-success" id="register_contact" type="submit" name="contact-register" value="Register">
                            </div>
                                    
                        </fieldset>
                    </form><!-- ends register form -->

                    </div>
                </div>
            
        </div>
        
    </main>
   
</div><!-- /#wrapper -->
<?php $__env->stopSection(); ?>
	
<?php echo $__env->make('include.master_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>