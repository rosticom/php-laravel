<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading">BOOKS</div>

                    <div class="panel-body">
                        <?php echo e(link_to_route('book.create', 'create', null, ['class' => 'btn btn-info btn-xs'])); ?>

                        <table class="table table-bordered table-responsive table-striped">
                            <tr>
                                <th width="5%">id</th>
                                <th width="25%">Title</th>
                                <th width="7%">Price</th>
                                <th width="20%">Author</th>
                                <th width="1%">Pages</th>
                                <th width="18%">Publisher</th>
                                <th width="3%">Year</th>
                                <th width="2%">HC</th>
                                <th width="2%">SID</th>
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
                        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $model): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($model->id); ?></td>
                                <td><?php echo e($model->title); ?></td>
                                <td><?php echo e($model->price); ?></td>
                                <td><?php echo e($model->author); ?></td>
                                <td><?php echo e($model->pages); ?></td>
                                <td><?php echo e($model->publisher); ?></td>
                                <td><?php echo e($model->year); ?></td>
                                <td><?php echo e($model->hardcover); ?></td>
                                <td><?php echo e($model->size_id); ?></td>
                                <td><?php echo e($model->created_at); ?></td>
                                <td>
                                    <?php echo e(Form::open(['class' => 'confirm-delete', 'route' => ['book.destroy', $model->id], 'method' => 'DELETE'])); ?>

                                    <?php echo e(link_to_route('book.show', 'info', [$model->id], ['class' => 'btn btn-info btn-xs'])); ?>

                                    <?php echo e(link_to_route('book.edit', 'edit', [$model->id], ['class' => 'btn btn-success btn-xs'])); ?>

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