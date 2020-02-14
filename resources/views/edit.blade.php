@extends('layouts.backend')

@section('content')
    <div class="block">
        <div class="block-header">
            <h3>Edit task</h3>
        </div>
        <div class="block-content">
            <form action="/update/{{$task->id}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input value="{{$task->title}}" class="form-control col-4" type="text" id="title" name="title">
                </div>
                <div class="form-group">
                    <label for="details">Details</label>
                    <input value="{{$task->details}}" class="form-control col-4" type="text" id="details" name="details">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Edit</button>
                </div>
            </form>
        </div>
    </div>
@endsection