@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading">GENRES</div>

                    <div class="panel-body">
                        {{ link_to_route('genre.create', 'create', null, ['class' => 'btn btn-info btn-xs']) }}
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
                        @foreach ($genres as $model1)
                            <tr>
                                <td>{{$model1->id}}</td>
                                <td>{{$model1->title}}</td>
                                <td>{{$model1->created_at}}</td>
                                <td>
                                    {{Form::open(['class' => 'confirm-delete', 'route' => ['genre.destroy', $model1->id], 'method' => 'DELETE'])}}
                                    {{ link_to_route('genre.show', 'info', [$model1->id], ['class' => 'btn btn-info btn-xs']) }}
                                    {{ link_to_route('genre.edit', 'edit', [$model1->id], ['class' => 'btn btn-success btn-xs']) }}
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
