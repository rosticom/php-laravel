<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading">GENRES</div>

                    <div class="panel-body">
                        <?php echo e(link_to_route('genres.create', 'create', null, ['class' => 'btn btn-info btn-xs'])); ?>

                        <table class="table table-bordered table-responsive table-striped">
                            <tr>
                                <th width="1%">id</th>
                                <th width="25%">Title</th>
                                <th width="25%">Time</th>
                                <th width="20%">action</th>
                            </tr>
                            <tr>
                                <td colspan="3" class="light-green-background no-padding" title="Create new template">
                                    <div class="row centered-child">
                                        <div class="col-md-12">

                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php $__currentLoopData = $genreses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $model1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($model1->id); ?></td>
                                <td><?php echo e($model1->title); ?></td>
                                <td><?php echo e($model1->created_at); ?></td>
                                <td>
                                    <?php echo e(Form::open(['class' => 'confirm-delete', 'route' => ['genres.destroy', $model1->id], 'method' => 'DELETE'])); ?>

                                    <?php echo e(link_to_route('genres.show', 'info', [$model1->id], ['class' => 'btn btn-info btn-xs'])); ?>

                                    <?php echo e(link_to_route('genres.edit', 'edit', [$model1->id], ['class' => 'btn btn-success btn-xs'])); ?>

                                    <?php echo e(Form::button('Delete', ['class' => 'btn btn-danger btn-xs', 'type' => 'submit'])); ?>

                                    <?php echo e(Form::close()); ?>

                                </td>

                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>