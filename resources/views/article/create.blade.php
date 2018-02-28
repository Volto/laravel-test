@extends ('layouts.app')

@section ('content')

    <div class="container">
        <div class="box">
            <h3 class="centered">New article</h3>

            <hr/>


    <form method="POST" action="/articles">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description" required></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

        @include('layouts.errors')

    </form>

        </div>
    </div>

@endsection