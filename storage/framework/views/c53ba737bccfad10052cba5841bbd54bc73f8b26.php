<?php  /** @var \Illuminate\Support\ViewErrorBag $errors */  ?>
<?php $__env->startSection('panel'); ?>
    <div class="panel-heading container-fluid">
        <div class="form-group">
            <div class="centered-child col-md-11 col-sm-10 col-xs-10"><b>New Post</b></div>
        </div>
    </div>

    <div class="panel-body">
        <?php echo Form::open(['route' => 'post.store']); ?>


        <?php echo $__env->make('post._form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="form-group">
            <?php echo Form::button('Create', ['type' => 'submit', 'class' => 'btn btn-primary']); ?>

        </div>

        <?php echo Form::close(); ?>


    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.panel', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>