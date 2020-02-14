@extends('layouts.backend')
@section('content')
    <div class="block">
        <div class="block-header">
            <h3>Create task</h3>
        </div>
        <div class="block-content">
            <form action="/store" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input class="form-control col-4" type="text" id="title" name="title">
                </div>
                <div class="form-group">
                    <label for="details">Details</label>
                    <input class="form-control col-4" type="text" id="details" name="details">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Create</button>
                </div>
            </form>
        </div>
    </div>
@endsection
</body>
</html>