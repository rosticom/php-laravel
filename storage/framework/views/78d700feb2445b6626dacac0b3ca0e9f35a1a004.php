<?php
/** @var \Illuminate\Support\ViewErrorBag $errors */
/** @var \App\Book $book */
?>
<?php $__env->startSection('panel'); ?>
    <div class="panel-heading container-fluid">
        <div class="form-group">
            <a class="btn btn-info btn-xs col-md-1 col-sm-2 col-xs-2" href="<?php echo e(route('genres.index')); ?>">
                <i class="fa fa-backward" aria-hidden="true"></i> back
            </a>
            <div class="centered-child col-md-9 col-sm-7 col-xs-6">Genre:<b><?php echo e($genres->title); ?></b><?php echo $genres ?></div>
            <div class="col-md-2 col-sm-3 col-xs-4">
                <div class="pull-right">
                    <?php echo e(Form::open(['class' => 'confirm-delete', 'route' => ['genres.destroy', $genres->id], 'method' => 'DELETE'])); ?>

                    <?php echo e(link_to_route('genres.edit', 'edit', [$genres->id], ['class' => 'btn btn-primary btn-xs'])); ?>

                    <?php echo e(Form::button('Delete', ['class' => 'btn btn-danger btn-xs', 'type' => 'submit'])); ?>

                    <?php echo e(Form::close()); ?>

                </div>
            </div>
        </div>
    </div>

    <div class="panel-body">

        <table class="table table-bordered table-responsive">
            <tr>
                <th width="25%">Attribute</th>
                <th width="75%">Value</th>
            </tr>
            <?php $__currentLoopData = $genres->getAttributes(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($attribute); ?></td>
                    <td><?php echo e($value); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.panel', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>