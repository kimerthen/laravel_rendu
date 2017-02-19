@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2>Articles</h2></div>

                    <div class="panel-body">

                        @if(session('success'))
                            <div class="alert alert-success">
                                {{session('success')}}
                            </div>
                        @endif
                        @forelse($articles as $article)
                            <h1>{{ $article->title }}</h1>
                            <p>{{ $article->content }}</p>
                            <a href="{{route('article.show', ['id' => $article->id])}}">
                                Voir plus
                            </a><br/>

                                @if ($article->isLiked)
                                    <a style="text-decoration: underline" href="{{ route('article.like', $article->id) }}">J'aime <img height="20px" width="20px" src="http://localhost:8000/img/pouce_bleu.png"></a>
                                @else
                                    <a href="{{ route('article.like', $article->id) }}">J'aime <img height="20px" width="20px" src="http://localhost:8000/img/pouce-blanc.png"></a>
                                @endif

                                @foreach ($article->likes as $user)
                                    {{ $user->name }},
                                @endforeach
                                aime cet articles !

                        @empty
                            Rien du tout
                        @endforelse
                    </div>
                    <div class="text-center">
                        {{$articles->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
