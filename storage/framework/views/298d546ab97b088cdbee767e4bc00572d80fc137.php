<?php $__env->startSection('panel'); ?>
    <div class="panel-heading container-fluid">
        <div class="form-group">
            <a class="btn btn-info btn-xs col-md-1 col-sm-2 col-xs-2" href="<?php echo e(route('genre.index')); ?>">
                <i class="fa fa-backward" aria-hidden="true"></i> back
            </a>
            <div class="centered-child col-md-11 col-sm-10 col-xs-10"><b>New Genre</b></div>
        </div>
    </div>

    <div class="panel-body">
        <?php echo Form::open(['route' => 'genre.store']); ?>


        <?php echo $__env->make('genre._form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="form-group">
            <?php echo Form::button('Create', ['type' => 'submit', 'class' => 'btn btn-primary']); ?>

        </div>

        <?php echo Form::close(); ?>


    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.panel', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>