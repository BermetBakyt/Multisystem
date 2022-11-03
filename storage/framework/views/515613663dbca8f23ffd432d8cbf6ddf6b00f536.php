
<?php $__env->startSection('title-block'); ?>Login@endsection

<?php $__env->startSection("content"); ?>
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="login" method="POST" >
                <div class="form-group">
                    <?php echo csrf_field(); ?>
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-default">Login</button>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?><?php /**PATH C:\Users\User\multisystem-en\resources\views/login.blade.php ENDPATH**/ ?>