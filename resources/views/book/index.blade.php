@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading">BOOKS</div>

                    <div class="panel-body">
                        {{ link_to_route('book.create', 'create', null, ['class' => 'btn btn-info btn-xs']) }}
                        <table class="table table-bordered table-responsive table-striped">
                            <tr>
                                <th width="1%">id</th>
                                <th width="25%">Title</th>
                                <th width="7%">Price</th>
                                <th width="15%">Author</th>
                                <th width="10%">Genres</th>
                                <th width="1%">Pages</th>
                                <th width="18%">Publisher</th>
                                <th width="5%">Year</th>
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
                        @foreach ($books as $model)
                            <tr>
                                <td>{{$model->id}}</td>
                                <td>{{$model->title}}</td>
                                <td>{{$model->price}}</td>
                                <td>{{$model->author}}</td>
                                <td>{{$model->genres}}</td>
                                <td>{{$model->pages}}</td>
                                <td>{{$model->publisher}}</td>
                                <td>{{$model->year}}</td>
                                <td>{{$model->hardcover}}</td>
                                <td>{{$model->size_id}}</td>
                                <td>{{$model->created_at}}</td>
                                <td>
                                    {{Form::open(['class' => 'confirm-delete', 'route' => ['book.destroy', $model->id], 'method' => 'DELETE'])}}
                                    {{ link_to_route('book.show', 'info', [$model->id], ['class' => 'btn btn-info btn-xs']) }}
                                    {{ link_to_route('book.edit', 'edit', [$model->id], ['class' => 'btn btn-success btn-xs']) }}
                                    {{Form::button('Delete', ['class' => 'btn btn-danger btn-xs', 'type' => 'submit'])}}
                                    {{Form::close()}}


                                        {!! Form::label('created_by', 'Create:') !!}
                                        {!! Form::select(
                                        'created_by',
                                        \App\Book::getSelectList(),
                                        isset($campaign) ? $campaign->template_id : null,
                                        ['class' => 'form-control']
                                        ) !!}

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
