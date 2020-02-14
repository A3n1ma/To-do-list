@extends('layouts.backend')

@section('content')
    <div class="block">
        <div class="block-content">
            <a href="/create" class="btn btn-success"><i class="fa fa-fw fa-plus"></i></a>
            <table class="table table-striped table-hover">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Details</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <td>{{$task->id}}</td>
                            <td>{{$task->title}}</td>
                            <td>{{$task->details}}</td>
                            <td class="text-center">
                                <button id="statusButton{{$task->id}}" onclick="changeStatus({{$task->id}})" class="btn btn-sm {{$task->status == 1 ? 'btn-success' : 'btn-danger'}}">
                                    <i id="statusIcon{{$task->id}}" class="fa fa-fw {{$task->status == 1 ? 'fa-check' : 'fa-times'}}"></i>
                                </button>
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="/edit/{{$task->id}}" class="btn btn-sm btn-warning"><i class="fa fa-fw fa-pencil-alt"></i></a>
                                    <a href="/delete/{{$task->id}}" class="btn btn-sm btn-danger"><i class="fa fa-fw fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{$tasks->links()}}
        </div>
    </div>
@endsection

@section('js_after')
    <script>
    function changeStatus(id)
    {
        jQuery.ajax({
            url: '/changeStatus/' + id
        }).then(function(response) {
            let button = document.getElementById('statusButton' + id);
            button.className = response == 1 ? 'btn btn-sm btn-success' : 'btn btn-sm btn-danger';
            let icon = document.getElementById('statusIcon' + id);
            icon.className = response == 1 ? 'fa fa-fw fa-check' : 'fa fa-fw fa-times';
        });
    }
    </script>
@endsection
