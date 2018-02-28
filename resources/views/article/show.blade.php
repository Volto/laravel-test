@extends ('layouts.app')

@section ('content')

    <div class="container">
        <div class="box">

            <h2> {{ $article->name }} </h2>
            <small>By {{ $article->user->name }} on {{ $article->created_at->toFormattedDateString() }}</small>
            <hr/>
            <p>{{ $article->description }}</p>

            @if ($article->user_id == auth()->id())
                <hr/>
                <div class="ml-auto">
                    <a href="/articles/{{$article->id}}/edit">
                        <button type="button" class="btn btn-secondary">Edit</button>
                    </a>
                    <a href="/articles/{{$article->id}}/destroy">
                        <button type="button" class="btn btn-danger">Delete</button>
                    </a>
                </div>
            @endif

        </div>
    </div>

@endsection