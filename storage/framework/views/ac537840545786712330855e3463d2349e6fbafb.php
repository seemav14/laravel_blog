<?php $__env->startSection('content'); ?>

<section class="heading">
    <div class="container">
        <div class="row">
            <h3 class="text-center">Latest blogs</h3>
        </div>
    </div>
</section>

<section class="featured-blog mtb-40">
    	<div class="container">
    		<div class="row" >
				<?php if(!empty($posts)): ?>
					<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="col-md-4">
							<div class="blog-box">
								<img src="/uploads/<?php echo e($value->image); ?>" alt="blog-img" />
								<h3><?php echo e($value->title); ?></h3>
								<p class="truncate"><?php echo e($value->content); ?></p>
								<a href="" class="btn btn-danger"><?php echo e(date_format(date_create($value->posted_at),'d-M-Y')); ?> </a>
							</div>
						</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					
				<?php endif; ?>
				
    		</div>
			<?php if(!empty($posts)): ?>
			<div class="clearfix float-right">
				<?php echo e($posts->links()); ?>

			</div>
			<?php endif; ?>
			
    	</div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>