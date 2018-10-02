<?php $__env->startSection('panel'); ?>
    <div class="panel-heading container-fluid">
        <div class="form-group">
            <a class="btn btn-info btn-xs col-md-1 col-sm-2 col-xs-2" href="<?php echo e(route('genres.index')); ?>">
                <i class="fa fa-backward" aria-hidden="true"></i> back
            </a>
            <div class="centered-child col-md-9 col-sm-7 col-xs-6">Edit genres: <b><?php echo e($genres->id); ?></b></div>
            <div class="col-md-2 col-sm-3 col-xs-4">
                <div class="pull-right">
                    <?php echo e(Form::open(['class' => 'confirm-delete', 'route' => ['genres.destroy', $genres->id], 'method' => 'DELETE'])); ?>

                    <?php echo e(Form::button('Delete', ['class' => 'btn btn-danger btn-xs', 'type' => 'submit'])); ?>

                    <?php echo e(Form::close()); ?>

                </div>
            </div>
        </div>
    </div>

    <div class="panel-body">
        <?php echo Form::model($genres, ['route' => ['genres.update', $genres->id], 'method' => 'PUT']); ?>


        <?php echo $__env->make('genres._form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


        <div class="form-group">
            <?php echo Form::button('Edit', ['type' => 'submit', 'class' => 'btn btn-primary']); ?>

        </div>

        <?php echo Form::close(); ?>


    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.panel', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>