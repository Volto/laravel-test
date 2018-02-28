@extends ('layouts.app')

@section ('content')

    <div class="container">

    @foreach($articles as $article)

            <div class="box">

                <a href="/articles/{{$article->id}}">
                    <h3>{{ $article->name }}</h3>
                </a>
                <small>By {{ $article->user->name }} on {{ $article->created_at->toFormattedDateString() }}</small>
                <hr>
                <p>
                    {{ $article->description }}
                </p>

            </div>

    @endforeach

    </div>

@endsection