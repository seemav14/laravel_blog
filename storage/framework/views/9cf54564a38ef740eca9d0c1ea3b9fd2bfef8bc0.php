<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Blogger</title>

    <!-- Bootstrap core CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	

    <!-- Custom styles for this template -->
    <link href="<?php echo e(asset('css/styles.css')); ?>" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-blue">
    <div class="container">
	      <a class="navbar-brand" href="#" >
	      	Laravel Project
	      </a>
	      
  		</div>
	      
    </nav>
    
   
    <?php echo $__env->yieldContent('content'); ?>

    <footer>
    	<div class="container">
			
    	</div>
    </footer>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/custom.js')); ?>"></script>

  </body>
</html>
