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
				<form action="<?php echo e(url('/update-contact')); ?>" method="post" id="contact-form" enctype="multipart/form-data">
				<?php echo e(csrf_field()); ?>

                <input type="hidden" name="id" id="id" class="form-control" value="<?php echo e($details[0]->id); ?>"  >
                <input type="hidden" name="photo" id="photo" class="form-control" value="<?php echo e($details[0]->img); ?>"  >
                    <fieldset>
                        <legend class="text-center">Valid information is required to add Contact. <span class="req"><small> required *</small></span></legend>
                        <div class="form-group"> 	 
                            <label for="firstname">Photo: </label>
                                <img src="/uploads/<?php echo e($details[0]->img); ?>" alt="" width="100px" heigth="100px"><br>
                            <label for="firstname">Change Image: </label>   
                            <input type="file" name="new_photo" id="new_photo" class="form-control"  >

                        </div>

                        <div class="form-group"> 	 
                            <label for="firstname"><span class="req">* </span> First name: </label>
                                <input class="form-control" type="text" name="firstname" id = "firstname" onkeyup = "Validate(this)" required value="<?php echo e($details[0]->first_name); ?>" /> 
                                    <div id="errFirst"></div>    
                        </div>

                        <div class="form-group">
                            <label for="middlename">Middle name: </label> 
                                <input class="form-control" type="text" name="middlename" id = "middlename" onkeyup = "Validate(this)" value="<?php echo e($details[0]->middle_name); ?>" />  
                                    <div id="errMiddle"></div>
                        </div>

                        <div class="form-group">
                            <label for="lastname"><span class="req">* </span> Last name: </label> 
                                <input class="form-control" type="text" name="lastname" id = "lastname" onkeyup = "Validate(this)" required value="<?php echo e($details[0]->last_name); ?>" />  
                                    <div id="errLast"></div>
                        </div>

                        <div class="form-group">
                            <label for="email"> Email Address: </label> 
                                <input class="form-control" type="text" name="email" id = "email"  onchange="email_validate(this.value);" value="<?php echo e($details[0]->email); ?>" />   
                                    <div class="status" id="status"></div>
                        </div>

                        <div class="form-group">
                            <label for="mobile">Mobile Number: </label>
                                <input type="text" name="mobile" id="mobile" class="form-control phone" maxlength="28" onkeyup="validatephone(this);" value="<?php echo e($details[0]->mobile); ?>" /> 
                        </div>

                        <div class="form-group">
                            <label for="telephone"> Landline Number: </label>
                                <input  type="text" name="telephone" id="telephone" class="form-control phone" maxlength="28" onkeyup="validatephone(this);" value="<?php echo e($details[0]->landline); ?>" /> 
                        </div>

                        <div class="form-group">
                            <label for="username"> Notes: </label> 
                            <textarea name="notes" id="notes" cols="30" class="form-control" ><?php echo e($details[0]->notes); ?></textarea>	
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
	
<?php echo $__env->make('include.master_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>