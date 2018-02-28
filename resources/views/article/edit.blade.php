@extends ('layouts.app')

@section ('content')

    <div class="container">
        <div class="box">
            <h3 class="centered">Edit  - {{ $article->name }}</h3>

            <hr/>


            <form method="POST" action="/articles/{{ $article->id }}">

                {{ csrf_field() }}
                {{ method_field('PATCH') }}

                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required value="{{ $article->name }}">
                </div>

                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea class="form-control" id="description" name="description" required>{{ $article->description }}</textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

                @include('layouts.errors')

            </form>

        </div>
    </div>

@endsection