@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading">SIZE</div>

                    <div class="panel-body">
                        {{ link_to_route('size.create', 'create', null, ['class' => 'btn btn-info btn-xs']) }}
                        <table class="table table-bordered table-responsive table-striped">
                            <tr>
                                <th width="1%">id</th>
                                <th width="25%">Width</th>
                                <th width="25%">Height</th>
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
                            @foreach ($sizes as $model)
                                <tr>
                                    <td>{{$model->id}}</td>
                                    <td>{{$model->width}}</td>
                                    <td>{{$model->height}}</td>
                                    <td>
                                        {{Form::open(['class' => 'confirm-delete', 'route' => ['size.destroy', $model->id], 'method' => 'DELETE'])}}
                                        {{ link_to_route('size.show', 'info', [$model->id], ['class' => 'btn btn-info btn-xs']) }}
                                        {{ link_to_route('size.edit', 'edit', [$model->id], ['class' => 'btn btn-success btn-xs']) }}
                                        {{Form::button('Delete', ['class' => 'btn btn-danger btn-xs', 'type' => 'submit'])}}
                                        {{Form::close()}}
                                    </td>

                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
