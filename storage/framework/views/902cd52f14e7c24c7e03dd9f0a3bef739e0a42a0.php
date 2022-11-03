

<?php $__env->startSection('title-block'); ?>
Home
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
        <a href="" class="navbar-brand">MULTISYSTEM</a>
    </div>

    <div>
    <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About us</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
  </div>
  </div>

  
</nav>

<?php $__env->startSection('aside'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('aside'); ?>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iure.</p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\multisystem-en\resources\views/home.blade.php ENDPATH**/ ?>